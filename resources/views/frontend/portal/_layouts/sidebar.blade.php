<div x-cloak x-data="sidebar()" class="relative flex items-start ">
    <div class="fixed  z-40 transition-all duration-300">
        <div class="flex justify-end">
            <button @click="sidebarOpen = !sidebarOpen"
                :class="{ 'hover:bg-gray-300': !sidebarOpen, 'hover:bg-gray-700': sidebarOpen }"
                class="transition-all duration-300 w-8 p-1 mx-3 my-2 rounded-full focus:outline-none">
                <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current"
                    :class="{ 'text-[#000]': !sidebarOpen, 'text-red-500 hover:text-white': sidebarOpen }">
                    <path x-show="!sidebarOpen" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="sidebarOpen" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>

    <div x-cloak wire:ignore :class="{ 'w-56': sidebarOpen, 'w-0': !sidebarOpen }"
        class="fixed left-0 z-30 block w-56 h-full min-h-screen  font-semibold transition-all duration-300 ease-in-out  text-[#000] shadow-lg overflow-x-hidden">

        <div class="flex flex-col items-stretch justify-between overflow-y-scroll h-[90vh]">
            <div class="flex flex-col flex-shrink-0 w-full">
                <div class="flex items-center justify-center px-8 py-3 text-center">
                    <a href="#" class="text-lg leading-normal text-[#000] font-bold ">
                        {{ Auth::guard('softsaro__users')->user()->name }}
                    </a>
                </div>

                <nav class="">
                    <div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden"
                        :class="{ 'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen }">
                        <a class="{!! request()->segment(2) == 'dashboard' ? 'bg-orange-500 text-white' : 'text-[#000] bg-transparent' !!} flex justify-start items-center px-4 py-3 hover:bg-orange-500 hover:text-white"
                            href="{{ route('portal.dashboard') }}">

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="w-5 h-5 fill-current"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 1200 1200">
                                <path
                                    d="M600 195.373c-331.371 0-600 268.629-600 600c0 73.594 13.256 144.104 37.5 209.253h164.062C168.665 942.111 150 870.923 150 795.373c0-248.528 201.471-450 450-450s450 201.472 450 450c0 75.55-18.665 146.738-51.562 209.253H1162.5c24.244-65.148 37.5-135.659 37.5-209.253c0-331.371-268.629-600-600-600zm0 235.62c-41.421 0-75 33.579-75 75c0 41.422 33.579 75 75 75s75-33.578 75-75c0-41.421-33.579-75-75-75zm-224.927 73.462c-41.421 0-75 33.579-75 75c0 41.422 33.579 75 75 75s75-33.578 75-75c0-41.421-33.579-75-75-75zm449.854 0c-41.422 0-75 33.579-75 75c0 41.422 33.578 75 75 75c41.421 0 75-33.578 75-75c0-41.421-33.579-75-75-75zM600 651.672l-58.813 294.141v58.814h117.627v-58.814L600 651.672z"
                                    fill="currentColor"></path>
                            </svg>
                            <span class="mx-4">Dashboard</span>
                        </a>

                        <a class="{!! request()->segment(2) == 'order-history' ? 'bg-orange-500 text-white' : 'text-[#000] bg-transparent' !!} flex mt-1 items-center px-4 py-3 hover:bg-orange-500 hover:text-white "
                            href="{{ route('user.history') }}">
                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14,18a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,14,18Zm-4,0a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,10,18ZM19,6H17.62L15.89,2.55a1,1,0,1,0-1.78.9L15.38,6H8.62L9.89,3.45a1,1,0,0,0-1.78-.9L6.38,6H5a3,3,0,0,0-.92,5.84l.74,7.46a3,3,0,0,0,3,2.7h8.38a3,3,0,0,0,3-2.7l.74-7.46A3,3,0,0,0,19,6ZM17.19,19.1a1,1,0,0,1-1,.9H7.81a1,1,0,0,1-1-.9L6.1,12H17.9ZM19,10H5A1,1,0,0,1,5,8H19a1,1,0,0,1,0,2Z" />
                            </svg>
                            <span class="mx-4">Orders History</span>
                        </a>

                        <a class="{!! request()->segment(2) == 'profile' ? 'bg-orange-500 text-white' : 'text-[#000] bg-transparent' !!} flex mt-1 items-center px-4 py-3 hover:bg-orange-500 hover:text-white  "
                            href="{{ route('user.profile') }}">
                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                            </svg>
                            <span class="mx-4">Profile</span>
                        </a>

                        <a class="{!! request()->segment(2) == 'change-password' ? 'bg-orange-500 text-white' : 'text-[#000] bg-transparent' !!} flex mt-1 items-center px-4 py-3 hover:bg-orange-500 hover:text-white   "
                            href="{{ route('user.passwordChange') }}">
                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                            </svg>
                            <span class="mx-4">Change Password</span>
                        </a>

                        <a class="{!! request()->segment(2) == 'transaction-statements'
                            ? 'bg-orange-500 text-white'
                            : 'text-[#000] bg-transparent' !!} flex mt-1 items-center px-4 py-3 hover:bg-orange-500 hover:text-white   "
                            href="{{ route('user.statements') }}">
                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                            </svg>
                            <span class="mx-4">Payment Statements</span>
                        </a>

                        <a class="{!! request()->segment(1) == 'track-order' ? 'bg-orange-500 text-white' : 'text-[#000] bg-transparent' !!} flex mt-1 items-center px-4 py-3 hover:bg-orange-500 hover:text-white   "
                            href="{{ route('user.tracker') }}">
                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                            </svg>
                            <span class="mx-4">Track Order</span>
                        </a>

                        @if (Auth::guard('softsaro__users')->user()->is_affilate == '1' &&
                                Auth::guard('softsaro__users')->user()->status == 'VERIFIED')
                            <a class="{!! request()->segment(2) == 'payment-history' ? 'bg-orange-500 text-white' : 'text-[#000] bg-transparent' !!} flex mt-1 items-center px-4 py-3 hover:bg-orange-500 hover:text-white   "
                                href="{{ route('payment.history') }}">
                                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                                </svg>
                                <span class="mx-4">Payment History</span>
                            </a>
                        @endif

                        {{-- @if (Auth::guard('softsaro__users')->user()->is_affilate == '1' && Auth::guard('softsaro__users')->user()->status == 'VERIFIED')
                            <a href="{{ route('user.tracker') }}"
                                class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                Commission
                            </a>
                        @endif --}}

                    </div>

                </nav>

            </div>
            <div>
                <a title="Logout" href="{{ route('logout') }}" class="block px-4 py-3"
                    onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                    <svg class="text-gray-400 fill-current w-7 h-7" fill-rule="evenodd" clip-rule="evenodd"
                        stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" aria-label="door-leave"
                        viewBox="0 0 32 32" title="door-leave">
                        <g>
                            <path
                                d="M27.708,15.293c0.39,0.39 0.39,1.024 0,1.414l-4,4c-0.391,0.391 -1.024,0.391 -1.415,0c-0.39,-0.39 -0.39,-1.024 0,-1.414l2.293,-2.293l-11.586,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l11.586,0l-2.293,-2.293c-0.39,-0.39 -0.39,-1.024 0,-1.414c0.391,-0.391 1.024,-0.391 1.415,0l4,4Z">
                            </path>
                            <path
                                d="M11.999,8c0.001,0 0.001,0 0.002,0c1.699,-0.001 2.859,0.045 3.77,0.25c0.005,0.001 0.01,0.002 0.015,0.003c0.789,0.173 1.103,0.409 1.291,0.638c0,0 0,0.001 0,0.001c0.231,0.282 0.498,0.834 0.679,2.043c0,0.001 0,0.002 0.001,0.003c0.007,0.048 0.014,0.097 0.021,0.147c0.072,0.516 0.501,0.915 1.022,0.915c0.584,0 1.049,-0.501 0.973,-1.08c-0.566,-4.332 -2.405,-4.92 -7.773,-4.92c-7,0 -8,1 -8,10c0,9 1,10 8,10c5.368,0 7.207,-0.588 7.773,-4.92c0.076,-0.579 -0.389,-1.08 -0.973,-1.08c-0.521,0 -0.95,0.399 -1.022,0.915c-0.007,0.05 -0.014,0.099 -0.021,0.147c-0.001,0.001 -0.001,0.002 -0.001,0.003c-0.181,1.209 -0.448,1.762 -0.679,2.044l0,0c-0.188,0.229 -0.502,0.465 -1.291,0.638c-0.005,0.001 -0.01,0.002 -0.015,0.003c-0.911,0.204 -2.071,0.25 -3.77,0.25c-0.001,0 -0.001,0 -0.002,0c-1.699,0 -2.859,-0.046 -3.77,-0.25c-0.005,-0.001 -0.01,-0.002 -0.015,-0.003c-0.789,-0.173 -1.103,-0.409 -1.291,-0.638l0,0c-0.231,-0.282 -0.498,-0.835 -0.679,-2.043c0,-0.001 0,-0.003 -0.001,-0.005c-0.189,-1.247 -0.243,-2.848 -0.243,-5.061c0,0 0,0 0,0c0,-2.213 0.054,-3.814 0.243,-5.061c0.001,-0.002 0.001,-0.004 0.001,-0.005c0.181,-1.208 0.448,-1.76 0.679,-2.042c0,0 0,-0.001 0,-0.001c0.188,-0.229 0.502,-0.465 1.291,-0.638c0.005,-0.001 0.01,-0.002 0.015,-0.003c0.911,-0.205 2.071,-0.251 3.77,-0.25Z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>

        <script>
            function sidebar() {
                return {
                    sidebarOpen: true,
                    sidebarProductMenuOpen: false,
                    openSidebar() {
                        this.sidebarOpen = true
                    },
                    closeSidebar() {
                        this.sidebarOpen = false
                    },
                    sidebarProductMenu() {
                        if (this.sidebarProductMenuOpen === true) {
                            this.sidebarProductMenuOpen = false
                            window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                        } else {
                            this.sidebarProductMenuOpen = true
                            window.localStorage.setItem('sidebarProductMenuOpen', 'open');
                        }
                    },
                    checkSidebarProductMenu() {
                        if (window.localStorage.getItem('sidebarProductMenuOpen')) {
                            if (window.localStorage.getItem('sidebarProductMenuOpen') === 'open') {
                                this.sidebarProductMenuOpen = true
                            } else {
                                this.sidebarProductMenuOpen = false
                                window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                            }
                        }
                    },
                }
            }
        </script>
    </div>




</div>
