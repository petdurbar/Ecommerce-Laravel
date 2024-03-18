@extends('frontend._layout._master')

@section('body')
    <div class="">
        <div class="">
            @include('admin.message.index')
            @include('frontend.homepage.landing', ['slider' => $slider])
        </div>
        <section class=" max-w-screen-2xl max-sm:mx-5 mx-20">
            @include('frontend.homepage.featuredsection', [
                'title' => 'Featured Products',
                'products' => $featuredproducts,
            ])
            @include('frontend.homepage.newarrivals', ['title' => 'New Arrivals', 'products' => $products])
            @include('frontend.homepage.popular', ['title' => 'Popular Sales', 'products' => $products])
            @include('frontend.homepage.blogsection', ['title' => 'Blogs', 'blogs' => $blogs])
        </section>
    </div>
@endsection
