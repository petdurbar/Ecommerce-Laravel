@extends('admin._layouts.master')

@section('page_title', 'Edit Product')
@section('product_select', 'bg-[#F1612D] text-white')
@section('body')
    <div class="flex items-center gap-4">
        <a href="{{ route('product.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="text-xl font-bold">Edit Product</div>
    </div>
    <div class="mt-30  w-full rounded-lg shadow-lg text-slate-600">
        <form method="post" action="{{ route('product.update', $product->id) }} " enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="flex mt-4">
                <div class="p-6 w-7/12 bg-white">
                    <div class="flex flex-col">
                        <div>
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Product name
                            </label>
                            <div>

                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_name" placeholder="Type product name here" type="text"
                                    value="{{ old('product_name', $product->product_name) }}" />
                                @error('product_name')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Product order
                            </label>
                            <div>
                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_order" placeholder="Type product order here" type="text"
                                    value="{{ old('product_order', $product->product_order) }}" />
                                @error('product_order')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- MRP price --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">MRP Price</label>
                            <div>
                                <input id="mrp_price"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="mrp_price" placeholder="Type product MRP price here" type="text"
                                    value="{{ old('mrp_price', $product->mrp_price) }}" />
                                @error('mrp_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Cost price --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">Cost Price </label>
                            <div>
                                <input id="cost_price"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="cost_price" placeholder="Type cost price here" type="text"
                                    value="{{ old('cost_price', $product->cost_price) }}" />
                                @error('cost_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Product selling price --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">Product Price ( Selling
                                Price)</label>
                            <div>
                                <input id="product_price"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_price" placeholder="Type product price here" type="text"
                                    value="{{ old('product_price', $product->product_price) }}" />
                                @error('product_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Available Quantity --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">Available Product Quantity ( Stock
                                )</label>
                            <div>
                                <input id="product_stock"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="product_stock" placeholder="Type product stock here" type="text"
                                    value="{{ old('product_stock', $product->product_stock) }}" />
                                @error('product_stock')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- cut price --}}
                        {{-- <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Cutover Price
                            </label>
                            <div>
                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="cutoff_price" placeholder="Type product cut price here" type="text"
                                    value="{{ old('cutoff_price', $product->cutoff_price) }}" />
                                @error('cutoff_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}
                        {{-- commission --}}
                        {{-- <div class="mt-2">
                            <label class="text-sm font-semibold w-full " htmlFor="">
                                Commission
                                <span class="italic text-gray-500">(in percentage)</span>
                            </label>
                            <div>
                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="commission" placeholder="Type commission here" type="text"
                                    value="{{ old('commission', $product->commission) }}" />
                                @error('commission')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- image --}}
                        <div class="mt-3">

                            <label class='text-sm font-semibold'>Featured Image</label>
                            <div
                                class='text-sm p-2 form-control border-2 border-grey-400 w-full rounded-md shadow-sm mb-1 mt-2'>
                                <input type="file" name="featured_image" onchange="loadFile(event)" />
                            </div>

                            <img class="myoldimage" src="{{ asset('/uploads/' . $product->featured_image) }}"
                                alt="Card" style="width: 70px;margin-bottom:2px;">
                            <img id="myoutput" style="width: 70px; margin-bottom: 2px;" />
                            <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('myoutput');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    var old = document.getElementsByClassName('myoldimage')[0];
                                    console.log(old)
                                    old.classList.add("hidden");

                                };
                            </script>

                            @error('featured_image')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- video --}}
                        <div class="mt-3">
                            <label class='text-sm font-semibold'>Add Video</label>
                            <div
                                class='text-sm p-2 form-control border-2 border-grey-400 w-full rounded-md shadow-sm mb-1 mt-2'>
                                <input type="file" name="video" onchange="loadVideo(event)" />
                            </div>

                            <script>
                                var loadVideo = function(event) {
                                    var output = document.getElementById('myvideo');
                                    var old = document.getElementsByClassName('myoldvideo')[0];

                                    // Hide the old video
                                    if (old) {
                                        old.classList.add("hidden");
                                    }

                                    // Unhide the new video if a file is selected
                                    output.classList.remove("hidden");
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>

                            <video id="myvideo" controls autoplay class="hidden">
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                            @if ($product->video)
                                <video class="myoldvideo" controls autoplay>
                                    <source src="{{ asset('uploads/' . $product->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                            @error('video')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-sm font-semibold w-full mt-2">
                            Description
                        </div>
                        <textarea class="tinymce block w-full mt-1 rounded-md" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-2 w-full">
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
                        </div>
                        {{-- <input type="hidden" name="parent_id" value="{{ $product->parent_id
                         }}"> --}}

                        <div>
                            <button
                                class="border mt-3 border-[#0f577d] px-4 py-1 rounded-md mr-2 text-[#000] bg-white hover:bg-orange-500 hover:text-white">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                <div class=" w-5/12 ml-3 rounded ">

                    {{-- commission form --}}
                    <div class=" bg-white p-3 rounded shadow-lg">
                        <div>
                            <label class="text-md font-semibold">Margin : </label>
                            Rs. <input id="margin" type="text" name="margin" value="{{ $product->margin }}"
                                disabled class=" bg-white" />
                        </div>
                        <input id="margin2" type="hidden" name="margin" value="{{ $product->margin }}"
                            class=" bg-white" />

                        @error('margin')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        {{-- Incentive commission --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Incentive Commission
                                <span class="italic text-gray-500">(in percentage)</span>
                            </label>
                            <div>
                                <input id="incentive_commission_percentage"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="incentive_commission_percentage" placeholder="Type incentive commission here"
                                    type="text"
                                    value="{{ old('incentive_commission_percentage', $product->incentive_commission_percentage) }}" />
                                @error('incentive_commission_percentage')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Referal commission --}}
                        {{-- <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Referal Commission
                                <span class="italic text-gray-500">(in percentage)</span>
                            </label>
                            <div>
                                <input id="referal_commission_percentage"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="referal_commission_percentage" placeholder="Type referal commission here"
                                    type="text"
                                    value="{{ old('referal_commission_percentage', $product->referal_commission_percentage) }}" />
                                @error('referal_commission_percentage')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- Affiliate commission --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Affiliate Commission
                                <span class="italic text-gray-500">(in percentage)</span>
                            </label>
                            <div>
                                <input id="affiliate_commission_percentage"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                    name="affiliate_commission_percentage" placeholder="Type Affiliate commission here"
                                    type="text"
                                    value="{{ old('affiliate_commission_percentage', $product->affiliate_commission_percentage) }}" />
                                @error('affiliate_commission_percentage')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- commission calculation --}}
                    <div class=" bg-white rounded p-3 mt-3 shadow-lg">

                        {{-- Incentive commission --}}
                        <div>
                            <div>
                                <label class="text-md font-semibold">Incentive Commission : </label>
                                Rs. <input id="incentive_commission_amount" type="text"
                                    name="incentive_commission_amount"
                                    value="{{ $product->incentive_commission_amount }}" disabled
                                    class=" bg-white mb-2" />
                            </div>
                            @error('incentive_commission_amount')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                            <input id="incentive_commission_amount2" type="hidden" name="incentive_commission_amount"
                                value="{{ $product->incentive_commission_amount }}" class=" bg-white mb-2" />
                        </div>

                        {{-- Referal commission --}}
                        {{-- <div>
                            <div>
                                <label class="text-md font-semibold">Referal Commission : </label>
                                Rs. <input id="referal_commission_amount" type="text" name="referal_commission_amount"
                                    value="{{ $product->referal_commission_amount }}" disabled class=" bg-white mb-2" />
                            </div>
                            @error('referal_commission_amount')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                            <input id="referal_commission_amount2" type="hidden" name="referal_commission_amount"
                                value="{{ $product->referal_commission_amount }}" class=" bg-white mb-2" />
                        </div> --}}

                        {{-- Affiliate commission --}}
                        <div>
                            <div class="">
                                <label class="text-md  font-semibold">Affiliate Commission : </label>
                                Rs. <input id="affiliate_commission_amount" type="text"
                                    name="affiliate_commission_amount"
                                    value="{{ $product->affiliate_commission_amount }}" disabled
                                    class=" bg-white mb-2 w-20 " />
                            </div>
                            @error('affiliate_commission_amount')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                            <input id="affiliate_commission_amount2" type="hidden" name="affiliate_commission_amount"
                                value="{{ $product->discount_amount }}" class=" bg-white mb-2" />
                        </div>

                        {{--  Discount Amount --}}
                        <div>
                            <div>
                                <label class="text-md font-semibold">Discount Amount : </label>
                                Rs. <input id="discount_amount2" type="text" name="discount_amount"
                                    value="{{ $product->discount_amount }}" disabled class=" bg-white mb-2" />
                            </div>
                            @error('discount_amount')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                            <input id="discount_amount" type="hidden" name="discount_amount"
                                value="{{ $product->affiliate_commission_amount }}" class=" bg-white mb-2" />
                        </div>
                    </div>
                    {{-- attributes --}}
                    <div class="mt-3 bg-white rounded p-3 shadow-lg">
                        <div class="mt-4 ">
                            <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">Attribute
                                Group</div>
                            <div class="mt-3 pl-5  max-h-[15rem] overflow-y-scroll">
                                @foreach ($attributegroups as $attributegroup)
                                    {{-- <input type="checkbox" name="attributesgroup[]" value="{{ $attributegroup->id }}" /> --}}
                                    {{ $attributegroup->attribute_group_name }}

                                    @php
                                        $attributes = getAttributes($attributegroup->id);
                                    @endphp
                                    @if (count($attributes) == 0)
                                        <div class="ml-10 text-gray-500">No attributes found</div>
                                    @else
                                        @foreach ($attributes as $key => $attributeitem)
                                            <div class="ml-10">
                                                <input type="checkbox" name="attributes[{{ $attributegroup->id }}][]"
                                                    value="{{ $attributeitem->id }}"
                                                    {{ in_array($attributeitem->id, $attributeItem) ? 'checked' : '' }} />
                                                {{ $attributeitem->attribute_name }}
                                            </div>
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- category --}}
                    <div class="bg-white mt-3 shadow-lg p-3 rounded">

                        <div class="text-md font-semibold shadow rounded-md text-black w-full p-2">
                            Select Category
                        </div>
                        <div class="max-h-[26rem] mt-3 border-r overflow-y-scroll w-full">

                            @foreach (getCategories(0) as $category)
                                <div class="mt-2 ml-2">
                                    <input type="checkbox" name="subcategory_ids[]"
                                        class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                        id="{{ $category->id }}" value="{{ $category->id }}" {{-- {{ getCategories($category->id)->count() == 0 ? '' : 'disabled' }} --}}
                                        {{ in_array($category->id, $productcategory->pluck('category_id')->toArray()) ? 'checked' : '' }}
                                        {{-- {{ $category->id == $product->category_id ? ' checked' : '' }} --}}>
                                    <label for="{{ $category->id }}"
                                        class="ml-1">{{ $category->categoryname }}</label>
                                    <input type="hidden" class="form-check-label ml-1" id="{{ $category->id }}"
                                        name="category_ids[]" value="{{ $category->id }}">

                                    <div class="ml-4 subcategory-container">
                                        @foreach (getCategories($category->id) as $subcategory)
                                            <div class="ml-7 mt-1">
                                                <input type="checkbox" name="subcategory_ids[]"
                                                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                    id="{{ $subcategory->id }}" value="{{ $subcategory->id }}"
                                                    {{ in_array($subcategory->id, $productcategory->pluck('category_id')->toArray()) ? 'checked' : '' }}
                                                    {{-- {{ getCategories($subcategory->id)->count() == 0 ? '' : 'disabled' }} --}} {{-- {{ $subcategory->id == $product->category_id ? ' checked' : '' }} --}}>
                                                <label for="{{ $subcategory->id }}"
                                                    class="ml-1">{{ $subcategory->categoryname }}</label>
                                            </div>
                                            @foreach (getCategories($subcategory->id) as $twosubcategory)
                                                <div class="ml-20 mt-1">
                                                    <input type="checkbox" name="subcategory_ids[]"
                                                        class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                        id="{{ $twosubcategory->id }}" value="{{ $twosubcategory->id }}"
                                                        {{ in_array($twosubcategory->id, $productcategory->pluck('category_id')->toArray()) ? 'checked' : '' }}
                                                        {{-- {{ getCategories($twosubcategory->id)->count() == 0 ? '' : 'disabled' }} --}} {{-- {{ $twosubcategory->id == $product->category_id ? ' checked' : '' }} --}}>
                                                    <label for="{{ $twosubcategory->id }}"
                                                        class="ml-1">{{ $twosubcategory->categoryname }}</label>
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
    <script>
        // Function to calculate Margin and Commission
        function calculateMarginAndCommission() {
            // Get the values of MRP Price, Product Price, and Commission for referal commission
            const mrpPrice = parseFloat(document.getElementById('mrp_price').value) || 0;
            const costPrice = parseFloat(document.getElementById('cost_price').value) || 0;
            const productPrice = parseFloat(document.getElementById('product_price').value) || 0;
            // const referalCommissionPercentage = parseFloat(document.getElementById('referal_commission_percentage')
            //     .value) || 0;
            const incentiveCommissionPercentage = parseFloat(document.getElementById('incentive_commission_percentage')
                .value) || 0;
            const unknownCommissionPercentage = parseFloat(document.getElementById('affiliate_commission_percentage')
                .value) || 0;

            // Calculate Margin
            const margin = mrpPrice - costPrice;

            // Calculate Commission
            // const referal_commission = (referalCommissionPercentage / 100) * margin;
            const incentive_commission = (incentiveCommissionPercentage / 100) * margin;
            const unknown_commission = (unknownCommissionPercentage / 100) * margin;

            // Update the input fields with the calculated values
            document.getElementById('margin').value = margin.toFixed(2);
            document.getElementById('margin2').value = margin.toFixed(2);

            document.getElementById('incentive_commission_amount').value = incentive_commission.toFixed(2);
            document.getElementById('incentive_commission_amount2').value = incentive_commission.toFixed(2);

            const discount = mrpPrice - productPrice;

            if (mrpPrice && productPrice) {

                document.getElementById('discount_amount').value = discount.toFixed(2);
                document.getElementById('discount_amount2').value = discount.toFixed(2);
            } else {
                document.getElementById('discount_amount').value = 0;
                document.getElementById('discount_amount2').value = 0;
            }

            // document.getElementById('referal_commission_amount').value = referal_commission.toFixed(2);
            // document.getElementById('referal_commission_amount2').value = referal_commission.toFixed(2);

            document.getElementById('affiliate_commission_amount').value = unknown_commission.toFixed(2);
            document.getElementById('affiliate_commission_amount2').value = unknown_commission.toFixed(2);
        }

        // Add event listeners to trigger the calculation when input values change
        document.getElementById('mrp_price').addEventListener('input', calculateMarginAndCommission);
        document.getElementById('cost_price').addEventListener('input', calculateMarginAndCommission);
        document.getElementById('product_price').addEventListener('input', calculateMarginAndCommission);
        // document.getElementById('referal_commission_percentage').addEventListener('input', calculateMarginAndCommission);
        document.getElementById('incentive_commission_percentage').addEventListener('input', calculateMarginAndCommission);
        document.getElementById('affiliate_commission_percentage').addEventListener('input', calculateMarginAndCommission);

        // Initial calculation when the page loads
        calculateMarginAndCommission();
    </script>
@endsection
{{-- <script>
    function checkOnlyOne(checkbox) {
        var checkboxes = document.getElementsByName(checkbox.name);
        checkboxes.forEach(function(currentCheckbox) {
            if (currentCheckbox !== checkbox)
                currentCheckbox.checked = false;
        });
    }
</script> --}}
