<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Softsaro_User;
use Illuminate\Http\Request;

class ManageUserController extends Controller
{
    public function affilateusers()
    {
        $affilateusers = Softsaro_User::where("is_affilate", 1)->orderBy("id", "desc")->paginate(4);
        return view("admin.affilateUser.userstable",compact("affilateusers"));
    }

    public function viewaffilate(Softsaro_User $affilateusers)
    {
        return view("admin.affilateUser.view",compact("affilateusers"));
        // $affilateusers=Softsaro_User::where("is_affilate",1)->get();
    }

    public function verify(Softsaro_User $affilateuser)
    {
        // dd($affilateuser);
        //dd($student);
        $affilateuser->status = 'VERIFIED';
        $affilateuser->save();

        return redirect()->route('viewaffilate',$affilateuser->slug)->with('success', 'User verified successfully.');
    }

    public function reject(Softsaro_User $affilateuser)
    {

        $affilateuser->status = 'REJECTED';
        $affilateuser->save();


        return redirect()->route('viewaffilate',$affilateuser->slug)->with('error', 'User rejected successfully.');
    }
}
