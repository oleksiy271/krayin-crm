<header class="sticky top-0 z-[10001] flex items-center justify-between bg-white px-4 py-2.5 dark:border-gray-800 dark:bg-gray-900">
    <!-- logo -->
    <div class="flex items-center gap-1.5">
        <i class="icon-menu hidden cursor-pointer rounded-md p-1.5 text-2xl hover:bg-gray-100 dark:hover:bg-gray-950 max-lg:block"></i>

        <a href="{{ route('admin.dashboard.index') }}">
            <img
                class="h-10" 
                src="{{ vite()->asset('images/logo.svg') }}" 
                alt="{{ config('app.name') }}"
            />
        </a>
    </div>

    <div class="flex items-center gap-1.5">
        <!-- Mega Search Bar Vue Component -->
        <div class="relative flex w-[525px] max-w-[525px] items-center max-lg:w-[400px] ltr:ml-2.5 rtl:mr-2.5">
            <i class="icon-search absolute top-1.5 flex items-center text-2xl ltr:left-3 rtl:right-3"></i>

            <input 
                type="text" 
                class="block w-full rounded-3xl border bg-white px-10 py-1.5 leading-6 text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                placeholder="@lang('Search')" 
            >
        </div>
        
        <!-- Quick create section -->
        <div>
            @if (bouncer()->hasPermission('leads.create')
                || bouncer()->hasPermission('quotes.create')
                || bouncer()->hasPermission('mail.create')
                || bouncer()->hasPermission('contacts.persons.create')
                || bouncer()->hasPermission('contacts.organizations.create')
                || bouncer()->hasPermission('products.create')
                || bouncer()->hasPermission('settings.automation.attributes.create')
                || bouncer()->hasPermission('settings.user.roles.create')
                || bouncer()->hasPermission('settings.user.users.create')
            )
                <x-admin::dropdown position="bottom-right">
                    <x-slot:toggle>
                        <button class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full bg-brandColor text-sm font-semibold leading-6 text-white transition-all hover:bg-blue-500 focus:bg-blue-500">
                            <i class="icon-add text-2xl"></i>
                        </button>
                    </x-slot>

                    <!-- Admin Dropdown -->
                    <x-slot:content class="!p-0">
                        <div class="relative">
                            <div class="absolute right-0 mt-2 w-64 bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="grid grid-cols-3 gap-2 p-4 text-center text-xs font-medium">
                                    @if (bouncer()->hasPermission('leads.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.leads.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon icon-settings mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.lead') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('quotes.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.quotes.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon quotation-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.quote') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('mail.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.mail.index', ['route' => 'compose']) }}" class="block p-2 text-gray-700">
                                                <i class="icon mail-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.email') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('contacts.persons.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.contacts.persons.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon person-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.person') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('contacts.organizations.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.contacts.organizations.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon organization-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.organization') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('products.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.products.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon product-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.product') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('settings.automation.attributes.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.settings.attributes.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon attribute-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.attribute') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('settings.user.roles.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.settings.roles.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon role-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.role') }}</span>
                                            </a>
                                        </div>
                                    @endif
                        
                                    @if (bouncer()->hasPermission('settings.user.users.create'))
                                        <div class="w-20 rounded-lg bg-white hover:bg-gray-100">
                                            <a href="{{ route('admin.settings.users.create') }}" class="block p-2 text-gray-700">
                                                <i class="icon user-icon mb-1 h-10 w-10"></i>
                                                <span>{{ __('admin::app.layouts.user') }}</span>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </x-slot>
                </x-admin::dropdown>
            @endif
        </div>
    </div>

    <div class="flex items-center gap-2.5">
        <!-- Dark mode -->
        <v-dark>
            <div class="flex">
                <span
                    class="{{ request()->cookie('dark_mode') ? 'icon-light' : 'icon-dark' }} p-1.5 rounded-md text-2xl cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                ></span>
            </div>
        </v-dark>
        
        <!-- Notification Component -->
        <v-notifications {{ $attributes }}>
            <span class="relative flex">
                <span 
                    class="icon-notification cursor-pointer rounded-md p-1.5 text-2xl transition-all hover:bg-gray-100 dark:hover:bg-gray-950" 
                    title="@lang('admin::app.components.layouts.header.notifications')"
                >
                </span>
            </span>
        </v-notifications>
            
        <!-- Admin profile -->
        <x-admin::dropdown position="bottom-right">
            <x-slot:toggle>
                @if (auth()->guard('user')->user()->image)
                    <button class="flex h-9 w-9 cursor-pointer overflow-hidden rounded-full hover:opacity-80 focus:opacity-80">
                        <img
                            src="{{ auth()->guard('user')->user()->image_url }}"
                            class="w-full"
                        />
                    </button>
                @else
                    <button class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full bg-pink-400 text-sm font-semibold leading-6 text-white transition-all hover:bg-blue-500 focus:bg-blue-500">
                        {{ substr(auth()->guard('user')->user()->name, 0, 1) }}
                    </button>
                @endif
            </x-slot>

            <!-- Admin Dropdown -->
            <x-slot:content class="!p-0">
                <div class="flex items-center gap-1.5 border border-b-gray-300 px-5 py-2.5 dark:border-gray-800">
                    <img
                        src="{{ url('cache/logo.png') }}"
                        width="24"
                        height="24"
                    />

                    <!-- Version -->
                    <p class="text-gray-400">
                        Version: v{{ config('app.version') }}
                    </p>
                </div>

                <div class="grid gap-1 pb-2.5">
                    <a
                        class="cursor-pointer px-5 py-2 text-base text-gray-800 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-950"
                        href="{{ route('admin.user.account.edit') }}"
                    >
                        My Account
                    </a>

                    <!--Admin logout-->
                    <x-admin::form
                        method="DELETE"
                        action="{{ route('admin.session.destroy') }}"
                        id="adminLogout"
                    >
                    </x-admin::form>

                    <a
                        class="cursor-pointer px-5 py-2 text-base text-gray-800 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-950"
                        href="{{ route('admin.session.destroy') }}"
                        onclick="event.preventDefault(); document.getElementById('adminLogout').submit();"
                    >
                        Logout
                    </a>
                </div>
            </x-slot>
        </x-admin::dropdown>
    </div>
