@extends('frontend.layouts.app')
@section('main')
    <div class="px-20 mx-auto max-w-screen-2xl max-xl:px-10 max-md:px-5 py-20 bg-gray-100">
        <div class=" ">


            <div class="  max-lg:w-full ">

                <div class="">
                    <div class="flex justify-between">
                        <div class="text-sm font-medium text-gray-500">Home / Products</div>
                        <div class="flex gap-5">
                            <div class="flex gap-1 justify-center items-center">
                                <div class="text-sm font-medium">Sort By : </div>
                                <div>

                                    <select name="sortby" id="sortby"
                                        class="w-full  border-gray-300 text-gray-700 sm:text-sm border py-1 outline-none">
                                        <option value="">Please select</option>
                                        <option value="JM">Sort by price:low to high</option>
                                        <option value="JM">Sort by price:high to low</option>
                                    </select>
                                </div>
                            </div>

                            <div class="">
                                <div x-data="{ slideOverOpen: false }" class="relative  w-auto h-auto">
                                    <button @click="slideOverOpen=true"
                                        class="inline-flex text-black  z-[50] items-center justify-center h-10 px-4 py-2 text-lg font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white disabled:opacity-50 disabled:pointer-events-none  float-right   ">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-filter-search" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M11.36 20.213l-2.36 .787v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414">
                                            </path>
                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                            <path d="M20.2 20.2l1.8 1.8"></path>
                                        </svg>&nbsp
                                        Filter
                                    </button>
                                    <template x-teleport="body">
                                        <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false"
                                            class="relative z-[99]">
                                            <div x-show="slideOverOpen" x-transition.opacity.duration.600ms
                                                @click="slideOverOpen = false"
                                                class="fixed inset-0  bg-black bg-opacity-10">
                                            </div>
                                            <div class="fixed inset-0 overflow-hidden">
                                                <div class="absolute inset-0 overflow-hidden">
                                                    <div class="fixed inset-y-0 right-0 flex max-w-full ">
                                                        <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                                                            {{--
                                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                                        x-transition:enter-start="-translate-x-full"
                                                        x-transition:enter-end="translate-x-0"
                                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                                        x-transition:leave-start="translate-x-0"
                                                        x-transition:leave-end="-translate-x-full" --}}
                                                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                                            x-transition:enter-start="translate-x-full"
                                                            x-transition:enter-end="translate-x-0"
                                                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                                            x-transition:leave-start="translate-x-0"
                                                            x-transition:leave-end="translate-x-full"
                                                            class="w-screen max-w-xs">
                                                            <div
                                                                class="flex flex-col h-full    bg-white border-l shadow-lg border-neutral-100/70">
                                                                <div class="px-4 sm:px-5 sticky py-3 top-0 z-50 bg-white">
                                                                    <div class="flex items-center justify-between pb-1">
                                                                        <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                                            id="slide-over-title">Filter</h2>
                                                                        <div class="flex items-center h-auto ">
                                                                            <button @click="slideOverOpen=false"
                                                                                class=" top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5" stroke="currentColor"
                                                                                    class="w-4 h-4">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M6 18L18 6M6 6l12 12"></path>
                                                                                </svg>
                                                                                <span>Close</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="relative  flex-1 px-4 mt-5 z-10 sm:px-5">
                                                                    <div class="absolute inset-0 px-4 sm:px-5">
                                                                        <div
                                                                            class="relative h-full overflow-y-scroll scrollbar-thin scrollbar-thumb-blue-400 scrollbar-track-gray-200 border border-dashed rounded-md border-neutral-300">
                                                                            <aside class=" bg-gray-200 p-4">
                                                                                <form method="GET"
                                                                                    action="
                                                        {{-- {{ route('filtersearch') }} --}}
                                                        ">
                                                                                    <div class="mb-4">
                                                                                        <h3
                                                                                            class="text-md font-semibold mb-2">
                                                                                            Price Range</h3>
                                                                                        <div class="flex py-3 items-center">
                                                                                            <input type="number"
                                                                                                id="min-price"
                                                                                                name="min-price"
                                                                                                class="border w-1/2 py-1 px-2 m-1"
                                                                                                value="0"
                                                                                                oninput="handleChange(this)">
                                                                                            to
                                                                                            <input type="number"
                                                                                                id="max-price"
                                                                                                name="max-price"
                                                                                                class="border w-1/2 py-1 px-2 m-1"
                                                                                                value="5000"
                                                                                                oninput="handleMaxChange(this)">


                                                                                            <script>
                                                                                                function handleChange(inputElement) {
                                                                                                    var currentValue = inputElement.value;
                                                                                                    console.log("Input value changed to: " + currentValue);
                                                                                                    var InputElement = document.getElementById("min-price");
                                                                                                    if (InputElement) {
                                                                                                        InputElement.value = currentValue;
                                                                                                    }
                                                                                                }

                                                                                                function handleMaxChange(inputElement) {
                                                                                                    var currentValue = inputElement.value;
                                                                                                    console.log("Input value changed to: " + currentValue);
                                                                                                    var InputElement = document.getElementById("max-price");
                                                                                                    if (InputElement) {
                                                                                                        InputElement.value = currentValue;
                                                                                                    }
                                                                                                }
                                                                                            </script>



                                                                                        </div>


                                                                                    </div>
                                                                                    <button
                                                                                        class="bg-black text-white px-5 py-1 font-medium mt-5 rounded-sm hover:bg-white hover:text-black border-black border">Filter</button>
                                                                                </form>

                                                                                <script>
                                                                                    // Function to update the range input based on the min and max price inputs
                                                                                    function updateRange() {
                                                                                        var minPriceInput = document.getElementById("min-price");
                                                                                        var maxPriceInput = document.getElementById("max-price");
                                                                                        var rangeInput = document.getElementById("minmax-range");

                                                                                        // Ensure min price is less than or equal to max price
                                                                                        if (parseFloat(minPriceInput.value) > parseFloat(maxPriceInput.value)) {
                                                                                            maxPriceInput.value = minPriceInput.value;
                                                                                        }

                                                                                        // Update the range input values
                                                                                        rangeInput.value = (parseFloat(maxPriceInput.value) - parseFloat(minPriceInput.value)) / 10;
                                                                                    }

                                                                                    // Function to update the min and max price inputs based on the range input
                                                                                    function updatePrice() {
                                                                                        var minPriceInput = document.getElementById("min-price");
                                                                                        var maxPriceInput = document.getElementById("max-price");
                                                                                        var rangeInput = document.getElementById("minmax-range");

                                                                                        // Calculate the min and max price values based on the range input
                                                                                        minPriceInput.value = parseFloat(rangeInput.value) * 10;
                                                                                        maxPriceInput.value = (parseFloat(rangeInput.value) * 10) + parseFloat(minPriceInput.value);
                                                                                    }


                                                                                    updateRange();
                                                                                </script>



                                                                                {{-- <button
                                                                                class="bg-[#0f577d] text-white px-5 py-1 font-medium mt-5 rounded-sm hover:bg-white hover:text-[#0f577d] border-[#0f577d] border">Filter</button>
                                                                            --}}
                                                                            </aside>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <section class="flex items-center bg-gray-100 pt-10">
                    <div class="">
                        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            @foreach ($allproducts as $allproduct)
                                <div class="mt-56 bg-white rounded shadow ">
                                    <div class="relative z-20 p-6 group">
                                        <div class="relative block h-64  mb-4 -mt-56 overflow-hidden rounded -top-full ">
                                            <img class="object-cover w-full  h-full transition-all group-hover:scale-110"
                                                src="{{ asset('uploads/' . $allproduct->featured_image) }}"
                                                alt="">
                                            <div class="absolute flex flex-col top-4 right-4">
                                                <a href="#" class="flex items-center">
                                                    <div
                                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded   group-hover:translate-x-0 wishlist hover:bg-blue-200  group">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" fill="currentColor" class="bi bi-heart"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="#" class="flex items-center">
                                                    <div
                                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded   group-hover:translate-x-0 wishlist hover:bg-blue-200  group">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" fill="currentColor" class="bi bi-cart2"
                                                            viewBox="0 0 16 16">
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
                                              {{$allproduct->product_name}}
                                            </h2>
                                        </a>
                                        <p class="mb-3 text-lg text-black font-semibold">
                                            <span>Rs {{ $allproduct->product_price }}</span>
                                            <span class="text-xs font-semibold text-gray-400 line-through ">Rs{{$allproduct->product_price}}</span>
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
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
