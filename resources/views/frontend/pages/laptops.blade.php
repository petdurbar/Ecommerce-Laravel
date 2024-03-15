@extends('frontend.layouts.app')
@section('main')
<div class="px-4 sm:px-8 py-10 bg-gray-100">
    <div class="text-3xl font-medium text-center mb-6">
        Available Laptops
    </div>
    <div class="flex justify-center items-center mb-6">
        <div class="border-black w-[15%] sm:w-[10%] md:w-[8%] border-b-8 mt-3 rounded-lg">
            <!-- Your content goes here -->
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">


        @foreach ($laptops as $sub)

        @include('frontend.components.product' , ['product'=>$sub])
    @endforeach
    </div>
</div>
@endsection
