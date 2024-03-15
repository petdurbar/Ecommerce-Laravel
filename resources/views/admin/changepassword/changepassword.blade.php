@extends('admin/layouts/app')
@section('page_title', 'Change Password')
@section('container')
<div class="px-5 bg-background w-full">
    @include('admin.includes.messages')
    <div class=" justify-between">
        <div class="text-2xl font-bold">Change Password</div>
        <div class="w-full max-w-md">
            <div class="rounded-lg px-8 pt-20 pb-8 mb-4">
               

                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        <p class="font-bold">{{ session('success') }}</p>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p class="font-bold">{{ session('error') }}</p>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.password.update') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="current_password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Current Password') }}
                        </label>
                        <div class="relative">
                            <input id="current_password" type="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('current_password') border-red-500 @enderror"
                                name="current_password" required autocomplete="current-password">
                          
                            <span id="toggleCurrentPassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>
                            </span>
                        </div>
                        @error('current_password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="new_password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('New Password') }}
                        </label>
                        <div class="relative">
                            <input id="new_password" type="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('new_password') border-red-500 @enderror"
                                name="new_password" required autocomplete="new-password">
                        
                            <span id="toggleNewPassword" class="material-symbols-outlined absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                lock_open <!-- Icon when password is visible -->
                             
                            </span>
                        </div>
                        @error('new_password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="new_password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Confirm New Password') }}
                        </label>
                        <div class="relative">
                            <input id="new_password_confirmation" type="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="new_password_confirmation" required autocomplete="new-password">
                        
                            <span id="toggleConfirmNewPassword" class="material-symbols-outlined absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                lock_open <!-- Icon when password is visible -->
                              
                            </span>
                        </div>
                        @error('new_password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#ec1464] hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Change Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        const toggleCurrentPassword = document.getElementById('toggleCurrentPassword');
        const currentPasswordInput = document.getElementById('current_password');
    
        toggleCurrentPassword.addEventListener('click', () => {
            const type = currentPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            currentPasswordInput.setAttribute('type', type);
        });
    </script>
    
    <!-- Script for New Password -->
    <script>
        const toggleNewPassword = document.getElementById('toggleNewPassword');
        const newPasswordInput = document.getElementById('new_password');
    
        toggleNewPassword.addEventListener('click', () => {
            const type = newPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            newPasswordInput.setAttribute('type', type);
        });
    </script>
    
    <!-- Script for Confirm New Password -->
    <script>
        const toggleConfirmNewPassword = document.getElementById('toggleConfirmNewPassword');
        const confirmNewPasswordInput = document.getElementById('new_password_confirmation');
    
        toggleConfirmNewPassword.addEventListener('click', () => {
            const type = confirmNewPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmNewPasswordInput.setAttribute('type', type);
        });
    </script>







</div>
@endsection