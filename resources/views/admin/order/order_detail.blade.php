@extends('admin._layouts.master')

@section('page_title', 'Admin - Orders')
@section('order_select', 'bg-[#F1612D] text-white')
@section('body')
@include('admin.message.index')

{{-- @dd($order) --}}
    <section class="flex justify-center">
        <div class=" px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16 w-[90%]">
            <div class="flex justify-center gap-6">

                <div class="flex-1 border rounded-xl p-2">
                    <h2 class="text-2xl font-bold sm:text-xl">Items</h2>
                    @php
                        $initialTotal = 0;
                    @endphp
                    @foreach ($productdetails as $product)
                        {{-- @php
                            $initialTotal += $product->product_price * $product->quantity;
                        @endphp --}}
                        <div class="p-2 flex  justify-between border-b-2">
                            <div class="mt-4 text-gray-600 flex gap-2">


                                <img src="{{ asset('uploads/' . $product->featured_image) }}" alt="product-image"
                                    class="h-12 rounded-lg " />
                                    <div class="flex flex-col">

                                        <a href="{{ route('product.show', $product->id) }}"
                                            class="underline font-semibold px-2">{{ $product->product_name }}</a>
                                        Quantity: {{ $product->ordered_quantity }}
                                    </div>
                            </div>
                            <div class="mt-4">
                                Rs. <span class="font-bold">{{ $product->price }}</span>
                            </div>
                        </div>
                    @endforeach
                    {{--
                    <div class="p-2 flex justify-end gap-10 ">
                        <div class="mt-4 text-gray-600 ">
                            <span class="font-semibold px-2">Subtotal</span>
                        </div>
                        <div class="mt-4">
                            Rs. <span class="font-bold">{{ $initialTotal }}</span>
                        </div>
                    </div>
                    --}}
                    <div class="p-2 flex justify-end gap-10">
                        {{-- <div class=" text-gray-600 ">

                            @if ($user_details != null)
                                @if ($user_details->is_in_butwal)
                                    <span class="font-semibold px-2">Delivery Charge (inside Butwal)</span>
                                @else
                                    <span class="font-semibold px-2">Delivery Charge (outside Butwal)</span>
                                @endif
                            @else
                                <span class="font-semibold px-2">Delivery Charge (outside Butwal)</span>
                            @endif
                        </div>
                         --}}
                        {{-- <div class="">
                            Rs. <span
                                class="font-bold">{{ $user_details->is_in_butwal ? getSettings()->delivery_charge_in : getSettings()->delivery_charge_out }}</span>
                        </div> --}}
                    </div>
                    <div class="p-2 flex justify-end gap-10">
                        <div class=" text-gray-600 ">
                            <span class="font-semibold px-2">Grand Total</span>
                        </div>
                        <div class="">
                            Rs. <span class="text-xl font-bold">{{ $order->amount }}</span>
                        </div>
                    </div>

                </div>

                <div class=" flex-1 border rounded-xl p-4 mx-auto max-w-lg lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
                    <h2 class="text-2xl font-bold sm:text-xl">Delivery Address</h2>
                    <div id="daddress" class="">
                        <div class="mt-4 mb-8 text-sm">
                            {{-- <p class="font-bold">{{ $user_details->is_in_butwal ? 'Inside Butwal' : 'Outside Butwal' }}</p> --}}
                            <p>Reciever Name:&nbsp;{{ $user_details->billing_name }}</p>
                            <p>Phone Number : {{ $user_details->billing_phonenumber }}</p>
                            <p>Billing Details : {{ $user_details->billing_email }}</p>

                            <p>Address:&nbsp; {{ $user_details->billing_address }}</p>

                            </p>
                        </div>
                        {{-- <div class="flex justify-end"> --}}

                        {{-- </div> --}}

                    </div>

                </div>
            </div>
            <div class="flex gap-4 mt-4">
                <form id="status-form" action="
                {{ route('order.changestatus', $order->id) }}
                " method="POST">
                    @csrf
                    <label for="status">Status</label>
                    <select id="status-select" name="status" class="rounded-lg bg-green-600 p-1 px-3 text-white">
                        <option {{ $order->order_status == 'PROCESSING' ? 'selected' : '' }} value="PROCESSING">PROCESSING
                        </option>
                        <option {{ $order->order_status == 'VERIFIED' ? 'selected' : '' }} value="VERIFIED">VERIFIED</option>
                        <option {{ $order->order_status == 'SHIPPED' ? 'selected' : '' }} value="SHIPPED">SHIPPED</option>
                        <option {{ $order->order_status == 'DELIVERED' ? 'selected' : '' }} value="DELIVERED">DELIVERED</option>
                        <option {{ $order->order_status == 'CANCELED' ? 'selected' : '' }} value="CANCELED">CANCELED</option>
                    </select>
                </form>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const statusSelect = document.getElementById("status-select");
                        const statusForm = document.getElementById("status-form");

                        statusSelect.addEventListener("change", function() {
                            statusForm.submit();
                        });
                    });
                </script>

            </div>
        </div>
    </section>
@endsection
