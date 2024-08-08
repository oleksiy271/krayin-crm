{!! view_render_event('admin.contacts.persons.view.attributes.before', ['person' => $person]) !!}

<div class="flex w-full flex-col gap-4 border-b border-gray-200 p-4">
    <h4 class="font-semibold">
        @lang('admin::app.contacts.persons.view.about-person')
    </h4>

    <x-admin::form
        v-slot="{ meta, errors, handleSubmit }"
        as="div"
        ref="modalForm"
    >
        <form @submit="handleSubmit($event, () => {})">
            <x-admin::attributes.view
                :custom-attributes="app('Webkul\Attribute\Repositories\AttributeRepository')->findWhere([
                    'entity_type' => 'persons',
                    ['code', 'NOTIN', ['name', 'jon_title']]
                ])"
                :entity="$person"
                :allow-edit="true"
                :url="route('admin.contacts.persons.update', $person->id)"
            />
        </form>
    </x-admin::form>
</div>

{!! view_render_event('admin.contacts.persons.view.attributes.before', ['person' => $person]) !!}
