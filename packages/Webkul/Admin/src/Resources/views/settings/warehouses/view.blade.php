<x-admin::layouts>
    <x-slot:title>
        @lang ($warehouse->name)
    </x-slot>

    <v-warehouse-view></v-warehouse-view>

    @pushOnce('scripts')
        <script 
            type="text/x-template"
            id="v-warehouse-view-template"
        >
            <!-- Content -->
            <div class="flex gap-4">
                <!-- Left Panel -->
                {!! view_render_event('krayin.admin.settings.warehouses.view.left.before', ['warehouse' => $warehouse]) !!}

                <div class="flex min-w-[394px] max-w-[394px] flex-col self-start rounded-lg border border-gray-200 bg-white">
                    <!-- Product Information -->
                    <div class="flex w-full flex-col gap-2 border-b border-gray-200 p-4">
                        <!-- Breadcrums -->
                        <div class="flex items-center justify-between">
                            <x-admin::breadcrumbs name="settings.warehouses.view" :entity="$warehouse" />

                            <div class="flex gap-1">
                                <button class="icon-left-arrow rtl:icon-right-arrow rounded-md p-1 text-2xl transition-all hover:bg-gray-100"></button>
                                <button class="icon-right-arrow rtl:icon-right-arrow rounded-md p-1 text-2xl transition-all hover:bg-gray-100"></button>
                            </div>
                        </div>

                        <!-- Tags -->
                        <x-admin::tags
                            :attach-endpoint="route('admin.settings.warehouses.tags.attach', $warehouse->id)"
                            :detach-endpoint="route('admin.settings.warehouses.tags.detach', $warehouse->id)"
                            :added-tags="$warehouse->tags"
                        />

                        <!-- Title -->
                        <h3 class="text-lg font-bold">
                            {{ $warehouse->name }}
                        </h3>

                        <!-- Activity Actions -->
                        <div class="flex flex-wrap gap-2">
                            <!-- File Activity Action -->
                            <x-admin::activities.actions.file
                                :entity="$warehouse"
                                entity-control-name="warehouse_id"
                            />

                            <!-- Note Activity Action -->
                            <x-admin::activities.actions.note
                                :entity="$warehouse"
                                entity-control-name="warehouse_id"
                            />

                            <!-- Activity Action -->
                            <x-admin::activities.actions.activity
                                :entity="$warehouse"
                                entity-control-name="warehouse_id"
                            />
                        </div>
                    </div>
                    
                    <!-- General Information -->
                    @include ('admin::settings.warehouses.view.general-information')

                    <!-- Contact Information -->
                    @include ('admin::settings.warehouses.view.contact-information')
                </div>

                {!! view_render_event('krayin.admin.settings.warehouses.view.left.after', ['warehouse' => $warehouse]) !!}

                {!! view_render_event('krayin.admin.settings.warehouses.view.right.before', ['warehouse' => $warehouse]) !!}
                
                <!-- Right Panel -->
                <div class="flex w-full flex-col gap-4 rounded-lg">
                    <!-- Activity Navigation -->
                    <x-admin::activities
                        :endpoint="route('admin.settings.warehouse.activities.index', $warehouse->id)" 
                        :types="[
                            ['name' => 'all', 'label' => trans('admin::app.settings.warehouses.view.all')],
                            ['name' => 'note', 'label' => trans('admin::app.settings.warehouses.view.notes')],
                            ['name' => 'file', 'label' => trans('admin::app.settings.warehouses.view.files')],
                        ]"
                        :extra-types="[
                            ['name' => 'location', 'label' => trans('admin::app.settings.warehouses.view.location')],
                        ]"
                    >
                        <x-slot:location>
                            @include ('admin::settings.warehouses.view.locations')
                        </x-slot>
                    </x-admin::activities>
                </div>

                {!! view_render_event('admin.warehouse.view.right.after', ['warehouse' => $warehouse]) !!}
            </div>    
        </script>

        <script type="module">
            app.component('v-warehouse-view', {
                template: '#v-warehouse-view-template',

                methods: {
                    onChanged(event) {
                        this.$axios.post('{{ route('admin.settings.warehouses.update', $warehouse->id) }}', {
                            _method: 'PUT',
                            [event.name]: event.value,
                        })
                            .then((response) => {
                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            })
                            .catch(error => {});
                    },
                },
            });
        </script>
    @endPushOnce
</x-admin::layouts>