<!DOCTYPE html>
<html lang="en">

<head>

    <title>SajiloMobile</title>
    {{-- <link rel="icon" href="{{ asset('logos/Logo.png') }}" type="image/x-icon"> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    {{-- tostr --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <style>
        [x-cloak] {
            display: none;
        }

        /* @font-face {
            font-family: 'Poppins';
            src: url('/fonts/your-font-file.woff') format('woff');

            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'YourFontName', sans-serif;

        } */
        body {
            font-family: "Poppins", sans-serif;
        }


        .swiper-pagination-bullet {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50%;
            background-color: #fff !important;
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

        #lowernav-container {
            background: #fff;
        }

        .sticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;

        }

        label:after {
            content: attr(data-after);
            color: red
        }

        .xscroll::-webkit-scrollbar {
            height: 10px !important;
        }

        .xscroll::-webkit-scrollbar-track {
            background: #999999 !important;
            border-radius: 8px !important;
        }

        .xscroll::-webkit-scrollbar-thumb {
            background: #1b1b1b !important;
            border-radius: 8px !important;
        }

        .carttable {
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        .carttable td {
            border: none;
            border-bottom: 1px solid #d3d3d3;
            font-size: 1rem;
        }

        .carttable th {
            border-bottom: 1px solid #d3d3d3;
            padding: 0.5rem 0.2rem;
            font-size: 1rem;
        }
    </style>

    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.tinybullet',
            branding: false,
            plugins: [
                "lists",
            ],
            toolbar: "undo redo | bullist numlist",
            font_formats: "Segoe UI=Segoe UI;",
            plugins: 'lists',
            fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 96px",

        });
    </script>

    <script type="text/javascript">
        tinymce.init({
            selector: '.tinymce',
            branding: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen", "insertdatetime media table paste codesample",
                "mytoc"
            ],
            toolbar: "fullscreen code preview | tableofcontents | undo redo | bold italic underline strikethrough | fontselect styleselect fontsizeselect  forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | link image  | mytoc",
            font_formats: "Segoe UI=Segoe UI;",
            plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table mytoc',
            fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 96px",
            remove_script_host: false,
            paste_data_images: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function() {
                    var file = this.files[0];

                    // if (file) {
                    //     var maxSize = 2 * 1024 * 1024;
                    //     if (file.size > maxSize) {
                    //         alert('Selected image is too large. Please choose an image smaller than 2MB.');
                    //         return;
                    //     }
                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };
                // }

                input.click();
            },
            setup: function(editor) {
                editor.ui.registry.addButton('tableofcontents', {
                    text: 'Table of Contents',
                    onAction: function() {
                        const editorContent = editor.getContent();
                        const toc = generateToC(editorContent);
                        editor.insertContent(toc);
                    }
                });
                editor.on('Change', function(e) {
                    const editorContent = editor.getContent();
                    const toc = generateToC(editorContent);
                    // Insert the ToC into a desired location or update an existing ToC
                    // Here, I'm just showing a simple example. In a real app, you might have a more complex logic.
                    if (editorContent.includes('<div id="auto-toc">')) {
                        editor.setContent(editorContent.replace(/<div id="auto-toc">[\s\S]*?<\/div>/,
                            toc));
                    }
                });
            },
        });
    </script>



</head>

<body class="">

    @include('frontend.layouts.topnav')
    {{-- @include('frontend.layouts.midnav') --}}

    <div class="sticky z-[888] top-0">
         @include('frontend.layouts.navbar')</div>
    <div class="fixed bottom-0 right-0 p-4 z-[999]">
        @include('frontend.components.whatsapp')
    </div>

    <div class=" text-black ">
        @yield('main')
    </div>
    @include('frontend.layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        const swiper = new Swiper('.landingSwiper', {

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
        document.querySelector('.custom-button-prev').addEventListener('click', () => {
            swiper.slidePrev();
        });

        document.querySelector('.custom-button-next').addEventListener('click', () => {
            swiper.slideNext();
        });
    </script>
    {{-- add to cart --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        // for add cart
        $('.alert-button').click(function(e) {
            console.log("Add to Cart button clicked");
            // e.preventDefault();
            var productId = $(this).attr('productId');
            console.log(productId)
            $.ajax({
                type: 'GET',
                url: "{{ url('/addCart') }}/" + productId,

                success: function(data) {
                    if (data.requiresAuth) {

                        console.log(data.requiresAuth)
                        toastr.error(data.message);
                    } else {

                        toastr.success("Product added to cart");
                        $('#cartCount').html(data)
                        $('#Count').html(data)

                    }
                }
            });
        });
        //add quantity
        $(document).on('click', '.add-quantity', function(e) {
            e.preventDefault();
            var productIds = $(this).attr('value');
            console.log("object", productIds)
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
            console.log("uytrd")
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
                    $('#Count').html($('#data').val())

                    // toastr.success("Cart Clear");
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
                    $('#Count').html($('#data').val())

                    // toastr.success("Product removed from cart");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {


            $('.increment').on('click', function() {
                var quantityInput = $(this).siblings('.quantity-input');
                var newQuantity = parseInt(quantityInput.val()) + 1;
                quantityInput.val(newQuantity);
                updateCartItem($(this).closest('.cart-item'));
            });

            $('.decrement').on('click', function() {
                var quantityInput = $(this).siblings('.quantity-input');
                var newQuantity = parseInt(quantityInput.val()) - 1;

                if (newQuantity >= 1) {
                    quantityInput.val(newQuantity);
                    updateCartItem($(this).closest('.cart-item'));
                }
            });

            $('.quantity-input').on('change', function() {
                updateCartItem($(this).closest('.cart-item'));
            });

            function updateCartItem(cartItemElement) {
                var quantity = parseInt(cartItemElement.find('.quantity-input').val());
                var price = parseFloat(cartItemElement.find('.price').text());
                var subtotal = quantity * price;

                cartItemElement.find('.subtotal').text(subtotal);
                updateGrandTotal();
            }

            function updateGrandTotal() {
                var grandTotal = 0;
                $('.subtotal').each(function() {
                    grandTotal += parseFloat($(this).text());
                });
                $('.total-value').text(grandTotal);
                $('.grandTotal').text(grandTotal + 100);
            }
            $('.delete').on('click', function() {
                var cartItemElement = $(this).closest('.cart-item');
                var cartItemId = cartItemElement.data('cart-item-id');

                // Send an AJAX request to delete the item from the cart
                $.ajax({
                    url: '/delete-cart-item', // Replace with your actual route
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        cart_item_id: cartItemId
                    },
                    success: function(response) {
                        // Remove the cart item from the UI
                        cartItemElement.remove();
                        updateGrandTotal();
                    },
                    error: function(xhr) {
                        // Handle error if needed
                    }
                });
            });
        });
    </script>


    <script>
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-bottom-right",
        };


        $('.add-to-cart').on('submit', function(e) {
            console.log('catttttt')
            e.preventDefault();

            const formData = $(this).serialize();
            const url = "{{ route('cart.store') }}";

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                dataType: 'json',
                success: function(data) {

                    if (data.requiresAuth) {

                        console.log(data.requiresAuth)
                        toastr.error(data.message);
                    } else {

                        toastr.success("Product added to cart");
                        $('#cartCount').html(data)
                        $('#Count').html(data)

                    }

                }
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>

<!-- For Owl Carousel -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 5,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: true,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    });
</script>


</body>

</html>
