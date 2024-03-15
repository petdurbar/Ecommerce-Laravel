<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_Product_Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'attribute_group_id',
        'attribute_id',
    ];
}