</header>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-dark-template"
    >
        <div class="flex">
            <span
                class="cursor-pointer rounded-md p-1.5 text-2xl transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                :class="[isDarkMode ? 'icon-light' : 'icon-dark']"
                @click="toggle"
            ></span>
        </div>
    </script>

    <script type="module">
        app.component('v-dark', {
            template: '#v-dark-template',

            data() {
                return {
                    isDarkMode: {{ request()->cookie('dark_mode') ?? 0 }},

                    logo: "{{ asset('images/logo.svg') }}",

                    dark_logo: "{{ asset('images/dark-logo.svg') }}",
                };
            },

            methods: {
                toggle() {
                    this.isDarkMode = parseInt(this.isDarkModeCookie()) ? 0 : 1;

                    var expiryDate = new Date();

                    expiryDate.setMonth(expiryDate.getMonth() + 1);

                    document.cookie = 'dark_mode=' + this.isDarkMode + '; path=/; expires=' + expiryDate.toGMTString();

                    document.documentElement.classList.toggle('dark', this.isDarkMode === 1);

                    if (this.isDarkMode) {
                        this.$emitter.emit('change-theme', 'dark');

                        document.getElementById('logo-image').src = this.dark_logo;
                    } else {
                        this.$emitter.emit('change-theme', 'light');

                        document.getElementById('logo-image').src = this.logo;
                    }
                },

                isDarkModeCookie() {
                    const cookies = document.cookie.split(';');

                    for (const cookie of cookies) {
                        const [name, value] = cookie.trim().split('=');

                        if (name === 'dark_mode') {
                            return value;
                        }
                    }

                    return 0;
                },
            },
        });
    </script>
@endPushOnce
