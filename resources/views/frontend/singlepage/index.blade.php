@extends('frontend._layout._master')
<style>
    table {
        border-collapse: collapse;
        width: auto;
        border: 1px solid #ccc;
        overflow-x: scroll;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-left: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
<style>
    .tooltip {
        position: relative;
        display: inline-block;
        /* border-bottom: 1px dotted black; */
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: #0f577d;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: 120%;
        left: 50%;
        margin-left: -60px;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent #0f577d transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    iframe {
        height: 300px;
        width: 100%;
    }

    #content-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .column {
        width: 600px;
        padding: 10px;

    }

    #featured {
        /* max-width: 500px; */
        max-height: 600px;
        object-fit: cover;
        cursor: pointer;
        /* border: 2px solid black; */

    }

    .thumbnail {
        object-fit: cover;
        max-width: 180px;
        max-height: 100px;
        cursor: pointer;
        opacity: 0.5;
        margin: 5px;
        border: 2px solid black;

    }

    .thumbnail:hover {
        opacity: 1;
    }

    .active {
        opacity: 1;
    }

    #slide-wrapper {
        max-width: 500px;
        display: flex;
        min-height: 100px;
        align-items: center;
    }

    #slider {
        width: 500px;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;

    }

    #slider::-webkit-scrollbar {
        width: 4px;

    }


    .arrow {
        width: 30px;
        height: 30px;
        cursor: pointer;
        transition: .3s;
    }
