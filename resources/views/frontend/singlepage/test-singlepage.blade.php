<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- <style>
    li>ul {
        transform: translatex(100%) scale(0);
    }

    ul {
        height: 70vh;
        z-index: 999999;
    }

    li:hover>ul {
        transform: translatex(100%) scale(1);
    }

    .group:hover>ul {
        transform-origin: top right;
        transform: translatex(100%) scale(1);
    }

    .swiper-pagination-bullet {
        width: 10px !important;
        height: 2px !important;
        background-color: #ffffff !important;
        opacity: 0.5 !important;
        transition: opacity 0.3s !important;
    }

    .swiper-pagination-bullet-active {
        opacity: 1 !important;
    }

    .slider {
        overflow: hidden;
    }

    .swiper-wrapper {
        transition-timing-function: ease-in-out;
    }
</style> --}}

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

    /* #slider::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);

    }

    #slider::-webkit-scrollbar-thumb {


        outline: 1px solid slategrey;
        border-radius: 100px;

    }

    #slider::-webkit-scrollbar-thumb:hover {
        width: 20px;

    } */

    .arrow {
        width: 30px;
        height: 30px;
        cursor: pointer;
        transition: .3s;
    }

    /* .arrow:hover {
        opacity: .5;
        width: 35px;
        height: 35px;
    } */
</style>

