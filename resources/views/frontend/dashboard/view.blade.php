
@extends('frontend.layouts.app')
@section('main')
    @include('admin.includes.messages')
    <main class="mx-32 my-10">
        <div class="flex gap-4 items-center">
            <a href="{{ route('index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
            <div class="text-xl font-bold">Back</div>
        </div>
        @foreach ($productdetails as $order)
            <div class="mt-8 text-xl font-semibold text-slate-600">
                Order : {{ $order->order_id }}
            </div>
            <div class="flex justify-between w-full space-x-2 max-md:flex-col">
                <div class="mt-10 bg-white p-3 px-6 w-full shadow">
                    <div class="my-2 mb-4">
                        <ul>
                            <li class="font-semibold">Order ID:
                                <span class="font-normal">
                                    {{ $order->order_id }}
                                </span>
                            </li>

                            <li class="font-semibold">Total Amount :
                                <span class="font-normal">
                                    {{ $order->amount }}
                                </span>
                            </li>
                            <li class="font-semibold">Payment Method :
                                <span class="font-normal">
                                    {{ $order->payment_method }}
                                </span>
                            </li>
                            <li class="font-semibold">Order Status :
                                <span class="font-normal">
                                    @if ($order->order_status == 'DELIVERED')
                                        <span class="py-0.5 px-1 rounded bg-green-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'CANCELED')
                                        <span class="py-0.5 px-1 rounded bg-red-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'PROCESSING')
                                        <span class="py-0.5 px-1 rounded bg-orange-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'SHIPPED')
                                        <span class="py-0.5 px-1 rounded bg-teal-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'VERIFIED')
                                        <span class="py-0.5 px-1 rounded bg-blue-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'RETURNED')
                                        <span class="py-0.5 px-1 rounded bg-yellow-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @endif
                                </span>
                            </li>
                        </ul>

                    </div>
                    <div class="flex items-center justify-between mt-5 text-sm w-full">
                        <ul class="text-gray-600">
                            <li class="text-lg mb-1 text-slate-800"">
                                Billing Address

                            </li>
                            <li class="font-semibold text-black">Name: {{ $user_details->billing_name }}</li>
                            <li>Phone: {{ $user_details->billing_phonenumber }}</li>
                            <li>Address: {{ $user_details->billing_address }}</li>
                            <li>Email: {{ $user_details->billing_email }}</li>
                        </ul>
                        <ul class="text-gray-600">
                            <li class="text-lg mb-1 text-slate-800"">
                                Shipping Address
                            </li>
                            <li class="font-semibold text-black">Name: {{ $user_details->shipping_name }}</li>
                            <li>Phone: {{ $user_details->shipping_phonenumber }}</li>
                            <li>Address: {{ $user_details->shipping_address }}</li>
                            <li>Email: {{ $user_details->shipping_email }}</li>
                        </ul>

                    </div>

                </div>
                <div class="flex-col w-full">
                    <div class="mt-8 border ">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Image
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            Product name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Attributes
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Qty
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($order) --}}


                                    @foreach ($order->orderItem as $item)
                                        <tr class="bg-white border-b ">
                                            <th>
                                                <img src="{{ asset('uploads/' . $item->product->featured_image) }}"
                                                    class="img-responsive">

                                            </th>

                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                {{ $item->product->product_name }}
                                            </th>
                                            <td class="px-6 py-4">

                                                {{ $item->variation }}

                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->product_price }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->quantity }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->quantity * $item->product_price }}
                                            </td>


                                        </tr>
                                    @endforeach
                                    <tr class="bg-white border-b">
                                        <td colspan="4" class="px-6 py-4 text-right font-medium">
                                            Delivery Charge:
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->delivery_charge }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td colspan="4" class="px-6 py-4 text-right font-medium">
                                            Tax ({{ $order->taxpercent }}%):
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->taxamount }}
                                        </td>
                                    </tr>
                                    @if ($order->coupondiscount)
                                        @php
                                            $coupon = getCoupon($order->coupon);
                                            // dd($coupon->discount_amount)
                                        @endphp
                                        <tr class="bg-white border-b">
                                            <td colspan="4" class="px-6 py-4 text-right font-medium">
                                                Coupon ({{ $coupon->discount_amount }}%):
                                            </td>
                                            <td class="px-6 py-4">
                                                - {{ $order->coupondiscount }}
                                            </td>
                                        </tr>
                                    @endif
                                    <tr class="bg-white border-b">
                                        <td colspan="4" class="px-6 py-4 text-right font-bold">
                                            Grand Total:
                                        </td>
                                        <td class="px-6 py-4">
                                            {{-- {{ $order->amount }} --}}
                                            {{ $order->delivery_charge + $order->taxamount + $order->amount }}

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
