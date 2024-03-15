<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCheckoutRequest;
use App\Mail\OrderInformation;
use App\Mail\SendCustomerOrderInformation;
use App\Models\Admin\Order;
use App\Models\Admin\OrderBillingInfo;
use App\Models\Admin\OrderItem;
use App\Models\Admin\OrderProductAttribute;
use App\Models\Admin\Product;
use App\Models\Frontend\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{

    public function index()
    {
        $items = \Cart::getContent();
        if (Auth::guard('customers')->user()) {
            // dd("yes");
            $users = Customer::where("id", Auth::guard('customers')->user()->id)->first();
            return view("frontend.pages.checkout", compact("items", "users"));
        }
        $users = "";
        return view('frontend.pages.checkout', compact("items", "users"));
    }

    public function thanks()
    {
        return view("frontend.components.thanks");
    }

    public function orderExists($numberOfDigits)
    {
        $min = pow(10, $numberOfDigits - 1);
        $max = pow(10, $numberOfDigits) - 1;
        $random_number = rand($min, $max);
        $random_check = Order::where('order_id', $random_number)->first();
        if ($random_check) {
            return $this->orderExists($numberOfDigits);
        }
        return $random_number;
    }

    public function checkout(StoreCheckoutRequest $request)
    {

        // dd($request);
        $items = \Cart::getContent();
        // dd($items);
        $sumprice = \Cart::getSubTotal();

        $ordernum = $this->orderExists(8);
        $orderid = "order_" . $ordernum;

        if (Auth::guard('customers')->user()) {
            $userid = Auth::guard('customers')->user()->id;
        } else {
            $userid = "0";
        }

        $ordertable = Order::create([
            'user_id' => $userid,
            'order_id' => $orderid,
            'items' => $items->count(),
            'amount' => $sumprice,
            // 'amount' => $request->alltotalamount,
            'payment_method' => "Cash",
            'order_status' => "PROCESSING",
            'payment_status' => "PENDING",
            'view_status' => 0,
            'order_from' => "ktm",
            'taxamount' => "0",
            'taxpercent' => "0",
            'coupon' => "0",
            'delivery_charge' => $request->delivery_charge_,

        ]);

        foreach ($items as $item) {
            $product = Product::where("id", $item->associatedModel->id)->first();
            // $product->product_stock -= $item->quantity;
            // $product->total_sale += $item->quantity;
            // $product->save();
            $orderitem = OrderItem::create([
                'order_id' => $ordertable->id,
                'product_id' => $product->id,
                'quantity' => $item->quantity,
                'vendor_id' => $product->vendor_id ?? 0,
                'product_price' => $item->price,
                'variation'=>$item->attributes->attributesname
            ]);

            if ($item->attributes->attr) {
                foreach ($item->attributes->attr as $key => $attri) {
                    OrderProductAttribute::create([
                        'order_id' => $ordertable->id,
                        'order_item_id' => $orderitem->id,
                        'product_id' => $product->id,
                        'attribute_id' => $key,
                        'attribute_value_id' => $attri,
                    ]);
                }
            }
        }

        OrderBillingInfo::create([
            'order_id' => $ordertable->id,
            'billing_name' => $request->billing_name,
            'billing_email' => $request->billing_email,
            'billing_address' => $request->billing_address,
            'billing_phonenumber' => $request->billing_phonenumber,

            'shipping_name' => $request->shipping_name ?? $request->billing_name,
            'shipping_email' => $request->shipping_email ?? $request->billing_email,
            'shipping_address' => $request->shipping_address ?? $request->billing_address,
            'shipping_phonenumber' => $request->shipping_phonenumber ?? $request->billing_phonenumber,
        ]);
        // dd("success");
        $order = Order::where('order_id', $ordertable->order_id)->first();
        $ordersWithItems = Order::with(['orderItem', 'orderItem.orderAttributes'])
            ->where('id', $ordertable->id)
            ->get();
        $user_details = OrderBillingInfo::where('order_id', $order->id)->first();

        $orderedfrom = $order->order_from == "valleyin" ? "Inside Valley" : "Outside Valley";

        $mailData = [
            'user_details' => $user_details,
            'ordersWithItems' => $ordersWithItems,
            'order_from' => $orderedfrom,
            'affiliate_id' => $order->affilatecode ?? "",
        ];

        // Mail::to('anjali@softsaro.com')->send(new OrderInformation($mailData));
        // if ($user_details->billing_email) {
        //     Mail::to($user_details->billing_email)->send(new SendCustomerOrderInformation($mailData));
        // }

        // return view('frontend.checkout.index', compact("items"));

        \Cart::clear();

        return redirect()->route('thanks', )->with('success', 'Order Successfully Placed');

    }
}