<div class="">
    <div class="container">
        {{-- @include('frontend.layouts.menunav') --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
            <div class="p-4 bg-white shadow ">
                <a id="gallarylink" href="{{ asset('uploads/' . $product->featured_image) }}" data-fancybox="gallery" data-rotation="0"
                    target="_blank" class="block  w-full">
                    <img id="featured" src="{{ asset('uploads/' . $product->featured_image) }}"
                        class="w-full h-auto sm:h-[60vh]  hover:text-black rounded-t-xl object-contain">
                </a>

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
                                    {{-- <a href="{{ asset('images/investlogo.png') }}" data-fancybox="gallery" data-rotation="0"
                                    target="_blank">
                                    <img class="thumbnail aspect-square" src="{{ asset('images/investlogo.png') }}">
                                </a> --}}
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


            <div class=" ">
                <div class="  text-gray-400 py-5">Home/</div>
                <div class="text-5xl font-semibold ">{{ $product->product_name }}</div>
                <div class="text-2xl  text-[#F1612D] py-5">Rs. <span id="price">{{ $product->product_price }}</span>
                </div>
                <form action="{{ route('cart') }}" method="POST">
                    @csrf
                    <div class="flex gap-3 pt-5">
                        <div class="flex border justify-center items-center font-medium rounded-md">
                            <span
                                class="text-center pt-2 border-r w-10 h-full cursor-pointer hover:bg-[#529aca] hover:text-white focus:outline-none"
                                onclick="decrementQuantity()">-</span>
                            <div class="border-r flex justify-center items-center h-full w-10 quantity-counter">1</div>
                            {{-- @if (Auth::guard('customers')->user()) --}}

                            {{-- <input type="hidden" value="{{ Auth::guard('customers')->user()->id }}" name="user_id"> --}}
                            {{-- @endif --}}
                            <input type="hidden" value="{{-- {{ $singleProduct->id }} --}}" name="product_id">
                            <input type="hidden" value="1" name="quantity" id="quantity">
                            <span
                                class="text-center pt-2 border-l w-10 h-full cursor-pointer hover:bg-[#529aca] hover:text-white focus:outline-none"
                                onclick="incrementQuantity()">+</span>
                        </div>
                        {{-- @if (Auth::guard('customers')->user()) --}}
                        {{-- <a href="{{ route('cart') }}"> --}}

                        <button class="font-medium bg-[#0f577d] text-white py-2 px-3 rounded-md">ADD
                            TO
                            CART</button>
                        {{-- </a> --}}
                        {{-- <button type="submit" class="font-medium bg-[#0f577d] text-white py-2 px-3 rounded-md">ADD
                                TO
                                CART</button> --}}
                        {{-- @else
                        <span
                            class="font-medium bg-[#6B9E41] text-white py-2 px-3 hover:cursor-pointer rounded-md openModal">ADD
                            TO
                            CART</span>
                        @endif --}}


                        <a href="" class="tooltip">
                            <div class="font-medium border bg-[#0f577d] text-white py-2 px-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-heart-filled" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z"
                                        stroke-width="0" fill="currentColor"></path>
                                </svg>
                            </div>
                            <span class="tooltiptext">Add to wishlist</span>
                        </a>
                    </div>
                </form>
                <div class="py-4">Total: <span id="totalQuantity">1</span> Quantity of MRP: <span
                        id="totalPrice">{{ $product->product_price }}</span></div>
            </div>

        </div>








        <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true" id="interestModal">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all w-[80%] sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">

                    <div id="logins" class="">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="pb-8 flex justify-between">
                                <div>
                                    <h1 class="text-xl font-semibold text-[#6B9E41]">Welcome, Please Login to
                                        continue..
                                    </h1>
                                </div>
                                <div class=" closeModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-x  text-gray-600 hover:bg-slate-300 rounded"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>


                            <form action="{{-- {{ route('user.login') }} --}}" method="POST">
                                {{-- @include('message.index') --}}
                                @csrf
                                <div class=""><label for=""
                                        class="text-sm font-medium text-gray-700">Email</label> <br>
                                    <input type="email" name="email"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm">
                                    @error('email')
                                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-5"> <label for=""
                                        class="text-sm font-medium text-gray-700">Password</label> <br>
                                    <input type="password" name="password"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm">

                                    @error('password')
                                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="loginFrom" value="popupLogin">
                                <div class="flex justify-between mt-5">
                                    <div class="flex gap-2">
                                        <input type="checkbox">
                                        <span class="text-sm text-gray-700 ">Remember Me</span>
                                    </div>
                                    <a href="">
                                        <div class="font-medium text-[#F1612D] ">Forgot Password</div>
                                    </a>
                                </div>
                                <button
                                    class=" mt-5  rounded-md border border-[#F1612D] bg-[#F1612D] py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#F1612D] w-full focus:outline-none focus:ring active:text-blue-500">
                                    Login
                                </button>
                                <div class="text-gray-700 mt-5">Don't have an account ? <span id="signupbtn"
                                        class="font-medium text-[#F1612D] underline hover:cursor-pointer">Register</span>.
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="signups" class="hidden">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                            <div class="pb-8 flex justify-between">
                                <div>
                                    <h1 class="text-xl font-semibold text-[#6B9E41]">Create your Account
                                    </h1>
                                </div>
                                <div class=" closeModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-x  text-gray-600 hover:bg-slate-300 rounded"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                            <form action="{{-- {{ route('user.register') }} --}} " method="POST" class=" grid grid-cols-6 gap-6">
                                {{-- @include('message.index') --}}
                                @csrf

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="FullName" class="block text-sm font-medium text-gray-700">
                                        Full Name
                                    </label>

                                    <input type="text" id="FullName" name="name"
                                        class="mt-1  p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />

                                    @error('name')
                                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>



                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Email
                                    </label>

                                    <input type="email" id="email" name="email"
                                        class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                </div>



                                <div class="col-span-6 sm:col-span-3">
                                    <label for="Phonenumber" class="block text-sm font-medium text-gray-700">
                                        Phone Number
                                    </label>

                                    <input type="number" id="Phonenumber" name="phone"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="Address" class="block text-sm font-medium text-gray-700">
                                        Address
                                    </label>

                                    <input type="text" id="Address" name="address"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="Password" class="block text-sm font-medium text-gray-700">
                                        Password
                                    </label>

                                    <input type="password" id="Password" name="password"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                                        Password Confirmation
                                    </label>

                                    <input type="password" id="Passwordfirmation" name="password_confirmation"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                </div>

                                <div class="col-span-6">
                                    <label for="MarketingAccept" class="flex gap-2">
                                        <input type="checkbox" id="MarketingAccept" name="marketing_accept"
                                            class=" py-2 border rounded-md border-gray-200 bg-white shadow-sm" />

                                        <span class="text-sm text-gray-700">
                                            I agree to terms and conditions
                                        </span>
                                    </label>
                                </div>



                                <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                                    <button
                                        class="inline-block shrink-0 rounded-md border border-[#F1612D] bg-[#F1612D] px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#F1612D] focus:outline-none focus:ring active:text-blue-500">
                                        Create an account
                                    </button>

                                    <p class="mt-4  text-gray-500 sm:mt-0">
                                        Already a member?
                                        <span id="loginbtn"
                                            class="font-medium text-[#F1612D] underline hover:cursor-pointer">Log
                                            in</span>.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            let logins = document.getElementById('logins')
            let signups = document.getElementById('signups')

            let loginbtn = document.getElementById('loginbtn')
            let signupbtn = document.getElementById('signupbtn')

            loginbtn.addEventListener('click', function() {
                logins.classList.remove("hidden")
                signups.classList.add("hidden")
            })

            signupbtn.addEventListener('click', function() {
                logins.classList.add("hidden")
                signups.classList.remove("hidden")
            })
        </script>
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
                let PriceElement = document.getElementById('price').textContent;
                let quantityCounter = document.querySelector('.quantity-counter').textContent;
                totalQuantityElement.textContent = quantityCounter;
                totalPriceElement.textContent = parseInt(quantityCounter) * parseInt(PriceElement);
            }
        </script>


        <div class="">
            <div class="text-xl text-[#89BA46] py-5 font-medium pb-5 flex gap-10">
                <div class=" cursor-pointer text-[#0f577d]" id="description">Description</div>
                {{-- <div class="tab cursor-pointer" id="reviews">Reviews(0)</div> --}}


            </div>

            <div class="border px-5 py-10 rounded-lg bg-white content " id="descriptionContent">
                <div class="">{!! $product->description !!}</div>
                {{-- <p class="text-lg py-2">There are no reviews yet.</p> --}}

            </div>



            <div class="shadow-lg px-5 py-10 rounded-lg bg-white content hidden" id="reviewsContent">

                <div class=" font-semibold text-3xl text-[#6B9E41]">Reviews</div>
                <p class="text-lg py-2">There are no reviews yet.</p>
                <div class="pb-4">
                    <p class="font-medium text-lg">Your rating *</p>
                    <div class="">
                        <span class="material-symbols-outlined text-xl text-[#F1612D]">
                            grade
                        </span>
                        <span class="material-symbols-outlined text-xl text-[#F1612D]">
                            grade
                        </span> <span class="material-symbols-outlined text-xl text-[#F1612D]">
                            grade
                        </span> <span class="material-symbols-outlined text-xl text-[#F1612D]">
                            grade
                        </span> <span class="material-symbols-outlined text-xl text-[#F1612D]">
                            grade
                        </span>

                    </div>
                </div>
                <form action="">
                    <div class=""> <label for="" class="font-medium text-lg">Your review *</label><br>
                        <textarea name="" id="" cols="30" rows="3"
                            class="w-full border rounded-lg mt-1 outline-none px-3 py-2" required></textarea>
                    </div>
                    <div class="mt-2">
                        <div class=""> <label for="" class="font-medium text-lg">Name *</label><br>
                            <input type="text" class="border w-full py-2 px-3 rounded-lg  mt-1 outline-none"
                                required />
                        </div>
                        <div class="mt-2">
                            <div class=""> <label for="" class="font-medium text-lg">Email
                                    *</label><br>
                                <input type="email" class="border w-full py-2 px-3 rounded-lg  mt-1 outline-none"
                                    required>
                            </div>
                            <div class="flex mt-2 gap-2">
                                <input type="checkbox">
                                <label for="" class="font-medium text-lg"> Save my name, email, and website in
                                    this
                                    browser for the next time I comment.</label>
                            </div>
                            <button
                                class="font-medium bg-[#F1612D] mt-5 text-white px-4 py-2 rounded-sm">Submit</button>
                        </div>
                    </div>

                </form>

            </div>




            <script>
                const reviewtab = document.getElementById("reviews");
                const descriptiontab = document.getElementById("description");
                const reviewcontent = document.getElementById("reviewsContent");
                const descriptioncontent = document.getElementById("descriptionContent");

                reviewtab.addEventListener("click", function() {
                    reviewcontent.classList.remove("hidden")
                    descriptioncontent.classList.add("hidden")
                    descriptiontab.classList.remove("text-[#F1612D]")
                    reviewtab.classList.add("text-[#F1612D]")



                })
                descriptiontab.addEventListener("click", function() {
                    reviewcontent.classList.add("hidden")
                    descriptioncontent.classList.remove("hidden")
                    reviewtab.classList.remove("text-[#F1612D]")
                    descriptiontab.classList.add("text-[#F1612D]")

                })
            </script>

        </div>







    </div>

</div>
{{-- <div>
    <h2 class="text-2xl font-semibold py-4">Similar Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach (range(1, 4) as $index)
            <a href="{{ route('product.singlepage') }}">
                @include('frontend.components.productcomponent', ['title' => 'Featured Products'])
            </a>
        @endforeach
    </div>
</div> --}}

<div class="">
    {{-- <x-product-section categorytitle="Related products" /> --}}
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
            buttons: [
                "zoom",
                "rotate",
                "slideShow",
                "fullScreen",
                "thumbs",
                "close"
            ],

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












{{-- <div class="">
    <x-singlepage
    productname="Apple"
    price="250"
    singleProduct->featured_image="apple.jpg"

    />
</div> --}}
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
