@extends('frontend.layouts.app')


@section('main')
    <div class="flex items-center justify-center m-32 max-sm:m-5">
        <div class="p-4 rounded shadow-lg ring ring-pink-600">
            <div class="flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h1 class="text-4xl font-bold">Thank You !</h1>
                <p>Thank you for your interest! Check your email for a link to the guide.</p>
                <a href="{{ route('index') }}"
                    class="inline-flex items-center px-4 py-2 text-pink-600  border border-pink-600 rounded hover:bg-pink-600 hover:text-white hover:duration-100 focus:outline-none focus:ring">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <span class="text-sm font-medium">
                        Home
                    </span>
                </a>
            </div>
        </div>
    </div>
@endsection
