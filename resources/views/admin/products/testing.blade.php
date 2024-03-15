@extends('admin/layouts/app')
@section('page_title', 'Admin - Edit Product')
@section('product_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="{{ route('products.index') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Edit Product</div>
    </div>
    <div class="row m-t-30">
        <form method="post" action="{{ route('products.update', $product->id) }} " enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="flex">
                <div class="p-5 w-1/2 border-r">
                    <div class="flex flex-col my-5">
                        <div>
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Product name
                            </label>
                            <div>

                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_name" placeholder="Type product name here" type="text"
                                    value="{{ $product->product_name }}" />
                                @error('product_name')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="mt-2">
                            <label class="text-sm font-semibold w-full ">Category</label>
                           <div class="mt-2 ">
                               <select class="w-52  border-2">
                                   <option>aaa</option>
                                   <option>bb</option>
                               </select>
                            </div>
                        </div> --}}
                        {{-- Product order --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Product order
                            </label>
                            <div>
                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_order" placeholder="Type product order here" type="text"
                                    value="{{ $product->product_order }}" />
                                {{-- @error('category_order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                        </div>
                        {{-- price --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Product Price
                            </label>
                            <div>
                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_price" placeholder="Type product price here" type="text"
                                    value="{{ $product->product_price }}" />
                                @error('product_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Dscount --}}
                        <div class="mt-2 border border-gray-300 p-3 rounded ">
                            <div class="flex items-center text-sm font-semibold">
                                <label for="default-checkbox" class="">Discount</label>
                                <input id="discount" type="checkbox" value="YES" name="disc" {{ $product->discount_type !=null ? 'checked' : '' }} class="w-4 h-4 ml-1"
                                    onchange="discountCheck()">
                            </div>
                            <div class="flex gap-4 {{ $product->discount_type ==null ? 'hidden' : '' }}" id="showdisc">
                                <div class="flex w-full">
                                    <input
                                        class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                        name="discount_amount" placeholder="Type product price here" type="number"
                                        value="{{ $product->discount_amount }}" />
                                    @error('discount_amount')
                                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="flex gap-x-4 mt-4">
                                    <div class="flex">
                                        <input type="radio" name="discount_type" value="CASH"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-bg-black "
                                            id="discount-type-1" {{ $product->discount_type == 'CASH' ? 'checked' : '' }}>
                                        <label for="discount-type-1" class=" text-gray-600 ml-2 mt-2">Cash</label>
                                    </div>

                                    <div class="flex">
                                        <input type="radio" name="discount_type" value="PERCENTAGE"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-bg-black "
                                            id="discount-type-2"
                                            {{ $product->discount_type == 'PERCENTAGE' ? 'checked' : '' }}>
                                        <label for="discount-type-2" class=" text-gray-600 ml-2 mt-2">Percentage(%)</label>
                                    </div>


                                </div>

                            </div>
                        </div>


                        {{-- Dscount --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Discount
                            </label>

                        </div>






                        {{-- image --}}
                        <div class="mt-3">

                            <label class='text-sm font-semibold'>Featured Image</label>
                            <div
                                class='text-sm p-2 form-control border-2 border-grey-400 w-full rounded-md shadow-sm mb-1 mt-2'>
                                <input type="file" name="featured_image" />
                                <img class="" src="{{ asset('/images/' . $product->featured_image) }}"
                                    alt="Card" style="width: 70px;margin-bottom:2px;">

                            </div>
                            @error('featured_image')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-sm font-semibold w-full mt-2">
                            Description
                        </div>
                        <textarea id="editor" class="block w-full mt-1 rounded-md border border-r-gray-500" name="description"
                            rows="3">{{ $product->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                        {{-- <div class="mt-2 w-full">
                            <label class="text-sm font-semibold w-full">Featured</label>
                            <div class="flex mt-2">
                                <div class="ml-4">
                                    <input type="radio" name="featured" value="1"
                                        {{ $product->featured ? 'checked' : '' }}>
                                    <span class="ml-1">Yes</span>
                                </div>
                                <div class="ml-4">
                                    <input type="radio" name="featured" value="0"
                                        {{ !$product->featured ? 'checked' : '' }}>
                                    <span class="ml-1">No</span>
                                </div>
                            </div>
                        </div> --}}

                        <div>
                            <button
                                class="border mt-3 border-bg-black px-4 py-1 rounded-md mr-2 text-bg-black  bg-black text-white">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                <div class="m-7 w-1/2 border-r ">

   {{-- attributes --}}
    {{-- attributes --}}
    <div class="bg-white rounded shadow-lg">
        <div class="">
            <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">Attribute
                Group</div>
            <div class="mt-3 pl-5  max-h-[15rem] overflow-y-scroll">
                @foreach ($attributegroups as $attributegroup)
                    {{-- <input type="checkbox" name="attributesgroup[]" value="{{ $attributegroup->id }}" /> --}}
                    {{ $attributegroup->attributename }}

                    @php
                        $attributes = getAttributes($attributegroup->id);
                    @endphp
                    @if (count($attributes) == 0)
                        <div class=" text-gray-500">No attributes found</div>
                    @else
                        @foreach ($attributes as $key => $attributeitem)
                            <div class="ml-10">
                                <input type="checkbox" name="attributes[{{ $attributegroup->id }}][]"
                                    value="{{ $attributeitem->id }}"
                                    {{ in_array($attributeitem->id, $attributeItem) ? 'checked' : '' }} />
                                {{ $attributeitem->name }}
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>




    <div class="mt-5 bg-white rounded p-3 shadow-lg">
    <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">
        Select Category
    </div>

                    <div class="max-h-screen overflow-y-scroll w-full">
                        @foreach (getCategories(0) as $category)
                            <div class="mt-2 ml-2">
                                <input type="checkbox" name="pcategories[]"
                                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                    id="{{ $category->id }}" value="{{ $category->id }}"
                                    {{ in_array($category->id, $product_categories->pluck('category_id')->toArray()) ? 'checked' : '' }}>
                                <label for="{{ $category->id }}" class="ml-3">{{ $category->category_name }}</label>
                                <input type="hidden" class="form-check-label ml-1" id="{{ $category->id }}"
                                    name="category_ids[]" value="{{ $category->id }}">

                                <div class="ml-4 subcategory-container">
                                    @foreach (getCategories($category->id) as $subcategory)
                                        <div class="ml-12 mt-2">
                                            <input type="checkbox" name="pcategories[]"
                                                class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                id="{{ $subcategory->id }}" value="{{ $subcategory->id }}"
                                                {{ in_array($subcategory->id, $product_categories->pluck('category_id')->toArray()) ? 'checked' : '' }}>
                                            <label for="{{ $subcategory->id }}"
                                                class="ml-3">{{ $subcategory->category_name }}</label>
                                        </div>
                                        @foreach (getCategories($subcategory->id) as $twosubcategory)
                                            <div class="ml-28 mt-2">
                                                <input type="checkbox" name="pcategories[]"
                                                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                    id="{{ $twosubcategory->id }}" value="{{ $twosubcategory->id }}"
                                                    {{ in_array($twosubcategory->id, $product_categories->pluck('category_id')->toArray()) ? 'checked' : '' }}>
                                                <label for="{{ $twosubcategory->id }}"
                                                    class="ml-3">{{ $twosubcategory->category_name }}</label>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
                </div>
            </div>

        </form>
    </div>

@endsection
<script>
    function checkOnlyOne(checkbox) {
        var checkboxes = document.getElementsByName(checkbox.name);
        checkboxes.forEach(function(currentCheckbox) {
            if (currentCheckbox !== checkbox)
                currentCheckbox.checked = false;
        });
    }

    function discountCheck() {
        let disc = document.querySelector('#discount')
        let showdisc = document.querySelector('#showdisc')
        if (disc.checked) {
            showdisc.classList.remove('hidden')
        } else {
            showdisc.classList.add('hidden')

        }
    }
</script>



{{--  --}}

@foreach ($uniqueAttributVariationeNames as $attributeset)
<div class="w-full">

    <div class="">
        <h2 class="w-full pb-1 mb-4 mt-4 text-2xl font-semibold  ">
            {{ $attributeset->getAttributeNames->attributename }}

            <div class="border-b border-black w-16">
            </div>

        </h2>
    </div>
    <div class="flex  gap-2">
        @foreach ($product->productvariation->where('attribute_id', $attributeset->attribute_id)->unique('attribute_value_id') as $key => $value)

            @php
                $attr2[$value->attribute_id] = $value->attribute_value_id;
            @endphp
            <div class="my-2">
                <input type="radio" id="{{ $value->getAttributeValueName->name }}"
                    onclick="selectVariationAttribute(this)"
                    name="{{ $attributeset->attribute_id }}"
                    value="{{ $value->attribute_value_id }}" class="hidden peer"
                    required {{ $value[$key] == 0 ? 'checked' : '' }} />

                <label for="{{ $value->getAttributeValueName->name }}"
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-gray-500 text-sm bg-white border border-gray-200 rounded-md cursor-pointer  peer-checked:border-[#ec1464] peer-checked:text-[#ec1464] hover:text-black hover:border-black">
                    <div class="block rounded-full">
                        <div class="px-2 py-1 text-black font-semibold text-center">
                            {{ $value->getAttributeValueName->name }}
                        </div>
                    </div>
                </label>
            </div>
        @endforeach
    </div>
</div>
@endforeach
