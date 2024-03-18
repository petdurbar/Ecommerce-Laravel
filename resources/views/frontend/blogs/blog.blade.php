@extends('frontend._layout._master')

@section('body')
    {{-- <div class="container mx-auto p-4">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($blogs as $key => $blog)
                <div>
                    <a href="{{ route('single', $blog->slug) }}">
                        <div class="rounded-lg bg-gray-100">
                            @include('frontend.components.blogcomponent', ['allBlog' => $blog])4
                        </div>
                    </a>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <div class="aspect-w-3 aspect-h-2 mb-4">
                        <img class="object-cover object-center w-full h-full"
                            src="{{ asset('/uploads/' . $blog->featured_image) }}" alt="Blog Image">
                    </div>
                    <h2 class="text-xl font-semibold mb-2">Blog Title</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="mx-auto max-w-screen-2xl">
        <form action="{{ route('searchblog') }}" method="GET" class="flex justify-between flex-wrap mt-3 ">
            <div class="text-2xl text-[#000]">
                {{ $title }}
            </div>
            <div class="flex gap-2 mt-2">
                <div>
                    <input
                        class="text-xs border border-gray-300 p-3 focus:outline-none rounded focus:border-[#646368] hover:border-[#646368] w-full"
                        name="searchterm" placeholder="search" type="text" value="{{ old('searchterm', $searchterm) }}" />
                </div>
                <button type="submit"
                    class="border  border-[#0f577d] px-4 py-1 rounded-md mr-2 text-[#000] bg-white hover:bg-orange-500 hover:text-white">

                    <div>Search</div>
                </button>
            </div>
        </form>
        @if ($searchterm)
            <div class=" inline-flex items-center text-sm font-medium text-gray-600">

                {{ Breadcrumbs::render('single', $searchterm) }}
            </div>
        @endif

        <div class="max-w-screel-2xl  ">
            <!-- Responsive blog section -->
            {{-- grid max-w-screen-lg justify-center px-4 sm:grid-cols-2 sm:gap-4 sm:px-8 md:grid-cols-4 --}}


            @if ($message == 'No blogs found')
                <div class="text-center text-[#000] mt-10 underline">

                    {{ $message }}
                </div>
            @else
                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($blogs as $key => $blog)
                        <a href="{{ route('single', $blog->slug) }}"
                            class="rounded-lg  max-md:mt-8 mt-6  shadow transition hover:translate-y-2 hover:shadow-lg">
                            @include('frontend.components.blogcomponent', ['allBlog' => $blog])
                        </a>
                    @endforeach

                </div>

                <div class=" mt-3">
                    {{ $blogs->links('vendor.pagination.tailwind') }}
                </div>
            @endif
        </div>
    </div>


@endsection
