<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'attributename',
        'attribute_order',
        'price_variation',
        'include_image'
    ];
}
