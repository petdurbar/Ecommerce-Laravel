<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_name',
        'banner_order',
        'slug',
        'banner_image',
        'banner_link',
        'mobileview',

    ];
}
