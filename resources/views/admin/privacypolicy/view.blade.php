@extends('admin.layouts.app')
@section('page_title', 'Admin - View Privacy')
@section('privacy_select', 'bg-black text-white')
@section('container')

<div class="py-14 border p-8 max-sm:px-2 rounded-2xl">
{{-- @dd($privacy); --}}
    {!! $privacy->description  !!}

</div>

@endsection
