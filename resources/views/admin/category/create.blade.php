@extends('admin.layouts.app')
@section('page_title', 'Add Service')
@section('category_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="{{ route('category.index',['category'=>request('category' ?? 0)]) }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Add Category</div>
    </div>
    <div class="row mt-10 w-[80%]">
        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mt-5">
                <label for="category_name" class="font-medium">Category Name</label>
                <input type="text" placeholder="Type category name here" name="category_name" id="category_name" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1" value="{{ old('category_name') }}">
                @if ($errors->has('category_name'))
                    <div class="invalid-feedback text-red-400 text-sm">
                        * {{ $errors->first('category_name') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <label class=" font-medium  " htmlFor="">
                    Category order
                </label>
                <div>
                    <input
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                        name="category_order" placeholder="Type category order here" type="text"
                        {{-- value="{{ request('category' ?? 0) }}" --}} />
                    @error('category_order')
                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mt-5">
                <label for="image" class="font-medium">Category Image</label>
                <input type="file" name="image" id="image" onchange="loadFile(event)" class="w-full border py-2 mt-1 outline-none px-3 rounded-md">
                <img id="output" style="width: 70px; margin-bottom: 2px;" />
                @if ($errors->has('image'))
                    <div class="invalid-feedback text-red-400 text-sm">
                        * {{ $errors->first('image') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <label for="category_name" class="font-medium">Category Description</label>
                <input type="text" placeholder="Type category description here" name="description" id="description" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1" value="{{ old('description') }}">
                @if ($errors->has('description'))
                    <div class="invalid-feedback text-red-400 text-sm">
                        * {{ $errors->first('description') }}
                    </div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900" htmlFor="">
                    Show in Homepage
                </label>
                <div class="flex mt-5">
                    <div class="ml-4">
                        <input type="radio" name="in_menu" value="1">
                        <span class="ml-1">Yes</span>
                    </div>
                    <div class="ml-4">
                        <input type="radio" name="in_menu" value="0" checked>
                        <span class="ml-1">No</span>
                    </div>
                </div>
            </div>
            {{-- <div class="mt-5">
                <label class="block mb-2 text-sm font-medium text-gray-900" htmlFor="">
                    Featured
                </label>
                <div class="flex mt-2">
                    <div class="ml-4">
                        <input type="radio" name="featured" value="1" checked>
                        <span class="ml-1">Yes</span>
                    </div>
                    <div class="ml-4">
                        <input type="radio" name="featured" value="0">
                        <span class="ml-1">No</span>
                    </div>
                </div>
            </div> --}}

         
            <input type="hidden" name="parent_id" value="{{ request('category' ?? 0) }}">

            <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Add</button>
        </form>
    </div>
@endsection
