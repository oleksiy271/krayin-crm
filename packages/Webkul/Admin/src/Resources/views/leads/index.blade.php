<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.leads.index.title')
    </x-slot>

    <!-- Header -->
    {!! view_render_event('admin.leads.index.header.before') !!}

    <div class="flex items-center justify-between rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
        <div class="flex flex-col gap-2">
            <div class="flex cursor-pointer items-center">
                <!-- Bredcrumbs -->
                <x-admin::breadcrumbs name="leads" />
            </div>

            <div class="text-xl font-bold dark:text-gray-300">
                @lang('admin::app.leads.index.title')
            </div>
        </div>

        <div class="flex items-center gap-x-2.5">
            <!-- Create button for Leads -->
            <div class="flex items-center gap-x-2.5">
                <a
                    href="{{ route('admin.leads.create') }}"
                    class="primary-button"
                >
                    @lang('admin::app.leads.index.create-btn')
                </a>
            </div>
        </div>
    </div>

    {!! view_render_event('admin.leads.index.header.after') !!}

    <!-- Content -->
    <div class="mt-3.5">
        @if ((request()->view_type ?? "kanban") == "table")
            @include('admin::leads.index.table')
        @else
            @include('admin::leads.index.kanban')
        @endif
    </div>
</x-admin::layouts>