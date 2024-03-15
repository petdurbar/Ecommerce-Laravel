@extends('frontend._layout._master')

@section('body')
<section class="container mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="py-14 border rounded-2xl px-4">
        <div class="text-center mb-10 text-xl font-semibold">
            {{ $termspolicy->title }}
        </div>
        {!! $termspolicy->description !!}
    </div>
</section>

@endsection
