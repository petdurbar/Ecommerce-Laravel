@extends('frontend._layout._master')

@section('body')

<!-- component -->
<!-- Create By Joker Banny -->
<style>
    @layer utilities {

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    }
</style>
<div class="mx-auto max-w-screen-2xl pt-10 pb-5 bg-blue-50">
    {{-- <h1 class="mb-10 text-center text-2xl text-primary font-bold">Cart Items</h1> --}}
    <div id="cartDatas" class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
        @include('frontend.components.cartData')
    </div>
</div>

@endsection
