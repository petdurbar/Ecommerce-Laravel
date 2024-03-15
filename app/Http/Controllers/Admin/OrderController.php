<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ChangeOrderStatus;
use App\Models\Admin\Order;
use App\Models\Admin\OrderBillingInfo;
use App\Models\Admin\OrderItem;
use App\Models\Admin\OrderProductAttribute;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function getorder()
    {
        $order_list = Order::latest()->paginate(5);
        return view("admin.order.index", compact("order_list"));

    }

    public function deleteorderdetails(Order $orderdelete)
    {

        $orderitems = OrderItem::where("order_id", $orderdelete->id)->delete();
        // dd($orderitems);
        $billinginfo = OrderBillingInfo::where("order_id", $orderdelete->id)->first();
        $orderattribute = OrderProductAttribute::where("order_id", $orderdelete->id)->delete();

        $billinginfo->delete();
        $orderdelete->delete();

        return redirect()->back()->with('success', 'Order Successfully Deleted');
    }

    public function orderdetails(Request $request, $order_id)
    {
        // dd($order_id);
        $order = Order::where('order_id', $order_id)->first();
        $order->view_status = 1;
        $order->save();
        // $totalprice = $order->amount;
        // $order_status = $order->order_status;
        $productdetails = Order::with(['orderItem', 'orderItem.orderAttributes'])
            ->where('id', $order->id)
            ->get();
        // dd($productDetails);

        $user_details = Orderbillinginfo::where('order_id', $order->id)->first();
        return view('admin.order.orderDetails', compact('productdetails', 'user_details', 'order_id', 'order'));
    }

    public function change_status(Request $request, Order $orderstatus)
    {
        // dd($request->status);

        if ($request->status == 'CANCELED' || $request->status == 'RETURNED') {
            $orderitems = Orderitem::where('order_id', $orderstatus->id)->get();
            foreach ($orderitems as $orderitem) {
                $product = Product::find($orderitem->product_id);

                if ($product) {
                    $newQuantity = $product->product_stock + $orderitem->quantity;
                    $product->update(['product_stock' => $newQuantity]);
                }
            }
        }

        if ($request->status == 'DELIVERED') {
            $orderstatus->delivered_date = now();
            $orderstatus->save();
        }

        $orderstatus->order_status = $request->status;
        $orderstatus->save();

        $mailemail = Orderbillinginfo::where('order_id', $orderstatus->id)->first();
        $mailData = $orderstatus;

        if ($mailemail->billing_email) {
            Mail::to($mailemail->billing_email)->send(new ChangeOrderStatus($mailData));
        }
        return redirect()->back()->with('success', 'Order is being  ' . $request->status);
    }
}
