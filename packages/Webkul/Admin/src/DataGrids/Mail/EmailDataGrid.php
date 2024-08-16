<?php

namespace Webkul\Admin\DataGrids\Mail;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Webkul\DataGrid\DataGrid;

class EmailDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     */
    public function prepareQueryBuilder(): Builder
    {
        $queryBuilder = DB::table('emails')
            ->select(
                'emails.id',
                'emails.name',
                'emails.subject',
                'emails.reply',
                'emails.created_at',
                DB::raw('COUNT(DISTINCT '.DB::getTablePrefix().'email_attachments.id) as attachments')
            )
            ->leftJoin('email_attachments', 'emails.id', '=', 'email_attachments.email_id')
            ->groupBy('emails.id')
            ->where('folders', 'like', '%"'.request('route').'"%')
            ->whereNull('parent_id');

        $this->addFilter('id', 'emails.id');
        $this->addFilter('name', 'emails.name');
        $this->addFilter('created_at', 'emails.created_at');

        return $queryBuilder;
    }

    /**
     * Prepare Columns.
     */
    public function prepareColumns(): void
    {
        $this->addColumn([
            'index'      => 'attachments',
            'label'      => '<span class="icon-attachment text-2xl"></span>',
            'type'       => 'string',
            'searchable' => false,
            'filterable' => false,
            'sortable'   => false,
            'closure'    => fn ($row) => $row->attachments ? '<i class="icon-attachment text-2xl"></i>' : 'N/A',
        ]);

        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('admin::app.mail.index.datagrid.from'),
            'type'       => 'string',
            'sortable'   => true,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'subject',
            'label'      => trans('admin::app.mail.index.datagrid.subject'),
            'type'       => 'string',
            'sortable'   => true,
            'searchable' => true,
            'filterable' => true,
            'closure'    => fn ($row) => Str::limit(strip_tags($row->reply), 50),
        ]);

        $this->addColumn([
            'index'           => 'created_at',
            'label'           => trans('admin::app.mail.index.datagrid.created-at'),
            'type'            => 'date',
            'searchable'      => true,
            'filterable'      => true,
            'filterable_type' => 'date_range',
            'sortable'        => true,
            'closure'         => fn ($row) => core()->formatDate($row->created_at),
        ]);
    }

    /**
     * Prepare actions.
     */
    public function prepareActions(): void
    {
        $this->addAction([
            'index'  => 'edit',
            'icon'   => request('route') == 'draft'
                ? 'icon-edit'
                : 'icon-eye',
            'title'  => request('route') == 'draft'
                ? trans('admin::app.mail.index.datagrid.edit')
                : trans('admin::app.mail.index.datagrid.view'),
            'method' => 'GET',
            'params' => [
                'type' => request('route') == 'trash'
                    ? 'delete'
                    : 'trash',
            ],
            'url'    => fn ($row) => route('admin.mail.view', [request('route'), $row->id]),
        ]);

        $this->addAction([
            'index'        => 'delete',
            'icon'         => 'icon-delete',
            'title'        => trans('admin::app.mail.index.datagrid.delete'),
            'method'       => 'DELETE',
            'params'       => [
                'type' => request('route') == 'trash'
                    ? 'delete'
                    : 'trash',
            ],
            'url'    => fn ($row) => route('admin.mail.delete', $row->id),
        ]);
    }

    /**
     * Prepare mass actions.
     */
    public function prepareMassActions(): void
    {
        if (request('route') == 'trash') {
            $this->addMassAction([
                'title'   => trans('admin::app.mail.index.datagrid.move-to-inbox'),
                'method'  => 'POST',
                'url'     => route('admin.mail.mass_update', ['folders' => ['inbox']]),
                'options' => [
                    [
                        'value' => 'trash',
                        'label' => trans('admin::app.mail.index.datagrid.move-to-inbox'),
                    ],
                ],
            ]);
        }

        $this->addMassAction([
            'icon'   => 'icon-delete',
            'title'  => trans('admin::app.mail.index.datagrid.delete'),
            'method' => 'POST',
            'url'    => route('admin.mail.mass_delete', [
                'type' => request('route') == 'trash'
                    ? 'delete'
                    : 'trash',
            ]),
        ]);
    }
}
