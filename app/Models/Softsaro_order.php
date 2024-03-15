<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_status',
        'payment_method',
        'amount',
        'items',
        'order_id',
        'user_id',
        'delivery_charge'
    ];
}
