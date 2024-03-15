<div class="  ">
    <div class="p-4 bg-white rounded  group">
        <div class="block mb-2 ">
            <div class="relative overflow-hidden">
                <div class="mb-5 overflow-hidden border-b">
                    <img class="object-contain w-full mx-auto transition-all rounded aspect-video h-40 group-hover:scale-110"
                        src="{{ asset('uploads/' . $product->featured_image) }}" alt="{{ $product->product_name }}">
                </div>
                {{-- share --}}
                {{-- <span
                    class="absolute top-0 left-0 m-1 h-8 w-8 items-center flex justify-center rounded-full bg-[#0f577d] px-2 text-center text-sm font-medium text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler items-center icon-tabler-share" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M8.7 10.7l6.6 -3.4"></path>
                        <path d="M8.7 13.3l6.6 3.4"></path>
                    </svg>

                </span> --}}

                {{-- hovercode --}}

                {{-- <div class="wishlists absolute flex flex-col top-4 right-4 text-[#0f577d] font-medium">
                    @if (Auth::guard('softsaro__users')->user())
                        @php
                            $a = getWishlist($product->id);
                        @endphp
                        @if ($a)
                            <div removewishlistproductId="{{ $product->id }}"
                                class="remove-product-wishlist  flex items-center ">
                                <div
                                    class="relative border  flex items-center justify-center p-3 mb-3 transition-all md:translate-x-20 bg-white rounded group-hover:translate-x-0 wishlist hover:bg-blue-200  group">

                                    <div class="wishlist-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svgs" height="1.3em"
                                            viewBox="0 0 512 512">
                                            <style>
                                                .svgs {
                                                    fill: #0f577d
                                                }
                                            </style>
                                            <path
                                                d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div wishlistproductId="{{ $product->id }}" class="product-wishlist flex items-center ">
                                <div
                                    class="relative  border flex items-center justify-center p-3 mb-3 transition-all md:translate-x-20 bg-white rounded group-hover:translate-x-0 wishlist hover:bg-blue-200  group">

                                    <div class="wishlist-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div wishlistproductId="{{ $product->id }}" class="product-wishlist flex items-center ">
                            <div
                                class="relative border  flex items-center justify-center p-3 mb-3 transition-all md:translate-x-20 bg-white rounded group-hover:translate-x-0 wishlist hover:bg-blue-200  group ">

                                <div class="wishlist-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endif



                    <div productId="{{ $product->id }}" class="cart-link alert-button">
                        <div
                            class="relative border flex items-center justify-center p-3 mb-3 transition-all md:translate-x-20 bg-white rounded group-hover:translate-x-0 wishlist hover:bg-blue-200 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-cart2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </div>
                    </div>

                </div> --}}


            </div>
            <div>
                <h3 class="mb-2 text-lg font-bold text-[#0f577d] group-hover:underline">
                    {{ Str::limit($product->product_name, 70) }}
                </h3>
            </div>


            <div class="text-lg font-bold text-blue-500 flex justify-between item-center">
                <div>Rs. {{ $product->product_price }}</div>

                <div class="wishlists    text-[#0f577d] font-medium">
                    @if (Auth::guard('softsaro__users')->user())
                        @php
                            $a = getWishlist($product->id);
                        @endphp
                        @if ($a)
                            <div removewishlistproductId="{{ $product->id }}"
                                class="remove-product-wishlist  flex items-center ">
                                <div
                                    class=" border  flex items-center justify-center p-3   bg-white rounded  hover:bg-blue-200 ">

                                    <div class="wishlist-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svgs" height="1.3em"
                                            viewBox="0 0 512 512">
                                            <style>
                                                .svgs {
                                                    fill: #0f577d
                                                }
                                            </style>
                                            <path
                                                d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div wishlistproductId="{{ $product->id }}" class="product-wishlist flex items-center ">
                                <div
                                    class="  border flex items-center justify-center p-3   bg-white rounded  wishlist hover:bg-blue-200  ">

                                    <div class="wishlist-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div wishlistproductId="{{ $product->id }}" class="product-wishlist flex items-center ">
                            <div
                                class=" border  flex items-center justify-center p-3   bg-white rounded  wishlist hover:bg-blue-200">

                                <div class="wishlist-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endif





                </div>
                {{-- @if ($product->cutoff_price) --}}
                {{-- <span class="text-xs pt-2 font-semibold text-gray-400 line-through ">Rs.
                    {{ $product->mrp_price }}</span> --}}
                {{-- @endif --}}
            </div>
        </div>
    </div>
</div>
