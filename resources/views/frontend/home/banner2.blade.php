@if($secondbanners->count() > 1)
        <div class="{{ $secondbanners[1]->mobileview ? '' : 'hidden md:block' }}">
        <a href="{{ $secondbanners[1]->banner_link }}">
            <img src="{{ asset('images/banner/' . $secondbanners[1]->banner_image) }}" class="md:h-[65vh] sm:h-[50vh] object-cover w-full" alt="">
        </a>
    </div>
@endif


{{-- @if($secondbanners->count() > 0)
    <div class="{{ $secondbanners[0]->mobileview ? '' : 'hidden md:block' }}" style="height: 500px;">
        <a href="{{ $secondbanners[0]->banner_link }}">
            <img src="{{ asset('images/banner/' . $secondbanners[1]->banner_image) }}" class="w-full h-full object-cover" style="object-fit: cover;" alt="">
        </a>
    </div>
@endif --}}
