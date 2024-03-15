<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'slug',
        'featured',
        'featured_image',
        'product_order',
        'product_price',
        'cutoff_price',
        'category_id',
        'description',

        'is_affilate',
        'discount_amount',
        'cost_price',
        'affilate_id',
        'mrp_price',
        'margin',
        'video',
        'product_stock',
        'incentive_commission_amount',
        'incentive_commission_percentage',
        'referal_commission_percentage',
        'referal_commission_amount',
        'affiliate_commission_percentage',
        'affiliate_commission_amount'
    ];

    // public function getCategory()
    // {
    //     return $this->belongsTo(Softsaro_Category::class, 'category_id');
    // }
}
