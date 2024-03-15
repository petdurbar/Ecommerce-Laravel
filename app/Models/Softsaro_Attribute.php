<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'attribute_name',
        'sort_order',
        'attribute_group_id',
        'slug',
    ];
    public function getGroup()
    {
        return $this->belongsTo(Softsaro_AttributesGroup::class, 'attribute_group_id');
    }

}
