@extends('frontend.layouts.app')
@section('main')

<div class="px-20 py-20 max-lg:px-10 max-sm:px-5">
    <div class="flex max-sm:gap-0 gap-6 bg-white   rounded-xl border">
  
        .
            <main class="md:flex-1  flex  md:p-6 p-3 ">
                <div class="max-md:w-full">
                    
                    <div class="pb-8">
                        <h1 class="text-3xl font-semibold text-black">Sign Up</h1>
                        <p class="text-gray-500 font-medium py-2 max-sm:text-sm">Create new account today to reap the benefits of a personalized shopping experience.</p>
                    </div>
        
                    <form action="{{route('user.register')}}
                    " method="POST" class=" max-md:w-full grid grid-cols-6 gap-6" id="registrationForm">
                  
                        @csrf
        
                        <div class="col-span-6 sm:col-span-3">
                            <label for="FullName" class="block text-sm font-medium text-gray-700">
                                Full Name
                            </label>
        
                            <input type="text" id="FullName" name="name"
                                class="mt-1  p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" value="{{ old('name') }}"/>
        
                                @error('name')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    {{ $message }}
                    
                                </div>
                            @enderror
                        </div>
        
        
        
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
        
                            <input type="email" id="email" name="email"
                                class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" value="{{ old('email') }}"/>
                                @error('email')
                                <div class="invalid-feedback text-sm text-red-500 " style="display: block;">
                                    {{ $message }}
                    
                                </div>
                            @enderror
                        </div>
        
                       
        
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Phonenumber" class="block text-sm font-medium text-gray-700">
                                Phone Number
                            </label>
        
                            <input type="number" id="phone" name="phone"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" value="{{ old('phone') }}" />
                                @error('phone')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    {{ $message }}
                    
                                </div>
                            @enderror
                        </div>
        
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Address" class="block text-sm font-medium text-gray-700">
                                Address
                            </label>
        
                            <input type="text" id="address" name="address"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" value="{{ old('address') }}"/>
                                @error('address')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    {{ $message }}
                    
                                </div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="relative">
                                <input type="password" name="password" id="password"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" >
                                <div class="absolute top-[30%] right-[1%] ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-eye cursor-pointer "id="togglePassword"
                                        width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                               
                            </div>
                            @error('password')
                            <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                {{ $message }}
                
                            </div>
                        @enderror
                        </div>
                           
                               
                        
        
                        <div class="col-span-6 sm:col-span-3">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                Password Confirmation
                            </label>
                            <div class="relative">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" >
                                <div class="absolute top-[30%] right-[1%] ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-eye cursor-pointer "id="toggleConfirmationPassword"
                                        width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                               
                            </div>
                            
        
                           
                                @error('password_confirmation')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    {{ $message }}
                    
                                </div>
                            @enderror
                        </div>
        
                        <div class="col-span-6">
                            <label for="MarketingAccept" class="flex gap-2">
                                <input style="" type="checkbox" id="MarketingAccept" name="marketing_accept"
                                    class=" py-2 border rounded-md border-gray-200 bg-white shadow-sm" />
        
                                <span class="text-sm text-gray-700">
                                    I agree to terms and conditions
                                </span>
                            </label>
                        </div>
        
                    
        
                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                                class="inline-block shrink-0 rounded-md border border-black bg-black px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-black focus:outline-none">
                                Create an account
                            </button>
        
                            <p class="mt-4  text-gray-500 sm:mt-0">
                                Already have an account?
                                <a href="{{ route('login') }}" class="font-medium text-black underline">Log in</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        
            <section class="flex-1 p-6">
        
                <div class="hidden lg:relative md:block h-full">
                    <img src="{{ asset('images/customer/indian-man-customer-buyer-mobile-phone-store-making-selfie-by-smartphone-monopod-stick-south-asian-peoples-technologies-concept-cellphone-shop.jpg') }}" alt="" class="h-full object-cover rounded-lg">
                </div>
            </section>
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

    const toggleConfirmationPassword = document.getElementById("toggleConfirmationPassword");
    const passwordConfirmInput = document.getElementById("password_confirmation");

    toggleConfirmationPassword.addEventListener("click", () => {
        if (passwordConfirmInput.type === "password") {
            passwordConfirmInput.type = "text";
        } else {
            passwordConfirmInput.type = "password";
        }
    });

    const form = document.getElementById("registrationForm");
    const checkbox = document.getElementById("MarketingAccept");

    form.addEventListener("submit", function (event) {
        if (!checkbox.checked) {
            event.preventDefault();
            toastr.error('Please agree to our terms and conditions', null, {
                        positionClass: 'toast-top-right',
                        closeButton: true,
                        progressBar: true,
                        tapToDismiss: false,
                        timeOut: 5000,
                        extendedTimeOut: 2000,
                        showDuration: 300,
                        hideDuration: 1000,
                        showMethod: 'fadeIn',
                        hideMethod: 'fadeOut',
                        preventDuplicates: true,
                        progressBarClass: "toast-progress-red",
                        toastClass: "toast-red"
                    });
           
        }
    });
</script>
@endsection