@extends('frontend._layout._master')

@section('body')
    <section class="mx-auto max-w-screen-2xl">
        @include('admin.message.index')
        @include('frontend.homepage.landing', ['slider' => $slider])
        {{-- @include('frontend.homepage.herosection') --}}
        @include('frontend.homepage.featuredsection', [
            'title' => 'Featured Products',
            'products' => $featuredproducts,
        ])
        @include('frontend.homepage.newarrivals', ['title' => 'New Arrivals', 'products' => $products])
        {{-- @include('frontend.homepage.banner') --}}
        @include('frontend.homepage.popular', ['title' => 'Popular Sales', 'products' => $products])
        @include('frontend.homepage.blogsection', ['title' => 'Blogs', 'blogs' => $blogs])
    </section>


@endsection
