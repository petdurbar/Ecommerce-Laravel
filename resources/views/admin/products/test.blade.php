@extends('admin/layouts/app')
@section('page_title', 'Admin - Add Product')
@section('product_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="{{ route('product.index') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Add Product</div>
    </div>
    <div class="row m-t-30">
        <form method="post" action="{{ route('product.store') }} " enctype="multipart/form-data">
            @csrf
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
                                    {{--
                                value="{{ old('category_name') }}" --}} />
                                @error('product_name')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Product order
                            </label>
                            <div>
                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_order" placeholder="Type product order here" type="text"
                                    {{--
                                value="{{ request('category' ?? 0) }}" --}} />
                                @error('product_order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    {{--
                                value="{{ request('category' ?? 0) }}" --}} />
                                @error('product_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>



                        <div class="mt-2">
                            <label for="" class="font-semibold text-sm">About Product</label> <br>
                            <textarea name="aboutproduct" id="" cols="30" rows="3"
                                class="tinymce  text-xs border w-full mt-2 px-3 outline-none py-2 rounded-md" placeholder="Type about product Here"></textarea>
                            @error('aboutproduct')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Dscount --}}
                        <div class="mt-2 border border-gray-300 p-3 rounded ">
                            <div class="flex items-center text-sm font-semibold">
                                <label for="default-checkbox" class="">Discount</label>
                                <input id="discount" type="checkbox" value="YES" name="disc" class="w-4 h-4 ml-1"
                                    onchange="discountCheck()">
                            </div>
                            <div class=" gap-4 hidden" id="showdisc">
                                <div class="flex w-full">
                                    <input
                                        class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                        name="discount_amount" placeholder="Type product price here" type="number"
                                        {{--
                                    value="{{ request('category' ?? 0) }}" --}} />
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
                                            id="discount-type-1" checked>
                                        <label for="discount-type-1" class=" text-gray-600 ml-2 mt-2">Cash</label>
                                    </div>

                                    <div class="flex">
                                        <input type="radio" name="discount_type" value="PERCENTAGE"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-black "
                                            id="discount-type-2">
                                        <label for="discount-type-2" class=" text-gray-600 ml-2 mt-2">Percentage(%)</label>
                                    </div>


                                </div>
                            </div>
                        </div>




                        {{-- image --}}
                        <div class="mt-3">

                            <label class='text-sm font-semibold'>Featured Image</label>
                            <div
                                class='text-sm p-2 form-control border-2 border-grey-400 w-full rounded-md shadow-sm mb-1 mt-2'>
                                <input type="file" name="featured_image" />
                            </div>
                            @error('featured_image')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label for="" class="font-semibold text-sm">Available stock</label>
                            <input type="text" name="availablestock"
                                class="w-full border text-xs py-2 mt-1 outline-none px-3 rounded-md"
                                placeholder="Type available stock here">
                            @error('availablestock')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label for="" class="font-semibold text-sm">shipping and return policy</label> <br>
                            <textarea name="returnpolicy" id="" cols="30" rows="3"
                                class="tinymce border text-xs w-full mt-2 px-3 outline-none py-2 rounded-md"
                                placeholder="Type shipping and return policy here"></textarea>
                            @error('returnpolicy')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-sm font-semibold w-full mt-2">
                            Description
                        </div>
                        <textarea id="editor" class="outline-none block w-full mt-1 py-2 text-xs rounded-md border px-3"
                            placeholder="Type product description here" name="description" rows="3"></textarea>
                        @error('description')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        <div class="text-sm font-semibold w-full mt-2">
                            Specificstion
                        </div>
                        <textarea id="editor" class="outline-none block w-full mt-1 py-2 text-xs rounded-md border px-3"
                            placeholder="Type product specification here" name="specification" rows="3"></textarea>
                        @error('specification')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        <div>


                            <button class="border mt-5 bg-black  text-white px-10 py-2 rounded-md mr-2  ">
                                Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mx-7 w-1/2 border-r ">


                    {{-- attributes --}}
                    <div class=" bg-white rounded p-3 shadow-lg">
                        <div class="mt-4 ">
                            <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">Attribute
                                Group</div>
                            <div class="mt-3 pl-5  max-h-[15rem] overflow-y-scroll">

                                @foreach ($attributegroups as $attributegroup)
                                    {{ $attributegroup->attributename }}

                                    @php
                                        $attributes = getAttributes($attributegroup->id);
                                        // dd($attributes);
                                    @endphp

                                    @if (count($attributes) == 0)
                                        <div class="ml-10 text-gray-500">No attributes found</div>
                                    @else
                                        @foreach ($attributes as $key => $attributeitem)
                                            <div class="ml-10">
                                                <input type="checkbox" name="attributes[{{ $attributegroup->id }}][]"
                                                    value="{{ $attributeitem->id }}" />
                                                {{ $attributeitem->name }}
                                            </div>
                                        @endforeach
                                    @endif
                                @endforeach

                            </div>


                        </div>
                    </div>


                    {{-- category --}}
                    <div class="mt-5 bg-white rounded p-3 shadow-lg">
                        <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">
                            Select Category
                        </div>
                        <div class="max-h-screen  overflow-y-scroll w-full">
                            @foreach (getCategories(0) as $category)
                                <div class="mt-2 ml-2">
                                    <input type="checkbox" name="pcategories[]"
                                        class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                        id="{{ $category->id }}" value="{{ $category->id }}">
                                    <label for="{{ $category->id }}"
                                        class="ml-3">{{ $category->category_name }}</label>
                                    <input type="hidden" class="form-check-label ml-1" id="{{ $category->id }}"
                                        name="category_ids[]" value="{{ $category->id }}">

                                    <div class="ml-4 subcategory-container">
                                        @foreach (getCategories($category->id) as $subcategory)
                                            <div class="ml-5 mt-2">
                                                <input type="checkbox" name="pcategories[]"
                                                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                    id="{{ $subcategory->id }}" value="{{ $subcategory->id }}">
                                                <label for="{{ $subcategory->id }}"
                                                    class="ml-1">{{ $subcategory->category_name }}</label>
                                            </div>
                                            @foreach (getCategories($subcategory->id) as $twosubcategory)
                                                <div class="ml-12 mt-2">
                                                    <input type="checkbox" name="pcategories[]"
                                                        class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                        id="{{ $twosubcategory->id }}"
                                                        value="{{ $twosubcategory->id }}">
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
