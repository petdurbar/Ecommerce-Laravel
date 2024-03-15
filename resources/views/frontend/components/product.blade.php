{{-- @dd(getProductVariationData($product->id)) --}}

@php
    if ($product->variation) {
        $price = getProductVariationData($product->id);
    }
@endphp



<div class="swiper-slide  bg-white rounded-lg shadow-md  border-[#EAEAEA] border-2 ">
    <div class="relative  group">

        <div class="relative  block h-[215px] max-sm:h-[180px]  overflow-hidden rounded -top-full ">
            <img class="w-full  object-cover h-full transition-all group-hover:scale-110"
                src="{{ asset('/uploads/' . $product->featured_image) }}" alt=" {{ $product->product_name }}">
            <div class="absolute flex flex-col top-4 right-4">
                <a href="#" class="flex items-center">
                    <div  data-product-id="{{ $product->id }}"
                        class="wishlistButton relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded   group-hover:translate-x-0 wishlist hover:bg-blue-200  group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                            </path>
                        </svg>
                    </div>
                </a>
                <a href="" class="flex items-center">
                    <div
                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded   group-hover:translate-x-0 wishlist hover:bg-blue-200  group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-cart2" viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                            </path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="px-6 py-3 bg-gray-50 space-y-2 text-center">
        <a href="{{ route('productdetails', $product->slug) }}" class="  text-black text-md  font-semibold capitalize ">
            {{ $product->product_name }}
        </a>


        @if ($product->variation)
            <p class="text-md text-slate-600 font-semibold ">

                @if ($price['minimum'] == $price['maximum'])
                    <span class="text-md text-slate-800">NPR {{ $price['minimum'] }}</span>
                @else
                    <span class="text-md text-slate-700">NPR {{ $price['minimum'] }} - NPR {{ $price['maximum'] }}</span>
                @endif
            </p>
        @else
            <p class="text-md text-slate-600 font-semibold ">
                <span class="text-md text-slate-700">NPR {{ $product->product_price }}</span>
            </p>
        @endif

        <div class="flex gap-1 justify-center text-orange-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star"
                viewBox="0 0 16 16">
                <path
                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
            </svg>
        </div>
        <div class="flex justify-center items-center">
            <a href="{{ route('productdetails', $product->slug) }}"
                class="w-fit flex items-center justify-center bg-white py-2 px-5 text-black text-sm font-semibold rounded-lg  border-[1px] border-gray-500 hover:border-black hover:bg-black hover:text-white transition-all duration-500 ease-cubic-bezier">View
                Details</a>
        </div>
    </div>

        {{-- <div class="relative ">
            <a href="#" class="">
                <img src="{{ asset('/uploads/' . $product->featured_image) }}" alt=""
                    class="object-cover w-full mx-auto h-96 lg:h-64">
            </a>


            <div id="wishlistButton"
                class="absolute z-10 flex items-center justify-center w-14 h-14 p-5 text-center text-orange-600 bg-gray-50 rounded-full shadow-xl left-1 top-1 cursor-pointer"
                data-product-id="{{ $product->id }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-heart" viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.920 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                    </path>
                </svg>
            </div>


            <div class="flex justify-center ">
                <div
                    class="absolute z-10 flex items-center justify-center p-2 -mt-6 text-center text-orange-600 border border-orange-400 rounded-full shadow-xl cursor-pointer bg-gray-50  hover:text-gray-50 hover:bg-orange-600 w-11 h-11 ">
                    <a href="{{ route('productdetails', $product->slug) }}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-4 h-4 bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-6 ">
            <h3 class="mb-3 text-xl font-medium text-center ">
                <a href="{{ route('productdetails', $product->slug) }}"> {{ $product->product_name }}</a>
            </h3>

            @if ($product->variation)
                <p class="text-lg text-black font-bold text-center">

                    @if ($price['minimum'] == $price['maximum'])
                        <span class="text-orange-500 ">Rs {{ $price['minimum'] }}</span>
                    @else
                        <span class="text-orange-500 ">Rs {{ $price['minimum'] }} - Rs {{ $price['maximum'] }}</span>
                    @endif
                </p>
            @else
                <p class="text-lg text-black font-bold text-center ">
                    <span class="text-orange-500 ">Rs {{ $product->product_price }}</span>

                </p>
            @endif



            <ul class="flex justify-center ">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-4 mr-1 text-yellow-400  bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-4 mr-1 text-yellow-400  bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-4 mr-1 text-yellow-400  bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-4 mr-1 text-yellow-400  bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-4 mr-1 text-yellow-400  bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div> --}}

    {{-- </div> --}}
</div>


<script>
    var wishlistButtons = document.getElementsByClassName('wishlistButton');

    for (var i = 0; i < wishlistButtons.length; i++) {
        wishlistButtons[i].addEventListener('click', function() {
            var productId = this.getAttribute('data-product-id');

            window.location.href = '{{ route('wishlist.add', ['productId' => '__productId__']) }}'.replace(
                '__productId__', productId);
        });
    }
</script>
