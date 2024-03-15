<!-- Small screens -->
<div class="swiper landingSwiper md:h-[55vh] max-lg:block lg:hidden">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($mobileBanners as $mobileBanner)
            <div class="swiper-slide">
                <img src="{{ asset('images/banner/' . $mobileBanner->banner_image) }}" alt=""
                    class="h-full w-full object-full">
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>

<!-- Large screens -->
<div class="swiper landingSwiper h-[69vh] max-lg:hidden lg:block">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($desktopbanners as $desktopBanner)
            <a href="{{ $desktopBanner->banner_link }}" class="swiper-slide">
                <img src="{{ asset('images/banner/' . $desktopBanner->banner_image) }}" alt=""
                    class="h-full w-full object-fit">
            </a>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>


<!-- Small screens -->
{{-- <div class="relative swiper landingSwiper md:h-[55vh] max-lg:block lg:hidden">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($mobileBanners as $mobileBanner)
            <div class="swiper-slide relative">
                <div class="h-full w-full bg-black bg-opacity-50 absolute inset-0"></div>
                <img src="{{ asset('images/banner/' . $mobileBanner->banner_image) }}" alt="" class="h-full w-full object-full">
                <!-- Text -->
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span class="text-white text-xl font-bold mb-4">Hello World</span>
                    <!-- Button -->
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Explore</button>
                </div>
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div> --}}


<!-- Large screens -->
{{-- <div class="relative swiper landingSwiper h-[69vh] max-lg:hidden lg:block">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($desktopbanners as $desktopBanner)
            <div class="swiper-slide relative">
                <div class="h-full w-full bg-black bg-opacity-50 absolute inset-0"></div>
                <img src="{{ asset('images/banner/' . $desktopBanner->banner_image) }}" alt="" class="h-full w-full object-full">
                <!-- Text -->
                <div class="absolute inset-0  flex flex-col items-center justify-center">
                    <span class="text-white text-xl font-bold mb-4">Hello World</span>
                    <!-- Button -->
                    <a href="{{ $desktopBanner->banner_link }}">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Explore More</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div> --}}

