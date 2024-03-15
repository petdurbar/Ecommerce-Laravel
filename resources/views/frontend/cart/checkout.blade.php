@extends('frontend._layout._master')


@section('body')
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>
    <style>
        .form-radio {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            flex-shrink: 0;
            border-radius: 100%;
            border-width: 2px;
        }

        .form-radio:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media not print {
            .form-radio::-ms-check {
                border-width: 1px;
                color: transparent;
                background: inherit;
                border-color: inherit;
                border-radius: inherit;
            }
        }

        .form-radio:focus {
            outline: none;
        }

        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            background-repeat: no-repeat;
            padding-top: 0.5rem;
            padding-right: 2.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            background-position: right 0.5rem center;
            background-size: 1.5em 1.5em;
        }

        .form-select::-ms-expand {
            color: #a0aec0;
            border: none;
        }

        @media not print {
            .form-select::-ms-expand {
                display: none;
            }
        }

        @media print and (-ms-high-contrast: active),
        print and (-ms-high-contrast: none) {
            .form-select {
                padding-right: 0.75rem;
            }
        }
    </style>

    <div class="mx-auto max-w-screen-2xl bg-blue-50 md:py-5 md:px-14">
        {{-- <div class="px-5">

            <div class="mb-2">
                <h1 class="text-3xl md:text-3xl font-bold text-[#0f577d]">Checkout.</h1>
            </div>
            <div class="mb-5 text-gray-400">
                <a href="#" class="focus:outline-none hover:underline text-gray-500">Home</a> / <a href="#"
                    class="focus:outline-none hover:underline text-gray-500">Cart</a> /
                <span class="text-gray-600">Checkout
                </span>
            </div>
        </div> --}}

        <style>
            .active-tab {
                /* background-color: #205579; */
                border-color: #4c74a8;
                color: #1479af;
            }
        </style>

        <form method="POST" action="{{ route('checkoutpay') }}">
            @csrf
            <div class="w-full bg-white border-t  border-gray-200 px-5 pt-10 text-gray-800">
                <div>

                    <div class="text-sm italic text-gray-400">
                        Note: Check both billing information and shipping information before order .
                    </div>

                    <div class="w-full">
                        <div class=" md:flex items-start">
                            <div class=" md:w-7/12">

                                <div class="mb-1 border-b border-gray-200 ">
                                    <div class="flex flex-wrap w-full text-sm font-medium text-center text-[#0f577d]"
                                        id="tabExample" role="tablist">

                                        <span class="" role="paymentinfo">
                                            <button
                                                class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                                id="billing_tab" type="button" role="tab"
                                                aria-controls="billing-button" aria-selected="true"
                                                onclick="showTab('billing-button',this)">Billing
                                                Info</button>
                                        </span>
                                        <span class="mr-2" role="paymentinfo">
                                            <button
                                                class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                                id="shipping-tab" type="button" role="tab"
                                                aria-controls="shipping-button" aria-selected="true"
                                                onclick="showTab('shipping-button',this)">Shipping
                                                Info</button>
                                        </span>

                                    </div>
                                </div>

                                <div id="tabContentExample">
                                    <div class="hidden-items   p-2  rounded-lg " id="billing-button" role="tabpanel"
                                        aria-labelledby="billing_tab">
                                        <div class="py-2 text-[#0f577d] font-semibold">
                                            Billing Information
                                        </div>
                                        <div
                                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Full
                                                        Name</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="billing_name" type="text" required
                                                        value="{{ old('billing_name', $users->name ?? '') }}" />

                                                </div>
                                            </div>
                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Email</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="billing_email" type="text" required
                                                        value="{{ old('billing_email', $users->email ?? '') }}" />
                                                </div>
                                            </div>

                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Billing
                                                        Address</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="billing_address" type="text"
                                                        value="{{ old('billing_address', $users->address ?? '') }}"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Phone
                                                        no.</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="billing_phonenumber" type="number"
                                                        value="{{ old('billing_phonenumber', $users->phonenumber ?? '') }}"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="hidden-items p-2 rounded-lg  " id="shipping-button" role="tabpanel"
                                        aria-labelledby="shipping-tab">
                                        <div class="py-2 text-[#0f577d] font-semibold">
                                            Shipping Information
                                        </div>
                                        <div
                                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Full
                                                        Name</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="shipping_name" type="text"
                                                        value="{{ old('shipping_name', $users->name ?? '') }}" />
                                                </div>
                                            </div>
                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Email</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="shipping_email" type="text"
                                                        value="{{ old('shipping_email', $users->email ?? '') }}" />
                                                </div>
                                            </div>

                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Delivery
                                                        Address</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border text-sm border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="shipping_address" type="text"
                                                        name="deliveryaddress"
                                                        value="{{ old('shipping_address', $users->address ?? '') }}" />
                                                </div>
                                            </div>

                                            <div class="mb-3 flex">
                                                <div class="w-24">
                                                    <label class="text-gray-600 font-semibold text-sm mb-1">Phone
                                                        no.</label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="" name="shipping_phonenumber" type="number"
                                                        value="{{ old('shipping_phonenumber', $users->phonenumber ?? '') }}" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>








                                <div class="flex w-full gap-2 text-sm">
                                    <div>
                                        <input type="radio" id="online-payment" name="payment" value="online-payment"
                                            class="hidden peer" checked required>
                                        <label for="online-payment"
                                            class="inline-flex items-center justify-between py-2 px-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">
                                            <div class="block">
                                                <div class="w-full  font-semibold">Online payment</div>
                                            </div>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="cash-on-delivery" name="payment"
                                            value="cash-on-delivery" class="hidden peer">
                                        <label for="cash-on-delivery"
                                            class="inline-flex items-center justify-between py-2 px-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">
                                            <div class="block">
                                                <div class="w-full font-semibold">Cash on delivery</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div id="online-payment-content" class="hidden ">
                                    <div>
                                        <p id="paymentMethodLabel" class="mt-4">Choose a digital form</p>
                                        <div id="paymentMethods" class="grid grid-cols-4 gap-4 ">
                                            <label class="image-radio">
                                                <input type="radio" name="paymethod" value="Khalti" />
                                                <img class="h-24 w-40 object-contain border"
                                                    src="{{ asset('images/khalti.png') }}" alt="khalti">
                                            </label>
                                            <label class="image-radio ">
                                                <input type="radio" class="border" name="paymethod" value="IME-PAY" />
                                                <img class="h-24 w-40 object-contain border"
                                                    src="{{ asset('images/imepay.png') }}" alt="imepay">
                                            </label>
                                        </div>
                                    </div>
                                    @error('paymethod')
                                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="cash-on-delivery-content" class="hidden"></div>
                                <script>
                                    const onlinePaymentRadio = document.getElementById("online-payment");
                                    const cashOnDeliveryRadio = document.getElementById("cash-on-delivery");
                                    const onlinePaymentContent = document.getElementById("online-payment-content");
                                    const cashOnDeliveryContent = document.getElementById("cash-on-delivery-content");

                                    // Function to show the default selected radio content
                                    function showDefaultSelectedContent() {

                                        onlinePaymentContent.style.display = "block";

                                    }

                                    // Add event listeners for radio button clicks
                                    onlinePaymentRadio.addEventListener("click", function() {
                                        onlinePaymentContent.style.display = "block";
                                        cashOnDeliveryContent.style.display = "none";
                                    });

                                    cashOnDeliveryRadio.addEventListener("click", function() {
                                        onlinePaymentContent.style.display = "none";
                                        cashOnDeliveryContent.style.display = "block";
                                    });

                                    // Show the default selected content on page load
                                    showDefaultSelectedContent();
                                </script>

                                <div class="mb-3 mt-6 flex">
                                    <div class="w-24">
                                        <label class="text-gray-600 font-semibold text-sm mb-1">Delivery</label>
                                    </div>
                                    <div class="max-md:pl-3">
                                        <div>
                                            <input name="delivery" value="100" id="valleyin" type="radio"
                                                checked><label>
                                                Inside Valley:
                                                <span><span>Rs.</span>&nbsp;100</span></label>
                                        </div>
                                        <div>
                                            <input name="delivery" value="300" id="valleyout" type="radio"><label>
                                                Outside
                                                Valley:
                                                <span><span>Rs.</span>&nbsp;300</span></label>
                                            <i>(Subjected to Change for bigger products.)</i>
                                        </div>
                                    </div>
                                </div>
                                {{-- payment --}}
                                {{-- <div>
                    <fieldset class="flex flex-wrap gap-3 pt-2">
                        <div>
                            <input type="radio" name="ColorBlack" value="ColorBlack" id="ColorBlack"
                                class="peer hidden">
                            </input>
                            <label for="ColorBlack"
                                class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">Cash
                                on delivery</p>
                            </label>
                        </div>

                        <div id='online_options'>
                            <input type="radio" name="ColorOption" value="ColorRed" id="ColorRed"
                                class="peer hidden" checked />
                            <label for="ColorRed"
                                class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">Online
                                Payment</p>
                            </label>
                        </div>
                    </fieldset>

                    <div>
                        <p id="paymentMethodLabel" class="mt-4">Choose a digital form</p>

                        <div id="paymentMethods" class="grid grid-cols-4 gap-4">

                            <label class="image-radio">
                                <input type="radio" name="PaymentMethod" name="khalti" value="khalti" />
                                <img class="h-24 w-40 object-contain border"
                                    src="{{ asset('images/khalti.png') }}" alt="khalti">
                            </label>
                            <label class="image-radio ">
                                <input type="radio" class="border" name="PaymentMethod" name="ime"
                                    value="ime" />
                                <img class="h-24 w-40 object-contain border"
                                    src="{{ asset('images/imepay.png') }}" alt="imepay">
                            </label>

                        </div>
                    </div>
                </div> --}}




                            </div>


                            {{-- </div> --}}
                            {{-- @dd($items) --}}
                            <div class="px-3 md:w-5/12 lg:pr-10 text-sm max-md:my-10 max-md:border max-md:p-4">
                                @foreach ($items as $key => $item)
                                    <input type="hidden" name="product_id" value="{{ $item->id }}" />
                                    <div
                                        class="w-full mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6 ">
                                        <div class="w-full flex items-center">
                                            <div
                                                class="overflow-hidden rounded-lg w-[20%]  h-full bg-gray-50 border border-gray-200">
                                                <img src="{{ asset('/uploads/' . $item->attributes->image) }}"
                                                    alt="product">
                                            </div>
                                            <div class="flex-grow   pl-3">
                                                <h6 class="font-semibold uppercase text-gray-600">{{ $item->name }}</h6>
                                                <span class="text-gray-400 flex">
                                                    Qty: <input type="text" class="bg-white" name="productQty"
                                                        value="{{ $item->quantity }}" disabled />
                                                </span>
                                                <div class="mt-5 sm:mt-0 text-xs">
                                                   
                                                    @if($item->attributes->attr)
                                                    <div class=" flex gap-1 ">
                                                        @foreach ($item->attributes->attr as $key => $attri)
                                                            <div class=" border bg-[#0f577d] text-white p-1 rounded">
                                                                {{ getCartAttributes($attri)->attribute_name }}
                                                                {{-- {{$key}} --}}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="-ml-32">

                                                <input class="text-right  bg-transparent" name="productPrice"
                                                    type="text" value="Rs. {{ Cart::get($item->id)->getPriceSum() }}"
                                                    disabled />
                                            </div>


                                            {{-- <span class="font-semibold">Rs.
                            {{ Cart::get($item->id)->getPriceSum() }}</span>
                            <span class="font-semibold ">.00</span> --}}
                                        </div>
                                    </div>
                                @endforeach



                                {{-- <div class="mb-6 pb-6  border-gray-200">
                    <div class="-mx-2 flex items-end justify-end">
                        <div class="flex-grow px-2 lg:max-w-xs">
                            <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">
                                Discount code

                            </label>
                            <div>
                                <input
                                    class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                    placeholder="XXXXXX" type="text" />
                            </div>
                        </div>
                        <div class="px-2">
                            <button
                                class="block w-full max-w-xs mx-auto border border-transparent bg-[#0f577d] hover:bg-[#0f577d] focus:bg-gray-500 text-white rounded-md px-5 py-2 font-semibold">APPLY</button>
                        </div>
                    </div>
                </div> --}}

                                <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                                    <div class="w-full flex mb-3 items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Subtotal</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold">Rs. {{ Cart::getSubTotal() }}</span>
                                        </div>
                                    </div>
                                    <div class="w-full flex items-center font-semibold">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Delivery Charge</span>
                                        </div>
                                        {{-- <div class="pl-3">
                            <span class="font-semibold">Rs.0</span>
                        </div> --}}
                                        <input id="defaultSelection"
                                            class="text-sm w-24  focus:outline-none mt-3 p-2  text-right"
                                            name="delivery_charge " type="hidden" value="" />
                                        <label class="text-sm mr-1 ">
                                            Rs.
                                        </label>
                                        <div id="changedeliverycharge" class="text-md">
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                                    <div class="w-full flex items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Total</span>
                                        </div>
                                        {{-- <div class="pl-3">
                            <span class="font-semibold text-gray-400 text-sm">Rs.</span> <span
                                class="font-semibold" id="alltotals"></span>
                        </div> --}}


                                        <input id="alltotalvalue"
                                            class="text-sm  font-semibold border-gray-300 mt-0.5 ml-1 border focus:outline-none w-24"
                                            name="alltotalamount" placeholder="Type product MRP price here"
                                            type="hidden" value="{{ Cart::getSubTotal() }}" />
                                        <label class="text-md mr-1 font-semibold">
                                            Rs.
                                        </label>
                                        <div id="alltotalresult" class="text-md">
                                        </div>
                                        {{-- send data in script --}}
                                        <input id="alltotal" type="hidden"
                                            class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                            placeholder="Type product MRP price here" type="text"
                                            value="{{ Cart::getSubTotal() }}" />
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="py-5">
                    <button
                        class="block  bg-[#0f577d] hover:bg-[#0f577d] focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold"><i
                            class="mdi mdi-lock-outline mr-1"></i> PAY NOW
                    </button>
                </div>
            </div>
        </form>

    </div>

    <script>
        // Get references to the radio buttons and result display area
        const option1Radio = document.getElementById("valleyin");
        const option2Radio = document.getElementById("valleyout");
        const resultDisplay = document.getElementById("defaultSelection");

        const productPrice = parseFloat(document.getElementById('alltotal').value) || 0;

        // const defaultSelectionDisplay = document.getElementById("defaultSelection");

        // Function to update the result display
        function updateResultDisplay(selectedOption) {
            resultDisplay.value = `${selectedOption || '0'}`;
            const margin = parseFloat(selectedOption) + productPrice;
            console.log("productPrice", productPrice)
            console.log("selectedOption", selectedOption)
            document.getElementById('alltotalvalue').value = margin.toFixed(2);
            alltotalresult.innerHTML = margin.toFixed(2);
            changedeliverycharge.innerHTML = parseFloat(selectedOption);


        }

        // Event listener for the radio buttons
        option1Radio.addEventListener("change", function() {
            if (option1Radio.checked) {
                const selectedOption = option1Radio.value;
                updateResultDisplay(selectedOption);
            }
        });

        option2Radio.addEventListener("change", function() {
            if (option2Radio.checked) {
                const selectedOption = option2Radio.value;
                updateResultDisplay(selectedOption);
            }
        });

        // Set a default selection and update the result display
        resultDisplay.value = option1Radio.value; // Change this to the default option you want
        option1Radio.checked = true; // Change this to match the default option
        updateResultDisplay(option1Radio.value); // Update the result display with the default option
    </script>



    <style>
        .hidden-items {
            display: none;
        }
    </style>
    <script>
        function showTab(tabId, button) {
            const tabs = document.querySelectorAll('.hidden-items');
            tabs.forEach(tab => {
                if (tab.id === tabId) {
                    console.log(tab.id.value)
                    tab.style.display = 'block';
                } else {
                    tab.style.display = 'none';
                }
            });

            // Remove the active-tab class from all buttons
            const tabButtons = document.querySelectorAll('[role="tab"]');
            tabButtons.forEach(tabButton => {
                tabButton.classList.remove('active-tab');
            });

            button.classList.add('active-tab');
        }
        showTab('billing-button', document.getElementById('billing_tab'));
    </script>

    <style>
        .image-radio input[type="radio"] {
            display: none;
        }

        .image-radio img {
            border: 2px solid transparent;
        }

        .image-radio input[type="radio"]:checked+img {
            border-color: orange;
            /* Change this to your desired border color */
            border-radius: 6px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#ColorRed").click(function() {
                $("#paymentMethodLabel").removeClass("hidden");
                $("#paymentMethods").removeClass("hidden");
            });

            $("#ColorBlack").click(function() {
                $("#paymentMethodLabel").addClass("hidden");
                $("#paymentMethods").addClass("hidden");
                document.getElementById('ColorBlack').value = "cashondelivery";

            });

            $(".image-radio input[type='radio']").change(function() {
                // Remove 'selected' class from all images
                $(".image-radio img").removeClass("selected");

                // Add 'selected' class to the clicked image
                $(this).closest(".image-radio").find("img").addClass("selected");
            });
        });
    </script>
@endsection
