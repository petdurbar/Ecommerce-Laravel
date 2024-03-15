<?php

namespace App\Models\Admin;

use App\Models\Frontend\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_status',
        'payment_method',
        'amount',
        'items',
        'order_id',
        'payment_status',
        'view_status',
        'user_id',
        'order_from',
        'delivery_charge',
        'taxpercent',
        'taxamount',
        'coupon',
        'delivered_date',
    ];

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }
}
