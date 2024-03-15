<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'category_name',  
        'parent_id',
        'image',
        'featured',
        'category_order',
        'in_menu',
        'description'

    ];
}
