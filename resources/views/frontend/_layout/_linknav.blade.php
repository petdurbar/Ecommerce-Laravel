<div class="bg-orange-500">
    <nav class="flex justify-between mx-auto max-w-screen-2xl text-white item px-4">
        <div class=" py-2 flex w-full justify-center  items-center ">
            <div class="relative max-md:block hidden w-3/4  p-1">
                <form action="{{ route('productsearch') }}" method="GET" class="-m-1">
                    <div class="flex">
                        <div class="relative w-full">
                            <input type="text" id="mbsearch" name="search-term"
                                class="w-full py-3 px-5 text-gray-600 text-sm border border-gray-200  rounded-md outline-none"
                                placeholder="Search for product" required>
                            <button type="submit" class="absolute top-3.5 right-3 text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                    <path d="M21 21l-6 -6"></path>
                                </svg>
                            </button>
                            <ul id="mbresults" class="mt-2 border z-[999] rounded-md bg-white text-gray-500 shadow-lg">
                        </div>
                    </div>
                </form>

            </div>




            <div id="mobileNavLinks"
                class="hidden max-md:absolute md:flex mx-auto font-semibold font-heading space-x-12 max-md:space-x-0 max-md:space-y-2.5 max-md:py-3 max-md:text-center max-md:top-[163px]  left-0 max-md:w-full md:justify-center max-md:bg-orange-500 text-white ">
                <div><a class="{{ request()->segment(1) == '' ? 'active hover:underline underline hover:text-gray-100  px-3 text-md font-medium mr-3 flex-1 item' : 'text-white px-3 text-md font-medium hover:underline hover:text-gray-100' }}"
                        href="{{ route('homepage') }}">Home</a></div>

                <div><a class="{{ request()->segment(1) == 'shop' ? 'active hover:underline underline hover:text-gray-100  px-3 text-md font-medium mr-3 flex-1 item' : 'text-white px-3 text-md font-medium hover:underline hover:text-gray-100' }}"
                        href="{{ route('allproducts') }}">Shop</a></div>

                <div><a class="{{ request()->segment(1) == 'services' ? 'active hover:underline underline hover:text-gray-100  px-3 text-md font-medium mr-3 flex-1 item' : 'text-white px-3 text-md font-medium hover:underline hover:text-gray-100' }}"
                        href="{{ route('services') }}">Service</a></div>

                <div><a class="{{ request()->segment(1) == 'blogs' ? 'active hover:underline underline hover:text-gray-100  px-3 text-md font-medium mr-3 flex-1 item' : 'text-white px-3 text-md font-medium hover:underline hover:text-gray-100' }}"
                        href="{{ route('blog') }}">Blogs</a></div>

                <div class="group inline-block relative z-10"><a
                        class="{{ request()->segment(1) == 'affilate' || request()->segment(1) == 'affilateform' ? 'active hover:underline underline hover:text-gray-100  px-3 text-md font-medium mr-3 flex-1 item' : 'text-white px-3 text-md font-medium hover:underline hover:text-gray-100' }} py-2"
                        href="{{ route('affilate') }}">Affiliate</a>


                </div>
                <div><a class="{{ request()->segment(1) == 'onlineprograms' ? 'active hover:underline underline hover:text-gray-100  px-3 text-md font-medium mr-3 flex-1 item' : 'text-white px-3 text-md font-medium hover:underline hover:text-gray-100' }} py-2"
                        href="{{ route('onlineprograms') }}">Online Programs</a></div>
            </div>
        </div>
        <a id="mobileNavToggle" class="navbar-burger self-center ml-4 md:hidden py-3" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-slate-100" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
    </nav>
</div>
<script>
    const categorytoggleButton = document.getElementById('categorytoggleButton');
    const categorycontentDiv = document.getElementById('categorycontentDiv');


    function toggleDiv() {
        categorycontentDiv.classList.toggle('hidden');
    }
    categorytoggleButton.addEventListener('click', toggleDiv);
</script>
<!-- Include your JavaScript code here -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileNavToggle = document.getElementById('mobileNavToggle');
        const mobileNavLinks = document.getElementById('mobileNavLinks');

        mobileNavToggle.addEventListener('click', () => {
            mobileNavLinks.classList.toggle('hidden');
        });
    });
</script>
