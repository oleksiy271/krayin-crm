<x-admin::form.control-group.controls.inline.email
    ::name="'{{ $attribute->code }}'"
    :value="$value"
    rules="required|decimal:4"
    position="left"
    @on-save="onChanged"
/>
