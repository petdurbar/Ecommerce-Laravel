{{-- <div class="">
    <div class="px-20 max-md:px-10 max-sm:px-2 shadow-lg bg-black text-white">
        <div class="hidden md:block">
            <ul class="flex md:gap-10 gap-5 font-medium py-3  items-center">

                <li>
                    <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('/') ? 'active-link' : '' }}"
                        href="/">
                        HOME
                    </a>
                </li>
                <li class="relative group">
                    <a class="nav-link flex justify-center items-center gap-2 text-gray-100 transition hover:text-[#ec1464] {{ request()->is('category') ? 'active-link' : '' }}"
                        href="{{ route('category') }}">
                        <span>CATEGORIES</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chevron-down " viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                    <div
                        class="absolute hidden bg-white border-2 border-gray-200 shadow-lg w-[20vw] group-hover:block z-[999] ">
                        <!-- Dropdown content goes here -->
                        @foreach (getCategoriesForMenu(0) as $key => $category)
                        @if ($key < 14) <div class="group inline-block w-full border-b">
                            <a href="{{ url('/categories') }}/{{ $category->slug }}">
                                <div>
                                    <button aria-haspopup="true" aria-controls="menu"
                                        class="outline-none focus:outline-none px-3 py-2 flex items-center text-black justify-between w-full hover:bg-black hover:text-white">
                                        <span class="font-medium   ">{{ $category->category_name }}</span>
                                        @if (count(getCategoriesForMenu($category->id)) > 0)
                                        <span class="material-symbols-outlined text-lg font-medium">
                                            chevron_right
                                        </span>
                                        @endif
                                    </button>
                                </div>

                                @if (count(getCategoriesForMenu($category->id)) > 0)
                                <ul id="menu" aria-hidden="true"
                                    class="bg-white border h-[40vh]  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px]  font-medium text-black">
                                    @foreach (getCategoriesForMenu($category->id) as $subcategory)
                                    <li class="  hover:bg-black cursor-pointer hover:text-white px-3">
                                        <a href="{{ url('/categories') }}/{{ $subcategory->slug }}">
                                            <button aria-haspopup="true" aria-controls="menu-lang"
                                                class="w-full text-left flex items-center outline-none focus:outline-none py-2">
                                                <span class=" flex-1">{{ $subcategory->category_name }}</span>
                                                @if (count(getCategoriesForMenu($subcategory->id)) > 0)
                                                <span class="material-symbols-outlined text-lg font-medium">
                                                    chevron_right
                                                </span>
                                                @endif
                                            </button>
                                        </a>

                                        @if (count(getCategoriesForMenu($subcategory->id)) > 0)
                                        <ul id="menu-lang" aria-hidden="true" class="bg-white border py-2  absolute top-[-0.18%] right-0
                                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                                 font-medium text-black ">
                                            @if (count(getCategoriesForMenu($subcategory->id)) > 0)
                                            @foreach (getCategoriesForMenu($subcategory->id) as $twosubcategory)
                                            <a href="{{ url('/categories') }}/{{ $twosubcategory->slug }}">
                                                <li class="py-2 hover:bg-black cursor-pointer hover:text-white px-3">
                                                    {{ $twosubcategory->category_name }}</li>
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
                    @endif
                    @endforeach
        </div>

        <!-- Add more dropdown items as needed -->
        </li>










        <li>
            <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('about-us') ? 'active-link' : '' }}"
                href="{{ route('about-us') }}">
                ABOUT
            </a>
        </li>

        <li>
            <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('review') ? 'active-link' : '' }}"
                href="/review">
                REVIEWS
            </a>
        </li>

        <li>
            <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('location') ? 'active-link' : '' }}"
                href="/location">
                LOCATION
            </a>
        </li>

        <li>
            <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('blog') ? 'active-link' : '' }}"
                href="{{ route('blog') }}">
                BLOGS
            </a>
        </li>

        <li>
            <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('contact') ? 'active-link' : '' }}"
                href="/contact">
                CONTACT
            </a>
        </li>



        </ul>
    </div>
</div>
<div class="px-20 max-md:px-10 max-sm:px-2 shadow-lg bg-white text-black">
    <div class="block md:hidden py-3 ">
        <div class="flex w-full  items-center ">
            <div class="flex-1 flex items-center">

                <a href="/" class="cursor-pointer"> <img src="{{ asset('logos/Logo.png') }}" class="w-56 object-cover"
                        alt=""></a>
            </div>
            <div class="sm:flex-1 justify-end flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list "
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </div>
        </div>


    </div>
