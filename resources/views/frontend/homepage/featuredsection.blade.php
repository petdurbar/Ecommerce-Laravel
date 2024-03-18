<div class="py-10">
    <div class="flex justify-between flex-wrap mb-4">
        <h2 class="text-2xl font-semibold ">{{ $title }}</h2>
        <a href="{{ route('allproducts') }}"
            class="bg-orange-500 text-white px-4 mb-5 py-2 rounded-md hover:bg-[#346a86] focus:outline-none ">
            View More
        </a>

    </div>
    <div class="grid  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($products as $key => $product)
            <a href="{{ route('product.singlepage', $product->slug) }}"
                class="border-[0.5px] border-slate-300 rounded-md">
                @include('frontend.components.productcomponent', ['product' => $product])
            </a>
        @endforeach
    </div>
</div>
