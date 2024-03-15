{{-- <div class="">
    <div class="flex h-[70vh] w-full gap-8 ">
        <div class="w-[20%] h-[95%]  relative shadow-lg py-2">
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1   flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Grocery</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border py-2  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Food Staples</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Chocolates</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Beverages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border py-2  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Coffee</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Tea</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">Juice</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3"></li>

                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Snacks</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Biscuit</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Fruits</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Grains</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Dairy Products</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  "> Veggies</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Cooking Ingredients</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Beverages</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Grocery</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border py-2  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Food Staples</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Chocolates</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Beverages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border py-2  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Coffee</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Tea</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">Juice</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3"></li>

                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Snacks</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Biscuit</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Fruits</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>
            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Grains</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>

            <div class="group inline-block w-full border-b">
                <button aria-haspopup="true" aria-controls="menu"
                    class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                    <span class="font-medium text-sm  ">Cooking Ingredients</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

                </button>
                <ul id="menu" aria-hidden="true"
                    class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Programming</li>
                    <li class=" px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">DevOps</li>
                    <li class="  hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
                        <button aria-haspopup="true" aria-controls="menu-lang"
                            class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                            <span class=" flex-1">Languages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </button>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">Javascript</li>
                            <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white ">2.7</li>
                            <li class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">3+</li>
                        </ul>
                    </li>
                    <li class="px-3  py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Go</li>
                    <li class="px-3 py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white">Rust</li>
                </ul>
            </div>


        </div>

        <div class="w-[80%] h-[90%] border">
            <div class="w-[100%] h-[100%] max-xl:w-[70%] border max-lg:w-full ">
                <div class="swiper h-full w-full relative ">
                    <div class="swiper-wrapper ">
                        @foreach ($slider as $key => $banner)
                            <div class="swiper-slide object-contain"><img
                                    src="{{ asset('uploads/' . $banner->banner_image) }}" alt="swiper-image"
                                    class="w-full h-full">
                            </div>
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>

                </div>

            </div>

        </div>
    </div>
</div> --}}

{{-- <div class="w-[100%] h-[100%] max-xl:w-[70%] border max-lg:w-full ">
    <div class="swiper h-full w-full relative ">
        <div class="swiper-wrapper ">
            @foreach ($slider as $key => $banner)
                <div class="swiper-slide object-contain"><img src="{{ asset('uploads/' . $banner->banner_image) }}"
                        alt="swiper-image" class="w-full h-full">
                </div>
            @endforeach


        </div>
        <div class="swiper-pagination"></div>

    </div>

</div> --}}


{{-- api --}}
<div class="landing mx-auto max-w-screen-2xl max-xl:px-10 max-md:px-5">
    <div class="flex h-[70vh]  max-xl:h-full w-full gap-8 ">
        <div class="w-[20%] h-full max-xl:w-[40%] max-lg:hidden relative shadow-lg py-2 ">
            @foreach (getCategories(0) as $category)
                <div
                    class="group inline-block hover:bg-[#0f577d] ccolors hover:text-white w-full border-b bg-white px-2 text-sm font-medium text-gray-500">
                    @if (count(getCategories($category->id)) > 0)
                        <a href="{{ route('categorysearch', $category->slug) }}">
                            <button aria-haspopup="true" aria-controls="menu"
                                class="outline-none focus:outline-none  px-3 py-1  flex items-center  justify-between w-full hover:bg-[#0f577d] hover:text-white">
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
                                class="outline-none focus:outline-none ccolor px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#0f577d] hover:text-white">
                                <span class="">{{ $category->categoryname }}</span>
                            </button>
                        </a>
                    @endif
                    @if (count(getCategories($category->id)) > 0)
                        <ul id="menu" aria-hidden="true"
                            class="bg-white border py-2 transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                            @foreach (getCategories($category->id) as $subcategory)
                                <li class="hover:bg-[#0f577d] cursor-pointer ccolors  hover:text-white px-3">
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
                                                            class="py-2 hover:bg-[#0f577d] cursor-pointer hover:text-white px-3">
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
        </div>

        {{-- @foreach (Categories($category->id) as $subcategory)
            <div
                class="invisible absolute z-50 flex w-44 flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible">
                <li class="hover:bg-[#0F577D] cursor-pointer hover:text-white px-3">
                    @if (count(Categories($subcategory->id)) > 0)
                        <div class="flex justify-between items-center">
                            <span class="">{{ $subcategory->categoryname }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </div>
                        <ul id="menu-lang" aria-hidden="true"
                            class="bg-white border py-2 absolute top-[-0.18%] right-0
                                        transition duration-150 ease-in-out origin-top-left min-w-[225px] text-sm font-medium text-gray-500">
                            @foreach (Categories($subcategory->id) as $childCategory)
                                <a href="{{ route('category', $childCategory->slug) }}" class="">
                                    <li class="py-2 hover:bg-[#0F577D] cursor-pointer hover:text-white px-3">
                                        {{ $childCategory->categoryname }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    @else
                        <a href="{{ route('category', $subcategory->slug) }}" class="">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class="flex-1">{{ $subcategory->categoryname }}</span>
                                @if (count(Categories($subcategory->id)) > 0)
                                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 320 512">
                                        <path
                                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                    </svg>
                                @endif
                            </button>
                        </a>
                    @endif
                </li>
            </div>
        @endforeach --}}



        <div class="w-[80%] h-[100%] max-xl:w-[60%] border max-lg:w-full ">
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
