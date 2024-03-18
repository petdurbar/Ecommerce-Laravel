<div class=" ">
    <div class="p-4 bg-white rounded group">
        <div class="block mb-2 ">
            <div class="relative overflow-hidden">
                <div class="mb-5 overflow-hidden border-b">
                    <img class="object-contain w-full mx-auto rounded aspect-video h-40"
                        src="{{ asset('uploads/' . $product->featured_image) }}" alt="{{ $product->product_name }}">
                </div>

            </div>
            <div>
                <h3 class="mb-2 text-lg font-bold text-[#000]">
                    {{ Str::limit($product->product_name, 70) }}
                </h3>
            </div>
            <p class="text-lg font-bold text-orange-500 flex justify-between ">
                <span>Rs. {{ $product->product_price }}</span>
            </p>
        </div>
        <div class="wishlists flex top-4 right-4 text-[#000] font-medium">
            <div class="w-[30%]">
                @if (Auth::guard('softsaro__users')->user())
                    @php
                        $a = getWishlist($product->id);
                    @endphp
                    @if ($a)
                        <div removewishlistproductId="{{ $product->id }}"
                            class="remove-product-wishlist w-full flex items-center ">
                            <div
                                class="relative border w-full flex items-center justify-center p-3 mb-3 bg-white rounded wishlist">
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
                        <div wishlistproductId="{{ $product->id }}" class="product-wishlist w-full flex items-center ">
                            <div
                                class="relative border w-full flex items-center justify-center p-3 mb-3 bg-white rounded wishlist">
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
                            class="relative border flex items-center justify-center p-3 mb-3 bg-white rounded wishlist">
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

            <div productId="{{ $product->id }}" class="cart-link alert-button w-[65%]">
                <div
                    class="relative border flex items-center p-3 mb-3 text-white justify-between bg-orange-500 rounded wishlist">
                    <div class="">
                        Add to Cart
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-cart2" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