</style>
@section('body')
    <div class="mx-auto max-w-screen-2xl">
        @include('admin.message.index')
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                <div class="p-4 bg-white shadow relative">
                    <a id="gallarylink" href="{{ asset('uploads/' . $product->featured_image) }}" data-fancybox="gallery"
                        data-rotation="0" target="_blank" class="block  w-full">
                        <img id="featured" src="{{ asset('uploads/' . $product->featured_image) }}"
                            class="w-full h-auto sm:h-[60vh]  hover:text-black rounded-t-xl object-contain">
                    </a>
                    @if (Auth::guard('softsaro__users')->user())
                        <span
                            class="absolute top-2 right-5 m-1 h-8 w-8 items-center flex justify-center rounded-full bg-orange-500 px-2 text-center text-sm font-medium text-white">

                            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                class="relative z-50 w-auto h-auto ">
                                <button @click="modalOpen=true"
                                    class="inline-flex bg-orange-500 border items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors   rounded-md hover:bg-[#4388ad]  focus:outline-none disabled:opacity-50 disabled:pointer-events-none"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler items-center icon-tabler-share" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M8.7 10.7l6.6 -3.4"></path>
                                        <path d="M8.7 13.3l6.6 3.4"></path>
                                    </svg></button>
                                <template x-teleport="body">
                                    <div x-show="modalOpen"
                                        class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                        x-cloak>
                                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                            class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                                        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                            <div class="flex items-center justify-between pb-2 ">
                                                <h3 class="text-lg font-semibold">Share Url</h3>
                                                <button @click="modalOpen=false"
                                                    class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="relative w-full">
                                                <main class="flex gap-3 w-full justify-center items-center bg-gray-100">
                                                    <div class=" w-full ">
                                                        <input class="w-full border-solid border rounded py-2 px-4"
                                                            value={{ Request::url() . '?scifn=' . Auth::guard('softsaro__users')->user()->affilate_id }}
                                                            type="text" id="copyMe">
                                                    </div>
                                                    <button
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
                                                        onclick="copyMeOnClipboard()">Copy</button>
                                                    {{-- <p class="text-green-700"></p> --}}
                                                </main>
                                                <script>
                                                    const copyText = document.querySelector("#copyMe");
                                                    const showText = document.querySelector("p");

                                                    const copyMeOnClipboard = () => {
                                                        copyText.select();
                                                        copyText.setSelectionRange(0, 99999); //for mobile phone
                                                        document.execCommand("copy");
                                                        showText.innerHTML = `${copyText.value} is copied`
                                                        setTimeout(() => {
                                                            showText.innerHTML = ''
                                                        }, 1000)
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </span>
                    @endif

                    <div class="mt-2 ">
                        @if (!$productImage->isEmpty())
                            <div id="slide-wrapper" class="relative ">
                                <svg id="slideLeft" class="arrow left-arrow " xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13.59 7.41L9 12l4.59 4.6L15 15.18L11.82 12L15 8.82M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14Z" />
                                </svg>

                                <div id="slider" class="flex items-center justify-center">
                                    @foreach ($productImage as $key => $img)
                                        <a href="{{ asset('uploads/' . $img->images) }}" data-fancybox="gallery"
                                            data-rotation="0" target="_blank">
                                            <img class="thumbnail aspect-square"
                                                src="{{ asset('uploads/' . $img->images) }}">
                                        </a>
                                    @endforeach
                                </div>

                                <svg id="slideRight" class="arrow right-arrow " xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M10.41 7.41L15 12l-4.59 4.6L9 15.18L12.18 12L9 8.82M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Z" />
                                </svg>
                            </div>
                        @endif
                    </div>
                </div>

                <div s_productId={{ $product->id }} class=" ">
                    <div class="  text-gray-400 py-5">Home/</div>
                    <div class="text-5xl font-semibold ">{{ $product->product_name }}</div>
                    <div class="text-2xl  text-[#F1612D] py-5">
                        Rs. <span id="price">{{ $product->product_price }}
                        </span>
                    </div>

                    <form class="add-to-cart" method="POST" action="{{ route('cart.store') }} ">
                        @csrf
                        <input type="hidden" name="selectedAttributes" id="selectedAttributesInput" value="">
                        @php
                            $attr = [];
                        @endphp
                        @if (!$attributeItems->isEmpty())
                            <div>
                                <div class="mt-4 ">
                                    <label for="attribute_id"
                                        class="block mb-2 text-sm flex flex-col font-bold text-gray-900 ">Attributes
                                    </label>
                                    @foreach ($attributeItems as $attributegroup)
                                        {{ $attributegroup->attribute_group_name }}
                                        @php
                                            $attributes = showAttributes(
                                                $attributegroup->attribute_group_id,
                                                $product->id,
                                            );
                                        @endphp
                                        <div class="flex flex-wrap gap-4">
                                            @foreach ($attributes as $key => $attributeitem)
                                                @php
                                                    $attr[$attributegroup->attribute_group_id] = $attributes[0]->id;
                                                @endphp
                                                @if ($attributegroup->attribute_group_name == 'Color')
                                                    <div class="my-2">
                                                        <input type="radio" onclick="selectAtrribute(this)"
                                                            id="{{ $attributeitem->attribute_name }}"
                                                            name="{{ $attributegroup->attribute_group_id }}"
                                                            value="{{ $attributeitem->id }}" class="hidden peer "
                                                            required @if ($key === 0) checked @endif />
                                                        <label for="{{ $attributeitem->attribute_name }}"
                                                            class="inline-flex items-center justify-between w-full p-1 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-black peer-checked:text-black hover:text-gray-600 hover-bg-gray-100">
                                                            <div class="block rounded-full">
                                                                <div
                                                                    class="text-black bg-{{ strtolower($attributeitem->attribute_name) === 'black' || strtolower($attributeitem->attribute_name) === 'white' ? strtolower($attributeitem->attribute_name) : strtolower($attributeitem->attribute_name) . '-500' }} rounded-full border w-6 h-6 mt-1">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @else
                                                    <div class="my-2">
                                                        <input type="radio" id="{{ $attributeitem->attribute_name }}"
                                                            onclick="selectAtrribute(this)"
                                                            name="{{ $attributegroup->attribute_group_id }}"
                                                            value="{{ $attributeitem->id }}" {{-- value="{{ $attributeitem->id }}" --}}
                                                            class="hidden peer " required
                                                            @if ($key === 0) checked @endif />


                                                        <label for="{{ $attributeitem->attribute_name }}"
                                                            class="inline-flex items-center justify-between w-full p-1 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-black peer-checked:text-black hover:text-gray-600 hover-bg-gray-100">
                                                            <div class="block rounded-full">
                                                                <div class="px-2 py-1 text-black text-center">
                                                                    {{ $attributeitem->attribute_name }}
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    @endforeach
                                    <input type="hidden" id="myInput" name="myattributes" value="" />
                                    @php
                                        $jsonString = json_encode($attr);
                                    @endphp
                                    <script>
                                        let inputElement = document.getElementById('myInput');
                                        let atr = {!! $jsonString !!};
                                        inputElement.value = JSON.stringify(atr);
                                        console.log(atr);

                                        function selectAtrribute(e) {
                                            atr[e.name] = e.value;
                                            inputElement.value = JSON.stringify(atr);
                                            console.log(atr);
                                            console.log(e.value);
                                        }
                                    </script>
                                </div>
                            </div>
                        @endif
                        <div class="flex flex-wrap  gap-2 items-center">
                            <div class="flex flex-wrap gap-3">
                                <div class="flex border justify-center items-center font-medium rounded-md">
                                    <span
                                        class="text-center pt-2 border-r w-8 h-full cursor-pointer hover:bg-[#529aca] hover:text-white focus:outline-none"
                                        onclick="decrementQuantity()">-</span>
                                    <div class="border-r flex justify-center items-center h-full w-9 quantity-counter">1
                                    </div>

                                    <input type="hidden" value="{{ $product->id }}" name="product_id" />
                                    <input type="hidden" value="1" name="quantity" id="quantity" />


                                    <span
                                        class="text-center pt-2 border-l w-8 h-full cursor-pointer hover:bg-[#529aca] hover:text-white focus:outline-none"
                                        onclick="incrementQuantity()">+</span>
                                </div>
                                <input type="hidden" name="sumprice" value="{{ $product->product_price }}"
                                    id="alltotalPrice" />
                                {{-- @if (Auth::guard('customers')->user()) --}}
                                {{-- <a href="{{ route('cart') }}"> --}}

                                <button class="font-medium bg-orange-500 text-white py-2 px-3 rounded-md">ADD
                                    TO CART</button>
                            </div>
                            <div class="tooltip  gap-3 pt-5">
                                <div wishlistproductId="{{ $product->id }}"
                                    class="product-wishlist cursor-pointer flex justify-between font-medium border bg-orange-500 text-white py-2 px-3 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-heart-filled" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z"
                                            stroke-width="0" fill="currentColor"></path>
                                    </svg>
                                    <span class="max-md:block hidden ">Add to wishlist</span>
                                </div>
                                <span class="tooltiptext max-md:hidden block ">Add to wishlist</span>
                            </div>
                        </div>
                    </form>
                    <div class="py-4">Total: <span id="totalQuantity">1</span> Quantity of MRP: <span
                            id="totalPrice">{{ $product->product_price }}</span></div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.openModal').on('click', function(e) {
                        $('#interestModal').removeClass('invisible');
                    });
                    $('.closeModal').on('click', function(e) {
                        $('#interestModal').addClass('invisible');
                    });
                });
            </script>
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
            </script>
            <div class="">
                <div class="text-xl text-[#89BA46] py-5 font-medium pb-5 flex gap-10">
                    <div class=" cursor-pointer text-[#000] " id="description">Description</div>
                </div>

                <div class="border px-5  overflow-x-scroll py-5 rounded-lg bg-white content " id="descriptionContent">
                    <div class="mylist">{!! $product->description !!}</div>
                    {{-- <p class="text-lg py-2">There are no reviews yet.</p> --}}
                </div>

            </div>
            @if ($product->video)
                <div class="text-[#000] text-xl  mt-5 font-semibold">
                    Product Video
                </div>
                <div class="mt-5 items-center flex justify-center">
                    <video width="600" height="500" controls>
                        <source src="{{ asset('uploads/' . $product->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endif
        </div>
    </div>
    <script type="text/javascript">
        let thumbnails = document.getElementsByClassName('thumbnail')
        let activeImages = document.getElementsByClassName('active')

        for (let i = 0; i < thumbnails.length; i++) {
            thumbnails[i].addEventListener('mouseover', function() {
                console.log(activeImages)
                if (activeImages.length > 0) {
                    activeImages[0].classList.remove('active')
                }
                this.classList.add('active')
                document.getElementById('featured').src = this.src
                document.getElementById('gallarylink').href = this.src

            })
        }

        let buttonRight = document.getElementById('slideRight')
        let buttonLeft = document.getElementById('slideLeft')

        buttonLeft.addEventListener('click', function() {
            document.getElementById('slider').scrollLeft -= 180
        })

        buttonRight.addEventListener('click', function() {
            document.getElementById('slider').scrollLeft += 180
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-fancybox="gallery"]').fancybox({
                loop: true,
                buttons: [
                    "zoom",
                    // "share",
                    "rotate",
                    "slideShow",
                    "fullScreen",
                    "thumbs",
                    "download",
                    "close"
                ],
                animationEffect: "zoom-in-out",
                transitionEffect: "zoom-in-out",

                thumbs: {
                    autoStart: true,
                    axis: "x"
                },
                beforeShow: function(instance, current) {
                    current.opts.rotation = $(current.opts.$orig).data('rotation') || 0;
                }

            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {

            loop: true,
            autoplay: {
                delay: 5000,

            },

            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },

        });
    </script>
@endsection
