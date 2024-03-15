@extends('admin.layouts.app')
@section('page_title', 'View Faq')
@section('faq_select', 'bg-black text-white')
@section('container')
<div class="flex gap-4">
    <a href="/admin/faq">
        <span class="material-symbols-outlined text-2xl">
            west
        </span>
    </a>
    <div class="text-xl font-bold">View Faqs</div>
</div>
<div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm mt-14">
    <dl class="-my-3 divide-y divide-gray-100 text-sm">
        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Faq Title</dt>
            <dd class="text-gray-700 sm:col-span-2">{{$faq->title}}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Faq Description</dt>
            <dd class="text-gray-700 sm:col-span-2">{{$faq->description}}</dd>
        </div>

      

        


       

       

      


      


    </dl>
</div>
@endsection