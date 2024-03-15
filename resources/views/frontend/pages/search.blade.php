@extends('frontend.layouts.app')

@section('main')


    <div class="my-10 mx-20">
        <h1 class="mb-5">Searched Results for <span class="text-[#Ec1464]">{{ $query }}</span></h1>

        @if (count($products) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 ">

                @foreach ($products as $sub)
                    @include('frontend.components.product', ['product' => $sub])
                @endforeach
            @else
                <p>No results found.</p>
        @endif
    </div>

    </div>

@endsection
