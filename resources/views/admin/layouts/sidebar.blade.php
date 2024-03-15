{{-- <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r-2 border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="h-full px-5 py-10 overflow-y-auto bg-white ">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="
            {{ route('admin.dashboard') }}
            "
                    class="@yield('dashboard_select') flex  items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <span class="material-symbols-outlined">
                        bar_chart_4_bars
                    </span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="
            {{ route('category.index') }}
            "
                    class="@yield('category_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <span class="material-symbols-outlined">
                        category
                    </span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Category</span>
                </a>
            </li>




            <li>
                <a href="
            {{ route('product.index') }}
            "
                    class="@yield('product_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <span class="material-symbols-outlined">
                        inventory_2
                    </span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="
            {{ route('attribute.index') }}
            "
                    class="@yield('attribute_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <span class="material-symbols-outlined">
                        package
                    </span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Attribute</span>
                </a>
            </li>


            <li>
                <a href="
            {{ route('blogs.index') }}
            "
                    class="@yield('blog_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-substack" viewBox="0 0 16 16">
                        <path d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208zM15 0H1v1.89h14z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Blog</span>
                </a>
            </li>



            <li>
                <a href="{{ route('faq.index') }}"
                    class="@yield('faq_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-patch-question" viewBox="0 0 16 16">
                        <path
                            d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745" />
                        <path
                            d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                        <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Faq</span>
                </a>
            </li>

            <li>
                <a href="{{ route('banner.index') }}"
                    class="@yield('banner_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-badge-ad" viewBox="0 0 16 16">
                        <path
                            d="m3.7 11 .47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11zm1.503-4.852.734 2.426H4.416l.734-2.426zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z" />
                        <path
                            d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Home Banner</span>
                </a>
            </li>

            <li>
                <a href="{{ route('privacy-policy.index') }}"
                    class="@yield('privacy_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Privacy Policy</span>
                </a>
            </li>



            <li>
                <a href="{{ route('termsandcondition.index') }}"
                    class="@yield('terms_select') flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Terms & Conditions</span>
                </a>
            </li>




        </ul>
    </div>
</aside> --}}


