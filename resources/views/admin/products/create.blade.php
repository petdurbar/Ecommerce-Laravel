@extends('admin.layouts.app')
@section('container')
    <section>
        <main>
            <div class="flex gap-4">
                <a href="{{ route('product.index') }}">
                    <span class="material-symbols-outlined text-2xl">
                        west
                    </span>
                </a>
                <div class="text-xl font-bold">Add Product</div>
            </div>
            <div>
                <div class="row m-t-30">
                    <form id="submitAnjali" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="flex">
                            <div class="p-5 w-full border-r">
                                <div class="flex flex-col my-5">
                                    <div>
                                        <label class="text-sm font-semibold w-full" htmlFor="">
                                            Product name<span class="text-red-500">*</span>
                                        </label>
                                        <div>

                                            <input
                                                class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                                name="product_name" id="product_name" placeholder="Type product name here"
                                                type="text" />



                                            @error('product_name')
                                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="">
                                        <label class="block mt-4 text-sm mb-3">
                                            <span class="text-gray-700">
                                                Image<span class="text-red-500">*</span>
                                            </span>
                                            <input type="file" name="featured_image" id="imageInput"
                                                class="imageInput block w-full mt-1 text-sm border-gray-200 border py-2 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                                                placeholder="Choose an image" onchange="previewImage()">
                                            <img id="imagePreview" class="hidden imagePreview mt-4" alt="Image Preview"
                                                style="max-width: 15%; height: auto;">
                                            <div id="errorMessage" class="text-red-500 text-sm mt-2"></div>
                                        </label>
                                    </div>




                                    <div class="text-sm font-semibold w-full mt-2">
                                        Description<span class="text-red-500">*</span>
                                    </div>
                                    <textarea id="description" class="outline-none block tinymce w-full mt-1 py-2 text-xs rounded-md border px-3"
                                        placeholder="Type product description here" name="description" rows="3"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror



                                    <div class="text-sm font-semibold w-full mt-2">
                                        Specification<span class="text-red-500">*</span>
                                    </div>
                                    <textarea id="specification" class="tinymce outline-none block w-full mt-1 py-2 text-xs rounded-md border px-3"
                                        placeholder="Type product specification here" name="specification" rows="3"></textarea>
                                    @error('specification')
                                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror


                                    <div class=" my-4 rounded-md border">
                                        {{-- category --}}
                                        <div class="mt-5 bg-white rounded p-3 shadow-lg">
                                            <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">
                                                Select Category<span class="text-red-500">*</span>
                                            </div>
                                            <div class="max-h-screen  overflow-y-scroll w-full">
                                                @foreach (getCategories(0) as $category)
                                                    <div class="mt-2 ml-2">
                                                        <input type="checkbox" name="category_id" class="category-checkbox"
                                                            class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                            id="{{ $category->id }}" value="{{ $category->id }}"
                                                            {{ getCategories($category->id)->count() == 0 ? '' : 'disabled' }}>
                                                        <label for="{{ $category->id }}"
                                                            class="ml-3">{{ $category->category_name }}</label>


                                                        <div class="ml-4 subcategory-container">
                                                            @foreach (getCategories($category->id) as $subcategory)
                                                                <div class="ml-5 mt-2">
                                                                    <input type="checkbox" name="category_id"
                                                                        class="category-checkbox"
                                                                        class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                                        id="{{ $subcategory->id }}"
                                                                        value="{{ $subcategory->id }}"
                                                                        {{ getCategories($subcategory->id)->count() == 0 ? '' : 'disabled' }}>
                                                                    <label for="{{ $subcategory->id }}"
                                                                        class="ml-1">{{ $subcategory->category_name }}</label>
                                                                </div>
                                                                @foreach (getCategories($subcategory->id) as $twosubcategory)
                                                                    <div class="ml-12 mt-2">
                                                                        <input type="checkbox" name="category_id"
                                                                            class="category-checkbox"
                                                                            class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                                            id="{{ $twosubcategory->id }}"
                                                                            value="{{ $twosubcategory->id }}"
                                                                            {{ getCategories($twosubcategory->id)->count() == 0 ? '' : 'disabled' }}>
                                                                        <label for="{{ $twosubcategory->id }}"
                                                                            class="ml-3">{{ $twosubcategory->category_name }}</label>
                                                                    </div>
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="mt-3 mx-2 font-semibold">
                                                    <h1>Has Variation</h1>
                                                </div>
                                                <div class="mx-2 mt-1">

                                                    <input type="radio" name="variation" class="addButtonSection"
                                                        value="Yes">
                                                    <label for="hasVariationYes">Yes</label>

                                                    <input type="radio" id="hasVariationNo" name="variation"
                                                        value="No" class="addButtonSection" checked>
                                                    <label for="hasVariationNo">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div id="nonVariationSection">
                                        <div>
                                            <label class="text-sm font-semibold w-full" htmlFor="">
                                                Price<span class="text-red-500">*</span>
                                            </label>
                                            <div>

                                                <input
                                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                                    name="product_price" placeholder="Type product price here"
                                                    id="product_price" type="text" />
                                                @error('product_price')
                                                    <div class="invalid-feedback text-red-400 text-sm"
                                                        style="display: block;">
                                                        * {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- <div class="">
                                            <label class="block mt-4 text-sm mb-3">
                                                <span class="text-gray-700 ">
                                                    Image
                                                </span>
                                                <input type="file" name="featured_image" id=""
                                                    class="imageInput block w-full mt-1 text-sm border-gray-200 border py-2 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                                                    placeholder="Choose an image">
                                                <img id="" class="hidden imagePreview mt-4" alt="Image Preview"
                                                    style="max-width: 15%; height: auto;">
                                            </label>
                                        </div> --}}
                                        <div>
                                            <label class="text-sm font-semibold w-full" htmlFor="">
                                                Product SKU<span class="text-red-500">*</span>
                                            </label>
                                            <div>

                                                <input
                                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                                    name="product_sku" placeholder="Type product Sku here"
                                                    id="product_sku" id="product_sku" type="text" />
                                                @error('product_sku')
                                                    <div class="invalid-feedback text-red-400 text-sm"
                                                        style="display: block;">
                                                        * {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div>
                                            <label class="text-sm font-semibold w-full" htmlFor="">
                                                Quantity<span class="text-red-500">*</span>
                                            </label>
                                            <div>

                                                <input
                                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                                    name="availablestock" placeholder="Type quantity here"
                                                    id="availablestock" type="text" />
                                                @error('availablestock')
                                                    <div class="invalid-feedback text-red-400 text-sm"
                                                        style="display: block;">
                                                        * {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>


                                    <div id="additionalSection" style="display: none;" class="bg-white shadow-md p-5">
                                        <div class="p-3 bg-gray-300 rounded-md border">
                                            Varient, Price
                                        </div>
                                        <div id="resultSection">
                                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto ">
                                                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">

                                                    <div
                                                        class="flex w-full bg-sky-100 justify-between text-center items-center">
                                                        <div id="attributeHead"
                                                            class="flex mx-5 py-3 border-sky-200 bg-sky-100 text-left text-xs  font-semibold text-gray-600 uppercase tracking-wider">
                                                        </div>
                                                        <div
                                                            class="px-5 py-3  border-sky-200 bg-sky-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                            Add Image</div>
                                                        <div class="px-5 py-3  border-sky-200 bg-sky-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                                            id="availablestock">
                                                            Quantity</div>
                                                        <div class="px-5 py-3  border-sky-200 bg-sky-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                                            id="product_price">
                                                            Price</div>
                                                        <div class="px-5 py-3 border-sky-200 bg-sky-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                                            id="product_sku">
                                                            SKU</div>
                                                        <div
                                                            class="px-5 py-3 border-sky-200 bg-sky-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                            Actions
                                                        </div>
                                                    </div>
                                                    <div id="">
                                                        <div class="tableItem flex justify-between">
                                                            <div id="" class="flex dynamic">
                                                            </div>
                                                            <label class="block mt-4 text-sm mb-3">
                                                                <span class="text-gray-700 dark:text-gray-400">
                                                                    Image
                                                                </span>
                                                                <input type="file" name="images[]" id="image"
                                                                    class="imageInput block w-full mt-1 text-sm border-green-600 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                                                                    placeholder="Choose an image">
                                                                <img id="image" class="hidden imagePreview mt-4"
                                                                    alt="Image Preview"
                                                                    style="max-width: 15%; height: auto;">
                                                            </label>



                                                            <div class=" py-5 border-b border-gray-200 bg-white text-sm">
                                                                <input type="number" name="quantity[]"
                                                                    class="quantity-input border p-2" />
                                                            </div>
                                                            <div class=" py-5 border-b border-gray-200 bg-white text-sm">

                                                                <input type="number" name="price[]"
                                                                    class="price-input border p-2" />
                                                            </div>
                                                            <div class="py-5 border-b border-gray-200 bg-white text-sm">

                                                                <input type="text" name="sku[]"
                                                                    class="sku-input border p-2" />
                                                            </div>
                                                            <div
                                                                class="remove_attribute_section py-5 px-3 border-b border-gray-200 bg-white text-sm items-center  text-red-500 cursor-pointer">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-trash delete-row"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="1.5" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M4 7l16 0" />
                                                                    <path d="M10 11l0 6" />
                                                                    <path d="M14 11l0 6" />
                                                                    <path
                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div id="childTableAt" class="">
                                                    </div>

                                                </div>
                                                <div class="mt-4 flex justify-end">
                                                    <button type="button" id="addRowBtn1"
                                                        class="bg-black hover:bg-white hover:text-black border border-black text-white py-1 px-2 text-sm rounded">
                                                        Add More
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div>
                                        <label class="text-sm font-semibold w-full mt-2" htmlFor="">
                                            Meta Title
                                        </label>
                                        <div>

                                            <input
                                                class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                                name="meta_title" id="meta_title" placeholder="Type Meta Title"
                                                type="text" />
                                            @error('meta_title')
                                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                                    * {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <label class="text-sm font-semibold w-full mt-2" htmlFor="">
                                        Meta Description
                                    </label>
                                    <textarea class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                        name="meta_description" placeholder="Type Meta description" type="text"></textarea>
                                    @error('meta_description')
                                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="mt-4">
                                        <button type="button" id="saveBtn"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Save Product
                                        </button>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </section>



    <div id="tableAt" hidden>
        <div class="tableItem flex justify-between">
            <div id="" class="flex dynamic">
            </div>

            <label class="block mt-4 text-sm mb-3">
                <span class="text-gray-700 dark:text-gray-400">
                    Image
                </span>
                <input type="file" name="images[]" id=""
                    class="imageInput block w-full mt-1 text-sm border-green-600 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                    placeholder="Choose an image">
                <img id="" class="hidden imagePreview mt-4" alt="Image Preview"
                    style="max-width: 15%; height: auto;">
            </label>
            <div class=" py-5 border-b border-gray-200 bg-white text-sm">
                <input type="number" name="quantity[]" class="quantity-input border p-2" />
            </div>
            <div class=" py-5 border-b border-gray-200 bg-white text-sm">

                <input type="number" name="price[]" class="price-input border p-2" />
            </div>
            <div class="py-5 border-b border-gray-200 bg-white text-sm">

                <input type="text" name="sku[]" class="sku-input border p-2" />
            </div>
            <div
                class="remove_attribute_section py-5 px-3 border-b border-gray-200 bg-white text-sm items-center  text-red-500 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash delete-row"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7l16 0" />
                    <path d="M10 11l0 6" />
                    <path d="M14 11l0 6" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                </svg>
            </div>
        </div>
    </div>


    <script>
        $('#product_name').on('keyup', function() {
            var productName = $(this).val();

            $('#meta_title').val(productName);
        });



        $('.category-checkbox').change(function() {
            $('.category-checkbox').not(this).prop('checked', false);

        });


        $(document).on('click', '.remove_attribute_section', function() {
            $(this).closest('.tableItem').remove();
        });

        $(document).on('change', '.imageInput', function() {
            const file = this.files[0];
            const nthis = $(this);

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    nthis.siblings('.imagePreview').attr('src', e.target.result);
                    nthis.siblings('.imagePreview').removeClass('hidden');
                };

                reader.readAsDataURL(file);
            }
        });



        const categoryCheckboxes = document.querySelectorAll('input[name="category_id[]"]');
        const addButtonSection = document.getElementById('addButtonSection');
        const addButton = document.getElementById('addButton');
        const additionalSection = document.getElementById('additionalSection');


        categoryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const anyCategorySelected = [...categoryCheckboxes].some(checkbox => checkbox.checked);

                if (anyCategorySelected) {
                    addButtonSection.style.display = 'block';
                } else {
                    addButtonSection.style.display = 'none';
                }
            });
        });


        $('.addButtonSection').on('click', function() {

            var a = $(this).val()

            if (a == 'Yes') {

                const cid = $('input[name="category_id"]:checked').val();
                if (!cid) {
                    alert("please choose category");
                    return false;
                }
                additionalSection.style.display = 'block';

                $('#nonVariationSection').hide();

                const url = `{{ url('admin/fetchAg/${cid}') }}`;
                fetchdata(url);
            } else {
                additionalSection.style.display = 'none';
                $('#nonVariationSection').show();

                const sku = $('#product_sku').val();

                console.log(sku)
                if (!cid) {
                    alert("please");
                    return false;
                }


            }
        });
        $('#addRowBtn1').on('click', function(e) {
            $("#childTableAt").append($("#tableAt").html())
        })
        $('.delete-row').on('click', function() {
            $(this).closest('.item').remove();
        });

        function fetchdata(url) {


            $.ajax({
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': getCSRFToken(),
                },
                url: url,
                success: function(data) {
                    console.log(data)
                    if (data.success) {
                        let additionalHeadersHTML = '';
                        let selectCells = '';
                        let lastRow = $('#additionalSection table tbody tr:last-child');
                        let i = 0;
                        for (const groupName in data.attributeGroupIds) {
                            if (data.attributeGroupIds.hasOwnProperty(groupName)) {
                                additionalHeadersHTML +=
                                    `<div class="mx-5 py-3  border-sky-200 bg-sky-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">${groupName}</div>`;
                                const groupData = data.attributeGroupIds[groupName];
                                // const includeImage = groupData.include_image; // New line to get include_image
                                const attributes = groupData.attributes;

                                selectCells +=
                                    '<div class="flex items-center mx-5 py-5 border-b border-gray-200 bg-white text-sm">'; // Added a container div with 'flex' property

                                selectCells +=
                                    `<select name="attr[${i}][]" class="mx-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">`;
                                attributes.forEach(attribute => {
                                    selectCells +=
                                        `<option value="${attribute.id}">${attribute.name}</option>`;
                                });
                                selectCells += '</select></div>';

                                $('.dynamic').on('change', 'input[type="file"]', function() {
                                    const input = this;
                                    const previewContainer = $(input).closest(
                                        '.rounded-md'
                                    ); // Assuming the container div has the class 'rounded-md'

                                    if (input.files && input.files[0]) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            // Update the preview image source
                                            previewContainer.find('img').attr('src', e.target
                                                .result);

                                            // You may want to show or hide the preview container based on your design
                                            previewContainer.addClass(
                                                'has-preview'
                                            ); // Add a class for styling purposes, adjust as needed
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                });

                            }
                            i++;
                        }
                        $("#attributeHead").append(additionalHeadersHTML)
                        $(".dynamic").append(selectCells)
                        $('.dynamic').on('change', 'select', function() {
                            const selectedId = $(this).val();
                        });
                    } else {
                        if ($.isEmptyObject(data.attributeGroupIds)) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Empty Data',
                                text: 'No attributes found for the selected categories.',
                            }).then((result) => {
                                console.log("No Data");
                            });
                        } else {
                            console.log("Error: No success response");
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error:", error);
                }
            });
        }

        function getCSRFToken() {
            return $('meta[name="csrf-token"]').attr('content');
        }


        $('#saveBtn').on('click', function() {


          var a=   validation();

          if (!a){
            return false;
          }


            let formData = new FormData($('#submitAnjali')[0]);


            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': getCSRFToken()
                },
                url: "{{ route('save.variants') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.success) {
                        console.log('success');
                        window.location.href = "{{ route('product.index') }}";
                    } else {
                        console.log("Error: No success response");
                    }
                },
                error: function(error) {


                    if (error.responseJSON.errors.product_name && error.responseJSON.errors.product_name
                        .length > 0) {
                        toastr.error(error.responseJSON.errors.product_name[0]);
                        return false;
                    }
                    if (error.responseJSON.errors.description && error.responseJSON.errors
                        .description.length > 0) {
                        toastr.error(error.responseJSON.errors.description[0]);
                        return false;
                    }

                    if (error.responseJSON.errors.specification && error.responseJSON.errors
                        .specification.length > 0) {
                        toastr.error(error.responseJSON.errors.specification[0]);
                        return false;
                    }

                    if (error.responseJSON.errors.category_id && error.responseJSON.errors
                        .category_id.length > 0) {
                        toastr.error(error.responseJSON.errors.category_id[0]);
                        return false;
                    }

                }


            });
        })


        function validation() {


            const value = $('.addButtonSection:checked').val();
            if (value === "No") {

                var productname= $('#product_name').val();
                if (!productname) {
                    toastr.error("Please enter product name");
                    return false
                }

                // var imagePreview= $('#image').val();
                // if (!imagePreview) {
                //     toastr.error("Image is required");
                //     return false
                // }

                var description = $('#description').val();
                if (!description) {
                    toastr.error("Please enter description");
                    return false
                }

                var speci = $('#specification').val();
                if (!speci) {
                    toastr.error("Please enter specification");
                    return false
                }


            const cid = $('input[name="category_id"]:checked').val();
            if (!cid) {
                toastr.error("please choose category");
                return false;
            }


                var productPrice = $('#product_price').val();
                if (!productPrice) {
                    toastr.error("Please enter product price");
                    return false
                }

                var productSku = $('#product_sku').val();
                if (!productSku) {
                    toastr.error("Please enter product Sku");
                    return false
                }

                var stock = $('#availablestock').val();
                if (!stock) {
                    toastr.error("Please enter quantity ");
                    return false
                }

            }

            return true;



        }
    </script>
@endsection
