<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Softsaro_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortalController extends Controller
{
    public function index()
    {
        if (Auth::guard('softsaro__users')->user()->is_affilate == 1 && Auth::guard('softsaro__users')->user()->status == "VERIFIED") {

            $user=Softsaro_User::where("id",Auth::guard('softsaro__users')->user()->id)->first();
            return view("frontend.portal.dashboard",compact("user"));
        } else {
            abort(404);
        }
    }
}
