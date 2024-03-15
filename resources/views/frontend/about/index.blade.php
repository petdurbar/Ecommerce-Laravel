{{-- @extends('frontend.layouts.app')
@section('main')
    <section>
        <div class="relative w-full  lg:h-[70vh] max-lg:h-[40vh]">
            <div class="absolute w-full h-full bg-black opacity-10">
            </div>
            <img src="{{ asset('/uploads/' . $about->aboutherosection_image) }}" alt="Hero Section of About"
                class="w-full h-full object-contain">
            <div class="absolute top-20 px-20 max-xl:px-10 max-sm:px-5 max-lg:top-40">

                <p class="text-pink-600 pt-20 max-lg:pt-10 max-sm:pt-0 text-lg max-sm:text-xs"> KNOW MORE ABOUT US</p>
                <div class="text-8xl font-bold text-gray-600 max-lg:pt-10 max-sm:pt-0 max-lg:text-6xl max-sm:text-3xl">
                    About
                    <br> <span class="text-gray-800">S<span class="text-pink-600">a</span>jilo</span><span
                        class="text-gray-800">Mobile</span>
                </div>
                <div class="w-[50%] py-8 text-gray-600 max-lg:text-xs max-lg:py-2 max-sm:hidden">
                    {!! $about->aboutherosection_description !!}</div>
            </div>

        </div>
        <div class="py-10 ">
            <div class="bg-gray-100 px-20 py-5 max-lg:px-10 max-sm:px-5">
                <div class="px-10 max-sm:px-2 text-sm">
                    <p class="text-pink-600 text-3xl font-semibold text-center pt-5">What do <span
                            class="text-gray-800">Sajilo Mobile</span> Offer?</p> <br>
                    <img alt="House" src="{{ asset('/uploads/' . $about->aboutsecondsection_image) }}"
                        class="h-[250px] w-full object-contain" />
                    <div class="text-gray-600 max-sm:text-sm  py-10"> {!! $about->aboutsecondsection_description !!}</div>
                </div>
            </div>
        </div>
        
    </section>
@endsection --}}
@extends('frontend.layouts.app')

@section('main')
    <section>
        <div class="w-full h-[40vh] lg:h-[70vh] max-lg:h-[40vh] overflow-hidden">
            <img src="{{ asset('/uploads/' . $about->aboutherosection_image) }}" alt="Hero Section of About"
                class="w-full h-full object-cover">
        </div>

        <div class="py-12 bg-gray-100">
            <div class="container mx-auto px-8 md:px-10 max-sm:px-5 ">
              <div class="text-center">  <p class="text-pink-600 mb-6 max-lg:pt-10 max-sm:pt-0 text-xl font-semibold max-sm:text-xs"> KNOW MORE ABOUT US</p>
                <div class="text-5xl font-bold text-gray-600 max-lg:pt-10 max-sm:pt-0 max-lg:text-6xl max-sm:text-3xl">
                    About
                     <span class="text-gray-800">S<span class="text-pink-600">a</span>jilo</span><span
                        class="text-gray-800">Mobile</span>
                </div></div>
                <div class="text-gray-600 pt-5 max-sm:text-sm text-lg mb-6">
                    {!! $about->aboutherosection_description !!}
                </div>
                <p class="text-pink-600 text-3xl font-semibold mb-6">What do <span
                        class="text-gray-800">Sajilo Mobile</span> Offer?</p>
                <div class="flex flex-col md:flex-row items-center space-x-5 justify-center">
                    <div class="md:w-1/2 mb-6 md:mb-0">
                        <img alt="House" src="{{ asset('/uploads/' . $about->aboutsecondsection_image) }}"
                            class="w-full h-auto object-cover rounded-lg" />
                    </div>
                    <div class="md:w-1/2 text-gray-600 max-sm:text-sm text-lg">
                        <p>{!! $about->aboutsecondsection_description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
