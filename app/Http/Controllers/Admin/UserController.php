<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Customer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $customer=Customer::get();
        return view('admin.Users.index', compact('customer'));
    }
}
