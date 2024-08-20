<!-- Top Selling Products Vue Component -->
<v-dashboard-top-persons>
    <!-- Shimmer -->
    <x-admin::shimmer.dashboard.index.top-persons />
</v-dashboard-top-persons>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-dashboard-top-persons-template"
    >
        <!-- Shimmer -->
        <template v-if="isLoading">
            <x-admin::shimmer.dashboard.index.top-persons />
        </template>

        <!-- Total Sales Section -->
        <template v-else>
            <div class="w-full rounded-lg border border-gray-200 bg-white dark:border-gray-800">
                <div class="flex items-center justify-between p-4">
                    <p class="text-base font-semibold text-gray-600 dark:text-gray-300">
                        @lang('admin::app.dashboard.index.top-persons.title')
                    </p>
                </div>

                <!-- Top Selling Products Details -->
                <div
                    class="flex flex-col"
                    v-if="report.statistics.length"
                >
                    <a
                        :href="`{{route('admin.contacts.persons.view', '')}}/${item.id}`"
                        class="flex gap-2.5 border-b p-4 transition-all last:border-b-0 hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                        target="_blank"
                        v-for="item in report.statistics"
                    >
                        <!-- Person Initials -->
                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-green-200 text-xs font-medium">
                            @{{ item.name.split(' ').map(word => word[0].toUpperCase()).join('') }}
                        </div>

                        <!-- Person Details -->
                        <div class="flex flex-col gap-1">
                            <p>@{{ item.name }}</p>
                            
                            <p>@{{ item.emails.map(item => item.value).join(', ') }}</p>
                        </div>
                    </a>
                </div>

                <!-- Empty Product Design -->
                <div
                    class="flex flex-col gap-8 p-4"
                    v-else
                >
                    <div class="grid justify-center justify-items-center gap-3.5 py-2.5">
                        <!-- Placeholder Image -->
                        <img
                            src="{{ admin_vite()->asset('images/empty-placeholders/products.svg') }}"
                            class="h-20 w-20 dark:mix-blend-exclusion dark:invert"
                        >

                        <!-- Add Variants Information -->
                        <div class="flex flex-col items-center">
                            <p class="text-base font-semibold text-gray-400">
                                @lang('admin::app.dashboard.index.top-persons.empty-title')
                            </p>

                            <p class="text-gray-400">
                                @lang('admin::app.dashboard.index.top-persons.empty-info')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </script>

    <script type="module">
        app.component('v-dashboard-top-persons', {
            template: '#v-dashboard-top-persons-template',

            data() {
                return {
                    report: [],

                    isLoading: true,
                }
            },

            mounted() {
                this.getStats({});

                this.$emitter.on('reporting-filter-updated', this.getStats);
            },

            methods: {
                getStats(filtets) {
                    this.isLoading = true;

                    var filtets = Object.assign({}, filtets);

                    filtets.type = 'top-persons';

                    this.$axios.get("{{ route('admin.dashboard.stats') }}", {
                            params: filtets
                        })
                        .then(response => {
                            this.report = response.data;

                            this.isLoading = false;
                        })
                        .catch(error => {});
                }
            }
        });
    </script>
@endPushOnce