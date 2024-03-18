@extends('frontend._layout._master')
<title>Login | InvestForNepal</title>
@section('body')
    <div class="mx-auto max-w-screen-2xl">
        <div class="flex bg-white  shadow-xl rounded-xl">
            <section class="flex-1 hidden lg:relative md:block">
                <div class="hidden lg:relative md:block h-full">
                    <img src="{{ asset('images/login.svg') }}" alt="logo" class="h-full object-cover rounded-l-xl">
                </div>
            </section>
            <main class="flex-1 p-8">
                <div class="max-w-xl lg:max-w-3xl ">

                    <div class="pb-8">
                        {{-- <h1 class="text-3xl font-semibold text-[#6B9E41]">Welcome Back</h1> --}}
                        <p class="text-gray-500 font-medium py-2">Please Login to your account</p>
                    </div>
                    <form action="{{ route('user.login') }} " method="POST">
                        @include('admin.message.index')
                        @csrf
                        <div class=""><label for="" class="text-sm font-medium text-gray-700">Email</label>
                            <br>
                            <input type="email" name="email"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"  value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-5"> <label for=""
                                class="text-sm font-medium text-gray-700">Password</label> <br>
                            <input type="password" name="password"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"  value="{{ old('password') }}" required>

                            @error('password')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="flex justify-between mt-5">
                            <div class="flex gap-2">
                                <input type="checkbox">
                                <span class="text-sm text-gray-700 ">Remember Me</span>
                            </div>
                            <a href="">
                                <div class="font-medium text-[#000] ">Forgot Password</div>
                            </a>
                        </div>
                        <button
                            class=" mt-5  rounded-md border border-[#0f577d] bg-orange-500 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#000] w-full focus:outline-none focus:ring active:text-blue-500">
                            Login
                        </button>
                        <div class="text-gray-700 mt-5">Don't have an account ? <a href="/register"><span
                                    class="font-medium text-[#000] ">Register for free</span></a> </div>
                    </form>
                </div>
            </main>


        </div>
    </div>
@endsection
