<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'productid',
        'userid',
    ];

    public function getProduct()
    {

        return $this->belongsTo(Softsaro_Product::class, 'productid');

    }
}
