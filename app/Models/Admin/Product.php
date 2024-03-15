<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_name',
        'featured_image',
        'featured',
        'product_order',
        'description',
        'specification',
        'aboutproduct',
        'product_price',

        'discount_amount',
        'discount_type',
        'returnpolicy',
        'availablestock',
        'product_sku',
        'slug',
        'variation',
        'meta_title',
        'meta_description',

    ];



public function category()
{
    return $this->belongsTo(Category::class, 'category_id', 'id');

}



    // public function product_attribute_variation()
    // {

    //     return $this->hasMany(ProductPriceVariation::class, 'product_id', 'id');
    // }
    // public function product_variation()
    // {

    //     return $this->hasMany(ProductVariation::class, 'product_id', 'id');
    // }
    // public function product_nonvariation()
    // {

    //     return $this->hasMany(ProductAttributeSet::class, 'product_id', 'id');
    // }

    public function productpricevariation()
    {
        return $this->hasMany(ProductPriceVariation::class, 'product_id', 'id');
    }

    public function productvariation()
    {
        return $this->hasMany(ProductVariation::class, 'product_id', 'id');
    }

    public function productattributeset()
    {
        return $this->hasMany(ProductAttributeSet::class, 'product_id', 'id');
    }
}
