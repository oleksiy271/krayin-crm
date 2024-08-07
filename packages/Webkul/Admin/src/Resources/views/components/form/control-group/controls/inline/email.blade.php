<v-inline-email-edit
    {{ $attributes->except('value') }}
    :value={{ json_encode($attributes->get('value')) }}
></v-inline-email-edit>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-inline-email-edit-template"
    >
        <div class="group w-full max-w-full hover:rounded-sm">
            <!-- Non-editing view -->
            <div
                class="flex items-center rounded-xs h-[38px] space-x-2"
                :class="allowEdit ? 'cursor-pointer hover:bg-gray-50' : ''"
                :style="textPositionStyle"
            >
                <span class="font-normal text-sm pl-2">@{{ inputValue.map(item => `${item.value}(${item.label})`).join(', ') }}</span>

                <template v-if="allowEdit">
                    <i
                        @click="toggle"
                        class="icon-edit hidden text-xl pr-2 group-hover:block"
                    ></i>
                </template>
            </div>

            <x-admin::form
                v-slot="{ meta, errors, handleSubmit }"
                as="div"
                ref="modalForm"
            >
                <form @submit="handleSubmit($event, updateOrCreate)">
                    <!-- Editing view -->
                    <x-admin::modal ref="emailModal">
                        <!-- Modal Header -->
                        <x-slot:header>
                            <p class="text-lg font-bold text-gray-800 dark:text-white">
                                Update Contact Emails
                            </p>
                        </x-slot>

                        <!-- Modal Content -->
                        <x-slot:content>
                            <template v-for="(email, index) in emails">
                                <div class="mb-2 flex items-center">
                                    <x-admin::form.control-group.control
                                        type="text"
                                        ::id="`${name}[${index}].value`"
                                        ::name="`${name}[${index}].value`"
                                        class="!rounded-r-none"
                                        ::rules="getValidation"
                                        v-model="email.value"
                                    />

                                    <div class="relative">
                                        <x-admin::form.control-group.control
                                            type="select"
                                            ::id="`${name}[${index}].label`"
                                            ::name="`${name}[${index}].label`"
                                            class="!rounded-l-none"
                                            ::value="email.label"
                                        >
                                            <option value="work">@lang('admin::app.common.custom-attributes.work')</option>
                                            <option value="home">@lang('admin::app.common.custom-attributes.home')</option>
                                        </x-admin::form.control-group.control>
                                    </div>

                                    <i
                                        v-if="emails.length > 1"
                                        class="icon-delete ml-1 cursor-pointer rounded-md p-1.5 text-2xl transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                                        @click="remove(email)"
                                    ></i>
                                </div>
                    
                                <x-admin::form.control-group.error ::name="`${name}[${index}].value`"/>
                            </template>
                    
                            <span
                                class="cursor-pointer text-brandColor"
                                @click="add"
                            >
                                +@lang("admin::app.common.custom-attributes.add-more")
                            </span>
                        </x-slot>

                        <!-- Modal Footer -->
                        <x-slot:footer>
                            <!-- Save Button -->
                            <x-admin::button
                                button-type="submit"
                                class="primary-button justify-center"
                                :title="trans('Save')"
                                ::loading="isProcessing"
                                ::disabled="isProcessing"
                            />
                        </x-slot>
                    </x-admin::modal>
                </form>
            </x-admin::form>
        </div>
    </script>

    <script type="module">
        app.component('v-inline-email-edit', {
            template: '#v-inline-email-edit-template',

            emits: ['on-change', 'on-cancelled'],

            props: {
                name: {
                    type: String,
                    required: true,
                },

                value: {
                    required: true,
                },

                rules: {
                    type: String,
                    default: '',
                },

                label: {
                    type: String,
                    default: '',
                },

                placeholder: {
                    type: String,
                    default: '',
                },

                position: {
                    type: String,
                    default: 'right',
                },

                allowEdit: {
                    type: Boolean,
                    default: true,
                },

                errors: {
                    type: Object,
                    default: {},
                },
            },

            data() {
                return {
                    inputValue: this.value,

                    isEditing: false,

                    emails: JSON.parse(JSON.stringify(this.value || [{'value': '', 'label': 'work'}])),

                    isProcessing: false,
                };
            },

            watch: {
                /**
                 * Watch the value prop.
                 * 
                 * @param {String} newValue 
                 */
                value(newValue) {
                    if (JSON.stringify(newVal) !== JSON.stringify(oldVal)) {
                        this.emails = newVal || [{'value': '', 'label': 'work'}];
                    }
                },
            },

            created() {
                this.extendValidations();

                if (! this.emails || ! this.emails.length) {
                    this.emails = [{
                        'value': '',
                        'label': 'work'
                    }];
                }
            },

            computed: {
                /**
                 * Get the input position style.
                 * 
                 * @return {String}
                 */
                inputPositionStyle() {
                    return this.position === 'left' ? 'text-align: left; padding-left: 9px' : 'text-align: right;';
                },

                /**
                 * Get the text position style.
                 * 
                 * @return {String}
                 */
                textPositionStyle() {
                    return this.position === 'left' ? 'justify-content: space-between' : 'justify-content: end';
                },

                /**
                 * Get the validation rules.
                 * 
                 * @return {Object}
                 */
                getValidation() {
                    return {
                        email: true,
                        unique_contact_email: this.emails ?? [],
                        required: true,
                    };
                },
            },

            methods: {
                /**
                 * Toggle the input.
                 * 
                 * @return {void}
                 */
                toggle() {
                    this.isEditing = true;

                    this.$refs.emailModal.toggle();
                },

                /**
                 * Save the input value.
                 * 
                 * @return {void}
                 */
                save() {
                    if (this.errors[this.name]) {
                        return;
                    }

                    this.isEditing = false;

                    this.$emit('on-change', {
                        name: this.name,
                        value: this.inputValue,
                    });
                },

                /**
                 * Cancel the input value.
                 * 
                 * @return {void}
                 */
                cancel() {
                    this.inputValue = this.value;

                    this.isEditing = false;

                    this.$emit('on-cancelled', {
                        name: this.name,
                        value: this.inputValue,
                    });
                },

                add() {
                    this.emails.push({
                        'value': '',
                        'label': 'work'
                    });
                },

                remove(email) {
                    this.emails = this.emails.filter(email => email !== email);
                },

                extendValidations() {
                    defineRule('unique_contact_email', (value, emails) => {
                        if (
                            ! value
                            || ! value.length
                        ) {
                            return true;
                        }

                        const emailOccurrences = emails.filter(email => email.value === value).length;

                        if (emailOccurrences > 1) {
                            return 'This email email is already used';
                        }

                        return true;
                    });
                },

                updateOrCreate(params) {
                    this.inputValue = params.emails;

                    this.$emit('on-save', params);

                    this.$refs.emailModal.toggle();
                }
            },
        });
    </script>
@endPushOnce