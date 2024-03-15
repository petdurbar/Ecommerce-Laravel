<div class="w-full h-auto flex justify-center items-center">
    <div
        class="h-auto min-[1300px]:w-[1250px] w-full min-[1300px]:px-0 md:px-[2.5rem] px-[1rem] min-[1300px]:space-y-10 space-y-5 my-5  min-[1300px]:my-10">
        <div class="font-medium min-[1300px]:text-3xl text-2xl leading-5 text-webblack text-center uppercase">
            <span class="inline-block pb-5 relative">
                My Cart
                <span class="absolute w-2/5 bottom-0 left-[30%] border-b-8 border-black rounded-3xl"></span>
            </span>
        </div>
        {{-- @dd($items) --}}
        @if ($items->isEmpty())
            <div class=" bg-white w-full shadow-2xl min-h-[300px] flex-col gap-5 flex justify-center items-center">
                <div class="italic text-base">Your Cart is Empty</div>
                <a href="{{ route('index') }}"
                    class="w-fit whitespace-nowrap flex items-center justify-center bg-black py-1 px-6 text-white text-16 rounded-lg uppercase border-[1px] border-black hover:bg-white hover:text-black transition-all duration-500 ease-cubic-bezier">
                    Continue Shopping
                </a>
            </div>
        @else
            <div class="overflow-x-auto xscroll overflow-hidden w-full">
                <table class="carttable max-md:w-[768px]">
                    <thead>
                        <tr>
                            {{-- <th>Product Code</th> --}}
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach ($items as $item)
                            @php
                                $totalItem = $item['price'] * $item['quantity'];
                                $subtotal += $totalItem;
                            @endphp

                            <tr>
                                {{-- <td>{{ $item['product_code'] }}</td> --}}
                                <td>
                                    <div class="h-[80px] w-[100px] p-2 bg-white rounded-lg flex justify-start">
                                        <img src="{{ asset('uploads/' . $item->attributes->image) }}" alt=""
                                        class="w-full h-full object-contain">
                                    </div>
                                </td>
                                <td>{{ $item['name'] }}
                                    @if ($item->attributes->attr)
                                        <div class=" flex gap-1 ">

                                            @foreach ($item->attributes->attr as $key => $attri)
                                                <div
                                                    class=" border mt-1 text-white text-xs p-1  bg-[#ec1464] px-1 rounded">
                                                    {{ getCartAttributes($attri)->name ?? ''}}

                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $item['price'] }}

                                </td>

                                <td>
                                    <div class="flex items-center">
                                        <div class="rounded-lg cursor-pointer sub-quantity w-[29px] h-[29px] text-xl flex justify-center items-center border-2 border-[#B2BCCA]"
                                            values={{ $item->id }}>
                                            -
                                        </div>
                                        <div data-cart-item-id="{{ $item->id }}" min="1"
                                            class="w-[39px] h-[29px] text-xs text-[#4F4F4F] flex justify-center items-center quantity-input">
                                            {{ $item['quantity'] }}
                                        </div>
                                        <div class="rounded-lg w-[29px] add-quantity cursor-pointer h-[29px] text-xl flex justify-center items-center border-2 border-[#B2BCCA]"
                                            value={{ $item->id }}>
                                            +
                                        </div>
                                    </div>
                                </td>
                                <td class="">{{ Cart::get($item->id)->getPriceSum() }}

                                </td>
                                <td>
                                    <div singleId={{ $item->id }} class="clearSingle" class="">
                                        <span
                                            class="material-symbols-outlined text-red-600 bg-[#dbdada] cursor-pointer flex items-center justify-center rounded-lg w-[40px] h-[40px]">
                                            delete
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-between max-md:flex-col gap-5 max-md:gap-5">
                <div class="flex gap-4 max-[575px]:flex-col">
                    <div>
                        <a href="/latest-products"
                            class="w-full whitespace-nowrap flex items-center justify-center bg-black py-1 px-6 text-white text-16 rounded-lg uppercase border-[1px] border-black hover:bg-white hover:text-black transition-all duration-500 ease-cubic-bezier">
                            Continue Shopping
                        </a>
                    </div>
                    <div>
                        <div
                            class="w-full clearall cursor-pointer whitespace-nowrap flex items-center justify-center bg-black py-1 px-6 text-white text-16 rounded-lg uppercase border-[1px] border-black hover:bg-white hover:text-black transition-all duration-500 ease-cubic-bezier">
                            Clear Cart
                        </div>
                    </div>
                </div>
                <div class="w-[400px] max-[575px]:w-full  p-4 space-y-4 bg-white rounded-lg shadow-2xl">
                    <div class="font-semibold text-base">Summary</div>
                    <div class="flex justify-between items-center text-base">
                        <div>Sub Total</div>
                        <div>Rs {{ $subtotal }}</div>
                    </div>

                    <hr style="border:1px dashed #d3d3d3" />

                    <div class="flex justify-between items-center font-semibold text-base">
                        <div>Total</div>
                        <div>Rs {{ $subtotal }}</div>
                    </div>

                    <div>
                        <a href="{{ route('checkout') }}"
                            class="w-full flex items-center justify-center bg-black py-1 px-6 text-white text-16 rounded-lg uppercase border-[1px] border-black hover:bg-white hover:text-black transition-all duration-500 ease-cubic-bezier">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>



<input type="hidden" value="{{ $items->count() }}" id="data">
