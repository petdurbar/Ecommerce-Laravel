@extends('frontend.layouts.app')
@section('main')


<div class="md:flex  justify-center items-center px-20  max-md:px-10 max-sm:px-5">
    <div class="w-[80%] flex-1">
        <form action="{{ route('changepasswords') }}" method="post" class="w-full flex-col justify-center  flex gap-y-7">
            @csrf
            @include('admin.includes.messages')
        
       
        <div class="text-black text-4xl font-medium">New Password</div>

        <input type="password" name="newpassword" required class="border outline-none w-full py-3 px-3 border-black"  placeholder="Enter  New Password">
        <input type="password" name="confirmpassword" required class="border outline-none w-full py-3 px-3 border-black"  placeholder="Enter Confirm Password">
        <input type="hidden" value="{{request('token')}}" name="token">

      <div class="">  <button class="text-white bg-black py-2 px-5 rounded-md">Change</button></div>
    </form>
    </div>
    <div class="flex-1">
       <img src="{{ asset('images/customer/group-office-equipment-with-laptop-tablet.jpg') }}" class="" alt="">
    </div>
</div>
@endsection