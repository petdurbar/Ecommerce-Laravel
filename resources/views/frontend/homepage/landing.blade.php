<div class="swiper h-full w-full relative ">
    <div class="swiper-wrapper ">
        @foreach ($slider as $key => $banner)
            <div class="swiper-slide object-cover">
                <img src="{{ asset('uploads/' . $banner->banner_image) }}" alt="swiper-image"
                    class="w-full object-cover h-full">
            </div>
        @endforeach
    </div>
</div>
