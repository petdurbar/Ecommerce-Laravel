<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\Frontend\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function register(StoreCustomerRequest $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        $registerd = Customer::create($req);

        // dd($registerd,$req);
        if ($registerd->id > 0) {
            DB::table('customers_billing_address')->insert(
                [
                    'customer_id' => $registerd->id,
                    'b_name' => $registerd->name,
                    'b_email' => $registerd->email,
                    'b_phone' => $registerd->phone,
                    'b_address' => $registerd->address,
                    "created_at" => Carbon::now(),
                    # new \Datetime()
                    "updated_at" => Carbon::now(),
                    # new \Datetime()

                ]
            );
        }
        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('customers')->attempt($credentials)) {
            if ($request->loginFrom == "popupLogin") {
                return redirect()->back()->with('success', 'Log in Failed');
            } else {

                return redirect()->route('user.dashboard')->with('success', 'Log in Successful');
            }

        }

        return redirect()->route('user.login')->with('error', 'Credentials do not match.');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::guard('customers')->logout();
        return redirect()->route('index'); // Redirect to the login page
    }

    public function update_delivery_address(Request $request, $userid)
    {
        // dd($request->all());
        $request->validate([
            'b_name' => 'required|string',
            'b_email' => 'required|email',
            'b_phone' => 'required|string',
            'b_address' => 'required|string',
            'b_landmark' => 'nullable|string',
            'b_city' => 'required|string',
        ]);
        // 'featured' => ,

        DB::update('update customers_billing_address set is_in_butwal=?, b_name = ?, b_email = ?, b_phone = ?, b_address = ?, b_landmark = ?, b_city = ? where customer_id = ?', [$request->featured ?? 0, $request->b_name, $request->b_email, $request->b_phone, $request->b_address, $request->b_landmark, $request->b_city, $userid]);

        return redirect()->back()->with('success', 'Address updated successfully.');
    }

    public function update_address(Request $request, $userid)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);
        // 'featured' => ,

        DB::update('update customers set name = ?, email = ?, phone = ?, address = ? where id = ?', [$request->name, $request->email, $request->phone, $request->address, $userid]);

        return redirect()->back()->with('success', 'Address updated successfully.');
    }

    public function changePassword(Request $request, $userid)
    {
        // dd($request->all());
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $user_detail = DB::table('customers')->where('id', $userid)->first();

        if (Hash::check($request->old_password, $user_detail->password)) {
            $hashed_new_password = Hash::make($request->password);

            DB::update('update customers set password = ? where id = ?', [$hashed_new_password, $userid]);
            return redirect()->route('user.dashboard')->with('success', 'Password updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Old Password doesnt seem tp match.');

        }


    }

}
