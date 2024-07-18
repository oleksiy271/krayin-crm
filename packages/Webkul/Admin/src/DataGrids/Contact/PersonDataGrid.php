<?php

namespace Webkul\Admin\DataGrids\Contact;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;
use Illuminate\Database\Query\Builder;
use Webkul\Contact\Repositories\OrganizationRepository;

class PersonDataGrid extends DataGrid
{
    /**
     * Create a new class instance.
     *
     * @return void
     */
    public function __construct(protected OrganizationRepository $organizationRepository) {}

    /**
     * Prepare query builder.
     */
    public function prepareQueryBuilder(): Builder
    {
        $queryBuilder = DB::table('persons')
            ->addSelect(
                'persons.id',
                'persons.name as person_name',
                'persons.emails',
                'persons.contact_numbers',
                'organizations.name as organization',
                'organizations.id as organization_id'
            )
            ->leftJoin('organizations', 'persons.organization_id', '=', 'organizations.id');

        $this->addFilter('id', 'persons.id');
        $this->addFilter('person_name', 'persons.name');
        $this->addFilter('organization', 'organizations.name');

        return $queryBuilder;
    }

    /**
     * Add columns.
     */
    public function prepareColumns(): void
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'integer',
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'    => 'person_name',
            'label'    => trans('admin::app.datagrid.name'),
            'type'     => 'string',
            'sortable' => true,
            'closure'  => function ($row) {
                return '<div class="flex items-center gap-3">
                        <div class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full bg-brandColor uppercase text-white transition-all hover:bg-blue-500 focus:bg-blue-500">'.substr($row->person_name, 0, 2).'</div>
                        <p class="text-sm text-black">'.$row->person_name.'</p>
                    </div>';
            },
        ]);

        $this->addColumn([
            'index'    => 'emails',
            'label'    => trans('admin::app.datagrid.emails'),
            'type'     => 'string',
            'sortable' => false,
            'closure'  => function ($row) {
                return collect(json_decode($row->emails, true) ?? [])->pluck('value')->join(', ');
            },
        ]);

        $this->addColumn([
            'index'    => 'contact_numbers',
            'label'    => trans('admin::app.datagrid.contact_numbers'),
            'type'     => 'string',
            'sortable' => false,
            'closure'  => function ($row) {
                return collect(json_decode($row->contact_numbers, true) ?? [])->pluck('value')->join(', ');
            },
        ]);

        $this->addColumn([
            'index'              => 'organization',
            'label'              => trans('admin::app.datagrid.organization_name'),
            'type'               => 'string',
            'searchable'         => true,
            'filterable'         => true,
            'sortable'           => true,
            'filterable_type'    => 'dropdown',
            'filterable_options' => $this->organizationRepository->all(['name as label', 'name as value'])->toArray(),
        ]);
    }

    /**
     * Prepare actions.
     */
    public function prepareActions(): void
    {
        if (bouncer()->hasPermission('contacts.persons.edit')) {
            $this->addAction([
                'icon'   => 'icon-edit',
                'title'  => trans('admin::app.catalog.attributes.index.datagrid.edit'),
                'method' => 'GET',
                'url'    => function ($row) {
                    return route('admin.contacts.persons.edit', $row->id);
                },
            ]);
        }

        if (bouncer()->hasPermission('contacts.persons.delete')) {
            $this->addAction([
                'icon'   => 'icon-delete',
                'title'  => trans('admin::app.catalog.attributes.index.datagrid.delete'),
                'method' => 'DELETE',
                'url'    => function ($row) {
                    return route('admin.contacts.persons.delete', $row->id);
                },
            ]);
        }
    }

    /**
     * Prepare mass actions.
     */
    public function prepareMassActions(): void
    {
        if (bouncer()->hasPermission('contacts.persons.delete')) {
            $this->addMassAction([
                'icon'   => 'icon-delete',
                'title'  => trans('Delete'),
                'method' => 'POST',
                'url'    => route('admin.contacts.persons.mass_delete'),
            ]);
        }
    }
}
