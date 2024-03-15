@extends('admin.layouts.app')
@section('page_title', 'Admin - View Terms & Condition')
@section('terms_select', 'bg-black text-white')
@section('container')

<div class="py-14 border p-8 max-sm:px-2 rounded-2xl">
{{-- @dd($privacy); --}}
    {!! $terms->description  !!}
     
    


</div>

@endsection