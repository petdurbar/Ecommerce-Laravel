@extends('frontend._layout._master')

@section('body')
    {{-- @dd($userinfo); --}}
    <div class="mx-auto max-w-screen-2xl">

        <form class="affilateform_submit" action="{{ route('affilatesubmit') }}" method="POST">
            {{-- @include('message.index') --}}
            @csrf
            <div class=" grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    <label for="FullName" class="block text-sm font-medium text-gray-700">
                        Full Name
                    </label>

                    <input type="text" id="FullName" name="name" disabled
                        class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        value="{{ old('name', $userinfo->name) }}" />

                    @error('name')
                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                    </label>

                    <input type="email" id="email" name="email" disabled
                        class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        value="{{ old('email', $userinfo->email) }}" />
                    @error('email')
                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                            * {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Promotional Method
                    </label>

                    <input type="text" name="promotional_method"
                        class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        value="{{ old('promotional_method') }}" />
                    @error('promotional_method')
                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Expected Sale
                    </label>

                    <input type="text" name="expected_sale"
                        class="mt-1 p-2 border w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        value="{{ old('expected_sale') }}" />
                    @error('expected_sale')
                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-span-6 text-2xl my-5">
                Account Information
            </div>
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
                            id="bank-tab" type="button" role="tab" aria-controls="bank-button" aria-selected="true"
                            onclick="showTab('bank-button',this)">Bank</button>
                    </span>
                    <span class="mr-2" role="paymentinfo">
                        <button
                            class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                            id="khalti-tab" type="button" role="tab" aria-controls="khalti-button" aria-selected="true"
                            onclick="showTab('khalti-button',this)">Khalti</button>
                    </span>
                    <span class="mr-2" role="paymentinfo">
                        <button
                            class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                            id="ime-tab" type="button" role="tab" aria-controls="ime-button" aria-selected="true"
                            onclick="showTab('ime-button',this)">IME Pay</button>
                    </span>
                    <span role="paymentinfo">
                        <button
                            class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                            id="esewa-tab" type="button" role="tab" aria-controls="esewa-button" aria-selected="false"
                            onclick="showTab('esewa-button',this)">Esewa</button>

                    </span>
                </div>
            </div>
            <div id="tabContentExample">
                <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="bank-button" role="tabpanel"
                    aria-labelledby="bank-tab">
                    <div class=" grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Bank Name" class="block text-sm font-medium text-gray-700">
                                Bank Name
                            </label>

                            <input type="text" name="bank_name"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('bank_name') }}" />
                            @error('bank_name')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Address" class="block text-sm font-medium text-gray-700">
                                Account No.
                            </label>

                            <input type="number" name="account_number"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('account_number') }}" />
                            @error('account_number')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Address" class="block text-sm font-medium text-gray-700">
                                Account Holder Name
                            </label>

                            <input type="text" name="account_holder_name"
                                class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                                value="{{ old('account_holder_name') }}" />
                            @error('account_holder_name')
                                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="khalti-button" role="tabpanel"
                    aria-labelledby="khalti-tab">
                    <label for="Khalti" class="block text-sm font-medium text-gray-700">
                        Khalti Id
                    </label>
                    <input type="text" name="khalti_id"
                        class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        value="{{ old('khalti_id') }}" />
                    @error('khalti_id')
                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="hidden-items p-4 rounded-lg bg-gray-50 " id="ime-button" role="tabpanel"
                    aria-labelledby="ime-tab">
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
                showTab('bank-button', document.getElementById('bank-tab'));
            </script>


            <div class="col-span-6 sm:flex sm:items-center sm:gap-4 mt-5">
                <button
                    class="inline-block shrink-0 rounded-md border border-[#0f577d] bg-[#0f577d] px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#0f577d] focus:outline-none focus:ring active:text-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
    {{-- <script>
        $('.affilateform_submit').on('submit', function(e) {
            e.preventDefault();

            const formData = $(this).serialize();
            const url = "{{ route('affilatesubmit') }}";
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                dataType: 'json',
                success: function(data) {
                    console.log("success")

                }
            });
        });
    </script> --}}
@endsection
