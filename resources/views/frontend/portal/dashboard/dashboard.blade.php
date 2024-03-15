@extends('frontend.portal._layouts.master')

@section('body')
    <div class=" md:flex md:flex-shrink-0 ">
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="flex  flex-shrink-0 ">

                <div class="flex flex-col w-0 flex-1 overflow-hidden">
                    <div class="flex-1 relative flex-shrink-0 overflow-y-auto focus:outline-none">
                        <div class="py-1">

                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                                @if (Auth::guard('softsaro__users')->user()->is_affilate == '1' &&
                                        Auth::guard('softsaro__users')->user()->status == 'VERIFIED')
                                    <div class="flex flex-wrap gap-x-4   px-4 py-10 lg:px-10">
                                        <div class="flex w-60 ">
                                            <div
                                                class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                                                <div class="p-3">
                                                    <div
                                                        class="absolute -mt-10 h-12 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">


                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="mt-2 amountsvg text-white h-7 w-16" height="1em"
                                                            viewBox="0 0 448 512">
                                                            <style>
                                                                .amountsvg {
                                                                    fill: #ffffff
                                                                }
                                                            </style>
                                                            <path
                                                                d="M0 64C0 46.3 14.3 32 32 32h80c79.5 0 144 64.5 144 144c0 58.8-35.2 109.3-85.7 131.7l51.4 128.4c6.6 16.4-1.4 35-17.8 41.6s-35-1.4-41.6-17.8L106.3 320H64V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V288 64zM64 256h48c44.2 0 80-35.8 80-80s-35.8-80-80-80H64V256zm256.5 16.4c-.9 6 0 8.7 .4 9.8c.4 1.1 1.4 2.6 4.2 4.9c7.2 5.7 18.7 10 37.9 16.8l1.3 .5c16 5.6 38.7 13.6 55.7 28.1c9.5 8.1 17.9 18.6 23.1 32.3c5.1 13.7 6.1 28.5 3.8 44c-4.2 28.1-20.5 49.3-43.8 60.9c-22.1 11-48.1 12.5-73.2 8l-.2 0 0 0c-9.3-1.8-20.5-5.7-29.3-9c-6-2.3-12.6-4.9-17.7-6.9l0 0c-2.5-1-4.6-1.8-6.3-2.5c-16.5-6.4-24.6-25-18.2-41.4s24.9-24.6 41.4-18.2c2.6 1 5.2 2 7.9 3.1l0 0c4.8 1.9 9.8 3.9 15.4 6c8.8 3.3 15.3 5.4 18.7 6c15.7 2.8 26.7 .8 32.9-2.3c5-2.5 8-6 9.1-13c1-6.9 .2-10.5-.5-12.3c-.6-1.7-1.8-3.6-4.5-5.9c-6.9-5.8-18.2-10.4-36.9-17l-3-1.1c-15.5-5.4-37-13-53.3-25.9c-9.5-7.5-18.3-17.6-23.7-31c-5.5-13.4-6.6-28-4.4-43.2c8.4-57.1 67-78 116.9-68.9c6.9 1.3 27.3 5.8 35.4 8.4c16.9 5.2 26.3 23.2 21.1 40.1s-23.2 26.3-40.1 21.1c-4.7-1.4-22.3-5.5-27.9-6.5c-14.6-2.7-25.8-.4-32.6 3.2c-6.3 3.3-8.9 7.6-9.5 12z" />
                                                        </svg>
                                                    </div>

                                                    <div class="pt-1 text-right">
                                                        <p class="text-sm  capitalize">Total Earning Amount</p>
                                                        <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl">
                                                            Rs.{{ $user_personal_details->total_earning + $user_personal_details->pending_amount }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex w-60">
                                            <div
                                                class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                                                <div class="p-3">
                                                    <div
                                                        class="absolute -mt-10 h-12 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">


                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="mt-2 amountsvg text-white h-7 w-16" height="1em"
                                                            viewBox="0 0 448 512">
                                                            <style>
                                                                .amountsvg {
                                                                    fill: #ffffff
                                                                }
                                                            </style>
                                                            <path
                                                                d="M0 64C0 46.3 14.3 32 32 32h80c79.5 0 144 64.5 144 144c0 58.8-35.2 109.3-85.7 131.7l51.4 128.4c6.6 16.4-1.4 35-17.8 41.6s-35-1.4-41.6-17.8L106.3 320H64V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V288 64zM64 256h48c44.2 0 80-35.8 80-80s-35.8-80-80-80H64V256zm256.5 16.4c-.9 6 0 8.7 .4 9.8c.4 1.1 1.4 2.6 4.2 4.9c7.2 5.7 18.7 10 37.9 16.8l1.3 .5c16 5.6 38.7 13.6 55.7 28.1c9.5 8.1 17.9 18.6 23.1 32.3c5.1 13.7 6.1 28.5 3.8 44c-4.2 28.1-20.5 49.3-43.8 60.9c-22.1 11-48.1 12.5-73.2 8l-.2 0 0 0c-9.3-1.8-20.5-5.7-29.3-9c-6-2.3-12.6-4.9-17.7-6.9l0 0c-2.5-1-4.6-1.8-6.3-2.5c-16.5-6.4-24.6-25-18.2-41.4s24.9-24.6 41.4-18.2c2.6 1 5.2 2 7.9 3.1l0 0c4.8 1.9 9.8 3.9 15.4 6c8.8 3.3 15.3 5.4 18.7 6c15.7 2.8 26.7 .8 32.9-2.3c5-2.5 8-6 9.1-13c1-6.9 .2-10.5-.5-12.3c-.6-1.7-1.8-3.6-4.5-5.9c-6.9-5.8-18.2-10.4-36.9-17l-3-1.1c-15.5-5.4-37-13-53.3-25.9c-9.5-7.5-18.3-17.6-23.7-31c-5.5-13.4-6.6-28-4.4-43.2c8.4-57.1 67-78 116.9-68.9c6.9 1.3 27.3 5.8 35.4 8.4c16.9 5.2 26.3 23.2 21.1 40.1s-23.2 26.3-40.1 21.1c-4.7-1.4-22.3-5.5-27.9-6.5c-14.6-2.7-25.8-.4-32.6 3.2c-6.3 3.3-8.9 7.6-9.5 12z" />
                                                        </svg>
                                                    </div>

                                                    <div class="pt-1 text-right">
                                                        <p class="text-sm  capitalize">Total Pending Amount</p>
                                                        <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl">
                                                            Rs.{{ $user_personal_details->pending_amount }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex w-60">
                                            <div
                                                class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                                                <div class="p-3">
                                                    <div
                                                        class="absolute -mt-10 h-12 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">


                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="mt-2 amountsvg text-white h-7 w-16" height="1em"
                                                            viewBox="0 0 448 512">
                                                            <style>
                                                                .amountsvg {
                                                                    fill: #ffffff
                                                                }
                                                            </style>
                                                            <path
                                                                d="M0 64C0 46.3 14.3 32 32 32h80c79.5 0 144 64.5 144 144c0 58.8-35.2 109.3-85.7 131.7l51.4 128.4c6.6 16.4-1.4 35-17.8 41.6s-35-1.4-41.6-17.8L106.3 320H64V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V288 64zM64 256h48c44.2 0 80-35.8 80-80s-35.8-80-80-80H64V256zm256.5 16.4c-.9 6 0 8.7 .4 9.8c.4 1.1 1.4 2.6 4.2 4.9c7.2 5.7 18.7 10 37.9 16.8l1.3 .5c16 5.6 38.7 13.6 55.7 28.1c9.5 8.1 17.9 18.6 23.1 32.3c5.1 13.7 6.1 28.5 3.8 44c-4.2 28.1-20.5 49.3-43.8 60.9c-22.1 11-48.1 12.5-73.2 8l-.2 0 0 0c-9.3-1.8-20.5-5.7-29.3-9c-6-2.3-12.6-4.9-17.7-6.9l0 0c-2.5-1-4.6-1.8-6.3-2.5c-16.5-6.4-24.6-25-18.2-41.4s24.9-24.6 41.4-18.2c2.6 1 5.2 2 7.9 3.1l0 0c4.8 1.9 9.8 3.9 15.4 6c8.8 3.3 15.3 5.4 18.7 6c15.7 2.8 26.7 .8 32.9-2.3c5-2.5 8-6 9.1-13c1-6.9 .2-10.5-.5-12.3c-.6-1.7-1.8-3.6-4.5-5.9c-6.9-5.8-18.2-10.4-36.9-17l-3-1.1c-15.5-5.4-37-13-53.3-25.9c-9.5-7.5-18.3-17.6-23.7-31c-5.5-13.4-6.6-28-4.4-43.2c8.4-57.1 67-78 116.9-68.9c6.9 1.3 27.3 5.8 35.4 8.4c16.9 5.2 26.3 23.2 21.1 40.1s-23.2 26.3-40.1 21.1c-4.7-1.4-22.3-5.5-27.9-6.5c-14.6-2.7-25.8-.4-32.6 3.2c-6.3 3.3-8.9 7.6-9.5 12z" />
                                                        </svg>
                                                    </div>

                                                    <div class="pt-1 text-right">
                                                        <p class="text-sm  capitalize">Total Paid Amount</p>
                                                        <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl">
                                                            Rs.{{ $user_personal_details->total_earning }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class=" flex-1 grid relative overflow-y-auto focus:outline-none">
                                    <div class="pb-5">
                                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                                            <div class="h-64 p-4 rounded-lg bg-gray-100">
                                                <h2 class="font-bold">Personal Address</h2>
                                                <div id="daddress" class="">
                                                    <div class="mt-4 mb-8 text-sm">
                                                        <p>{{ $user_personal_details->name }}</p>
                                                        <p>{{ $user_personal_details->phone }}</p>
                                                        <p>{{ $user_personal_details->email }}</p>
                                                        <p class="mt-2">

                                                        <p>Address:&nbsp; {{ $user_personal_details->address }}</p>
                                                        &nbsp;

                                                        </p>
                                                    </div>

                                                    <a href="{{ route('user.profile') }}">
                                                        <span id="caddress"
                                                            class="text-sm mt-6 hover:cursor-pointer rounded-lg bg-orange-500 p-1 px-2 text-white">
                                                            Change Address
                                                        </span>
                                                    </a>


                                                </div>
                                            </div>
                                            <div class="h-64 p-4 rounded-lg bg-gray-100">
                                                <h2 class="font-bold">Delivery Address</h2>
                                                <div id="daddress" class="">
                                                    <div class="mt-4 mb-8 text-sm">
                                                        <p>{{ $user_details->delivery_name ?? '' }}</p>
                                                        <p>{{ $user_details->delivery_email ?? '' }}</p>
                                                        <p>{{ $user_details->delivery_phonenumber ?? '' }}</p>
                                                        <p>Address:&nbsp; {{ $user_details->delivery_address ?? '' }}</p>

                                                    </div>
                                                    <style>
                                                        [x-cloak] {
                                                            display: none;
                                                        }
                                                    </style>

                                                    <div x-cloak x-data="{ modalOpen: false }"
                                                        @keydown.escape.window="modalOpen = false"
                                                        class="relative z-50 w-auto h-auto">
                                                        <button @click="modalOpen=true"
                                                            class="text-sm mt-6 hover:cursor-pointer openModal rounded-lg bg-green-600 p-1 px-2 text-white inline-flex items-center justify-center h-10 py-2  font-medium transition-colors border disabled:opacity-50 disabled:pointer-events-none">Change
                                                            Address</button>
                                                        <template x-teleport="body">
                                                            <div x-show="modalOpen"
                                                                class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                                x-cloak>
                                                                <div x-show="modalOpen"
                                                                    x-transition:enter="ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0"
                                                                    x-transition:enter-end="opacity-100"
                                                                    x-transition:leave="ease-in duration-300"
                                                                    x-transition:leave-start="opacity-100"
                                                                    x-transition:leave-end="opacity-0"
                                                                    @click="modalOpen=false"
                                                                    class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
                                                                </div>
                                                                <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                                                    x-transition:enter="ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                                    x-transition:leave="ease-in duration-200"
                                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                    class="relative w-full py-1 bg-white px-1 sm:max-w-lg sm:rounded-lg">

                                                                    <div class="relative w-auto">
                                                                        <div class="">
                                                                            <div
                                                                                class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                                <div class="sm:flex sm:items-start">

                                                                                    <div
                                                                                        class="mt-5 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                        <h3 class="text-lg leading-6 font-medium mt-5 text-gray-900"
                                                                                            id="modal-title">
                                                                                            Delivery Address
                                                                                        </h3>
                                                                                        <div class="mt-2">
                                                                                            <div class="w-full ">
                                                                                                <div class="mt-4">
                                                                                                    <form method="POST"
                                                                                                        id="updateform"
                                                                                                        action="{{ route('userDeliveryAddressUpdate', Auth::guard('softsaro__users')->user()->id) }}">
                                                                                                        @csrf
                                                                                                        @method('post')


                                                                                                        <div
                                                                                                            class="flex gap-2 mt-1">
                                                                                                            <label
                                                                                                                class="block mb-2">
                                                                                                                <span
                                                                                                                    class="text-gray-700">Reciever's
                                                                                                                    Name</span>
                                                                                                                <input
                                                                                                                    name="delivery_name"
                                                                                                                    type="text"
                                                                                                                    value="{{ $user_details != null ? $user_details->delivery_name : '' }}"
                                                                                                                    class="block w-full mt-1 border h-10 rounded-lg p-2" />
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="block mb-2">
                                                                                                                <span
                                                                                                                    class="text-gray-700">Address</span>
                                                                                                                <input
                                                                                                                    name="delivery_address"
                                                                                                                    type="text"
                                                                                                                    value="{{ $user_details != null ? $user_details->delivery_address : '' }}"
                                                                                                                    class="block w-full mt-1 border-gray-300 border h-10 rounded-lg p-2" />
                                                                                                            </label>
                                                                                                        </div>


                                                                                                        <div
                                                                                                            class="flex gap-2 mt-2">
                                                                                                            <label
                                                                                                                class="block mb-2">
                                                                                                                <span
                                                                                                                    class="text-gray-700">Phone</span>
                                                                                                                <input
                                                                                                                    name="delivery_phonenumber"
                                                                                                                    type="text"
                                                                                                                    value="{{ $user_details != null ? $user_details->delivery_phonenumber : '' }}"
                                                                                                                    class="block w-full mt-1 border-gray-300 border h-10 rounded-lg p-2" />
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="block mb-2">
                                                                                                                <span
                                                                                                                    class="text-gray-700">Email</span>
                                                                                                                <input
                                                                                                                    name="delivery_email"
                                                                                                                    type="text"
                                                                                                                    value="{{ $user_details != null ? $user_details->delivery_email : '' }}"
                                                                                                                    class="block w-full mt-1 border-gray-300 border h-10 rounded-lg p-2" />
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                                                                                <button type="button" id="savebtn"
                                                                                    onclick="updateAddress()"
                                                                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                    Save
                                                                                </button>
                                                                                <button @click="modalOpen=false"
                                                                                    type="button"
                                                                                    class="closeModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                    Cancel
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>








                                                </div>
                                            </div>
                                            <div class="h-64 p-4 rounded-lg bg-gray-100">
                                                <h2 class="font-bold">Transaction History</h2>
                                                <div id="daddress" class="">
                                                    <div class="mt-4 mb-8 text-sm">
                                                        <span class="text-center text-gray-500">Nothing to Show</span>
                                                    </div>

                                                    <span id="caddress"
                                                        class="text-sm  hover:cursor-pointer rounded-lg bg-orange-500 p-1 px-2 text-white">
                                                        Change Address
                                                    </span>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="text-2xl font-semibold py-4 text-gray-900">Recent Orders</h1>
                                    @if ($order_list->isEmpty())
                                        <div class=" text-gray-500 px-2">Nothing to show...</div>
                                    @else
                                        <div class="">
                                            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                                                <thead class="text-left bg-gray-50 p-2">
                                                    <tr class="p-2">
                                                        <th scope="col " class="p-2 font-semibold ">
                                                            Order ID
                                                        </th>
                                                        <th scope="col" class="font-semibold ">
                                                            Number of Items
                                                        </th>
                                                        <th scope="col" class="font-semibold ">
                                                            Total Price
                                                        </th>
                                                        <th scope="col" class="font-semibold ">
                                                            Payment Method
                                                        </th>

                                                        <th scope="col" class="font-semibold ">
                                                            Ordered Date
                                                        </th>

                                                    </tr>
                                                </thead>

                                                <tbody class="divide-y divide-gray-200">
                                                    @foreach ($order_list as $key => $orders)
                                                        @if ($key < 3)
                                                            <tr>
                                                                <td class="">
                                                                    <div>{{ $orders->order_id }}</div>
                                                                </td>
                                                                <td class="">
                                                                    <div>{{ $orders->items }}</div>
                                                                </td>

                                                                <td class="">
                                                                    <div>{{ $orders->amount }}</div>
                                                                </td>
                                                                <td class="">
                                                                    <div>{{ $orders->payment_method }}</div>
                                                                </td>

                                                                <td>
                                                                    <div>{{ $orders->created_at }}</div>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateAddress() {
            let updateform = document.querySelector('#updateform')
            updateform.submit()
        }
    </script>

@endsection
