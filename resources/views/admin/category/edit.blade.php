@extends('admin/layouts/app')
@section('page_title', 'Edit Category')
@section('category_select', 'bg-black text-white')
@section('container')
<div class="flex gap-4">
    <a href="{{ route('category.index', ['category' => $category->parent_id]) }}">
        <span class="material-symbols-outlined text-2xl">
            west
        </span>
    </a>
    <div class="text-xl font-bold">Edit Category</div>
</div>
<div class="row mt-10 w-[80%]">
    <form method="post" action="
        {{route('category.update',$category->id) }}
            " enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mt-5">
            <label for="" class="font-medium">Category Name</label>
            <input type="text" name="category_name" value="{{ $category->category_name }}"
                class="w-full border py-2 mt-1 outline-none px-3 rounded-md">
            @error('category_name')
            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                * {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mt-5">
            <label class="block my-2 text-sm font-medium text-gray-900" for="category_order">
                Category order
            </label>
            <div>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    name="category_order" id="category_order" placeholder="Type category order here" type="text"
                    value="{{ $category->category_order }}"
                     />
                @error('category_order')
                    <div class="invalid-feedback" style="display: block;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="mt-5">
            <label for="" class="font-medium">Category Image</label>
            <input type="file" name="image" onchange="loadFiles(event)"
                class="w-full border py-2 mt-1 outline-none px-3 rounded-md">
            <img src="{{asset('/images/category/'.$category->image)}}" style="width: 70px; margin-bottom: 2px;"
                class="oldimages" />
            <img id="output2" style="width: 70px; margin-bottom: 2px;" alt="">

        </div>


        <div class="mt-5">
            <label for="category_name" class="font-medium">Category Description</label>
            <input type="text" value="{{ $category->description }}" placeholder="Type category description here" name="description" id="description" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1" value="{{ old('description') }}
            ">
            @if ($errors->has('description'))
                <div class="invalid-feedback text-red-400 text-sm">
                    * {{ $errors->first('description') }}
                </div>
            @endif
        </div>

        <div class="mt-5">
            <label class="text-sm font-semibold">Show in Homepage</label>
            <div class="flex mt-2">
                <div class="ml-4">
                    <input type="radio" name="in_menu" value="1" {{ $category->in_menu ? 'checked' : '' }}>
                    <span class="ml-1">Yes</span>
                </div>
                <div class="ml-4">
                    <input type="radio" name="in_menu" value="0" {{ !$category->in_menu ? 'checked' : '' }}>
                    <span class="ml-1">No</span>
                </div>
            </div>

        </div>
        {{-- <div class="mt-5">
            <label class="text-sm font-semibold">Featured</label>
            <div class="flex mt-2">
                <div class="ml-4">
                    <input type="radio" name="featured" value="1" {{ $category->featured ? 'checked' : '' }}>
                    <span class="ml-1">Yes</span>
                </div>
                <div class="ml-4">
                    <input type="radio" name="featured" value="0" {{ !$category->featured ? 'checked' : '' }}>
                    <span class="ml-1">No</span>
                </div>
            </div>

        </div> --}}
        <input type="hidden" name="parent_id" value="{{ $category->parent_id }}">

        <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Edit</button>
    </form>
</div>
@endsection