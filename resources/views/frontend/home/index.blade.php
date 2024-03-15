@extends('frontend.layouts.app')
@section('main')
{{-- @dd($products) --}}

@include('frontend.home.landing')
@include('frontend.home.category')

    @include('frontend.home.latestproduct')

    {{-- @include('frontend.home.needhelp') --}}
    @include('frontend.home.banner')
    {{-- @include('frontend.home.slider') --}}

    <section class="bg-gray-100 py-8 relative z-10 px-20 max-sm:px-0">
        <div class="container mx-auto pb-10">
            <h2 class="text-3xl font-semibold mb-20 text-center mt-5  ">Featured Brand</h2>
            <div class="owl-carousel owl-theme ">

                    <div class="item relative">
                        <div class="h-40 w-64 rounded-full overflow-hidden mb-3 mx-auto"
                            style="background: url('{{ asset('images/banner/2.png') }}') no-repeat center center / cover; background-color: transparent;">
                        </div>
                        {{-- <p class="text-center text-red-800 mt-2 font-medium text-xl">Apple</p> --}}

                    </div>

                    <div class="item relative">
                        <div class="h-40 w-62 rounded-full overflow-hidden mb-3 mx-auto"
                            style="background: url('{{ asset('images/banner/3.png') }}') no-repeat center center / cover; background-color: transparent;">
                        </div>
                        {{-- <p class="text-center text-red-800 mt-2 font-medium text-xl">Sony</p> --}}

                    </div>


                    <div class="item relative">
                        <div class="h-40 w-40 rounded-full overflow-hidden mb-3 mx-auto"
                            style="background: url('{{ asset('images/banner/6.png') }}') no-repeat center center / cover; background-color: transparent;">
                        </div>
                        {{-- <p class="text-center text-red-800 mt-2 font-medium text-xl">Vivo</p> --}}

                    </div>

                    <div class="item relative">
                        <div class="h-40 w-40 rounded-full overflow-hidden mb-3 mx-auto"
                            style="background: url('{{ asset('images/banner/5.png') }}') no-repeat center center / cover; background-color: transparent;">
                        </div>
                        {{-- <p class="text-center text-red-800 mt-2 font-medium text-xl">Xiaomi</p> --}}

                    </div>


                    <div class="item relative">
                        <div class="h-40 w-40 rounded-full overflow-hidden mb-3 mx-auto"
                            style="background: url('{{ asset('images/banner/4.png') }}') no-repeat center center / cover; background-color: transparent;">
                        </div>
                        {{-- <p class="text-center text-red-800 mt-2 font-medium text-xl">Realme</p> --}}

                    </div>

                    <div class="item relative">
                        <div class="h-40 w-48  overflow-hidden mb-3 mx-auto"
                            style="background: url('{{ asset('images/banner/1.png') }}') no-repeat center center / cover; background-color: transparent;">
                        </div>
                            {{-- <p class="text-center text-red-800 mt-2 font-medium text-xl">Samsung</p> --}}

                    </div>





            </div>

        </div>
    </section>

    @include('frontend.home.banner2')
    @include('frontend.home.category-product')
    {{-- @include('frontend.home.used-phone') --}}

@endsection



