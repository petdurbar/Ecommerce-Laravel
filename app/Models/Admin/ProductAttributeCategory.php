<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeCategory extends Model
{
    use HasFactory;
        protected $fillable = ['category_id', 'attribute_group_id'];

}
