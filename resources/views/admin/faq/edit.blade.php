@extends('admin/layouts/app')
@section('page_title', 'Edit Service')
@section('faq_select', 'bg-[#F1612D] text-white')
@section('container')
<div class="flex gap-4">
    <a href="{{ url('admin/faq') }}">
        <span class="material-symbols-outlined text-2xl">
            west
        </span>
    </a>
    <div class="text-xl font-bold">Edit Faq</div>
</div>
<div class="row mt-10 w-[80%]">
    <form method="post" action="
        {{route('faq.update',$faq->id) }}
            " enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mt-5">
            <label for="" class="font-medium">Faq Title</label>
            <input type="text" name="title" value="{{ $faq->title }}" class="w-full border py-2 mt-1 outline-none px-3 rounded-md">
            @error('title')
            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                * {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mt-5">
            <label for="" class="font-medium">Faq Description</label> <br>
           <textarea name="description" id="" cols="30" rows="3" class="border w-full mt-2 px-3 outline-none py-2 rounded-md">{{ $faq->description }}</textarea>
           @error('description')
           <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
               * {{ $message }}
           </div>
       @enderror
        </div>
        
       
       
    

    
        <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Edit</button>
    </form>
</div>
@endsection
