<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\Frontend\Customer;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Session;
use Str;

class CustomerController extends Controller
{
    public function register(StoreCustomerRequest $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        Customer::create($req);

        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }

    public function getregister()
    {

        return view('frontend.customer.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('customers')->attempt($credentials)) {

            return redirect()->route('index');
        }

        return redirect()->route('user.login')->withInput()->with('error', 'Credentials do not match.');
    }

    public function getlogin(Request $request)
    {
        return view('frontend.customer.login');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::guard('customers')->logout();
        return redirect()->route('index'); // Redirect to the login page
    }

    public function googleAuth(Request $request)
    {
        return view('frontend.customer.googleAuth');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $avatarUrl = $google_user->getAvatar();
            $user = Customer::where('google_id', $google_user->getId())->first();
            $slug = Str::slug($google_user->getName());

            if (!$user) {
                $new_user = Customer::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'profile_image' => $avatarUrl,
                    'slug' => $slug,

                ]);
                Auth::guard('customers')->login($new_user);
            } else {
                Auth::guard('customers')->login($user);
            }

            if (session()->has('intendedURL')) {
                $url = session()->pull('intendedURL');
                return redirect($url);
            }

            return redirect()->route('index')->with('success', 'You have logged in successfully');

            // return redirect()->intended(route('homepage'));
        } catch (\Throwable $th) {
            dd('something went wrong: ' . $th->getMessage(), $th->getTraceAsString());
        }
    }

}
