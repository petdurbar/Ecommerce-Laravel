<style>
    #results {
        display: none;
        position: absolute;
        max-height: 150px;
        width: 100%;
        overflow-y: auto;
        z-index: 999;
        /* Ensure the dropdown is above other content */
    }

    .result-item {
        padding: 5px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .result-item:hover {
        background-color: #F2F2F2;
    }
</style>
<section class="sticky top-0 bg-white z-[999] px-20 max-lg:px-10 max-md:px-5 mx-auto max-w-screen-2xl">

    <div class="flex  py-3 justify-between  items-center ">
        <div class="flex gap-5 max-lg:gap-2">
            <a href="{{ route('homepage') }}"><img src="{{ asset('images/investlogo.png') }}" alt="logo"
                    class="w-24 "></a>
        </div>


        <div class="w-[40%] relative max-md:hidden   ">


            <form action="{{ route('productsearch') }}" method="GET">
                <div class="flex">
                    <div class="relative w-full">
                        <input type="text" id="search" name="search-term"
                            class="block border border-[#4098c7] p-2.5 w-full z-20 text-sm text-gray-900 rounded-md outline-none "
                            placeholder="Search for product" required>
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                        </button>
                        <ul id="results" class="mt-2 border rounded-md bg-white shadow-lg">
                    </div>
                </div>
            </form>



            <ul id="results" class="mt-2 border rounded-md bg-white shadow-lg">
                <div class="relative text-gray-600 text-sm">
                    <ul id="searchResults"
                        class="absolute mt-2 px-3 w-full bg-white border border-gray-300 rounded shadow-lg hidden  overflow-y-hidden">
                    </ul>

                </div>
                <div class="absolute top-2 right-3 font-bold text-[#000]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </div>
        </div>



        <div class="flex gap-10 max-sm:gap-3 max-md:gap-8 text-[#000]">
            <a href="{{ route('wishlist') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>

            </a>

            {{-- <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                    class="bi bi-bell  mt-1" viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg>

                <div class="absolute top-0 right-0 bg-orange-500 rounded-full text-xs text-white px-1">1</div>
            </div> --}}

            {{-- @if (Auth::guard('customers')->user())
                <div class="relative">
                    <div class="flex text-[#6B9E41] cursor-pointer select-none" id="toggleButton">
                        <div class="font-medium text-lg">{{ Auth::guard('customers')->user()->name }}</div>
                        <span class="material-symbols-outlined pt-1">
                            arrow_drop_down
                        </span>
                    </div>
                    <div id="contentDiv"
                        class=" top-10 px-3 py-5 bg-white h-[15vh] w-[20vh] shadow-lg rounded-lg   absolute hidden z-10">
                        <a href="{{ route('user.dashboard') }}" class="flex gap-1 mb-3 cursor-pointer">
                            <span class="material-symbols-outlined text-xl text-[#6B9E41]">
                                dashboard
                            </span>
                            <span class="text-gray-600 ">Dashboard</span>
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex gap-1 cursor-pointer">
                                <span class="material-symbols-outlined text-xl text-[#6B9E41]">logout</span>
                                <span class="text-gray-600">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            @else --}}
            {{-- <div class="">
                <a href="/register">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-slate-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>

            </div> --}}


            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div>
                    <button x-on:click="open = true" type="button"
                        class="inline-flex justify-center w-full text-sm font-mediumfocus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-blue-700" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <svg class="w-4 h-4 ml-2 -mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            style="margin-top:3px">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                </div>
                <div x-cloak x-show="open" x-on:click.away="open = false"
                    class="absolute w-36 right-1 mt-2  bg-white shadow-lg rounded-xl  ring-1 ring-black ring-opacity-5 focus:outline-none">

                    @if (Auth::guard('softsaro__users')->user())
                        {{-- @if (Auth::guard('softsaro__users')->user()->is_affilate == 1 &&
                                Auth::guard('softsaro__users')->user()->status == 'VERIFIED') --}}
                            <a href="{{ route('portal.dashboard') }}">
                                <div class="py-1 border-b border-gray-200" role="none">
                                    <button
                                        class="flex px-4 rounded-tl-md py-2 text-sm text-gray-700 border-l-2 border-transparent  hover:border-blue-500 ">
                                        <span class="mr-2">
                                        </span>Dashboard</button>
                                </div>
                            </a>
                        {{-- @else --}}
                            {{-- <div class="py-1 border-b border-gray-200 " role="none">
                                <p class="px-4 pt-2 mb-1 text-sm font-normal text-gray-500 ">Signed in as:</p>
                                <div
                                    class="flex px-4 py-2 text-sm font-semibold text-gray-700 border-l-2 border-transparent hover:border-blue-500 ">
                                    <span class="mr-2 text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 bi bi-person-circle"
                                            viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg>
                                    </span> {{ Auth::guard('softsaro__users')->user()->name }}
                                </div>
                            </div> --}}
                        {{-- @endif --}}

                        <div class="py-1" role="none">
                            <form action="{{ route('front.logout') }}" method="POST" class="">
                                @csrf
                                <button
                                    class=" px-4 py-2  text-sm text-gray-700 border-l-2 border-transparent rounded-bl-md hover:border-blue-500 ">
                                    <span class="mr-2">
                                    </span>Logout</button>
                            </form>
                        </div>
                    @else
                        <div class="py-1 border-b" role="none">
                            <a href="{{ route('register') }}"
                                class="{{ request()->segment(1) == 'register' ? 'active flex px-4 py-2 text-sm font-medium border-l-2 border-transparent  rounded-tl-md hover:border-blue-500 hover:text-blue-500 text-[#000] underline' : 'flex px-4 py-2 text-sm font-medium border-l-2 border-transparent  rounded-tl-md hover:border-blue-500 hover:text-blue-500 text-[#000]' }}">
                                <span class="mr-2">

                                </span>Register</a>
                        </div>


                        <div class="py-1" role="none">
                            <a href="{{ route('login') }}"
                                class="{{ request()->segment(1) == 'login' ? 'active flex px-4 py-2 text-sm font-medium border-l-2 border-transparent  rounded-bl-md hover:border-blue-500 hover:text-blue-500 text-[#000]  underline' : 'flex px-4 py-2 text-sm font-medium border-l-2 border-transparent  rounded-bl-md hover:border-blue-500 hover:text-blue-500 text-[#000] ' }} ">
                                <span class="mr-2">

                                </span>Login</a>
                        </div>
                    @endif

                </div>
            </div>
            <style>
                [x-cloak] {
                    display: none;
                }
            </style>
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

            {{-- <div class="group inline-block relative z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-slate-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <div
                    class="absolute border text-[#000] hidden  group-hover:block bg-white shadow-md rounded-md mt-1 py-1  right-0">
                    <div>
                        @if (Auth::guard('softsaro__users')->user())
                            <form action="{{ route('front.logout') }}" method="POST">
                                @csrf
                                <button class="block px-4 py-2 text-sm hover:text-[#000] hover:underline">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a href="{{ route('register') }}"
                                class="block px-4 py-2 text-sm hover:text-[#000] hover:underline">
                                Register
                            </a>
                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 text-sm hover:text-[#000] hover:underline">
                                Login
                            </a>
                        @endif
                    </div>
                </div>
            </div> --}}
            {{-- @endif --}}


            <div class="relative">
                <a href="{{ route('cart') }}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg>
                </a>

                <div id="cartCount"
                    class="absolute cart-count  bottom-5 left-3.5 bg-orange-500 rounded-full text-xs text-white px-1">
                    {{ totalCartQuantity() }}
                </div>

                {{-- @if (cartItemCounter() > 0)
                    <div class="absolute top-0 right-0 bg-orange-500 rounded-full text-xs text-white px-1">
                        {{ cartItemCounter() }}</div>
                @endif --}}

            </div>

            {{-- <div class="relative">
                <a href="{{ route('cart') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg>
                </a>
                <div class="absolute top-0 right-0 bg-orange-500 rounded-full text-xs text-white px-1">1</div>

                cart ({{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}})

            </div> --}}
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





</section>
<script>
    const toggleButton = document.getElementById('toggleButton');
    const contentDiv = document.getElementById('contentDiv');


    function toggleDiv() {
        contentDiv.classList.toggle('hidden');
    }
    toggleButton.addEventListener('click', toggleDiv);
</script>
