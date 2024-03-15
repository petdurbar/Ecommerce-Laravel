@extends('admin.layouts.app')
@section('page_title', 'Add Faq')
@section('faq_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="/admin/faq">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Add Faqs</div>
    </div>
  <div class="row mt-10 w-[80%]">
     <form method="post"  action="{{ route('faq.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mt-5">
            <label for="" class="font-medium">Faq Title</label>
            <input type="text" name="title" class="w-full border py-2 mt-1 outline-none px-3 rounded-md">
            @error('title')
            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                * {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mt-5">
            <label for="" class="font-medium">Faq Description</label> <br>
           <textarea name="description" id="" cols="30" rows="3" class="border w-full mt-2 px-3 outline-none py-2 rounded-md"></textarea>
           @error('description')
           <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
               * {{ $message }}
           </div>
       @enderror
        </div>
     

        <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Add</button>
     </form>
    </div>
    

@endsection
