@extends('frontend.layouts.app')
@section('main')
    <div class="px-32 mx-auto max-w-screen-2xl  max-xl:px-10 max-md:px-5 py-20 bg-gray-100">
        <div class=" ">



            <div class="  max-lg:w-full ">

                <div class="">
                    <div class="sm:flex justify-between">
                        <div class="text-sm font-medium text-gray-500">Home / </div>
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
                                            class="relative z-[999]">
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
                                                                                <form method="GET" action="">


                                                                                    <div class="mb-4">



                                                                                        @foreach ($attributeIds as $key => $attribute)
                                                                                            <h3
                                                                                                class="text-md font-semibold mt-3">
                                                                                                {{ $attribute->attributename }}
                                                                                            </h3>



                                                                                            @php
                                                                                                $attributeValue = getAttribute($attribute);
                                                                                            @endphp

                                                                                            @foreach ($attributeValue as $key => $value)
                                                                                                <div class="">
                                                                                                    <input type="checkbox"
                                                                                                        name="attribute[]"
                                                                                                        value="{{ $value->id }}">
                                                                                                    <label
                                                                                                        class="text-sm">{{ $value->name }}</label>
                                                                                                </div>
                                                                                            @endforeach
                                                                                        @endforeach




                                                                                        <div
                                                                                            class="flex
                                                                                                py-3 items-center">
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
                                                                                    <button type="submit"
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

                <section class="flex items-center bg-gray-100 pt-10 ">
                    <div class="">
                        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            @foreach ($data as $sub)
                                @include('frontend.components.product', ['product' => $sub])
                            @endforeach
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
