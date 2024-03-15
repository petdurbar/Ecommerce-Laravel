<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Softsaro_BillingInfo;
use App\Models\Softsaro_order;
use App\Models\Softsaro_OrderItems;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getorder()
    {
        $order_list = Softsaro_order::latest()->paginate(4);
        return view("admin.order.index", compact("order_list"));
    }

    public function orderdetails(Request $request,  $order_id)
    {
        // dd($order_id);
        $order = Softsaro_order::where('order_id', $order_id)->first();
        // $totalprice = $order->amount;
        // $order_status = $order->order_status;
        $productdetails = Softsaro_OrderItems::join('softsaro__products', 'softsaro__order_items.product_id', '=', 'softsaro__products.id')
            ->where('softsaro__order_items.order_id', $order->id)
            ->select('softsaro__products.*', 'softsaro__order_items.quantity as ordered_quantity', 'softsaro__order_items.product_price as price')
            ->get();

        $user_details = Softsaro_BillingInfo::where('order_id', $order->id)->first();
        return view('admin.order.order_detail', compact('productdetails', 'user_details', 'order_id', 'order'));
    }

    public function change_status(Request $request, Softsaro_order $orderstatus)
    {
        // dd($request->status);
        $orderstatus->order_status = $request->status;
        $orderstatus->save();

        return redirect()->back()->with('success', 'Order is being  '.$request->status);
    }
}
