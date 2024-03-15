<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductAttribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'order_item_id',
        'product_id',
        'attribute_id',
        'attribute_value_id',
    ];

    public function getAttributename()
    {
        return $this->belongsTo(AttributeGroup::class, 'attribute_id');
    }

    public function getAttributevalues()
    {
        return $this->belongsTo(Attribute::class, 'attribute_value_id');
    }
}
