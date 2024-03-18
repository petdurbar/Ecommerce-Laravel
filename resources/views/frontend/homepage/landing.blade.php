<div class="landing mx-auto max-w-screen-2xl max-xl:px-10 max-md:px-5">
    <div class="flex h-[70vh]  max-xl:h-full w-full gap-8 ">
        {{-- <div class="w-[20%] h-full max-xl:w-[40%] max-lg:hidden relative shadow-lg py-2 ">
            @foreach (getCategories(0) as $category)
                <div
                    class="group inline-block hover:bg-orange-500 ccolors hover:text-white w-full border-b bg-white px-2 text-sm font-medium text-gray-500">
                    @if (count(getCategories($category->id)) > 0)
                        <a href="{{ route('categorysearch', $category->slug) }}">
                            <button aria-haspopup="true" aria-controls="menu"
                                class="outline-none focus:outline-none  px-3 py-1  flex items-center  justify-between w-full hover:bg-orange-500 hover:text-white">
                                <span class="font-medium text-sm  ">{{ $category->categoryname }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" class="ccolor"
                                    viewBox="0 0 320 512">
                                    <style>
                                        .ccolors {
                                            fill: #000000
                                        }

                                        .ccolors:hover {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </button>
                        </a>
                    @else
                        <a href="{{ route('categorysearch', $category->slug) }}">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="outline-none focus:outline-none ccolor px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-orange-500 hover:text-white">
                                <span class="">{{ $category->categoryname }}</span>
                            </button>
                        </a>
                    @endif
                    @if (count(getCategories($category->id)) > 0)
                        <ul id="menu" aria-hidden="true"
                            class="bg-white border py-2 transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                            @foreach (getCategories($category->id) as $subcategory)
                                <li class="hover:bg-orange-500 cursor-pointer ccolors  hover:text-white px-3">
                                    @if (count(getCategories($subcategory->id)) > 0)
                                        <a href="{{ route('categorysearch', $subcategory->slug) }}">

                                            <button aria-haspopup="true" aria-controls="menu-lang"
                                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                                <span class=" flex-1">{{ $subcategory->categoryname }}</span>

                                                <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" class=""
                                                    viewBox="0 0 320 512">
                                                    <style>
                                                        .ccolors {
                                                            fill: #000000
                                                        }

                                                        .ccolors:hover {
                                                            fill: #ffffff
                                                        }
                                                    </style>
                                                    <path
                                                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                                </svg>
                                            </button>
                                        </a>
                                    @else
                                        <a href="{{ route('categorysearch', $subcategory->slug) }}">
                                            <button aria-haspopup="true" aria-controls="menu-lang"
                                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                                <span class="">{{ $subcategory->categoryname }}</span>
                                            </button>
                                        </a>
                                    @endif
                                    @if (count(getCategories($subcategory->id)) > 0)
                                        <ul id="menu-lang" aria-hidden="true"
                                            class="bg-white border py-2  absolute top-[-0.18%] right-0
                                        transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                        text-sm font-medium text-gray-500 ">
                                            @if (count(getCategories($subcategory->id)) > 0)
                                                @foreach (getCategories($subcategory->id) as $twosubcategory)
                                                    <a href="{{ route('categorysearch', $twosubcategory->slug) }}">
                                                        <li
                                                            class="py-2 hover:bg-orange-500 cursor-pointer hover:text-white px-3">
                                                            {{ $twosubcategory->categoryname }}
                                                        </li>
                                                    </a>
                                                @endforeach
                                            @endif
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div> --}}



        <div class="w-[100%] h-[100%] max-xl:w-[100%] border max-lg:w-full ">
            <div class="swiper h-full w-full relative ">
                <div class="swiper-wrapper ">
                    @foreach ($slider as $key => $banner)
                        <div class="swiper-slide object-cover">
                            <img src="{{ asset('uploads/' . $banner->banner_image) }}" alt="swiper-image"
                                class="w-full object-cover h-full">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
