<div class="py-10">
    <div class=" flex justify-center  mb-4">
        {{-- <h2 class="text-2xl font-semibold ">{{ $title }}</h2> --}}
        {{-- <a href="{{ route('popularproducts') }}"
            class="bg-[#0f577d] text-white px-4 mb-5 py-2 rounded-md hover:bg-[#346a86] focus:outline-none">
            View More
        </a> --}}
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-[#0f577d] sm:text-4xl">
                {{ $title }}
            </h2>

            <a href="{{ route('blog') }}"
                class=" text-[#0f577d] test-md rounded-md hover:text-[#346a86] focus:outline-none hover:underline">
                <p class="mt-4 text-[#4765a5] text-xl">
                    View all blogs.

                </p>
            </a>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 px-0 max-md:px-0 gap-6">
        @foreach ($blogs as $key => $blog)
            <a href="{{ route('single', $blog->slug) }}" class="rounded-lg  max-md:mt-8 mt-6  shadow transition hover:translate-y-2 hover:shadow-lg">
                @include('frontend.components.blogcomponent', ['allBlog' => $blog])
            </a>
        @endforeach

    </div>
</div>
