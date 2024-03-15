<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeSet extends Model
{
    use HasFactory;
    protected $fillable = [
        "attribute_id",
        "attribute_value_id",
        "image",
        "product_id",
    ];
    public function getAttributeNames()
    {
        return $this->belongsTo(AttributeGroup::class, 'attribute_id');
    }

    public function getAttributeValueName()
    {
        return $this->belongsTo(Attribute::class, 'attribute_value_id');
    }
}
