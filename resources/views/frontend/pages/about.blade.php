@extends('frontend.layouts.app')
@section('main')
<div class="px-20 py-20 bg-gray-100">
    <div class="text-4xl font-medium text-center ">ABOUT US


    </div>
    <div class="flex justify-center items-center">
        <div class=" border-black w-[15%] border-b-8 mt-3 rounded-lg ">
            <!-- Your content goes here -->
        </div>
    </div>

    <div class="flex pt-10 gap-10">
        <div class="flex-1"><img src="{{ asset('images/about/man-choosing-hardware-electronics-store.jpg') }}"
                class="rounded-md h-[80vh] object-cover" alt=""></div>
        <div class="flex-1 text-lg font-sans flex justify-center items-center flex-col text-justify">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus ratione quidem expedita error cum
                distinctio officia itaque repellat voluptatibus deleniti, dolorum officiis laudantium quibusdam
                laboriosam ipsam corporis ab rerum neque. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis excepturi blanditiis quisquam? Aperiam sunt quia corporis eius id eos sit cupiditate vitae
                doloribus. Dignissimos blanditiis neque impedit cumque, sunt ducimus.</p>
                <p class="pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus ratione quidem expedita error cum distinctio officia itaque repellat voluptatibus deleniti, dolorum officiis laudantium quibusdam laboriosam ipsam corporis ab rerum neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis excepturi blanditiis quisquam? Aperiam sunt quia corporis eius id eos sit cupiditate vitae doloribus. Dignissimos blanditiis neque impedit cumque, sunt ducimus.</p>
        </div>

    </div>
</div>
@endsection