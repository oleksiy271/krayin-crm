<?php

namespace Webkul\Admin\Http\Controllers\Lead;

use Carbon\Carbon;
use Illuminate\Support\Facades\Event;
use Prettus\Repository\Criteria\RequestCriteria;
use Webkul\Admin\DataGrids\Lead\LeadDataGrid;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\LeadForm;
use Webkul\Admin\Http\Resources\LeadResource;
use Webkul\Admin\Http\Resources\StageResource;
use Webkul\Lead\Repositories\LeadRepository;
use Webkul\Lead\Repositories\PipelineRepository;
use Webkul\Lead\Repositories\StageRepository;
use Webkul\User\Repositories\UserRepository;

class LeadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected LeadRepository $leadRepository,
        protected PipelineRepository $pipelineRepository,
        protected StageRepository $stageRepository
    ) {
        request()->request->add(['entity_type' => 'leads']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return datagrid(LeadDataGrid::class)->process();
        }

        if (request('pipeline_id')) {
            $pipeline = $this->pipelineRepository->find(request('pipeline_id'));
        } else {
            $pipeline = $this->pipelineRepository->getDefaultPipeline();
        }

        return view('admin::leads.index', compact('pipeline'));
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        if (request()->query('pipeline_id')) {
            $pipeline = $this->pipelineRepository->find(request()->query('pipeline_id'));
        } else {
            $pipeline = $this->pipelineRepository->getDefaultPipeline();
        }

        if ($stageId = request()->query('pipeline_stage_id')) {
            $stages = $pipeline->stages->where('id', request()->query('pipeline_stage_id'));
        } else {
            $stages = $pipeline->stages;
        }

        foreach ($stages as $stage) {
            $query = $this->leadRepository
                ->pushCriteria(app(RequestCriteria::class))
                ->where([
                    'lead_pipeline_id'       => $pipeline->id,
                    'lead_pipeline_stage_id' => $stage->id,
                ]);

            $stage->lead_value = (clone $query)->sum('lead_value');

            $data[$stage->id] = (new StageResource($stage))->jsonSerialize();

            $data[$stage->id]['leads'] = [
                'data' => LeadResource::collection($paginator = $query->with([
                    'tags',
                    'type',
                    'source',
                    'user',
                    'person',
                    'person.organization',
                    'pipeline',
                    'pipeline.stages',
                    'stage',
                    'attribute_values',
                ])->paginate(10)),

                'meta' => [
                    'current_page' => $paginator->currentPage(),
                    'from'         => $paginator->firstItem(),
                    'last_page'    => $paginator->lastPage(),
                    'per_page'     => $paginator->perPage(),
                    'to'           => $paginator->lastItem(),
                    'total'        => $paginator->total(),
                ],
            ];
        }

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin::leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LeadForm $request)
    {
        Event::dispatch('lead.create.before');

        $data = request()->all();

        $data['status'] = 1;

        if ($data['lead_pipeline_stage_id']) {
            $stage = $this->stageRepository->findOrFail($data['lead_pipeline_stage_id']);

            $data['lead_pipeline_id'] = $stage->lead_pipeline_id;
        } else {
            $pipeline = $this->pipelineRepository->getDefaultPipeline();

            $stage = $pipeline->stages()->first();

            $data['lead_pipeline_id'] = $pipeline->id;

            $data['lead_pipeline_stage_id'] = $stage->id;
        }

        if (in_array($stage->code, ['won', 'lost'])) {
            $data['closed_at'] = Carbon::now();
        }

        $lead = $this->leadRepository->create($data);

        Event::dispatch('lead.create.after', $lead);

        session()->flash('success', trans('admin::app.leads.create-success'));

        return redirect()->route('admin.leads.index', $data['lead_pipeline_id']);
    }

    /**
     * Display a resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function view($id)
    {
        $lead = $this->leadRepository->findOrFail($id);

        $currentUser = auth()->guard('user')->user();

        if ($currentUser->view_permission != 'global') {
            if ($currentUser->view_permission == 'group') {
                $userIds = app(UserRepository::class)->getCurrentUserGroupsUserIds();

                if (! in_array($lead->user_id, $userIds)) {
                    return redirect()->route('admin.leads.index');
                }
            } else {
                if ($lead->user_id != $currentUser->id) {
                    return redirect()->route('admin.leads.index');
                }
            }
        }

        return view('admin::leads.view', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeadForm $request, $id)
    {
        Event::dispatch('lead.update.before', $id);

        $data = request()->all();

        if (isset($data['lead_pipeline_stage_id'])) {
            $stage = $this->stageRepository->findOrFail($data['lead_pipeline_stage_id']);

            $data['lead_pipeline_id'] = $stage->lead_pipeline_id;
        } else {
            $pipeline = $this->pipelineRepository->getDefaultPipeline();

            $stage = $pipeline->stages()->first();

            $data['lead_pipeline_id'] = $pipeline->id;

            $data['lead_pipeline_stage_id'] = $stage->id;
        }

        $lead = $this->leadRepository->update($data, $id);

        Event::dispatch('lead.update.after', $lead);

        if (request()->ajax()) {
            return response()->json([
                'message' => trans('admin::app.leads.update-success'),
            ]);
        } else {
            session()->flash('success', trans('admin::app.leads.update-success'));

            if (request()->has('closed_at')) {
                return redirect()->back();
            } else {
                return redirect()->route('admin.leads.index', $data['lead_pipeline_id']);
            }
        }
    }

    /**
     * Search person results.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $currentUser = auth()->guard('user')->user();

        if ($currentUser->view_permission == 'global') {
            $results = $this->leadRepository->findWhere([
                ['title', 'like', '%'.urldecode(request()->input('query')).'%'],
            ]);
        } elseif ($currentUser->view_permission == 'individual') {
            $results = $this->leadRepository->findWhere([
                ['title', 'like', '%'.urldecode(request()->input('query')).'%'],
                ['user_id', '=', $currentUser->id],
            ]);
        } elseif ($currentUser->view_permission == 'group') {
            $userIds = app(UserRepository::class)->getCurrentUserGroupsUserIds();

            $results = $this->leadRepository->findWhere([
                ['title', 'like', '%'.urldecode(request()->input('query')).'%'],
                ['user_id', 'IN', $userIds],
            ]);
        }

        return response()->json($results);
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->leadRepository->findOrFail($id);

        try {
            Event::dispatch('lead.delete.before', $id);

            $this->leadRepository->delete($id);

            Event::dispatch('lead.delete.after', $id);

            return response()->json([
                'message' => trans('admin::app.response.destroy-success', ['name' => trans('admin::app.leads.lead')]),
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => trans('admin::app.response.destroy-failed', ['name' => trans('admin::app.leads.lead')]),
            ], 400);
        }
    }

    /**
     * Mass Update the specified resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function massUpdate()
    {
        $data = request()->all();

        foreach ($data['rows'] as $leadId) {
            $lead = $this->leadRepository->find($leadId);

            Event::dispatch('lead.update.before', $leadId);

            $lead->update(['lead_pipeline_stage_id' => $data['value']]);

            Event::dispatch('lead.update.before', $leadId);
        }

        return response()->json([
            'message' => trans('admin::app.response.update-success', ['name' => trans('admin::app.leads.title')]),
        ]);
    }

    /**
     * Mass Delete the specified resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function massDestroy()
    {
        foreach (request('rows') as $leadId) {
            Event::dispatch('lead.delete.before', $leadId);

            $this->leadRepository->delete($leadId);

            Event::dispatch('lead.delete.after', $leadId);
        }

        return response()->json([
            'message' => trans('admin::app.response.destroy-success', ['name' => trans('admin::app.leads.title')]),
        ]);
    }
}
