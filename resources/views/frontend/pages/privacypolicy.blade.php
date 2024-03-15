@extends('frontend.layouts.app')
@section('main')
<section class="p-20 max-lg:px-10 max-md:px-5">
    <div class="py-14 max-sm:py-5 border p-8 max-sm:px-2 rounded-2xl ">
       {{-- @dd($privacy->description); --}}
   <div class="flex flex-col justify-center items-center pb-10"> <img src="{{ asset('logos/Logo.png') }}" class="w-40  " alt=""></div>

        {!!$privacy->description !!}

    </div>
    {{-- <div name="privacyeditor" id="privacyeditor" class="py-14 ">
        {!! $privacy->description!!}
    </div> --}}
</section>

@endsection
