<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softsaro_User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'address',
        'password',
        'slug',

        'total_earning',
        'pending_amount',
        'is_affilate',
        'affilate_id',
        'promotional_method',
        'expected_sale',
        'khalti_id',
        'ime_id',
        'esewa_id',
        'bank_name',
        'bank_branch',
        'account_number',
        'account_holder_name',
        'status',
     ];
}
