@extends('admin._layouts.master')

@section('page_title', 'View Product')
@section('product_select', 'bg-[#F1612D] text-white')
@section('body')
    <div class="flex gap-4 items-center">
        <a href="{{ route('product.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="text-xl font-bold">View Product</div>
    </div>

    <section>
        <div class=" mx-auto max-w-screen-2xl px-4 pt-8 z-10">
            <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
                <div class="grid grid-cols-2  gap-4 md:grid-cols-1 h-[80vh]  px-5">
                    <img class="aspect-square w-full  rounded-xl object-contain border "
                        src="{{ asset('/uploads/' . $product->featured_image) }}" alt="Card">
                </div>

                <div class="">
                    <div class="mt-8 flex justify-between">
                        <div class="max-w-[35ch] space-y-2">
                            <h1 class="text-xl font-bold sm:text-2xl">
                                {{ $product->product_name }}
                            </h1>


                        </div>
                        <p class="text-lg font-bold">Rs. {{ $product->product_price }}</p>
                    </div>
                    {{-- @if ($product->cutoff_price) --}}
                    <p class="text-xs font-semibold text-gray-400 line-through float-right">Rs.
                        {{ $product->mrp_price }}</p>
                    {{-- @endif --}}
                    {{-- @dd($productcategories) --}}
                    <div class="mt-4">
                        <span class="font-bold">Category :</span>
                        @foreach ($productcategories as $key => $productcategory)
                            {{ $productcategory->getCategory->categoryname }}
                            @if (!$loop->last)
                                ->
                            @endif
                        @endforeach
                    </div>
                    {{-- attributes --}}
                    <div>
                        <div class="mt-4 ">
                            <label for="attribute_id"
                                class="block mb-2 text-sm flex flex-col font-bold text-gray-900 ">Attributes
                            </label>
                            {{-- @foreach ($attributeItems as $key => $attrubuteitem)
                                {{ $attrubuteitem->attribute_group_id }}
                            @endforeach --}}

                            @foreach ($attributeItems as $attributegroup)
                                {{ $attributegroup->attribute_group_name }}
                                @php
                                    $attributes = showAttributes($attributegroup->attribute_group_id,$product->id);
                                    // dd($attributes);
                                @endphp
                                <div class="flex  gap-4">
                                    @foreach ($attributes as $key => $attributeitem)
                                        <div class="ml-10 border">
                                            {{ $attributeitem->attribute_name }}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="font-bold">Added on :</span> {{ $product->created_at->format('F j, Y') }}
                    </div>
                    <div class="mt-4">
                        <span class="font-bold">Margin :</span> Rs. {{ $product->margin }}
                    </div>
                    <div class="mt-4">
                        <span class="font-bold">Discount Amount :</span> Rs. {{ $product->discount_amount }}
                    </div>
                    <div class="mt-4">
                        <span class="font-bold">Incentive Commission Amount:</span> Rs.
                        {{ $product->incentive_commission_amount }}
                    </div>

                    {{-- <div class="mt-4">
                        <span class="font-bold">Referal Commission Amount:</span> Rs.  {{ $product->referal_commission_amount }}
                    </div> --}}
                    <div class="mt-4">
                        <span class="font-bold">Affiliate Commission Amount:</span> Rs.
                        {{ $product->affiliate_commission_amount }}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-left: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <div class="mt-4 px-4 ">
        <div class="text-xl font-bold mb-2">Description</div>

        <div class="prose max-w-none">
            <div>
                {!! $product->description !!}

            </div>
        </div>

    </div>
    <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex justify-between">

                <div class="font-semibold text-lg">Other Images</div>
                {{-- <a href="{{ route('category.create') }}"> --}}
                <a href="{{ route('myimage', $product->id) }} ">
                    <div
                        class="border float-right border-[#0f577d] px-4 py-2 rounded-md mr-2 text-[#0f577d] bg-white hover:bg-[#0f577d] hover:text-white">
                        <div>Add More Images</div>
                    </div>
                </a>
                {{-- </a> --}}
            </div>
            <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($productImages as $key => $img)
                    <blockquote class="flex h-full justify-between border flex-wrap  rounded-lg">
                        <img alt="product" src="{{ asset('/uploads/' . $img->images) }}"
                            class="aspect-square w-full rounded-xl  object-contain" />
                        <form action="{{ route('deleteImage', $img->id) }} " method="POST"
                            id="delete-form-{{ $img->id }}" class="w-full">
                            @csrf
                            @method('delete')

                            <input type="hidden" name="filefrom" value="insideshow" />

                            <button type="button" onclick="deleteSingleImage({{ $img->id }})"
                                class="border bg-red-600 p-1 cursor-pointer openModal hover:bg-red-500 text-white text-center w-full">
                                Delete
                            </button>
                        </form>
                    </blockquote>
                @endforeach



            </div>
        </div>
    </section>
@endsection
