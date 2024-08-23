<v-product-list :data="products"></v-product-list>

@pushOnce('scripts')
    <script 
        type="text/x-template" 
        id="v-product-list-template"
    >
        <div class="flex flex-col gap-4">
             <!-- Table -->
             <x-admin::table class="w-full table-fixed">
                <!-- Table Head -->
                <x-admin::table.thead class="rounded-lg border border-gray-200 px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                    <x-admin::table.thead.tr>
                        <x-admin::table.th>
                            @lang('admin::app.leads.common.products.product-name')
                        </x-admin::table.th>
            
                        <x-admin::table.th class="text-right">
                            @lang('admin::app.leads.common.products.quantity')
                        </x-admin::table.th>
            
                        <x-admin::table.th class="text-right">
                            @lang('admin::app.leads.common.products.price')
                        </x-admin::table.th>
            
                        <x-admin::table.th class="text-right">
                            @lang('admin::app.leads.common.products.amount')
                        </x-admin::table.th>

                        <x-admin::table.th class="text-right">
                            @lang('admin::app.leads.common.products.action')
                        </x-admin::table.th>
                    </x-admin::table.thead.tr>
                </x-admin::table.thead>

                <!-- Table Body -->
                <x-admin::table.tbody class="rounded-lg border border-gray-200 bg-gray-500 px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                    <!-- Product Item Vue Component -->
                    <v-product-item
                        v-for='(product, index) in products'
                        :product="product"
                        :key="index"
                        :index="index"
                        @onRemoveProduct="removeProduct($event)"
                    ></v-product-item>
                </x-admin::table.tbody>
            </x-admin::table>

            <!-- Add New Product Item -->
            <span
                class="cursor-pointer text-brandColor"
                @click="addProduct"
            >
                + @lang('admin::app.leads.common.products.add-more')
            </span>
        </div>
    </script>

    <script 
        type="text/x-template" 
        id="v-product-item-template"
    >
        <x-admin::table.thead.tr class="border-b-2">
            <!-- Product Name -->
            <x-admin::table.td>
                <x-admin::form.control-group class="!mb-0">
                    <x-admin::lookup 
                        ::src="src"
                        ::name="`${inputName}[name]`"
                        ::params="params"
                        :placeholder="trans('admin::app.leads.common.products.product-name')"
                        @on-selected="(product) => addProduct(product)"
                        ::value="{ id: product.product_id, name: product.name }"
                    />

                    <x-admin::form.control-group.control
                        type="hidden"
                        ::name="`${inputName}[product_id]`"
                        v-model="product.product_id"
                        rules="required"
                        :label="trans('admin::app.leads.common.products.product-name')"
                        :placeholder="trans('admin::app.leads.common.products.product-name')"
                    />
            
                    <x-admin::form.control-group.error ::name="`${inputName}[product_id]`" />
                </x-admin::form.control-group>
            </x-admin::table.td>
            
            <!-- Product Quantity -->
            <x-admin::table.td class="text-right">
                <x-admin::form.control-group>
                    <x-admin::form.control-group.control
                        type="inline"
                        ::name="`${inputName}[quantity]`"
                        ::value="product.quantity"
                        rules="required|decimal:4"
                        :label="trans('admin::app.leads.common.products.quantity')"
                        :placeholder="trans('admin::app.leads.common.products.quantity')"
                        @on-change="(event) => product.quantity = event.value"
                    />
                </x-admin::form.control-group>
            </x-admin::table.td>
        
            <!-- Price -->
            <x-admin::table.td class="text-right">
                <x-admin::form.control-group>
                    <x-admin::form.control-group.control
                        type="inline"
                        ::name="`${inputName}[price]`"
                        ::value="product.price"
                        rules="required|decimal:4"
                        :label="trans('admin::app.leads.common.products.price')"
                        :placeholder="trans('admin::app.leads.common.products.price')"
                        @on-change="(event) => product.price = event.value"
                    />
                </x-admin::form.control-group>
            </x-admin::table.td>
        
            <!-- Total -->
            <x-admin::table.td class="text-right">
                <x-admin::form.control-group>
                    <x-admin::form.control-group.control
                        type="inline"
                        ::name="`${inputName}[amount]`"
                        ::value="product.price * product.quantity"
                        rules="required|decimal:4"
                        :label="trans('admin::app.leads.common.products.total')"
                        :placeholder="trans('admin::app.leads.common.products.total')"
                        ::allowEdit="false"
                    />
                </x-admin::form.control-group>
            </x-admin::table.td>

            <!-- Action -->
            <x-admin::table.td class="text-right">
                <x-admin::form.control-group >
                    <i  
                        @click="removeProduct"
                        class="icon-delete cursor-pointer text-2xl"
                    ></i>
                </x-admin::form.control-group>
            </x-admin::table.td>
        </x-admin::table.thead.tr>
    </script>

    <script type="module">
        app.component('v-product-list', {
            template: '#v-product-list-template',

            props: ['data'],

            data: function () {
                return {
                    products: this.data ? this.data : [],
                }
            },

            methods: {
                addProduct() {
                    this.products.push({
                        id: null,
                        product_id: null,
                        name: '',
                        quantity: 1,
                        price: 0,
                        amount: null,
                    })
                },
                
                removeProduct (product) {
                    const index = this.products.indexOf(product);
                    this.products.splice(index, 1);
                },
            },
        });

        app.component('v-product-item', {
            template: '#v-product-item-template',

            props: ['index', 'product'],

            data() {
                return {
                    products: [],
                }
            },

            computed: {
                inputName() {
                    if (this.product.id) {
                        return "products[" + this.product.id + "]";
                    }

                    return "products[product_" + this.index + "]";
                },

                src() {
                    return '{{ route('admin.products.search') }}';
                },

                params() {
                    return {
                        params: {
                            query: this.product.name,
                        },
                    };
                },
            },

            methods: {
                /**
                 * Add the product.
                 * 
                 * @param {Object} result
                 * 
                 * @return {void}
                 */
                addProduct(result) {
                    this.product.product_id = result.id;

                    this.product.name = result.name;
                    
                    this.product.price = result.price;
                    
                    this.product.quantity = result.quantity ?? 1;
                },
                  
                /**
                 * Remove the product.
                 * 
                 * @return {void}
                 */
                removeProduct () {
                    this.$emit('onRemoveProduct', this.product)
                }
            }
        });
    </script>
@endPushOnce