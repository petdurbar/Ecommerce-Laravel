<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Softsaro_User;
use App\Models\Softsaro_UserDeliveryAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class FrontendAuthController extends Controller
{
    public function loginpage()
    {
        return view("frontend.auth.login");
    }

    public function register()
    {
        return view("frontend.auth.register");
    }

    public function store(StoreUserRequest $request)
    {
        // dd($request);
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        $req['slug'] = Str::slug($request->name);

        $user=Softsaro_User::create($req);

        Softsaro_UserDeliveryAddress::create([
            'user_id' => $user->id,
            'delivery_name' => $request->name,
            'delivery_email' => $request->email,
            'delivery_phonenumber' => $request->phonenumber,
            'delivery_address' => $request->address,
        ]);

        return redirect()->route('login')->with('success', 'Successfully Registered');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('softsaro__users')->attempt($credentials)) {
            return redirect()->route('homepage')->with('success', 'Login Successful');
        }
        return redirect()->route('login')->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('softsaro__users')->logout();
        return redirect()->route('homepage');
    }
}
