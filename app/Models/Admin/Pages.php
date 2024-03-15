<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_name',
        'page_id',

    ];
    public function about()
    {
        return $this->hasOne(About::class, 'page_id');
    }
}
