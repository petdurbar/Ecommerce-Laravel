<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'order',
        'attribute_group'
    ];
    public function getgroup(){
        return $this->belongsTo(AttributeGroup::class,'attribute_group');
      }
}
