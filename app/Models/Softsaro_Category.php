<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryname',
        'parent_id',
        'featured',
        'slug',
        'category_order',
        'in_menu',
        'image',

    ];
}
