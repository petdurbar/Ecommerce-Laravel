`@extends('frontend.layouts.app')
@section('main')
<div class="px-4 sm:px-8 py-10 bg-gray-100">
    <div class="text-3xl font-medium text-center mb-6">Product Categories</div>
    <div class="flex justify-center items-center mb-6">
        <div class="border-black w-[15%] sm:w-[10%] md:w-[8%] border-b-8 mt-3 rounded-lg">
          <!-- Your content goes here -->
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
        @foreach ($categories as $category)
            <div class="shadow-lg h-[30vh] px-4 md:px-5 rounded-lg bg-white hover:scale-90 shadowy transition duration-100 cursor-pointer mb-6">
                <img src="{{ asset('images/category/' . $category->image) }}" class="h-[20vh] w-full object-contain mb-3" alt="">
                <p class="text-center font-medium">{{ $category->category_name }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
