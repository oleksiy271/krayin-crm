@php
    $lookUpEntity = app('Webkul\Attribute\Repositories\AttributeRepository')->getLookUpEntity($attribute->lookup_type, $value);
@endphp

<x-admin::form.control-group.controls.inline.lookup 
    ::name="'{{ $attribute->code }}'"
    :value="$lookUpEntity->name"
    :attribute="$attribute"
    position="left"
    @on-change="onChanged"
/>
