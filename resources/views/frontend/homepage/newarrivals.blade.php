<div class="py-10">
    <div class="flex justify-between flex-wrap mb-4">
        <h2 class="text-2xl font-semibold ">{{ $title }}</h2>
        <a href="{{route("latestproduct")}}"
            class="bg-[#0f577d] text-white px-4 mb-5 py-2 rounded-md hover:bg-[#346a86] focus:outline-none">
            View More
        </a>
    </div>
    {{-- <div class="flex py-4">
        <div class="w-[10%] border border-[#0f577d]"></div>
        <div class="w-[90%] border"></div>
    </div> --}}



    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 ">
        @foreach ($products as $key => $product)
            <a href="{{ route('product.singlepage',$product->slug) }}" class="border shadow-[rgba(0,_0,_0,_0.34)_0px_2px_3px] bg-white hover:shadow-[0px_8.0px_6px_#2a4365] rounded-md">
                @include('frontend.components.productcomponent', ["product" => $product])
            </a>
        @endforeach

    </div>
</div>
