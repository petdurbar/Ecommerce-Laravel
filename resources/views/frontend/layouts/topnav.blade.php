<div class="flex justify-center items-center w-full max-md:hidden">
    <div
        class="min-[1300px]:w-[1250px] min-[1300px]:px-0 w-full md:px-[2.5rem] px-[1.5rem] md:flex justify-between items-center">
        <a href="/" class="lg:w-[75%]"><img src="{{ asset('logos/Logo.png') }}" class="w-80 object-cover"
                alt=""></a>


        <div class="flex flex-col gap-y-3 min-[1300px]:gap-y-6 lg:w-[35%] w-full">
            <div class="flex items-center md:justify-end gap-5 w-full">

                <div class="flex gap-2 items-center pr-5  border-r-2 border-r-black">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-user-filled text-[#ec1464]" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0"
                            fill="currentColor" />
                        <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z"
                            stroke-width="0" fill="currentColor" />
                    </svg>

                    @if (Auth::guard('customers')->check())
                        <div class="flex">
                            <a href="{{ route('myaccount') }}" class="font-medium">My Account</a>
                            <span class="px-1 font-semibold">/</span>
                            <form action="{{ route('user.logout') }}" method="post">
                                @csrf
                                <button type="submit">
                                    <p class="font-medium">Logout</p>
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="flex">
                            <a href="{{ route('login') }}" class="font-medium">Login</a>
                            <span class="px-1 font-semibold">/</span>
                            <a href="{{ route('register') }}">
                                <p class="font-medium">Register</p>
                            </a>
                        </div>
                    @endif
                </div>

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

                    <div id="cartCount"
                        class="absolute z-[999] cart-count max-md:bottom-4 bottom-4 left-3.5 bg-[#ec1464] text-white rounded-full text-xs px-1">
                        {{ totalCartQuantity() }}
                    </div>
                </a>
                {{-- <div class="flex gap-5">

                    <div class=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-search" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg></div>
                </div> --}}
                {{-- <form action="{{ route('product.search') }}" method="GET">

                <div class="flex gap-5">
                    <div id="searchIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </div>
                    <input class="rounded-md" type="text" id="searchInput" placeholder="Search...">
                </div>
                </form> --}}

                <form action="{{ route('product.search') }}" method="GET" id="searchForm">
                    <div class="flex gap-5">
                        <div id="searchIcon" style="cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>
                        </div>
                        <input class="rounded-md hidden text-xs px-1" type="text" id="searchInput" name="query" placeholder="Productname...">
                        <button type="submit" id="searchButton" class="hidden">Search</button>
                    </div>
                </form>



            </div>



            <div class="flex gap-5 md:justify-end w-full">
                <div class="flex gap-2 items-center pr-5  border-r-2 border-r-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-mobile"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                        <path d="M11 4h2" />
                        <path d="M12 17v.01" />
                    </svg>
                    <div class="font-medium"><a href="tel:+9779801467034">+977-9801467034</a></div>
                </div>


                <a href="{{ route('wishlist') }}" class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <div class="text-sm text-center font-medium">WISHLIST</div>
                </a>

                {{-- <div class="border border-y-8 border-black"></div> --}}

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#searchIcon').click(function() {
            // Toggle visibility of search icon and input elements
            $('#searchIcon').hide();
            $('#searchInput').removeClass('hidden').focus();
            $('#searchButton').removeClass('hidden');
        });

        $('#searchForm').submit(function() {
            // Check if the input field is blank before submitting the form
            if ($('#searchInput').val().trim() === '') {
                // Do not submit the form if the input is blank
                return false;
            }
        });
    });
</script>
