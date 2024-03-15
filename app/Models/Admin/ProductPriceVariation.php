<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPriceVariation extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity',
        'sku',
        'available',
        'price',
        'image'
    ];

    public function attributevariation()
    {
        return $this->hasMany(ProductVariation::class, 'pvp_id', 'id');
    }
}