</div>
</div>

<style>
    .active-link {
        color: #ec1464;
        /* This is the pink color */
    }
</style> --}}



<div class="hidden md:block w-full">
    <nav class=" bg-black flex justify-center items-center w-full z-[999]">
        <div
            class="min-[1300px]:w-[1250px] min-[1300px]:px-0 w-full md:px-[2.5rem] px-[1.5rem]  flex items-center gap-[2.5rem] py-[1rem] ">


            <div id="mega-menu" class="items-center  justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <a class="nav-link text-gray-200 transition hover:text-white border-b border-b-transparent hover:border-b-2 hover:border-white {{ request()->is('/') ? 'active-link' : '' }}"
                            href="{{ route('index') }}">HOME</a>
                    </li>
                    {{-- <li>
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                            class="flex items-center justify-between nav-link text-gray-100 transition hover:text-[#ec1464]">
                            CATEGORIES <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-dropdown" class="absolute z-50 hidden">
                            <div
                                class="p-4 pb-0 text-black md:pb-4 d  w-full ml-28 max-w-4xl shadow-lg  bg-white rounded-lg border">
                                <div class="grid grid-cols-3 w-full gap-5 py-5">
                                    @foreach (getCategory() as $category)
                                        <a href=""
                                            class="flex gap-2 hover:bg-gray-100 cursor-pointer p-3 rounded-md">
                                            <div class=""><img
                                                    src="{{ asset('images/category/' . $category->image) }}"
                                                    class="w-24 " alt=""></div>
                                            <div class="">
                                                <div class="text-lg text-[#ec1464]">{{ $category->category_name }}</div>
                                                <div class="text-sm text-gray-600 ">{{ $category->description }}</div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </li> --}}
                    <li class="relative group">
                        <a href="{{ route('about-us') }}"
                            class="nav-link flex items-center justify-between text-gray-200 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white  "
                            href="">ABOUT US
                            <svg class="w-2.5 h-2.5 ms-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </a>
                        <div
                            class="hidden group-hover:block absolute top-6 left-1/2 transform -translate-x-1/2 bg-transparent rounded-md shadow-md">
                            <div class="bg-white mt-4 rounded-md shadow-md p-4">
                                <div class="w-[250px] ">
                                    @foreach (getabouts() as $about)
                                        <a href="{{ route('about-us') }}" class="text-slate-800 text-xs ">

                                            <p class="">{!! Illuminate\Support\Str::words($about->aboutherosection_description, 20, '...') !!}
                                            <span>See more</span>
                                            </p>

                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- <li>
                        <a class="nav-link  text-gray-100 transition hover:text-[#ec1464]  {{ request()->is('about-us') ? 'active-link' : '' }}"
                            href="{{ route('about-us') }}">ABOUT</a>
                    </li> --}}
                    <li class="relative group">
                        <a class="nav-link flex items-center justify-between text-gray-100 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white "
                            href="">CATEGORIES
                            <svg class="w-2.5 h-2.5 ms-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </a>
                        <div
                            class="hidden group-hover:block absolute top-6 left-1/2 transform -translate-x-1/2 bg-transparent rounded-md shadow-md">
                            <div class="bg-white mt-4 rounded-md shadow-md p-4">
                                <div class="grid grid-cols-3 gap-6 w-[520px] ">
                                    @foreach (getCategory() as $category)
                                        <a href="{{ route('category-products', $category->slug) }}"
                                            class="text-center cursor-pointer">
                                            <div class="flex flex-col items-center">
                                                <img src="{{ asset('images/category/' . $category->image) }}"
                                                    alt="Category Image" class="w-24 h-16 object-contain ">
                                                <p class="text-gray-800 text-xs mt-2">{{ $category->category_name }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>


                    <li>
                        <a class="nav-link text-gray-100 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white  {{ request()->is('reviews') ? 'active-link' : '' }}"
                            href="{{ route('used-products' ,'used-phones') }}">USED PHONES</a>
                    </li>


                    <li>
                        <a class="nav-link text-gray-100 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white  {{ request()->is('reviews') ? 'active-link' : '' }}"
                            href="/">REVIEWS</a>
                    </li>
                    <li>
                        <a class="nav-link text-gray-100 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white  {{ request()->is('location') ? 'active-link' : '' }}"
                            href="{{ route('location') }}">LOCATION</a>
                    </li>
                    {{-- <li>
                        <a class="nav-link text-gray-100 transition hover:text-[#ec1464] {{ request()->is('blogs') ? 'active-link' : '' }}"
                            href="{{ route('blog') }}">BLOGS</a>
                    </li> --}}
                    <li class="relative group">
                        <a href="{{ route('blog') }}"
                            class="nav-link flex items-center justify-between text-gray-100 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white  {{ request()->is('blogs') ? 'active-link' : '' }}"
                            href="">BLOGS
                            <svg class="w-2.5 h-2.5 ms-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </a>
                        <div
                            class="hidden group-hover:block absolute top-6 left-1/2 transform -translate-x-1/2 bg-transparent rounded-md shadow-md">
                            <div class="bg-white mt-4 rounded-md shadow-md p-4">
                                <div class="grid grid-cols-3 gap-6 w-[520px] ">
                                    @foreach (getblogs() as $blog)
                                        <div class="flex flex-col items-center">
                                            <img src="{{ asset('images/blogs/' . $blog->featured_image) }}"
                                                alt="Category Image" class="w-24 h-16 object-contain ">
                                            <p class="text-gray-800 text-xs mt-2">{{ $blog->title }}</p>
                                        </div>

                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link text-gray-100 transition hover:text-white border-b-2 border-b-transparent hover:border-b-2 hover:border-white  {{ request()->is('contact') ? 'active-link' : '' }}"
                            href="{{ route('contact.index') }}">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>


    </nav>
</div>

<div class="block md:hidden w-full shadow-lg bg-white">
    {{--
    <div class=" px-[1.5rem] w-full  flex items-center justify-between gap-5  py-3 ">
        <div class="flex-1 flex items-center">
            <a href="/" class="cursor-pointer"> <img src="{{ asset('logos/Logo.png') }}"
                    class="w-52 object-cover" alt=""></a>
        </div>
        <div class="sm:flex-1 justify-end flex gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart"
                viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="bi bi-list " viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </div>
    </div> --}}
    <section class="relative bg-gray-100 border-b font-poppins ">
        <div class="container mx-auto" x-data="{ open: false }">
            <nav class="flex justify-between ">
                <div class="flex items-center space-x-4 justify-between w-full px-4 py-2 lg:px-2 ">
                    <a href="{{ route('index') }}" class="text-2xl w-48 text-gray-700 "> <img src="{{ asset('logos/Logo.png') }}"
                            alt="Logo" class="w-full h-full"></a>
                    <div class="flex items-center lg:hidden ">
                        <a href="{{ route('wishlist') }}" class="mr-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </a>
                        {{-- <a href="{{ route('cart') }}" class="flex items-center mr-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class=" bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a> --}}
                          <a href="{{ route('cart') }}"
                    class="flex gap-2 relative items-center pr-5  border-r-2 border-r-black z-0">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-garden-cart text-[#ec1464]" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                        <path d="M6 8v11a1 1 0 0 0 1.806 .591l3.694 -5.091v.055" />
                        <path
                            d="M6 8h15l-3.5 7l-7.1 -.747a4 4 0 0 1 -3.296 -2.493l-2.853 -7.13a1 1 0 0 0 -.928 -.63h-1.323" />
                    </svg>
                    <p class="font-medium">Cart</p>

                    <div id="Count"
                        class="absolute  z-[999] cart-count max-md:bottom-4 bottom-4 left-3.5 bg-[#ec1464] text-white rounded-full text-xs px-1">
                        {{ totalCartQuantity() }}
                    </div>
                </a>
                        <button
                            class="flex items-center px-3 py-2 text-pink-600 border border-pink-200 rounded  hover:text-pink-800 hover:border-pink-300 lg:hidden"
                            @click="open =true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden font-medium lg:flex">
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Product</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Category</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Collection</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Brand</a>
                        </li>
                    </ul>
                    <div
                        class="items-center hidden max-w-xs py-2 pl-4 bg-white rounded-lg dark:text-gray-300  lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="mr-2 bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <input type="text" class="w-full py-2 pl-3 border-0 dark:text-gray-300 "
                            placeholder="Search...">
                        <div class="pr-4">
                            <select name="" id=""
                                class="pl-3 pr-4 border-0 border-l border-gray-400 cursor-pointer ">
                                <option value="">All items</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="items-center justify-end hidden lg:flex dark:text-gray-400">
                        <a href="" class="mr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                </path>
                            </svg>
                        </a>
                        <a href="" class="flex items-center dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <a href=""
                            class="items-center hidden pl-6 text-sm font-semibold lg:flex dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                fill="currentColor" class="mr-1 bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 w-full bg-gray-800 opacity-25 lg:hidden "
                :class="{
                    'translate-x-0 ease-in-opacity-100': open === true,
                    '-translate-x-full ease-out opacity-0': open ===
                        false
                }">
            </div>
            <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform shadow-md  bg-blue-50 w-80 lg:hidden lg:transform-none lg:relative"
                :class="{
                    'translate-x-0 ease-in-opacity-100': open === true,
                    '-translate-x-full ease-out opacity-0': open ===
                        false
                }">
                <div class="flex justify-between">
                    <a class="p-2 text-2xl font-bold " href="{{ route('index') }}">
                        <img src="{{ asset('logos/Logo.png') }}" alt="Logo" class="w-full h-full">
                    </a>
                    <button class="p-2 rounded-md hover:text-blue-300 lg:hidden " @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center px-5 mt-7 lg:hidden">
                    @if (Auth::guard('customers')->check())
                        <a href="{{ route('myaccount') }}" class="items-center mr-4 text-sm font-semibold lg:flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class=" bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                        </a>
                    @else
                        <div class="flex pr-5">
                            <a href="{{ route('login') }}" class="font-medium">Login</a>
                            <span class="px-1 font-semibold">/</span>
                            <a href="{{ route('register') }}">
                                <p class="font-medium">Register</p>
                            </a>
                        </div>
                    @endif

                    <a href="{{ route('wishlist') }}" class="mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="{{ route('cart') }}" class="flex items-center mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class=" bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </div>
                <div class="flex items-center max-w-xs py-2 pl-4 bg-white rounded-lg mt-7  lg:hidden">
                    <input type="text" class="w-full py-2 pl-3 border-0 " placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="mr-2 bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
                <ul class="px-5 text-left mt-7">
                    <li class="pb-3">
                        <a href="{{ route('index') }}" class="text-sm text-gray-700 hover:text-pink-400 ">Home</a>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('about-us') }}" class="text-sm text-gray-700 hover:text-pink-400 ">About
                            us</a>
                    </li>

                    <li class="pb-3" @click.away="open = false" class="relative " x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full  text-gray-700  text-sm text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline">
                            <span>Categories</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4  ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute  right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                @foreach (getCategory() as $category)
                                    <a href="{{ route('category-products', $category->slug) }}"
                                        class="block px-4 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent text-gray-700 focus:outline-none focus:shadow-outline">
                                        {{ $category->category_name }}
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('used-products' ,'used-phones') }}" class="text-sm text-gray-700 hover:text-pink-400 ">Used Phones</a>
                    </li>

                    <li class="pb-3">
                        <a href="#" class="text-sm text-gray-700 hover:text-pink-400 ">Reviews</a>
                    </li>
                    <li class="pb-3">
                        <a href="#" class="text-sm text-gray-700 hover:text-pink-400 ">Location</a>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('blog') }}" class="text-sm text-gray-700 hover:text-pink-400 ">Blogs
                        </a>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('contact.index') }}"
                            class="text-sm text-gray-700 hover:text-pink-400 ">Contact
                            us</a>
                    </li>


                </ul>
                {{-- <div class="hidden lg:block">
                    <a href=""
                        class="inline-block px-4 py-3 mr-2 text-xs font-medium leading-none text-gray-100 border border-gray-200 rounded-full dark:text-gray-300 dark:border-gray-400 hover:bg-blue-200 dark:hover:text-gray-700 hover:text-gray-700">
                        Contact Us
                    </a>
                </div> --}}
                <div class="border-t border-pink-400  my-7"></div>
                <div class="flex items-center px-5 lg:hidden">
                    @php
                        $d = getOtherSetting();

                    @endphp
                    <a href="{{ $d->facebook }}" class="mr-4 text-pink-600 " target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="https://wa.me/{{ $d->contact_number }}" class="mr-4 text-pink-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                    <a href="{{ $d->instagram }}" class="mr-4 text-pink-600" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                </div>

                {{-- <p class="text-xs text-pink-800 mt-4 max-[1300px]:text-center">&copy; 2022. Sajilo Mobile. All rights
                    reserved.
                </p> --}}

            </div>

        </div>
    </section>
    {{-- <section class="relative bg-gray-100 border-b font-poppins dark:bg-gray-800 dark:border-gray-800">
        <div class="container mx-auto" x-data="{ open: false }">
            <nav class="flex justify-between ">
                <div class="flex items-center justify-between w-full px-4 py-2 lg:px-2 ">
                    <a href="/" class="text-2xl w-32 text-gray-700 dark:text-gray-400"> <img
                            src="{{ asset('logos/Logo.png') }}" alt="Logo" class="w-full h-full"></a>
                    <div class="flex items-center lg:hidden ">
                        <a href="" class="mr-4 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </a>
                        <a href="" class="flex items-center mr-4 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class=" bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <button
                            class="flex items-center px-3 py-2 text-pink-600 border border-pink-200 rounded dark:text-gray-400 hover:text-pink-800 hover:border-pink-300 lg:hidden"
                            @click="open =true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden font-medium lg:flex">
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Product</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Category</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Collection</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 dark:text-gray-400">Brand</a>
                        </li>
                    </ul>
                    <div
                        class="items-center hidden max-w-xs py-2 pl-4 bg-white rounded-lg dark:text-gray-300 dark:bg-gray-600 lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="mr-2 bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <input type="text" class="w-full py-2 pl-3 border-0 dark:text-gray-300 dark:bg-gray-600"
                            placeholder="Search...">
                        <div class="pr-4">
                            <select name="" id=""
                                class="pl-3 pr-4 border-0 border-l border-gray-400 cursor-pointer dark:bg-gray-600">
                                <option value="">All items</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="items-center justify-end hidden lg:flex dark:text-gray-400">
                        <a href="" class="mr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                </path>
                            </svg>
                        </a>
                        <a href="" class="flex items-center dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <a href=""
                            class="items-center hidden pl-6 text-sm font-semibold lg:flex dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                fill="currentColor" class="mr-1 bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 w-full bg-gray-800 opacity-25 lg:hidden dark:bg-gray-400"
                :class="{
                    'translate-x-0 ease-in-opacity-100': open === true,
                    '-translate-x-full ease-out opacity-0': open ===
                        false
                }">
            </div>
            <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform shadow-md dark:bg-gray-800 bg-blue-50 w-80 lg:hidden lg:transform-none lg:relative"
                :class="{
                    'translate-x-0 ease-in-opacity-100': open === true,
                    '-translate-x-full ease-out opacity-0': open ===
                        false
                }">
                <div class="flex justify-between">
                    <a class="p-2 text-2xl font-bold dark:text-gray-400" href="#">
                        <img src="{{ asset('logos/Logo.png') }}" alt="Logo" class="w-full h-full">
                    </a>
                    <button class="p-2 rounded-md hover:text-blue-300 lg:hidden dark:text-gray-300"
                        @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center px-5 mt-7 lg:hidden">
                    <a href="" class="items-center mr-4 text-sm font-semibold lg:flex dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class=" bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                    <a href="{{route('wishlist')}}" class="mr-4 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="{{route('cart')}}" class="flex items-center mr-4 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class=" bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </div>
                <div
                    class="flex items-center max-w-xs py-2 pl-4 bg-white rounded-lg mt-7 dark:text-gray-300 dark:bg-gray-600 lg:hidden">
                    <input type="text" class="w-full py-2 pl-3 border-0 dark:text-gray-300 dark:bg-gray-600"
                        placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="mr-2 bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
                <ul class="px-5 text-left mt-7">
                    <li class="pb-3">
                        <a href="/"
                            class="text-sm text-gray-700 hover:text-pink-400 dark:text-gray-100">Home</a>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('about-us') }}"
                            class="text-sm text-gray-700 hover:text-pink-400 dark:text-gray-400">About
                            us</a>
                    </li>
                    <li class="pb-3">
                        <a href=""
                            class="text-sm text-gray-700 hover:text-pink-400 dark:text-gray-400">Features</a>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('blog') }}"
                            class="text-sm text-gray-700 hover:text-pink-400 dark:text-gray-400">Blog
                        </a>
                    </li>
                    <li class="pb-3">
                        <a href="{{ route('contact') }}"
                            class="text-sm text-gray-700 hover:text-pink-400 dark:text-gray-400">Contact us</a>
                    </li>
                </ul>
                <div class="hidden lg:block">
                    <a href=""
                        class="inline-block px-4 py-3 mr-2 text-xs font-medium leading-none text-gray-100 border border-gray-200 rounded-full dark:text-gray-300  hover:bg-blue-200 dark:hover:text-gray-700 hover:text-gray-700">
                        Contact Us
                    </a>
                </div>
                <div class="border-t border-pink-400 dark:border-gray-400 my-7"></div>
                <div class="flex items-center px-5 lg:hidden">
                    <a href="" class="mr-4 text-pink-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="" class="mr-4 text-pink-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                    <a href="" class="mr-4 text-pink-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                </div>



            </div>

        </div>
    </section> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</div>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<style>
    .active-link {
        color: #ec1464;
        /* This is the pink color */
    }
</style>
