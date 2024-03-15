@extends('admin.layouts.app')
@section('page_title', 'View Category')
@section('category_select', 'bg-black text-white')
@section('container')
<div class="flex gap-4">
    <a href="/admin/category">
        <span class="material-symbols-outlined text-2xl">
            west
        </span>
    </a>
    <div class="text-xl font-bold">View Category</div>
</div>
<div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm mt-14">
    <dl class="-my-3 divide-y divide-gray-100 text-sm">
        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Category Name</dt>
            <dd class="text-gray-700 sm:col-span-2">{{ $category->category_name }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Category Order</dt>
            <dd class="text-gray-700 sm:col-span-2">{{ $category->category_order }}</dd>
        </div>

        

        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Category Image</dt>
            <dd class="text-gray-700 sm:col-span-2"> <img src="{{asset('/images/category/'.$category->image)}}"
                    alt="herosectionimage" class="oldimage h-32 w-32" /></dd>
        </div>


        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Show in Homepage</dt>
            @if($category->in_menu=='1')
            <dd class="text-gray-700 sm:col-span-2">yes</dd>
            @else
            <dd class="text-gray-700 sm:col-span-2">No</dd>
@endif
        </div>
      

        {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Featured</dt>
            <dd class="text-gray-700 sm:col-span-2">{{ $category->featured }}</dd>
        </div> --}}
        


       
        

    
      



    </dl>
</div>
@endsection