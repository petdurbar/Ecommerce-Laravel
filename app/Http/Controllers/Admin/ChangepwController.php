<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Http\Request;

class ChangepwController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
  public function changepassword(){
return view("admin.changepassword.changepassword");
  }


  public function updatepassword(Request $request)
  {
      $request->validate([
          'current_password' => 'required',
          'new_password' => 'required|string|confirmed',
      ]);

      $user = Auth::user();
      $currentPassword = $request->input('current_password');

      if (Hash::check($currentPassword, $user->password)) {
          $user->update([
              'password' => Hash::make($request->input('new_password')),
          ]);

          return redirect()->route('admin.password.update')->with('success', 'Password changed successfully.');
      } else {
          return redirect()->route('admin.password.update')->with('error', 'Current password is incorrect.');
      }
  }


}

