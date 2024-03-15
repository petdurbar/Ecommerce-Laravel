@extends('frontend.layouts.app')
@section('main')
    <section class="overflow-hidden bg-gray-100 py-20  font-poppins ">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-8 md:w-1/2 md:mb-0">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative shadow-xl bg-white mb-6 lg:mb-10 lg:h-2/4 ">
                            <img src="{{ asset('uploads/' . $product->featured_image) }}" alt=""
                                class="object-cover w-full lg:h-full main-product-image ">
                        </div>
                        {{-- <div class="flex-wrap hidden md:flex ">
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border bg-white shadow-md p-3 border-black hover:border-black">
                                    <img src="https://i.postimg.cc/6qcPhTQg/R-18.png" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border bg-white shadow-md p-3 border-transparent hover:border-black">
                                    <img src="https://i.postimg.cc/6qcPhTQg/R-18.png" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border bg-white shadow-md p-3 border-transparent hover:border-black">
                                    <img src="https://i.postimg.cc/6qcPhTQg/R-18.png" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block bg-white shadow-md p-3 border border-transparent hover:border-black">
                                    <img src="https://i.postimg.cc/6qcPhTQg/R-18.png" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                        </div> --}}
                        <div class="px-6 pt-6 mt-6 border-t border-gray-300 ">
                            <div class="flex gap-6">
                                <div class="font-semibold description-btn active-btn cursor-pointer"
                                    onclick="toggleSection('description','this')"> DESCRIPTION
                                </div>
                                <div class="font-semibold specification-btn specification-btn cursor-pointer"
                                    onclick="toggleSection('specification','this')"> SPECIFICATION
                                </div>
                                <div class="font-semibold review-btn cursor-pointer"
                                    onclick="toggleSection('review','this')"> REVIEWS</div>

                            </div>

                            <div class="descriptionbox border p-3 text-sm mt-3 rounded-md border-[#ec1464]"
                                id="descriptionSection">
                                {!! $product->description !!}</div>

                            <div class="reviewbox border p-3 text-sm mt-3 rounded-md border-[#ec1464]" id="reviewSection">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                </div>

                            </div>
                            <div class="specificationbox border p-3 text-sm mt-3 rounded-md border-[#ec1464] "
                                id="specificationSection">{!! $product->specification !!}</div>

                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <form action="{{ route('cart.store') }}" class="add-to-cart" method="POST">
                        @csrf
                        <div class="lg:pl-20">
                            <div class="mb-8 ">
                                <h2 class="max-w-xl mb-6 text-2xl font-bold  md:text-4xl">
                                    {{ $product->product_name }}</h2>
                                {{-- <p class="inline-block mb-6 text-4xl font-bold text-gray-700  ">
                                <span>{{ $product->product_price }}</span>
                                <span
                                    class="text-base font-normal text-gray-500 line-through ">{{ $product->product_price }}</span>
                            </p> --}}
                                <div class="text-lg font-semibold text-gray-700 mt-2">
                                    Rs. <span id="changeprice"></span>
                                </div>
                                <div class="flex gap-2">
                                    <div>Quantity : </div>
                                    <div id="changequantity" class="text-md font-semibold text-primary">
                                    </div>
                                </div>
                                <p class="max-w-md text-gray-700 ">
                                    {{ $product->aboutproduct }}
                                </p>
                            </div>

                            <input type="hidden" id="myInput" name="nonvariation" value="" />
                            <input type="hidden" id="producprice" name="producprice" value="" />
                            <input type="hidden" id="variationattribute" name="variationattribute" value="" />

                            <input type="hidden" name="productid" id="productid" value="{{ $product->id }}">
                            @php
                                $attr = [];
                                $attr2 = [];
                            @endphp
                            {{-- no price variation attributes --}}
                            @php
                                // $uniqueAttributeGroupNames = $product->product_nonvariation->unique('attribute_group_id');
                                $uniqueAttributVariationeNames = $product->productvariation->unique('attribute_id');
                                // dd($uniqueAttributVariationeNames);
                            @endphp


                            {{-- price variation attributes --}}
                            @if ($product->variation)
                                <div class="w-full">
                                    @foreach ($uniqueAttributVariationeNames as $attributeset)
                                        <div class="w-full">

                                            <div class="">
                                                <h2 class="w-full pb-1 mb-4 mt-4 text-2xl font-semibold  ">
                                                    {{ $attributeset->getAttributeNames->attributename }}

                                                    <div class="border-b border-black w-16">
                                                    </div>
                                                </h2>
                                            </div>
                                            <div class="flex  gap-2">
                                                {{-- @dd($product->productvariation->where('attribute_id', $attributeset->attribute_id)->unique('attribute_value_id')) --}}
                                                @foreach ($product->productvariation->where('attribute_id', $attributeset->attribute_id)->unique('attribute_value_id') as $key => $value)
                                                    {{-- {{ dd($key) }} --}}

                                                    @php
                                                        $attr2[$value->attribute_id] = $value->attribute_value_id;
                                                    @endphp
                                                    <div class="my-2">
                                                        <input type="radio" id="{{ $value->getAttributeValueName->name }}"
                                                            onclick="selectVariationAttribute(this)"
                                                            name="{{ $attributeset->attribute_id }}"
                                                            value="{{ $value->attribute_value_id }}" class="hidden peer"
                                                            required {{ $value[$key] == 0 ? 'checked' : '' }} />

                                                        <label for="{{ $value->getAttributeValueName->name }}"
                                                            class="inline-flex items-center justify-between w-full px-2 py-1 text-gray-500 text-sm bg-white border border-gray-200 rounded-md cursor-pointer  peer-checked:border-[#ec1464] peer-checked:text-[#ec1464] hover:text-black hover:border-black">
                                                            <div class="block rounded-full">
                                                                <div class="px-2 py-1 text-black font-semibold text-center">
                                                                    {{ $value->getAttributeValueName->name }}
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif


                            <div class="mt-2">
                                <label for=""
                                    class="w-full pb-1 text-2xl font-semibold text-gray-700 border-b border-black ">Quantity</label>
                                <div class="flex flex-wrap gap-3 p-5">

                                    <div class="flex border justify-center bg-white items-center font-medium rounded-md">
                                        <span
                                            class="text-center p-2 border-r w-8 h-full cursor-pointer hover:bg-[#529aca] hover:text-white focus:outline-none"
                                            onclick="decrementQuantity()">-</span>
                                        <div class="border-r flex justify-center items-center h-full w-9 quantity-counter">
                                            1
                                        </div>

                                        {{-- <input type="hidden" value="1" name="quantity" id="quantity" /> --}}
                                        {{-- @dd($product) --}}
                                        <input type="hidden" value="1" name="quantity" id="quantity" max="{{ $product->availablestock }}" />


                                        <span
                                            class="text-center p-2 flex justify-center  border-l w-8 h-full cursor-pointer hover:bg-[#529aca] hover:text-white focus:outline-none"
                                            onclick="incrementQuantity()">+</span>
                                    </div>
                                </div>

