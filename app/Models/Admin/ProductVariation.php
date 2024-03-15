<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;
    protected $fillable = [
        'pvp_id',
        'attribute_id',
        'image',
        'product_id',
        'attribute_value_id',
    ];
    protected $appends = ['image'];

    public function getAttributeNames()
    {
        return $this->belongsTo(AttributeGroup::class, 'attribute_id');
    }

    public function getAttributeValueName()
    {
        return $this->belongsTo(Attribute::class, 'attribute_value_id');
    }

    public function getImageUrlAttribute()
    {
        return $this->attributes['image'] ? asset($this->attributes['image']) : null;
    }
}
