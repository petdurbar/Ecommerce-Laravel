@extends('admin/layouts/app')
@section('page_title', 'Admin - View Product')
@section('product_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="{{ route('product.index') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">View Product</div>
    </div>

    <dt class="font-medium text-gray-900">Variation {{ $product->variation }}</dt>
    @foreach ($variation as $key => $variations)
    <dd class="text-gray-700 sm:col-span-2">
        <img src="{{ asset('/uploads/'.$variations->image) }}" alt="herosectionimage" class="oldimage h-32 w-32" />
    </dd>
@endforeach


    <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm mt-14">
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Product name</dt>


                <dd class="text-gray-700 sm:col-span-2">{{ $product->product_name }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">product Order</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $product->product_order }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">product Price</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $product->product_price }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Discount</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $product->discount_amount }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Description</dt>
                <dd class="text-gray-700 sm:col-span-2">{!! $product->description !!}</dd>
            </div>




            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">product Image</dt>
                <dd class="text-gray-700 sm:col-span-2"> <img src="{{asset('/uploads/'.$product->featured_image)}}"
                        alt="herosectionimage" class="oldimage h-32 w-32" /></dd>
            </div>


            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Category</dt>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $product->category->category_name }}</p>
                </td>

                {{-- <dd class="text-gray-700 sm:col-span-2"> @foreach ($product->categories as $category) --}}
{{-- @dd($product->categories); --}}
                    {{-- <li> {{ $category->category_name }}</li>
                    @endforeach</dd> --}}

            </div>

            {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Attribute</dt>
                <dd class="text-gray-700 sm:col-span-2"> @foreach ($product->attributes as $attribute)

                    <li> {{ $attribute->name }}</li>
                    @endforeach</dd>

            </div> --}}













        </dl>
    </div>


@endsection
