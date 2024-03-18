<!DOCTYPE html>
<html lang="en">

<head>

    @php
        $segment = request()->segment(1);
        if (Request::segment(1)) {
            $meta = getMetas(Request::segment(1), Request::segment(2));
        } else {
            $meta = (object) [
                'title' => 'Home',
                'description' => 'Homepage of investfornepal',
                'featured_image' => 'tagphoto.PNG',
            ];
        }
    @endphp
    @if ($meta)
        <link rel="canonical" href="{{ 'https://investfornepal.com/' }}">
        {{-- og --}}
        <meta name="og:title" content="{{ $meta->title }}" />
        <meta name="og:description" content="{{ Str::limit(strip_tags($meta->description, 50)) }}" />
        <meta property="og:image" content="{{ 'https://investfornepal.com/public/uploads/' . $meta->featured_image }}" />
        <meta name="title" content="{{ $meta->title }}" />
        <meta name="description" content="{{ Str::limit(strip_tags($meta->description, 50)) }}" />
        <meta property="twitter:url" content="{{ 'https://investfornepal.com/' }}" />
        <meta property="twitter:title" content="{{ $meta->title }}" />
        <meta property="twitter:description" content="{{ Str::limit(strip_tags($meta->description, 50)) }}" />
        <meta property="twitter:image"
            content="{{ 'https://investfornepal.com/public/uploads/' . $meta->featured_image }}">
        <title>
            {{ $meta->title . ' | PetDurbar' }}
        </title>
    @endif


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('uploads/favicon.ico') }}">
    <style>
        .mylist ol li {
            display: block;
            list-style-type: decimal;
        }

        .mylist ol {
            display: block;
            list-style-type: decimal;
        }

        .mylist ul li {
            display: block;
            list-style-type: disc;
        }

        .mylist ul {
            display: block;
            list-style-type: disc;
        }
    </style>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .landing li>ul {
            transform: translatex(100%) scale(0);
        }

        .landing ul {
            height: 70vh;
            z-index: 9
        }

        .landing li:hover>ul {
            transform: translatex(100%) scale(1);
        }

        .landing .group:hover>ul {
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
    </style>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <style>
        /* Custom scrollbar styles */

        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #fff;
            border-radius: 30px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #ff782c;
        }

        ::-webkit-scrollbar-track {
            background-color: #ff782c;
        }
    </style>

    {{-- autocomplete --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const searchInput = $('#search');
            const resultsList = $('#results');
            searchInput.on('input', function() {
                let searchTerm = $(this).val();

                $.ajax({
                    url: "{{ route('autocomplete') }}",
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        term: searchTerm
                    }, // Use 'term' as the parameter name
                    success: function(data) {
                        resultsList.empty();
                        if (data.length > 0) {
                            data.forEach(function(item) {
                                resultsList.append(`
                            <li class="result-item p-2" data-product-slug="${item.product_slug}">${item.product_name}</li>
                            `);
                            });
                            // Show the results
                            resultsList.show();
                        } else {
                            // Display a "No product found" message
                            resultsList.append(
                                '<li class="result-item p-2">No product found</li>');
                            resultsList.show();
                        }
                    }
                });
                if (searchTerm === '') {
                    resultsList.hide();
                }
            });
            // Handle item selection (redirect to the product page)
            resultsList.on('click', '.result-item', function() {
                const productSlug = $(this).data('product-slug');
                if (productSlug) {
                    window.location.href = `/product/${productSlug}`; // Update the URL structure
                }
            });
            // Use mousedown event on document to detect clicks outside the input and the dropdown
            $(document).on('mousedown', function(event) {
                // Check if the click target is not the search input or the results list
                if (!searchInput.is(event.target) && !resultsList.is(event.target) && resultsList.has(event
                        .target).length === 0) {
                    resultsList.hide();
                }
            });
        });
    </script>

    <style>
        #mbresults {
            display: none;
            position: absolute;
            height: auto;
            max-height: 150px;
            width: 100%;
            overflow-y: auto;
            z-index: 999;

        }

        #results {
            display: none;
            position: absolute;
            height: auto;
            max-height: 150px;
            width: 100%;
            overflow-y: auto;
            z-index: 999;

        }

        .result-item {
            padding: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .result-item:hover {
            background-color: #F2F2F2;
        }
    </style>

    {{-- for mobile view search --}}
    <script>
        $(document).ready(function() {
            const searchInput = $('#mbsearch');
            const resultsList = $('#mbresults');
            searchInput.on('input', function() {
                let searchTerm = $(this).val();

                $.ajax({
                    url: "{{ route('autocomplete') }}",
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        term: searchTerm
                    }, // Use 'term' as the parameter name
                    success: function(data) {
                        resultsList.empty();
                        if (data.length > 0) {
                            data.forEach(function(item) {
                                resultsList.append(`
                        <li class="result-item p-2" data-product-slug="${item.product_slug}">${item.product_name}</li>
                        `);
                            });
                            // Show the results
                            resultsList.show();
                        } else {
                            // Display a "No product found" message
                            resultsList.append(
                                '<li class="result-item p-2">No product found</li>');
                            resultsList.show();
                        }
                    }
                });
                if (searchTerm === '') {
                    resultsList.hide();
                }
            });
            // Handle item selection (redirect to the product page)
            resultsList.on('click', '.result-item', function() {
                const productSlug = $(this).data('product-slug');
                if (productSlug) {
                    window.location.href = `/product/${productSlug}`; // Update the URL structure
                }
            });
            // Use mousedown event on document to detect clicks outside the input and the dropdown
            $(document).on('mousedown', function(event) {
                // Check if the click target is not the search input or the results list
                if (!searchInput.is(event.target) && !resultsList.is(event.target) && resultsList.has(event
                        .target).length === 0) {
                    resultsList.hide();
                }
            });
        });
    </script>


