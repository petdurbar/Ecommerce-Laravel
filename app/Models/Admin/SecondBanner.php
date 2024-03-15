<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondBanner extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_name',
        'slug',
        'banner_image',
        'banner_link',
        'mobileview',

    ];
}
