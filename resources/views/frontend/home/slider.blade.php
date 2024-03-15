<section class="bg-gray-100 py-8 relative z-10 px-20 max-sm:px-0">
    <div class="container mx-auto pb-10">
        <h2 class="text-3xl font-semibold mb-20 text-center  text-[#DA1212]">Our destinations</h2>
        <div class="owl-carousel owl-theme flex">

            {{-- @foreach ($destinations as $destination) --}}
                <div class="item relative">
                    <div class="h-52 w-52 rounded-full overflow-hidden mb-3 mx-auto"
                        style="background: url('{{ asset('images/banner/asus.png') }}') no-repeat center center / cover; background-color: transparent;">
                    </div>
                    <p class="text-center text-red-800 mt-2 font-medium text-xl">Name</p>
                </div>

            {{-- @endforeach --}}
        </div>

    </div>
</section>


{{-- <script>
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
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script> --}}
