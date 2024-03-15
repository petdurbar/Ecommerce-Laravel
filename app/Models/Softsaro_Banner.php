<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'banner_order',
        'banner_image',
        'slug',
    ];
}
