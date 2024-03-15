<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_name',
        'aboutherosection_image',
        'aboutherosection_description',
        'aboutsecondsection_description',
        'aboutsecondsection_image',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(Pages::class, 'page_id');
    }
}
