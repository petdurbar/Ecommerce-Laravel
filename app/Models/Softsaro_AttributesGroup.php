<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_AttributesGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'attribute_group_name',
        'sort_order',
        'slug',
    ];
}
