<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_UserDeliveryAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'delivery_name',
        'delivery_email',
        'delivery_phonenumber',
        'delivery_address',
     ];
}
