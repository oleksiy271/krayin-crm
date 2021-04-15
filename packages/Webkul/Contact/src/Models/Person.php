<?php

namespace Webkul\Contact\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Attribute\Traits\CustomAttribute;
use Webkul\Attribute\Models\AttributeValueProxy;
use Webkul\Contact\Contracts\Person as PersonContract;

class Person extends Model implements PersonContract
{
    use CustomAttribute;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'emails',
        'contact_numbers',
        'organization_id',
    ];

    /**
     * Get the organization that owns the person.
     */
    public function organization()
    {
        return $this->belongsTo(OrganizationProxy::modelClass());
    }

    /**
     * Get the attribute values that owns the organization.
     */
    public function attribute_values()
    {
        return $this->morphMany(AttributeValueProxy::modelClass(), 'entity');
    }
}
