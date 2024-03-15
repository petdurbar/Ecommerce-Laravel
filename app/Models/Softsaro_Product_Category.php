<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_Product_Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'category_id',

    ];
    public function getCategory()
    {
        return $this->belongsTo(Softsaro_Category::class, 'category_id');
    }
}