</head>
{{-- @dd(getPhoneNumber()) --}}

<body>
    <div class=" w-14 z-[999] fixed bottom-0 right-0  m-5">
        <a href="https://wa.me/{{ getPhoneNumber() }}" target="_blank">
            @include('frontend._layout.whatsapp')
        </a>
    </div>
    <div class="">
        <div class="sticky top-0 z-[88]">
            @include('frontend._layout.navbar')


            @include('frontend._layout._linknav')

            {{-- @include('frontend._layout.menunav') --}}


        </div>
        <div class="">
            <div class="main-body  mb-10">
                @yield('body')
            </div>
        </div>
        <div class="mt-14 border">
            @include('frontend._layout._footer')
        </div>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-bottom-right",
    };

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


{{-- scripts --}}
<script>
    // for add cart from singlepage
    $('.add-to-cart').on('submit', function(e) {
        e.preventDefault();



        const formData = $(this).serialize();
        const url = "{{ route('cart.store') }}";

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            dataType: 'json',
            success: function(data) {
                console.log("Success");
                toastr.success("Product added to cart");
                $('#cartCount').html(data);
            },
            error: function(xhr, status, error) {
                console.log("Error", error);
                toastr.error("An error occurred while adding the product to the cart.");
            }
        });
    });





    // for add cart
    $('.alert-button').click(function(e) {
        e.preventDefault();


        var productId = $(this).attr('productId');
        $.ajax({
            type: 'GET',
            url: "{{ url('/addCart') }}/" + productId,
            success: function(data) {
                toastr.success("Product added to cart");

                $('#cartCount').html(data)
            }
        });
    });


    //add quantity
    $(document).on('click', '.add-quantity', function(e) {
        e.preventDefault();
        var productIds = $(this).attr('value');
        $.ajax({
            type: 'GET',
            url: "{{ url('/countAdd') }}/" + productIds,
            success: function(data) {
                $('#cartDatas').html(data)
            }
        });
    });

    //sub quantity
    $(document).on('click', '.sub-quantity', function(e) {
        e.preventDefault();
        var productIds = $(this).attr('values');
        $.ajax({
            type: 'GET',
            url: "{{ url('/subCount') }}/" + productIds,
            success: function(data) {
                $('#cartDatas').html(data)
            }
        });
    });

    // clear cart
    $(document).on('click', '.clearall', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: "{{ url('/clearallcart') }}",
            success: function(data) {
                $('#cartDatas').html(data)
                $('#cartCount').html($('#data').val())
                toastr.success("Cart Clear");

            }
        });
    });
    // clear single
    $(document).on('click', '.clearSingle', function(e) {
        console.log("clear")
        e.preventDefault();
        var productIds = $(this).attr('singleId');
        $.ajax({
            type: 'GET',
            url: "{{ url('/clearcart') }}/" + productIds,
            success: function(data) {
                $('#cartDatas').html(data)
                $('#cartCount').html($('#data').val())
                toastr.success("Product removed from cart");


            }
        });
    });

    // for add wishlist
    $('.product-wishlist').click(function(e) {
        e.preventDefault();
        var productId = $(this).attr('wishlistproductId');
        var svgIcon = $(this).find('.wishlist-icon');
        console.log("pro", productId)
        $.ajax({
            type: 'GET',
            url: "{{ url('/addwishlist') }}/" + productId,
            success: function(response) {
                console.log(response)
                if (response.requiresAuth) {
                    toastr.success(response.message);

                    // location.href = "{{ route('login') }}";
                } else if (response.cartsaved) {
                    toastr.success(response.message);
                } else {

                    toastr.success("Product added to wishlist");
                    // svgIcon.html(
                    //     '<svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 512 512">' +
                    //     '<path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" style="fill: #0f577d;" />' +
                    //     '</svg>'
                    // );

                    $('#wishlists').html(response)
                }
            }
        });
    });
    // for remove wishlist
    $('.remove-product-wishlist').click(function(e) {
        e.preventDefault();
        var productId = $(this).attr('removewishlistproductId');
        // var svgIcon = $(this).find('.wishlist-icon');
        console.log("pro", productId)
        $.ajax({
            type: 'GET',
            url: "{{ url('/removewishlist') }}/" + productId,
            success: function(response) {
                console.log(response)

                toastr.success("Product reomve from wishlist");
                // svgIcon.html(
                //     '<svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 512 512">' +
                //     '<path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" style="fill: #0f577d;" />' +
                //     '</svg>'
                // );

                $('#wishlists').html(response)
            }
        });
    });
</script>


</html>
