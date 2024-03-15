<section class="px-20 py-10 max-sm:text-center  w-full mx-auto max-w-screen-2xl">
    <div class="flex gap-8 max-lg:flex-col  ">
        <div class="w-[30%] max-lg:w-full">
            <a href="/" class="max-sm:justify-center max-sm:flex"><img src="{{ asset('images/investlogo.png') }}"
                    alt="logo" class="w-24 "></a>
            <div class=" text-gray-500 py-3">"Pet Durbar!"</div>
            <div class="flex gap-5 max-sm:justify-center">
                <i class="fa-brands fa-facebook text-2xl text-[#0f577d]"></i>
                <i class="fa-brands fa-instagram text-2xl text-[#0f577d]"></i>

            </div>
        </div>

        <div class="w-[70%] max-lg:w-full">
            <div class="grid grid-cols-3 max-lg:grid-cols-2 max-lg:gap-y-10 max-sm:grid-cols-1">
                <div class="">
                    <h1 class="font-medium text-gray-800 text-lg">Main Categories</h1>
                    <div class="flex flex-col pt-5 text-gray-500 gap-y-2">
                        <span>Electronics</span>
                        <span>Watches & Accessories</span>
                        <span>Cooking Ingredients</span>
                        <span>Groceries</span>


                    </div>

                </div>

                <div class="">
                    <h1 class="font-medium text-gray-800 text-lg">Quick Links</h1>
                    <div class="flex flex-col pt-5 text-gray-500 gap-y-2">
                        <span>Blog</span>
                        <span>About Us</span>
                        <span>Contact Us</span>
                        <a href="{{ route('termsandcondition') }}"><span>Terms and Conditions</span></a>
                        <a href="{{ route('privacypolicy') }}"><span>Privacy Policy</span></a>

                    </div>

                </div>

                <div class="">
                    <h1 class="font-medium text-gray-800 text-lg">Contact</h1>
                    <div class="flex flex-col pt-5 text-gray-500 gap-y-2 max-sm:justify-center">
                        <span class="flex gap-2 flex-wrap max-sm:justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                </path>
                                <path d="M3 7l9 6l9 -6"></path>
                            </svg>
                            <p>info@petdurbar.com</p>
                        </span>
                        <span class="flex gap-2 max-sm:justify-center flex-wrap max-sm:mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                </path>
                            </svg>
                            <p>+977-9813519344</p>
                        </span>


                    </div>

                </div>
            </div>
        </div>


    </div>
</section>
