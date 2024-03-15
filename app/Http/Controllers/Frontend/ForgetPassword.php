<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Mail\otp;
use App\Models\Frontend\Customer;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Str;

class ForgetPassword extends Controller
{
    public function index(){
        return view('frontend.customer.forgetpassword');
    }


    public function store(Request $request)
    {
        $email = request('email');
        if (!$email) {
            return view('frontend.customer.forgetpassword');
        } else {
            $customer = Customer::where("email", $request->email)->first();
    
            if (!$customer) {
                return redirect()->back()->with('error', 'Email not found');
            }
    
            $otp = rand(100000, 999999); // Generate the OTP
    
           
            $customer->update([
                'otp' => $otp,
            ]);
            Mail::to($email)->send(new otp($otp));
    
    
            return redirect()->route('otp', ['email' => $email]);
        }
    }

   
    public function newpassword()
    {
        return view("frontend.customer.newpassword");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function otp(Request $request)
    {
        $email = request('email');
        
        if (!$email) {

            return redirect()->route('forgetpassword');
        } else {
            $customer = Customer::where("email", $request->email)->first();

            if (!$customer) {

                return redirect()->back()->with('error', 'Invalid Otp');
            }


            return view('frontend.customer.otp');
        }
    }

    public function checkotp(Request $request)
    {
       
        $email = request('email');
        if (!$email) {
            
            return redirect()->route('otp');
        }
       
        $email = $request->email;
        $otp = $request->otp;
        $checkotp = Customer::where('email', $request->email)->first();

        if ($otp == $checkotp->otp) {
            // If OTP is correct, update the token
            $token = Str::random(15); // Generates a random string with 8 characters
            $checkotp->update([
                'token' => $token,
            ]);

            return redirect()->route('newpassword', ['token' => $token]);;
        } else {
            return redirect()->back()->with('error', 'Invalid Otp');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function changepassword(ChangePasswordRequest $request)
    {
        # Validation
       $token = $request->token;
       $customer = Customer::where('token',$token)->first();
       if(!$customer){
        return redirect()->back()->with('error', 'User not found.');
       }
       $customer->update([
        'password' => Hash::make($request->newpassword)
       ]);
        

        #Update the new Password
       

        return redirect()->route('login')->with("status", "Password changed successfully!");
    }

   
}
