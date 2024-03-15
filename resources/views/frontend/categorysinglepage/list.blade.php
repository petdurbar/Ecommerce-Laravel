@extends('frontend._layout._master')

@section('body')
<div class="mx-auto max-w-screen-2xl">

    <h2 class="text-2xl font-semibold pb-5 text-[#0f577d]">{{ $title }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach ($products as $key => $product)
                <a href="{{ route('product.singlepage', $product->slug) }}" class="border shadow-[rgba(0,_0,_0,_0.34)_0px_2px_3px] bg-white hover:shadow-[0px_8.0px_6px_#2a4365] rounded-md">
                    @include('frontend.components.productcomponent', ['product' => $product])
                </a>
            @endforeach

        </div>
</div>
@endsection
