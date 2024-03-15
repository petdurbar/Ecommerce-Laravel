@extends('frontend.layouts.app')
@section('main')

<div class="md:flex  justify-center items-center px-20 max-md:px-10 max-sm:px-5">
    <div class="flex-1 ">
        <form action="{{ route('checkotp') }}" method="POST" class="w-full flex-col justify-center  flex gap-y-7">
            @csrf
            @include('admin.includes.messages')
            @method('post')

        <div class="text-black text-4xl font-medium">Enter OTP</div>
        <input type="hidden"  name="email" value="{{request('email')}}"  class=""  placeholder="Enter Your OTP">

        <input type="number" name="otp" required class="border outline-none w-full py-3 px-3 border-black"  placeholder="Enter Your OTP">
      <div class="">  <button class="text-white bg-black py-2 px-5 rounded-md">Enter</button></div>
    </form>
    </div>
    <div class="flex-1">
       <img src="{{ asset('images/customer/group-office-equipment-with-laptop-tablet.jpg') }}" class="" alt="">
    </div>
</div>
@endsection
{{-- hieeee --}}