{{--
                                <script>
                                    function incrementQuantity() {
                                        let quantityElement = document.querySelector('.quantity-counter');
                                        let quantity = document.querySelector('#quantity');
                                        let currentQuantity = parseInt(quantityElement.textContent);
                                        quantityElement.textContent = currentQuantity + 1;
                                        quantity.value = currentQuantity + 1;
                                        updateTotalQuantity();
                                    }

                                    function decrementQuantity() {
                                        let quantityElement = document.querySelector('.quantity-counter');
                                        let quantity = document.querySelector('#quantity');
                                        let currentQuantity = parseInt(quantityElement.textContent);
                                        if (currentQuantity > 1) {
                                            quantityElement.textContent = currentQuantity - 1;
                                            quantity.value = currentQuantity - 1;
                                            updateTotalQuantity();
                                        }
                                    }

                                    function updateTotalQuantity() {
                                        let totalQuantityElement = document.getElementById('totalQuantity');
                                        let totalPriceElement = document.getElementById('totalPrice');

                                        let alltotalPriceElement = document.getElementById('alltotalPrice');

                                        let PriceElement = document.getElementById('price').textContent;
                                        let quantityCounter = document.querySelector('.quantity-counter').textContent;
                                        totalQuantityElement.textContent = quantityCounter;

                                        totalPriceElement.textContent = parseInt(quantityCounter) * parseInt(PriceElement);
                                        alltotalPriceElement.value = parseInt(quantityCounter) * parseInt(PriceElement);
                                    }
                                </script> --}}
                                <script>
                                    function incrementQuantity() {
                                        let quantityElement = document.querySelector('.quantity-counter');
                                        let quantity = document.querySelector('#quantity');
                                        let currentQuantity = parseInt(quantityElement.textContent);
                                        let maxQuantity = parseInt(quantity.getAttribute('max'));


                                        if (currentQuantity < maxQuantity) {
                                            quantityElement.textContent = currentQuantity + 1;
                                            quantity.value = currentQuantity + 1;
                                            updateTotalQuantity();
                                        } else {
                                            // alert('Maximum quantity reached!');
                                            toastr.error('Maximum quantity reached!');

                                        }
                                    }

                                    function decrementQuantity() {
                                        let quantityElement = document.querySelector('.quantity-counter');
                                        let quantity = document.querySelector('#quantity');
                                        let currentQuantity = parseInt(quantityElement.textContent);
                                        if (currentQuantity > 1) {
                                            quantityElement.textContent = currentQuantity - 1;
                                            quantity.value = currentQuantity - 1;
                                            updateTotalQuantity();
                                        }
                                    }

                                    function updateTotalQuantity() {
                                        let totalQuantityElement = document.getElementById('totalQuantity');
                                        let totalPriceElement = document.getElementById('totalPrice');

                                        let alltotalPriceElement = document.getElementById('alltotalPrice');

                                        let PriceElement = document.getElementById('price').textContent;
                                        let quantityCounter = document.querySelector('.quantity-counter').textContent;
                                        totalQuantityElement.textContent = quantityCounter;

                                        totalPriceElement.textContent = parseInt(quantityCounter) * parseInt(PriceElement);
                                        alltotalPriceElement.value = parseInt(quantityCounter) * parseInt(PriceElement);
                                    }
                                </script>

                            </div>
                            <div class="flex flex-wrap items-center gap-4">
                                <button id="addcartbutton" class="w-full p-4 bg-black rounded-md lg:w-2/5  text-gray-50 hover:bg-black  ">
                                    Add to cart</button>
                                {{-- <div
                                    class="flex items-center justify-center w-full p-4 text-black border border-black rounded-md lg:w-2/5  hover:bg-black hover:border-black hover:text-gray-100 ">
                                    Buy Now
                                </div> --}}
                            </div>

                            @php
                                $jsonString = json_encode($attr);
                                $jsonString2 = json_encode($attr2);
                            @endphp

                            <script>
                                let inputElement = document.getElementById('myInput');
                                let atr = {!! $jsonString !!};
                                inputElement.value = JSON.stringify(atr);

                                function selectAttribute(e) {
                                    atr[e.name] = e.value;
                                    inputElement.value = JSON.stringify(atr);

                                    console.log(atr);
                                    console.log(e.value);
                                }

                                let variationattribute = document.getElementById('variationattribute');
                                let variation_atr = {!! $jsonString2 !!};


                                function selectVariationAttribute(e) {
                                    console.log(" ashmvdfmcvn ")
                                    variation_atr[e.name] = e.value;
                                    variationattribute.value = JSON.stringify(variation_atr);

                                    console.log("caa", variation_atr);
                                    console.log(e.value);

                                    const arr = Object.values(variation_atr)
                                    console.log("aa", arr)

                                    var productId = document.getElementById("productid").value;
                                    console.log("idddddd", productId)

                                    const url = "{{ route('price.check') }}"

                                    console.log("sfd", getCSRFToken())

                                    function getCSRFToken() {
                                        return $('meta[name="csrf-token"]').attr('content');
                                    }
                                    $.ajax({
                                        type: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': getCSRFToken()
                                        },
                                        url: url,
                                        data: {
                                            data: variation_atr,
                                            productid: productId
                                        },

                                        success: function(data) {
                                            console.log(data)
                                            if (data.success) {
                                                const c = document.getElementById("changeprice");
                                                const changequantity = document.getElementById("changequantity");
                                                const cart = document.getElementById("addcartbutton");
                                                const producprice = document.getElementById("producprice");

                                                c.innerText = data.data.price ?? "Not Available"
                                                producprice.value = data.data.price ?? 'Not Available'

                                                console.log("object",data.data.quantity);
                                                if (!data?.data?.quantity) {
                                                    console.log("sdsdfsd")
                                                    changequantity.innerText = "OutOfStock"
                                                    // cart.setAttribute("disabled", true);
                                                    $('#addcartbutton').prop('disabled', true);

                                                } else {
                                                    console.log("sdsdfsd123")
                                                    changequantity.innerText = data.data.quantity ?? 'Not Available'
                                                    // cart.removeAttribute("disabled");
                                                    $('#addcartbutton').prop('disabled', false);

                                                }

                                                console.log("Success");

                                                console.log(data.data);
                                            } else {
                                                const c = document.getElementById("changeprice");
                                                const changequantity = document.getElementById("changequantity");
                                                const cart = document.getElementById("addcartbutton");
                                                const producprice = document.getElementById("producprice");

                                                if (!data?.data?.availablestock) {
                                                    changequantity.innerText = "OutOfStock"
                                                    cart.setAttribute("disabled", true);

                                                } else {
                                                    producprice.value = data.data.product_price ?? 'Not Available'
                                                    c.innerText =  data.data.product_price ?? "Not Available"
                                                    changequantity.innerText = data.data.availablestock ?? 'Not Available'
                                                    cart.removeAttribute("disabled");
                                                }
                                                // changequantity.innerText = data.data.availablestock ?? 'Not Available'
                                                // console.log("error 404")

                                                // console.log("nochangenochange nochange nochange nochange nochange  ")
                                                // cart.setAttribute("disabled", true);

                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.log("Error", error);
                                        }
                                    });

                                }
                                selectVariationAttribute(variation_atr)
                            </script>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <script>
        // Initially hide the review section and show the description section
        document.getElementById('descriptionSection').classList.remove('hidden');
        document.getElementById('reviewSection').classList.add('hidden');
        document.getElementById('specificationSection').classList.add('hidden');


        function toggleSection(section, button) {
            var descriptionSection = document.getElementById('descriptionSection');
            var specificationSection = document.getElementById('specificationSection');

            var reviewSection = document.getElementById('reviewSection');

            var descriptionBtn = document.querySelector('.description-btn');
            var specificationBtn = document.querySelector('.specification-btn');

            var reviewBtn = document.querySelector('.review-btn');

            if (section === 'description') {
                descriptionSection.classList.remove('hidden');
                reviewSection.classList.add('hidden');
                specificationSection.classList.add('hidden');
                descriptionBtn.classList.add('active-btn');
                reviewBtn.classList.remove('active-btn');
                specificationBtn.classList.remove('active-btn');

            } else if (section === 'review') {
                descriptionSection.classList.add('hidden');
                specificationSection.classList.add('hidden');
                reviewSection.classList.remove('hidden');
                descriptionBtn.classList.remove('active-btn');
                specificationBtn.classList.remove('active-btn');
                reviewBtn.classList.add('active-btn');
            } else if (section === 'specification') {
                descriptionSection.classList.add('hidden');
                reviewSection.classList.add('hidden');
                specificationSection.classList.remove('hidden');
                descriptionBtn.classList.remove('active-btn');
                specificationBtn.classList.add('active-btn');
                reviewBtn.classList.remove('active-btn');
            }
        }
    </script>
    <style>
        .hidden {
            display: none;
        }

        .active-btn {
            border-bottom: 2px solid #ec1464;
            /* Adjust the color as needed */
            color: #ec1464;
            /* Adjust the color as needed */
        }
    </style>
@endsection
