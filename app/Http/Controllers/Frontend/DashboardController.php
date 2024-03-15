<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Admin\OrderBillingInfo;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller

{
    public function __construct()
    {
        $this->middleware('customers');
    }
    // public function myaccount(){

    //    if (Auth::guard('customers')->check()){

    //     $customer=Auth::guard('customers')->user();
    //     dd($customer);
    //        return view('frontend.dashboard.dashboard', compact('customer'));
    //    }
    // }

    public function myaccount(){
        if (Auth::guard('customers')->check()){
            $customer = Auth::guard('customers')->user();
            $customerId = $customer->id;
            $order_list = Order::where('user_id', $customerId)->get();

            // $totalOrders = $orders->count();

            // dd($orders);
            return view('frontend.dashboard.dashboard', compact('customer', 'order_list'));
        }
    }



public function orderdetails(Request $request, $order_id)
{
    // dd($order_id);
    $order = Order::where('order_id', $order_id)->first();
    $order->view_status = 1;
    $order->save();

    $productdetails = Order::with(['orderItem', 'orderItem.orderAttributes'])
        ->where('id', $order->id)
        ->get();


    $user_details = Orderbillinginfo::where('order_id', $order->id)->first();
    return view('frontend.dashboard.view', compact('productdetails', 'user_details', 'order_id', 'order'));
}










    public function setting(){

        if (Auth::guard('customers')->check()){

         $customer=Auth::guard('customers')->user();
         // dd($customer);
            return view('frontend.dashboard.dashboard', compact('customer'));
        }
     }



}
