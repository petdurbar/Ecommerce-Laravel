@extends('frontend.layouts.app')
@section('main')

<div class="space-y-4 px-20 py-14 max-lg:px-10 max-sm:px-5">

    <div
        class="flex justify-center items-center font-bold text-4xl max-md:text-2xl max-sm:text-xl  md:pb-10">
        Frequently Asked Questions</span> </div>

    @foreach ($faqs as $key => $faq)


    <details class="group border-s-4 border-black bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden" close>
        <summary class="flex cursor-pointer items-center justify-between gap-1.5">
            <h2 class="text-lg font-medium text-gray-900">
                {{ $faq->title }}
            </h2>

            <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </summary>

        <p class="mt-4 leading-relaxed text-gray-700">
            {{ $faq->description }}
        </p>
    </details>
    @endforeach


</div>
@endsection