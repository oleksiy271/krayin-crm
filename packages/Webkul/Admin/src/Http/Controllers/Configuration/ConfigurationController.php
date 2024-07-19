<?php

namespace Webkul\Admin\Http\Controllers\Configuration;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\ConfigurationForm;
use Webkul\Core\Repositories\CoreConfigRepository as ConfigurationRepository;

class ConfigurationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ConfigurationRepository $configurationRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): RedirectResponse|View
    {
        $slugs = (array) $this->getDefaultConfigSlugs();

        if (! empty($slugs)) {
            return redirect()->route('admin.configuration.index', $slugs);
        }

        return view('admin::configuration.index');
    }

    /**
     * Returns slugs
     */
    public function getDefaultConfigSlugs(): array
    {
        if (! request()->route('slug')) {
            $slug = system_config()->getItems()->first()->getKey();

            return ['slug' => $slug];
        }

        return [];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConfigurationForm $request): RedirectResponse
    {
        Event::dispatch('core.configuration.save.before');

        $this->configurationRepository->create($request->all());

        Event::dispatch('core.configuration.save.after');

        session()->flash('success', trans('admin::app.configuration.save-message'));

        return redirect()->back();
    }

    /**
     * download the file for the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $path = request()->route()->parameters()['path'];

        $fileName = 'configuration/'. $path;

        $config = $this->configurationRepository->findOneByField('value', $fileName);

        return Storage::download($config['value']);
    }
}