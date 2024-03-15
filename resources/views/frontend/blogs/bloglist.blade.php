<div class="bg-gray-200 flex justify-center items-center w-full">
    <div class="min-[1300px]:w-[1250px] min-[1300px]:px-0 w-full md:px-[2.5rem] px-[1.5rem]  py-[5rem] max-md:py-[2.5rem] space-y-5">
        <form action="{{ route('searchblog') }}" method="GET" class="flex justify-end flex-wrap mt-3 ">
            {{-- <div class="text-3xl text-black font-semibold">
                {{ $title }}
            </div> --}}
            <div class="flex">
                <div>
                    <input
                        class="text-sm border border-gray-700 p-4 focus:outline-none rounded-l-md focus:border-[#646368] hover:border-[#646368] w-[300px] max-sm:w-full h-[2.5rem]"
                        name="searchterm" placeholder="search" type="text" value="{{ old('searchterm', $searchterm) }}" />
                </div>
                <button type="submit" class="border h-[2.5rem] text-sm  border-black px-4 py-1 rounded-r-md text-white bg-black ">
    
                    <div>Search</div>
                </button>
            </div>
        </form>
    
    
        <div class="max-w-screel-2xl  ">
    
    
            @if ($message == 'No blogs found')
                <div class="bg-white shadow min-h-[300px] rounded italic text-sm flex justify-center items-center w-full">
    
                    {{ $message }}
                </div>
            @else
                <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
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
</div>
