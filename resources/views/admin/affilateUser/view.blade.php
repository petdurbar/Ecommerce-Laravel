@extends('admin._layouts.master')

@section('body')
    {{-- @dd($affilateusers) --}}
    <div class="m-auto">
        <div class="border p-7 bg-white rounded-lg">
            <div class="flex gap-4">
                <a href="{{ route('affilateusers') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M5 12l6 6"></path>
                        <path d="M5 12l6 -6"></path>
                    </svg>
                </a>
                <div class="text-xl font-bold">User Details</div>
            </div>
            <div class="px-4 flex  py-1 pt-3 text-base">
                <p class="font-bold">
                    Affiliate Id :&nbsp
                </p>
                {{ $affilateusers->affilate_id }}
            </div>
            <div class=" pt-4 ">

                <style>
                    .active-tab {
                        /* background-color: #205579; */
                        border-color: #4c74a8;
                        color: #1a202c;
                    }
                </style>

                <div class="mb-4 border-b border-gray-200 ">
                    <div class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 " id="tabExample"
                        role="tablist">

                        <span class="mr-2" role="paymentinfo">
                            <button
                                class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                id="userDetiails-tab" type="button" role="tab" aria-controls="userDetails-button"
                                aria-selected="true" onclick="showTab('userDetails-button',this)">User Detail</button>
                        </span>
                        <span class="mr-2" role="paymentinfo">
                            <button
                                class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                id="bankDetails-tab" type="button" role="tab" aria-controls="bankDetails_Button"
                                aria-selected="true" onclick="showTab('bankDetails_Button',this)">Payment Details</button>
                        </span>
                        <span class="mr-2" role="paymentinfo">
                            <button
                                class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                id="commission-tab" type="button" role="tab" aria-controls="commission_button" aria-selected="true"
                                onclick="showTab('commission_button',this)">Commision</button>
                        </span>
                        {{-- <span role="paymentinfo">
                            <button
                                class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                id="esewa-tab" type="button" role="tab" aria-controls="esewa-button"
                                aria-selected="false" onclick="showTab('esewa-button',this)">Esewa</button>

                        </span> --}}
                    </div>
                </div>
                <div id="tabContentExample">
                    <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="userDetails-button" role="tabpanel"
                        aria-labelledby="userDetiails-tab">
                        <div class=" grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="Bank Name" class="block  text-sm font-bold text-gray-700">
                                    Name
                                </label>
                                {{ $affilateusers->name }}
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="address" class="block text-sm font-bold text-gray-700">
                                    Address
                                </label>
                                {{ $affilateusers->address }}
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-bold text-gray-700">
                                    Email
                                </label>
                                {{ $affilateusers->email }}
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <p class="font-bold block text-sm text-gray-700">
                                    Promotional Method
                                </p>
                                {{ $affilateusers->promotional_method }}
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <p class="font-bold block text-sm text-gray-700">
                                    Expected Sale
                                </p>
                                {{ $affilateusers->expected_sale }}
                            </div>

                            <div class="flex flex-col justify-between col-span-6 sm:col-span-3">
                                <div>
                                    <p class="font-bold text-gray-700 py-1 text-base">
                                        Status
                                    </p>
                                    {{ $affilateusers->status }}
                                </div>
                                <div class="my-5">
                                    @if ($affilateusers->status === 'VERIFIED' || $affilateusers->status === 'REJECTED')
                                        <div class="">

                                        </div>
                                    @else
                                        <div class="flex">
                                            <form action="{{ route('user.verify', $affilateusers->id) }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="mr-2 py-1 px-3 bg-lime-600 text-white rounded-md">
                                                    Verify
                                                </button>
                                            </form>
                                            <form action="{{ route('user.reject', $affilateusers->id) }}" method="POST">
                                                @csrf
                                                <button class="mr-2 py-1 px-3 bg-red-800 text-white rounded-md ">
                                                    Reject
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="bankDetails_Button" role="tabpanel"
                        aria-labelledby="bankDetails-tab">
                        <div class=" grid grid-cols-6 gap-6">

                            @if ($affilateusers->bank_name)
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="Address" class="block text-sm font-medium text-gray-700">
                                        Bank Name
                                    </label>

                                    <input type="text" name="account_number"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                        value=" {{ $affilateusers->bank_name }}" disabled />

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="Address" class="block text-sm font-medium text-gray-700">
                                        Account No.
                                    </label>

                                    <input type="number" name="account_number"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                        value="{{ $affilateusers->account_number }}" disabled />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="Address" class="block text-sm font-medium text-gray-700">
                                        Account Holder Name
                                    </label>

                                    <input type="text" name="account_holder_name"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                        value="{{ $affilateusers->account_holder_name }}" disabled />
                                </div>
                            @endif

                            @if ($affilateusers->khalti_id)
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="KhaltiId" class="block text-sm font-medium text-gray-700">
                                        Khalti Id
                                    </label>

                                    <input type="text" name="khalti_id"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                        value="{{ $affilateusers->khalti_id }}" disabled />
                                </div>
                            @endif
                            @if ($affilateusers->esewa_id)
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="esewa" class="block text-sm font-medium text-gray-700">
                                        Esewa Id
                                    </label>

                                    <input type="text" name="esewa"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                        value="{{ $affilateusers->esewa_id }}" disabled />
                                </div>
                            @endif
                            @if ($affilateusers->ime_id)
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ime" class="block text-sm font-medium text-gray-700">
                                        IME Id
                                    </label>

                                    <input type="text" name="ime"
                                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                        value="{{ $affilateusers->ime_id }}" disabled />
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="commission_button" role="tabpanel"
                        aria-labelledby="commission-tab">
                        <label for="IME" class="block text-sm font-medium text-gray-700">
                            IME Id
                        </label>

                        <input type="text" name="ime_id"
                            class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                            value="{{ old('ime_id') }}" />
                        @error('ime_id')
                            <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="esewa-button" role="tabpanel"
                        aria-labelledby="esewa-tab">
                        <label for="esewa" class="block text-sm font-medium text-gray-700">
                            Esewa Id
                        </label>
                        <input type="text" name="esewa_id"
                            class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                            value="{{ old('esewa_id') }}" />
                        @error('esewa_id')
                            <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>

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
                    showTab('userDetails-button', document.getElementById('userDetiails-tab'));
                </script>

                <div class="flex ">


                    <div class="ml-5">


                    </div>

                </div>



            </div>
        </div>
    </div>
@endsection
