<div class="px-20  flex py-2  items-center gap-1 bg-[#89BA46] text-white relative">


    <div class="flex gap-1  cursor-pointer" id="categorytoggleButtons">
        <span class="material-symbols-outlined  select-none">
            menu
        </span>
        <span class="text-sm ">Categories</span>
    </div>


    <div class="container">
        <div id="categorycontentDivs" class=" top-10 left-20 absolute hidden z-10">
            <div class="w-[20%]   relative shadow-lg py-2 bg-white">
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Grocery</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border py-2  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Food Staples</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Chocolates</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Beverages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border py-2  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Coffee</li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Tea</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">Juice</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3"></li>

                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Snacks</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Biscuit</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Fruits</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Grains</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Dairy Products</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  "> Veggies</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Cooking Ingredients</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Beverages</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Grocery</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border py-2  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Food Staples</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Chocolates</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Beverages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border py-2  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Coffee</li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Tea</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">Juice</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3"></li>

                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Snacks</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Biscuit</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Fruits</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>
                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Grains</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>

                <div class="group inline-block w-full border-b">
                    <button aria-haspopup="true" aria-controls="menu"
                        class="outline-none focus:outline-none px-3 py-1  flex items-center text-gray-500 justify-between w-full hover:bg-[#89BA46] hover:text-white">
                        <span class="font-medium text-sm  ">Cooking Ingredients</span>
                        <span class="material-symbols-outlined text-lg font-medium">
                            chevron_right
                        </span>

                    </button>
                    <ul id="menu" aria-hidden="true"
                        class="bg-white border  transform scale-0 origin-right absolute right-0 top-0 min-w-[225px] text-sm font-medium text-gray-500">
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Programming</li>
                        <li class=" px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">DevOps</li>
                        <li class="  hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">
                            <button aria-haspopup="true" aria-controls="menu-lang"
                                class="w-full text-left flex items-center outline-none focus:outline-none py-1">
                                <span class=" flex-1">Languages</span>
                                <span class="material-symbols-outlined text-lg font-medium">
                                    chevron_right
                                </span>
                            </button>
                            <ul id="menu-lang" aria-hidden="true"
                                class="bg-white border  absolute top-[-0.18%] right-0
                                transition duration-150 ease-in-out origin-top-left min-w-[225px]
                                text-sm font-medium text-gray-500 ">
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">Javascript
                                </li>
                                <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white ">2.7</li>
                                <li class="py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white px-3">3+</li>
                            </ul>
                        </li>
                        <li class="px-3  py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Go</li>
                        <li class="px-3 py-2 hover:bg-[#89BA46] cursor-pointer hover:text-white">Rust</li>
                    </ul>
                </div>


            </div>

        </div>
    </div>
</div>
<script>
    const categorytoggleButtons = document.getElementById('categorytoggleButtons');
    const categorycontentDivs = document.getElementById('categorycontentDivs');


    function toggleDiv() {
        categorycontentDivs.classList.toggle('hidden');
    }
    categorytoggleButtons.addEventListener('click', toggleDiv);
</script>
