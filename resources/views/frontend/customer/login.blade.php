@extends('frontend.layouts.app')
@section('main')
<div class="px-20 py-20 max-lg:px-10 max-sm:px-5">

    <div class="flex bg-white border rounded-xl">

        <section class="flex-1 p-6">

            <div class="hidden lg:relative md:block h-full">
                <img src="{{ asset('images/customer/seller-man-mobile-phone-professional-consultant-tech-store-shop-check-new-smart-watches.jpg') }}"
                    alt="" class="h-full object-cover rounded-xl">
            </div>
        </section>



        <main class="md:flex-1  md:p-6 p-3  max-md:w-full">
            <div class="max-md:w-full">

                <div class="pb-8">
                    <h1 class="text-3xl font-semibold text-black">Welcome Back</h1>
                    <div class="text-gray-700 mt-5">Don't have an account ? <a href="{{ route('register') }}"><span
                                class="font-medium text-black">Register for free</span></a> </div>
                </div>


                <form action="{{ route('user.login') }} " method="POST">
                    @include('admin.includes.messages')

                    @csrf
                    @method('post')
                    <div class=""><label for="" class="text-sm font-medium text-gray-700">Email</label>
                        <br>
                        <input type="email" name="email"
                            class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm">
                        @error('email')
                        <div class="invalid-feedback text-sm text-black" style="display: block;">
                            {{ $message }}

                        </div>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <label for="password" class="text-sm font-medium text-gray-700">Password</label><br>
                        <div class="relative">
                            <input type="password" name="password" id="password"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm">
                            <div class="absolute top-[30%] right-[1%] ">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-eye cursor-pointer " id="togglePassword"
                                    width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                            </div>
                        </div>
                        @error('password')
                        <div class="invalid-feedback text-sm text-black" style="display: block;">
                            {{ $message }}

                        </div>
                        @enderror
                    </div>

                    <div class="flex justify-end mt-5">
                        {{-- <div class="flex gap-2">
                            <input type="checkbox">
                            <span class="text-sm text-gray-700 ">Remember Me</span>
                        </div> --}}
                        <a href="{{ route('forgetpassword') }}">
                            <div class="font-medium text-black ">Forgot Password</div>
                        </a>
                    </div>
                    <button
                        class=" mt-5  rounded-md border border-black bg-black py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-black w-full focus:outline-none ">
                        Login
                    </button>

                </form>
                <div class="flex justify-center items-center mt-5 w-full ">
                  <div class="border border-gray-500 w-full"></div>
                  <div class="px-3">OR</div>
                  <div class="border border-gray-500 w-full"></div>


                </div>
                <a href="{{route('google-auth')}}" class="flex justify-center items-center gap-3 border mt-5 py-2 rounded-md border-gray-500">
                    <div class=""><img src="{{ asset('logos/google-icon.png') }}" class="w-5" alt=""></div>
                    <div class="font-medium ">Login With Google</div>
                </a>

            </div>
        </main>


    </div>
</div>

<script>
    const togglePassword = document.getElementById("togglePassword");
            const passwordInput = document.getElementById("password");
        
            togglePassword.addEventListener("click", () => {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                }
            });
</script>
@endsection