<div x-clock x-data="{ sidebarOpen = true }">
    <div x-cloak x-show="sidebarOpen" class="hidden lg:block fixed inset-0 z-20 transition-opacity pointer-events-none">
    </div>

    <!-- Overlay for Small Screens -->
    <div x-cloak x-show="sidebarOpen" @click="sidebarOpen = false"
        class="block lg:hidden fixed inset-0 z-10 bg-black opacity-50"></div>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <div x-data="handleSwipe()" x-cloak
        :class="sidebarOpen ? 'translate-x-0 ease-out w-64 lg:w-64' : '-translate-x-full ease-in'"
        @touchstart="touchStart" @touchend="touchEnd"
        class="fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform bg-white border"
        style="height: calc(100% - [footer-height]px);">
        <div>
            <nav class="mt-28">
                <a class="{{ request()->segment(2) == 'dashboard' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="{{ route('admin.dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4h6v6h-6z"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>
                <div x-data="{ dropdownOpen: false, activeRoute: '{{ request()->segment(2) }}' }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen"
                        class="{{ request()->segment(2) == 'page' ? 'w-full  bg-sky-500 text-white flex items-center px-6 py-2  flex-1 mt-2 item ' : 'w-full flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}">
                        <span class="material-symbols-outlined">
                            dynamic_feed
                        </span>
                        <span class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px">
                            <span>CMS</span>

                        </span>
                        <svg class="absolute right-0 w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>
                    </button>
                    <div x-show="dropdownOpen" @click.away="dropdownOpen=false"
                        x-transition:enter="ease-out duration-200" x-transition:enter-start="-translate-y-2"
                        x-transition:enter-end="translate-y-0"
                        class="absolute top-0 z-50 w-56 mt-12 -translate-x-1/2 left-1/2" x-cloak>
                        <div
                            class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                            <a href="
                            {{ route('other-pages.index') }}
                            "
                                x-init="dropdownOpen = (activeRoute == 'other-pages') ? true : dropdownOpen"
                                class="{{ request()->segment(2) == 'other-pages' ? 'bg-sky-500 text-white relative flex cursor-default select-none hover:bg-neutral-100 hover:text-slate-700 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' : 'relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' }}">
                                <span class="material-symbols-outlined text-xl">
                                    pages
                                </span>
                                <span class="mx-3">Pages</span>
                            </a>
                            {{-- <a href="
                            {{ route('other-pages.index') }}
                            "
                                x-init="dropdownOpen = (activeRoute == 'other-pages') ? true : dropdownOpen"
                                class="{{ request()->segment(2) == 'other-pages' ? 'bg-sky-500 text-white relative flex cursor-default select-none hover:bg-neutral-100 hover:text-slate-700 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' : 'relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' }}">
                                <span class="material-symbols-outlined text-xl">
                                    pages
                                </span>
                                <span class="mx-3">Mega Menu</span>
                            </a> --}}
                            {{-- <a href="
                            {{ route('termsandcondition') }}
                            "
                                x-init="dropdownOpen = (activeRoute == 'termsandcondition') ? true : dropdownOpen"
                                class="{{ request()->segment(2) == 'termsandcondition' ? 'bg-sky-500 text-white relative flex cursor-default select-none hover:bg-neutral-100 hover:text-slate-700 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' : 'relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' }}">
                                <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-social"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M12 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 7l0 4"></path>
                                        <path d="M6.7 17.8l2.8 -2"></path>
                                        <path d="M17.3 17.8l-2.8 -2"></path>
                                    </svg></i>
                                <span class="mx-3">Terms and Conditions</span>
                            </a> --}}
                        </div>

                    </div>

                </div>
                <a class="{{ request()->segment(2) == 'blogs' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('blogs.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-blogger"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8 21h8a5 5 0 0 0 5 -5v-3a3 3 0 0 0 -3 -3h-1v-2a5 5 0 0 0 -5 -5h-4a5 5 0 0 0 -5 5v8a5 5 0 0 0 5 5z" />
                        <path
                            d="M7 7m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h3a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-3a1.5 1.5 0 0 1 -1.5 -1.5z" />
                        <path
                            d="M7 14m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h7a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 -1.5 -1.5z" />
                    </svg>

                    <span class="mx-3">Blogs</span>
                </a>
                <a class="{{ request()->segment(2) == 'contactadmin' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('contactadmin.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-address-book"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z" />
                        <path d="M10 16h6" />
                        <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 8h3" />
                        <path d="M4 12h3" />
                        <path d="M4 16h3" />
                    </svg>

                    <span class="mx-3">Contacts</span>
                </a>

                <a class="{{ request()->segment(2) == 'banner' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('banner.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Banner</span>
                </a>
                {{-- <a class="{{ request()->segment(2) == 'banner1' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('banner1.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Banner1</span>
                </a> --}}
                <a class="{{ request()->segment(2) == 'secondbanner' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('secondbanner.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Banner2</span>
                </a>


                <a class="{{ request()->segment(2) == 'faqs' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('faq.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.425 1.414a3.33 3.33 0 0 1 3.026 -.097l.19 .097l6.775 3.995l.096 .063l.092 .077l.107 .075a3.224 3.224 0 0 1 1.266 2.188l.018 .202l.005 .204v7.284c0 1.106 -.57 2.129 -1.454 2.693l-.17 .1l-6.803 4.302c-.918 .504 -2.019 .535 -3.004 .068l-.196 -.1l-6.695 -4.237a3.225 3.225 0 0 1 -1.671 -2.619l-.007 -.207v-7.285c0 -1.106 .57 -2.128 1.476 -2.705l6.95 -4.098zm1.575 13.586a1 1 0 0 0 -.993 .883l-.007 .117l.007 .127a1 1 0 0 0 1.986 0l.007 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm1.368 -6.673a2.98 2.98 0 0 0 -3.631 .728a1 1 0 0 0 1.44 1.383l.171 -.18a.98 .98 0 0 1 1.11 -.15a1 1 0 0 1 -.34 1.886l-.232 .012a1 1 0 0 0 .111 1.994a3 3 0 0 0 1.371 -5.673z"
                            stroke-width="0" fill="currentColor" />
                    </svg>

                    <span class="mx-3">Faq</span>
                </a>

                <a class="{{ request()->segment(2) == 'product' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('product.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                        <path d="M12 12l8 -4.5" />
                        <path d="M12 12l0 9" />
                        <path d="M12 12l-8 -4.5" />
                    </svg>
                    <span class="mx-3">Products</span>
                </a>

                {{-- <a class="{{ request()->segment(2) == 'salesreport' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('salesreport') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                        <path d="M9 17v-5" />
                        <path d="M12 17v-1" />
                        <path d="M15 17v-3" />
                    </svg>
                    <span class="mx-3">Sales Report</span>
                </a> --}}


                <a class="{{ request()->segment(2) == 'category' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('category.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>
                    <span class="mx-3">Category</span>
                </a>

                <a class="{{ request()->segment(2) == 'attributes' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('attributegroup.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple  }}"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                        </path>
                        <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path>
                    </svg>
                    <span class="mx-3">Attributes</span>
                </a>

                {{-- <a class="{{ request()->segment(2) == 'rating' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('rating.index') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7.425 9.475L11.15 3.4q.15-.25.375-.363T12 2.925q.25 0 .475.113t.375.362l3.725 6.075q.15.25.15.525t-.125.5q-.125.225-.35.363t-.525.137h-7.45q-.3 0-.525-.138T7.4 10.5q-.125-.225-.125-.5t.15-.525ZM17.5 22q-1.875 0-3.188-1.313T13 17.5q0-1.875 1.313-3.188T17.5 13q1.875 0 3.188 1.313T22 17.5q0 1.875-1.313 3.188T17.5 22ZM3 20.5v-6q0-.425.288-.713T4 13.5h6q.425 0 .713.288T11 14.5v6q0 .425-.288.713T10 21.5H4q-.425 0-.713-.288T3 20.5Zm14.5-.5q1.05 0 1.775-.725T20 17.5q0-1.05-.725-1.775T17.5 15q-1.05 0-1.775.725T15 17.5q0 1.05.725 1.775T17.5 20ZM5 19.5h4v-4H5v4ZM10.05 9h3.9L12 5.85L10.05 9ZM12 9Zm-3 6.5Zm8.5 2Z" />
                    </svg>
                    <span class="mx-3">Rating</span>
                </a> --}}

                {{-- <a class="{{ request()->segment(2) == 'brand' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('brand.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-ansible"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M9.647 12.294l6.353 3.706l-4 -9l-4 9"></path>
                    </svg>
                    <span class="mx-3">Brand</span>
                </a> --}}

                {{-- <a class="{{ request()->segment(2) == 'coupon' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('coupon.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gift" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                        <path d="M12 8l0 13" />
                        <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                        <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                    </svg>
                    <span class="mx-3">Coupon</span>
                </a> --}}

                {{-- <a class="{{ request()->segment(2) == 'banner' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('banner.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M15 8h.01"></path>
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z">
                        </path>
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5"></path>
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3"></path>
                    </svg>
                    <span class="mx-3">Home Banner</span>
                </a> --}}


                {{-- order --}}

                <a class="{{ request()->segment(2) == 'order' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('getorder') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M6 13c-2.21 0-4 1.79-4 4s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 6c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2M6 3C3.79 3 2 4.79 2 7s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m6 2h10v2H12V5m0 14v-2h10v2H12m0-8h10v2H12v-2Z" />
                    </svg>
                    <span class="mx-3">Manage Orders</span>
                </a>


                <a class="{{ request()->segment(2) == 'admin.users' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="
                    {{ route('admin.users') }}
                    ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M6 13c-2.21 0-4 1.79-4 4s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 6c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2M6 3C3.79 3 2 4.79 2 7s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m6 2h10v2H12V5m0 14v-2h10v2H12m0-8h10v2H12v-2Z" />
                    </svg>
                    <span class="mx-3">Users</span>
                </a>

                {{-- <a class="{{ request()->segment(2) == 'salesreport' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('admin.salesreport') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                        <path d="M9 17v-5" />
                        <path d="M12 17v-1" />
                        <path d="M15 17v-3" />
                    </svg>
                    <span class="mx-3">Sales Report</span>
                </a> --}}




                {{-- company dropdown --}}
                {{--
                <div id="dropdownDefaultButton"
                    class="{{ request()->segment(2) == 'setting' ? ' bg-sky-500 text-white flex items-center px-6 py-1  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-1  text-gray-600' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                        </path>
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                    </svg>
                    <div class="flex justify-between w-full items-center mx-3 cursor-pointer">
                        <span>Setting</span>
                        <div>
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </div>
                    </div>
                </div> --}}
                <div x-data="{ dropdownOpen: false, activeRoute: '{{ request()->segment(2) }}' }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen"
                        class="{{ request()->segment(2) == 'page' ? 'w-full  bg-sky-500 text-white flex items-center px-6 py-2  flex-1 mt-2 item ' : 'w-full flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                            </path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>
                        <span class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px">
                            <span>Settings</span>

                        </span>
                        <svg class="absolute right-0 w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>
                    </button>
                    <div x-show="dropdownOpen" @click.away="dropdownOpen=false"
                        x-transition:enter="ease-out duration-200" x-transition:enter-start="-translate-y-2"
                        x-transition:enter-end="translate-y-0"
                        class="absolute top-0 z-50 w-56 mt-12 -translate-x-1/2 left-1/2" x-cloak>
                        <div
                            class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                            <a href="
                            {{ route('admin.setting') }}
                            "
                                x-init="dropdownOpen = (activeRoute == 'setting') ? true : dropdownOpen"
                                class="{{ request()->segment(2) == 'setting' ? 'bg-sky-500 text-white relative flex cursor-default select-none hover:bg-neutral-100 hover:text-slate-700 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' : 'relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' }}">
                                <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-social"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M12 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 7l0 4"></path>
                                        <path d="M6.7 17.8l2.8 -2"></path>
                                        <path d="M17.3 17.8l-2.8 -2"></path>
                                    </svg></i>
                                <span class="mx-3">Other Settings</span>
                            </a>
                            {{-- <a href="
                            {{ route('other-pages.index') }}
                            "
                                x-init="dropdownOpen = (activeRoute == 'other-pages') ? true : dropdownOpen"
                                class="{{ request()->segment(2) == 'other-pages' ? 'bg-sky-500 text-white relative flex cursor-default select-none hover:bg-neutral-100 hover:text-slate-700 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' : 'relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' }}">
                                <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-social"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M12 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 7l0 4"></path>
                                        <path d="M6.7 17.8l2.8 -2"></path>
                                        <path d="M17.3 17.8l-2.8 -2"></path>
                                    </svg></i>
                                <span class="mx-3">Other Pages</span>
                            </a> --}}
                            {{-- <a href="
                            {{ route('termsandcondition') }}
                            "
                                x-init="dropdownOpen = (activeRoute == 'termsandcondition') ? true : dropdownOpen"
                                class="{{ request()->segment(2) == 'termsandcondition' ? 'bg-sky-500 text-white relative flex cursor-default select-none hover:bg-neutral-100 hover:text-slate-700 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' : 'relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50' }}">
                                <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-social"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M12 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 7l0 4"></path>
                                        <path d="M6.7 17.8l2.8 -2"></path>
                                        <path d="M17.3 17.8l-2.8 -2"></path>
                                    </svg></i>
                                <span class="mx-3">Terms and Conditions</span>
                            </a> --}}
                        </div>

                    </div>

                </div>


            </nav>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script>
    function handleSwipe() {
        let startX;

        return {
            touchStart(e) {
                startX = e.touches[0].clientX;
            },
            touchEnd(e) {
                const endX = e.changedTouches[0].clientX;
                const threshold = 50;

                if (startX - endX > threshold) {
                    this.sidebarOpen = false;
                }
            }
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.getElementById("dropdownDefaultButton");
        const dropdownMenu = document.getElementById("dropdown2");

        dropdownButton.addEventListener("click", function(event) {
            event.preventDefault();
            dropdownMenu.classList.toggle("hidden");
        });

        // Hide the dropdown when clicking outside of it
        document.addEventListener("click", function(event) {
            if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    });
</script>


<script>
    function handleSwipe() {
        let startX;

        return {
            touchStart(e) {
                startX = e.touches[0].clientX;
            },
            touchEnd(e) {
                const endX = e.changedTouches[0].clientX;
                const threshold = 50;

                if (startX - endX > threshold) {
                    this.sidebarOpen = false;
                }
            }
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.getElementById("dropdownDefaultButton");
        const dropdownMenu = document.getElementById("dropdown");

        dropdownButton.addEventListener("click", function(event) {
            event.preventDefault();
            dropdownMenu.classList.toggle("hidden");
        });

        // Hide the dropdown when clicking outside of it
        document.addEventListener("click", function(event) {
            if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    });
</script>
