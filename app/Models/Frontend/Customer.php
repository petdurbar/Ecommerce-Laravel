<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'address',
        'password',
        'name',
        'otp',
        'token',
        'google_id',
        'profile_image',
        'slug'
      ];
}
