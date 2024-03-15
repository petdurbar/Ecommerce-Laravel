@extends('admin.layouts.app')
@section('container')
    <div class="flex gap-4">
        <a href="{{ url('attribute') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-2xl font-bold">Add Attribute</div>
    </div>
    <div class="mt-10">
        <form class="form-horizontal form-submit-event" action="{{ route('attribute.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="flex gap-5">
                <div class="card-body">
                    <div class="mt-4 flex gap-12">
                        <label for="attribute_set" class="font-bold mt-2"> Attribute Family <span
                                class='text-red-500 text-sm'>*</span></label>
                        <div class="">
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5"
                                name="attributename" placeholder="Eg. Color Family" type="text" />
                        </div>
                    </div>

                    <div class="mt-4 flex gap-12">
                        <label for="attribute_set" class="font-bold mt-2"> Include Price Vaiation <span
                                class='text-red-500 text-sm'>*</span></label>
                        <div class="flex gap-x-4 mt-2">
                            <div class="flex">
                                <input type="radio" name="price_variation" value="YES"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-red-500 " id="discount-type-1">
                                <label for="discount-type-1" class=" text-gray-600 ml-2">Yes</label>
                            </div>

                            <div class="flex">
                                <input type="radio" name="price_variation" value="NO"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-red-500 " id="discount-type-2"
                                    checked>
                                <label for="discount-type-2" class=" text-gray-600 ml-2">No</label>
                            </div>


                        </div>
                    </div>

                    <div class="mt-4 flex gap-12">
                        <label for="attribute_set" class="font-bold mt-2"> Include Images <span
                                class='text-red-500 text-sm'>*</span></label>
                        <div class="flex gap-x-4 mt-2">
                            <div class="flex">
                                <input type="radio" name="include_image" value="YES"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-red-500 " id="discount-type-1">
                                <label for="discount-type-1" class=" text-gray-600 ml-2">Yes</label>
                            </div>

                            <div class="flex">
                                <input type="radio" name="include_image" value="NO"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-red-500 " id="discount-type-2"
                                    checked>
                                <label for="discount-type-2" class=" text-gray-600 ml-2">No</label>
                            </div>


                        </div>
                    </div>

                    <!-- attribute value  -->

                    <div class="mt-10 flex gap-11">
                        <label for="attribute_set" class="font-bold mt-2"> Attribute Values <span
                                class='text-red-500 text-sm'>*</span></label>
                        <button type="button" id="add_attribute_value" class="bg-black px-2 py-2 text-white rounded-md">Add
                            Attribute Values </button>
                    </div>
                    <div id="attribute_section"> </div>
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
                                <label for="{{ $category->id }}" class="ml-3">{{ $category->category_name }}</label>
                                <input type="hidden" class="form-check-label ml-1" id="{{ $category->id }}"
                                    name="category_ids[]" value="{{ $category->id }}">

                                <div class="ml-4 subcategory-container">
                                    @foreach (getCategories($category->id) as $subcategory)
                                        <div class="ml-5 mt-2">
                                            <input type="checkbox" name="pcategories[]"
                                                class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                id="{{ $subcategory->id }}" value="{{ $subcategory->id }}" disabled>
                                            <label for="{{ $subcategory->id }}"
                                                class="ml-1">{{ $subcategory->category_name }}</label>
                                        </div>
                                        @foreach (getCategories($subcategory->id) as $twosubcategory)
                                            <div class="ml-12 mt-2">
                                                <input type="checkbox" name="pcategories[]"
                                                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                                    id="{{ $twosubcategory->id }}" value="{{ $twosubcategory->id }}"
                                                    disabled>
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

            <br>

            <div class="mt-4">
                <button type="reset" class="bg-pink-500 px-2 py-2 text-white rounded-md">Reset</button>
                <button type="submit" class="bg-slate-900 px-2 py-2 text-white rounded-md" id="submit_btn">Add
                    Attribute</button>
            </div>
    </div>
    <div class="flex justify-center">
        <div class="form-group" id="error_box">
        </div>
    </div>
    <!-- /.card-body -->
    </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).on('click', '#add_attribute_value', function(e) {
            e.preventDefault();
            load_attribute_section();

        });

        $(document).on('change', '.swatche_type', function() {
            if ($(this).val() == '1') {
                $(this).siblings('.color_picker').show();
                $(this).siblings('.upload_media').hide();
                $(this).siblings('.grow').hide();
            }
            if ($(this).val() == "2") {
                $(this).siblings(".color_picker").hide();
                $(this).siblings(".color_picker").attr('name', null);
                $(this).siblings(".upload_media").show();
                $(this).siblings(".grow").show();
            }
            if ($(this).val() == "0") {
                $(".color_picker").hide();
                $(".upload_media").hide();
                $('.grow').hide();
            }
        });

        function load_attribute_section() {
            var html = '<div class="mt-4 flex gap-6 row">' +
                '<div class="">' +
                '<input type="text" step="any"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5"  placeholder="Eg. RED" name="attribute_value[]" >' +
                '</div>' +
                '<button type="button" class="hover:bg-green-500 hover:text-white text-green-500 rounded add_attribute_section">' +
                '<span class="material-symbols-outlined">add</span>' +
                '</button>' +
                '<button type="button" class="hover:bg-red-500 hover:text-white text-red-500 rounded remove_attribute_section">' +
                '<span class="material-symbols-outlined">close</span>' +
                '</button>' +
                '</div>' +
                '<div class="row image-upload-section">' +
                '<div style="display: none;" class="shadow p-3 mb-5 bg-white rounded m-4 text-center grow">' +
                '<div class="image-upload-div"><img class="img-fluid mb-2 image" src="" alt="Image Not Found"></div>' +
                '<input type="hidden" value="">' +
                '</div>' +
                '</div>';

            $('#attribute_section').append(html);

            $('.swatche_type').each(function() {
                $('.swatche_type').select2({
                    theme: 'bootstrap4',
                    width: $('.swatche_type').data('width') ? $('.swatche_type').data('width') : $(
                        '.swatche_type').hasClass('w-100') ? '100%' : 'style',
                    placeholder: $('.swatche_type').data('placeholder'),
                    allowClear: Boolean($('.swatche_type').data('allow-clear')),
                });
            });
        }

        $(document).on('click', '.add_attribute_section', function() {
            load_attribute_section();
        });

        $(document).on('click', '.remove_attribute_section', function() {
            $(this).closest('.row').remove();
        });
    </script>
@endsection
