@if($secondbanners->count() > 0)

        <div class="{{ $secondbanners[0]->mobileview ? '' : 'hidden md:block' }} ">
        <a href="{{ $secondbanners[0]->banner_link }}">
            <img src="{{ asset('images/banner/' . $secondbanners[0]->banner_image) }}" class="md:h-[55vh] sm:h-[50vh] object-cover w-full" alt="">
        </a>
    </div>
@endif

{{-- @if($secondbanners->count() > 0)
    <div class="{{ $secondbanners[0]->mobileview ? '' : 'hidden md:block' }}" style="height: 500px;">
        <a href="{{ $secondbanners[0]->banner_link }}">
            <img src="{{ asset('images/banner/' . $secondbanners[0]->banner_image) }}" class="w-full h-full object-cover" style="object-fit: cover;" alt="">
        </a>
    </div>
@endif --}}


{{-- @if($secondbanners->count() > 0)
    <div class="{{ $secondbanners[0]->mobileview ? '' : 'hidden md:block' }}">
        <a href="{{ $secondbanners[0]->banner_link }}">
            <img src="{{ asset('images/banner/' . $secondbanners[0]->banner_image) }}" class="" style="object-fit: cover;" alt="">
        </a>
    </div>
@endif --}}

