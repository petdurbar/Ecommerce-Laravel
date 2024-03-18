@extends('frontend._layout._master')
<title>Register | InvestForNepal</title>


@section('body')
    <div class="mx-auto max-w-screen-2xl">

        <div class="flex  gap-6 bg-white  shadow-xl rounded-xl">
            <main class="flex-1 flex  p-6 ">
                <div class="max-w-xl lg:max-w-3xl">

                    <div class="pb-8">
                        <h1 class="text-3xl font-semibold text-[#6B9E41]">Get In Touch</h1>
                        <p class="text-gray-500 font-medium py-2">Create new account today to reap the benefits of a
                            personalized shopping experience.</p>
                    </div>

                    <form action="{{ route('user.store') }} " method="POST" class=" grid grid-cols-6 gap-6">
                        {{-- @include('message.index') --}}
                        @csrf

                        <div class="col-span-6 sm:col-span-3">
                            <label for="FullName" class="block text-sm font-medium text-gray-700">
                                Full Name
                            </label>

                            <input type="text" id="FullName" name="name"
                                class="mt-1  p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('name') }}" required />

                            @error('name')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>

                            <input type="email" id="email" name="email"
                                class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('email') }}" required/>
                            @error('email')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Phonenumber" class="block text-sm font-medium text-gray-700">
                                Phone Number
                            </label>

                            <input type="number" id="Phonenumber" name="phonenumber"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('phonenumber') }}" required/>
                            @error('phonenumber')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Address" class="block text-sm font-medium text-gray-700">
                                Address
                            </label>

                            <input type="text" id="Address" name="address"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('address') }}" required />
                            @error('address')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>

                            <input type="password" id="Password" name="password"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('password') }}" required />
                            @error('password')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                                Password Confirmation
                            </label>

                            <input type="password" id="Passwordfirmation" name="confirm_password"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('confirm_password') }}" required/>
                            @error('confirm_password')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6">
                            <label for="MarketingAccept" class="flex gap-2">
                                <input type="checkbox" id="MarketingAccept" name="marketing_accept"
                                    class=" py-2 border rounded-md border-gray-200 bg-white shadow-sm" />

                                <span class="text-sm text-gray-700">
                                    I agree to terms and conditions
                                </span>
                            </label>
                        </div>


                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                                class="inline-block shrink-0 rounded-md border border-[#0f577d] bg-orange-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#000] focus:outline-none focus:ring active:text-blue-500 ">
                                Create an account
                            </button>

                            <p class="mt-4  text-gray-500 sm:mt-0">
                                Already have an account?
                                <a href="/login" class="font-medium text-[#000] underline">Log in</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>

            <section class="flex-1 hidden md:relative lg:block">

                <div class="hidden lg:relative md:block h-full">
                    <img src="{{ asset('images/signup.svg') }}" alt="signup" class="h-full object-cover rounded-r-xl">
                </div>
            </section>
        </div>
    </div>
@endsection
