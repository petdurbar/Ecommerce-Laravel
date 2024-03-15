@extends('frontend.portal._layouts.master')

@section('body')
    <div class=" md:flex md:flex-shrink-0 ">
        {{-- @include('frontend.portal.dashboard.user_sidebar') --}}
        <div class="flex-1 border rounded-xl p-2">
            <h2 class="text-2xl font-bold sm:text-xl">Items</h2>
            @php
                $initialTotal = 0;
            @endphp
            {{-- @dd($ordersWithItems) --}}
            @foreach ($ordersWithItems as $product)
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
                            Quantity: {{ $product->order_quantity }}
                        </div>
                    </div>
                    <div class="mt-4">
                        Rs. <span class="font-bold">{{ $product->ordered_product_price }}</span>
                    </div>
                </div>
            @endforeach

            {{-- <div class="p-2 flex justify-end gap-10 ">
            <div class="mt-4 text-gray-600 ">
                <span class="font-semibold px-2">Subtotal</span>
            </div>
            <div class="mt-4">
                Rs. <span class="font-bold">{{ $totalamount }}</span>
            </div>
        </div> --}}



        </div>
    </div>
@endsection
