<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Softsaro_Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Softsaro_User;


class AffilateController extends Controller
{


    public function generateRandomString($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = substr(str_shuffle($characters), 0, $length);

        $random_check = Softsaro_User::where('affilate_id', $randomString)->first();

        if ($random_check) {
            return $this->generateRandomString(6);
        }

        return $randomString;
    }
    public function affilatesubmit(Request $request)
    {
        $product=Softsaro_User::where("id",Auth::guard('softsaro__users')->user()->id)->first();

        $affilateid = $this->generateRandomString(6);
        // dd( $randomString);
        $req = $request->all();
        $req['affilate_id'] = $affilateid;
        $req['is_affilate'] = 1;
        $req['status'] = "PENDING";

        $product->update($req);
        dd($product);
    }
}
