<div class="px-16 py-10 bg-gray-100 max-lg:px-10 max-sm:px-5">
    <div class="md:text-4xl text-2xl font-medium text-center ">Laptops & Computers


    </div>
    <div class="flex justify-center items-center">
        <div class=" border-black w-[15%] border-b-8 mt-3 rounded-lg ">
            <!-- Your content goes here -->
        </div>
    </div>



    <section class="flex items-center bg-gray-100 pt-10">

        <div id="latestProductSwiper" class="swiper latestProductSwiper w-full lg:px-16 ">
            <div class="swiper-wrapper">


                @foreach ($subcategories as $sub)

                    @include('frontend.components.product' , ['product'=>$sub])
                @endforeach
            </div>
        </div>

        {{-- <div class="">
            <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($subcategories as $laptop)
                    <div class="mt-56 bg-white rounded shadow ">
                        <div class="relative z-20 p-6 group">
                            <div class="relative block h-64  mb-4 -mt-56 overflow-hidden rounded -top-full ">
                                <img class="object-cover w-full  h-full transition-all group-hover:scale-110"
                                    src="{{ asset('images/category/' . $laptop->image) }}"
                                    alt="{{ $laptop->category_name }}">
                                <div class="absolute flex flex-col top-4 right-4">
                                    <a href="#" class="flex items-center">
                                        <div
                                            class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded   group-hover:translate-x-0 wishlist hover:bg-blue-200  group">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-center">
                                        <div
                                            class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded   group-hover:translate-x-0 wishlist hover:bg-blue-200  group">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="#">
                                <h2 class="mb-2  text-black ">
                                    {{ $laptop->category_name }}
                                </h2>
                            </a>
                            <p class="mb-3 text-lg text-black font-semibold">
                                <span>$150.00</span>
                                <span class="text-xs font-semibold text-gray-400 line-through ">$200.00</span>
                            </p>
                            <div class="flex gap-1 text-orange-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                    <path
                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
    </section>
    <div class="flex justify-center items-center mt-10">
        <a href="{{ route('category-products' ,'laptops-computers') }}"
            class="bg-black max-sm:text-sm font-medium text-white px-6 py-2 rounded-md hover:bg-white hover:text-black border-black border cursor-pointer">VIEW
            MORE</a>
    </div>
</div>
