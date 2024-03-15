<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Softsaro_BillingInfo;
use App\Models\Softsaro_Commission;
use App\Models\Softsaro_order;
use App\Models\Softsaro_OrderItems;
use App\Models\Softsaro_User;
use App\Models\Softsaro_UserDeliveryAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function thanks()
    {
        return view("frontend.cart.thankyou");
    }

    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function update_delivery_address(Request $request, $userid)
    {
        // dd($userid);
        $request->validate([
            'delivery_name' => 'required|string',
            'delivery_email' => 'required|email',
            'delivery_phonenumber' => 'required|string',
            'delivery_address' => 'required|string',

        ]);
        $deliveraddress = Softsaro_UserDeliveryAddress::where("user_id", $userid)->first();
        $deliveraddress->update([
            'delivery_name' => $request->delivery_name,
            'delivery_email' => $request->delivery_email,
            'delivery_phonenumber' => $request->delivery_phonenumber,
            'delivery_address' => $request->delivery_address,
        ]);
        return redirect()->back()->with('success', 'Address updated successfully.');
    }

    public function index()
    {
        $order_list = Softsaro_order::where('user_id', Auth::guard('softsaro__users')->user()->id)->where('order_status', 'DELIVERED')->latest()->get();
        $user_personal_details = Softsaro_User::where('id', Auth::guard('softsaro__users')->user()->id)->first();
        $user_details = Softsaro_UserDeliveryAddress::where('user_id', Auth::guard('softsaro__users')->user()->id)->first();;


        return view('frontend.portal.dashboard.dashboard', compact('user_details', 'user_personal_details', 'order_list'));
    }

    public function profile()
    {
        $user_personal_details = Softsaro_User::where('id', Auth::guard('softsaro__users')->user()->id)->first();
        return view('frontend.portal.dashboard.profile', compact('user_personal_details'));
    }

    public function update_address(Request $request, Softsaro_User $userid)
    {
        // dd(  $userid);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phonenumber' => 'required|string',
            'address' => 'required|string',
        ]);
        // 'featured' => ,
        $userid->update([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Address updated successfully.');
    }

    public function passwordChange()
    {
        return view('frontend.portal.dashboard.change_password');
    }

    public function paymentHistory()
    {
        $commissions = Softsaro_Commission::join("softsaro_orders", "softsaro__commissions.order_id", "=", "softsaro_orders.id")
            ->where("softsaro__commissions.user_id", Auth::guard("softsaro__users")->user()->id)
            ->select("softsaro__commissions.*", "softsaro_orders.order_id", "softsaro_orders.items")
            ->get();


        return view('frontend.portal.dashboard.paymenthistory', compact("commissions"));
    }

    public function changePassword(Request $request, Softsaro_User $userid)
    {
        // dd($userid);
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        #Match The Old Password
        if (!Hash::check($request->old_password, Auth::guard('softsaro__users')->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        Softsaro_User::whereId(Auth::guard('softsaro__users')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->back()->with('success', 'Password updated Successfully');
    }

    public function orderHistory()
    {
        $order_list = Softsaro_order::where('user_id', Auth::guard('softsaro__users')->user()->id)->where('order_status', 'DELIVERED')->latest()->get();
        return view('frontend.portal.dashboard.order_history', compact('order_list'));
    }

    public function orderDetails($orderid)
    {
        $ordersWithItems = Softsaro_order::join('softsaro__order_items', 'softsaro_orders.id', '=', 'softsaro__order_items.order_id')
            ->join('softsaro__products', 'softsaro__products.id', '=', 'softsaro__order_items.product_id')
            ->where("softsaro_orders.order_id", $orderid)
            ->select('softsaro_orders.amount as totalamount', 'softsaro_orders.payment_method as payment_method', 'softsaro_orders.order_status as order_status', 'softsaro_orders.delivery_charge as delivery_charge', 'softsaro__order_items.quantity as order_quantity', 'softsaro__order_items.product_price as ordered_product_price', 'softsaro__products.*')
            ->get();
        // dd($ordersWithItems);


        return view('frontend.portal.dashboard.orderdetails', compact('ordersWithItems'));
    }

    public function statements()
    {
        return view('frontend.portal.dashboard.statements');
    }
    public function getOrder(Request $request)
    {
        $order_id = $request->orderid;
        // dd($order_id);
        $order_list = Softsaro_order::where('order_id', $order_id)->first();

        // if ($order_list->isEmpty()) {
        //     $order_list=null;
        // return view('frontend.dashboard.order_tracking', compact('order_list'));
        // } else {
        return view('frontend.portal.dashboard.order_tracking', compact('order_list'));

        // }


    }
    public function orderTracking()
    {
        $order_list = null;
        return view('frontend.portal.dashboard.order_tracking', compact('order_list'));
    }

    public function viewaffilatecommission($viewcommission)
    {
        $order = Softsaro_order::where("order_id", $viewcommission)->first();
        $orderitems = Softsaro_OrderItems::join("softsaro__products", "softsaro__order_items.product_id", "=", "softsaro__products.id")
            ->where("softsaro__order_items.order_id", $order->id)
            ->select("softsaro__order_items.quantity as order_quantity","softsaro__order_items.product_price as order_productPrice","softsaro__products.product_name","softsaro__products.incentive_commission_amount","softsaro__products.affiliate_commission_amount")
            ->get();
        // dd($orderitems);
        return view('frontend.portal.dashboard.commissionview',compact("orderitems"));
    }
}
