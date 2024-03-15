@extends('frontend.layouts.app')
@section('main')

<div class="px-14 py-10  flex gap-6 bg-gray-100">
    <div class="w-[30%] bg-white rounded-lg py-3">

        <div class="flex flex-col">
            <div class="font-medium text-xl pb-1 px-3">My Account</div>
            <div class=" border-gray-400 border"></div>
            <div class="px-3 pt-5">
                <div class="flex items-center gap-3">
                    <div class="bg-[#ec1464] rounded-full p-1"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-person-fill text-white" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg></div>
                    <div class="font-semibold text-lg">Customer Information</div>

                </div>
                <div class="pl-9 flex flex-col pt-2 font-medium text-gray-800 gap-2 ">
                    <div class="cursor-pointer personal-btn active-btn" onclick="toggleSection('personal','this')">Customer Information</div>
                    <div class="cursor-pointer address-btn" onclick="toggleSection('address','this')">Address Book</div>
                    <div class="cursor-pointer changepw-btn" onclick="toggleSection('changepw','this')">Change Password</div>

                </div>
            </div>
            <div class="px-3 pt-5">
                <div class="flex items-center gap-3">
                    <div class="bg-[#ec1464] rounded-full p-1"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-cart-fill text-white" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg></div>
                    <div class="font-semibold text-lg" >Orders</div>

                </div>
                <div class="pl-9 flex flex-col pt-2 font-medium text-gray-800 gap-2 ">
                    <div class="cursor-pointer" onclick="toggleSection('orders','this')">Orders</div>


                </div>
            </div>

            <div class="px-3 pt-5">
                <div class="flex items-center gap-3">
                    <div class="bg-[#ec1464] rounded-full p-1"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-heart-fill text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                        </svg></div>
                    <div class="font-semibold text-lg">My Lists</div>

                </div>
                <div class="pl-9 flex flex-col pt-2 font-medium text-gray-800 gap-2 ">
                    <div class="cursor-pointer">My Wishlist</div>

                </div>
            </div>
        </div>



    </div>
    <div class="w-[70%] bg-white rounded-lg">
        <div class="p-3" id="personalSection">
            <div class="text-xl font-medium text-[#ec1464]">Personal Information:</div>
            <div class="flex flex-col gap-2 pt-3">
               <div class="flex gap-2 items-center text-lg">
                <div class=" font-medium">Name :</div>
                <div class="">{{ $customer->name }}</div>
               </div>
               <div class="flex gap-2 items-center text-lg">
                <div class=" font-medium">Email :</div>
                <div class="">{{$customer->email }}</div>
               </div>
               <div class="flex gap-2 items-center text-lg">
                <div class=" font-medium">Cell Number :</div>
                <div class="">{{$customer->phone }}</div>
               </div>
               <div class="flex gap-2 items-center text-lg">
                <div class=" font-medium">Address :</div>
                <div class="">{{$customer->address }}</div>
               </div>
            </div>
            <div class="pt-6">
              <span class="px-3 bg-[#ec1464] text-white py-2 rounded-md border-[#ec1464] border cursor-pointer hover:text-[#ec1464] hover:bg-white">EDIT PROFILE</span>
                </div>
        </div>
        <div class="p-3" id="addressSection">
            <div class="text-xl font-medium text-[#ec1464]">Delivery Address:</div>

            <div class="pt-6">
              <span class="px-3 bg-[#ec1464] text-white py-2 rounded-md border-[#ec1464] border cursor-pointer hover:text-[#ec1464] hover:bg-white">EDIT ADDRESS</span>
                </div>
        </div>
        <div class="p-3"id="changepwSection" >
            <div class="text-xl font-medium text-[#ec1464]">Change Password:</div>
            <div class="w-full max-w-md">
                <div class="rounded-lg px-8 pt-5 pb-8 mb-4">


                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                            <p class="font-bold">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                            <p class="font-bold">{{ session('error') }}</p>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.password.update') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="current_password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Current Password') }}
                            </label>
                            <div class="relative">
                                <input id="current_password" type="password"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('current_password') border-red-500 @enderror"
                                    name="current_password" required autocomplete="current-password">

                                <span id="toggleCurrentPassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </span>
                            </div>
                            @error('current_password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="new_password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('New Password') }}
                            </label>
                            <div class="relative">
                                <input id="new_password" type="password"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('new_password') border-red-500 @enderror"
                                    name="new_password" required autocomplete="new-password">

                                <span id="toggleNewPassword" class="material-symbols-outlined absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                    lock_open <!-- Icon when password is visible -->

                                </span>
                            </div>
                            @error('new_password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="new_password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Confirm New Password') }}
                            </label>
                            <div class="relative">
                                <input id="new_password_confirmation" type="password"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="new_password_confirmation" required autocomplete="new-password">

                                <span id="toggleConfirmNewPassword" class="material-symbols-outlined absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                    lock_open <!-- Icon when password is visible -->

                                </span>
                            </div>
                            @error('new_password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-[#ec1464] hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Change Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="p-3" id="orderSection">

            <div>
                @include('admin.includes.messages')
                <div class="flex justify-between">
                    <div class="text-2xl font-bold">Orders</div>
                </div>
                <div class="bg-white p-3 mt-5 rounded-lg font-main  shadow">



                    <div class="relative overflow-x-auto ">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="font-normal p-10">
                                <tr class="">
                                    <th scope="col " class="p-2 font-semibold ">
                                        Order ID
                                    </th>

                                    <th scope="col" class="font-semibold ">
                                        Total Price
                                    </th>
                                    <th scope="col" class="font-semibold ">
                                        Payment Method
                                    </th>
                                    <th scope="col" class="font-semibold ">
                                        View Status
                                    </th>
                                    <th scope="col" class="font-semibold ">
                                        Status
                                    </th>

                                    <th scope="col" class="font-semibold ">
                                        Ordered Date
                                    </th>
                                    <th scope="col" class="font-semibold ">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($order_list as $key => $orders)
                                <tbody class="bg-white divide-y divide-gray-200 text-center">
                                    <tr>
                                        <td class="">
                                            <div>{{ $orders->order_id }}</div>
                                        </td>


                                        <td class="">
                                            <div>{{ $orders->amount }}</div>
                                        </td>
                                        <td class="">
                                            <div>{{ $orders->payment_method }}</div>
                                        </td>

                                        <td class="">
                                            <div class="p-2 ">{{ $orders->view_status == 1 ? 'seen' : 'Not seen' }}
                                            </div>
                                        </td>
                                        <td class="">
                                            @if ($orders->order_status == 'DELIVERED')
                                                <span class="py-0.5 px-1 rounded bg-green-500 text-white text-xs">
                                                    {{ $orders->order_status }}</span>
                                            @elseif ($orders->order_status == 'CANCELED')
                                                <span class="py-0.5 px-1 rounded bg-red-500 text-white text-xs">
                                                    {{ $orders->order_status }}</span>
                                            @elseif ($orders->order_status == 'PROCESSING')
                                                <span class="py-0.5 px-1 rounded bg-orange-500 text-white text-xs">
                                                    {{ $orders->order_status }}</span>
                                            @elseif ($orders->order_status == 'SHIPPED')
                                                <span class="py-0.5 px-1 rounded bg-teal-500 text-white text-xs">
                                                    {{ $orders->order_status }}</span>
                                            @elseif ($orders->order_status == 'VERIFIED')
                                                <span class="py-0.5 px-1 rounded bg-blue-500 text-white text-xs">
                                                    {{ $orders->order_status }}</span>
                                            @elseif ($orders->order_status == 'RETURNED')
                                                <span class="py-0.5 px-1 rounded bg-yellow-500 text-white text-xs">
                                                    {{ $orders->order_status }}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div>{{ (new \DateTime($orders->delivered_date))->format('jS M Y') }}</div>
                                        </td>


                                        <td>
                                            <div class="flex p-2 justify-center">
                                                <a href={{ route('order.details', $orders->order_id) }}>

                                                    <div class="bg-[#6B9E41] py-1 px-2 mx-2 text-xs text-white rounded-md">
                                                        View Details
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>

                        {{-- {{ $order_list->links() }} --}}

                    </div>
                </div>
            </div>



        </div>

    </div>

</div>




<script>
    // Initially hide the changepw section and show the personal section
    document.getElementById('personalSection').classList.remove('hidden');
    document.getElementById('changepwSection').classList.add('hidden');
    document.getElementById('addressSection').classList.add('hidden');
    document.getElementById('orderSection').classList.add('hidden');



    function toggleSection(section, button) {
        var personalSection = document.getElementById('personalSection');
        var addressSection = document.getElementById('addressSection');

        var orderSection = document.getElementById('orderSection');


        var changepwSection = document.getElementById('changepwSection');

        var personalBtn = document.querySelector('.personal-btn');
        var addressBtn = document.querySelector('.address-btn');

        var changepwBtn = document.querySelector('.changepw-btn');

        if (section === 'personal') {
            personalSection.classList.remove('hidden');
            changepwSection.classList.add('hidden');
            addressSection.classList.add('hidden');
            orderSection.classList.add('hidden');

            personalBtn.classList.add('active-btn');
            changepwBtn.classList.remove('active-btn');
            addressBtn.classList.remove('active-btn');

        } else if (section === 'changepw') {
            personalSection.classList.add('hidden');
            addressSection.classList.add('hidden');
            changepwSection.classList.remove('hidden');
            orderSection.classList.add('hidden');

            personalBtn.classList.remove('active-btn');
            addressBtn.classList.remove('active-btn');
            changepwBtn.classList.add('active-btn');
        } else if (section === 'address') {
            personalSection.classList.add('hidden');
            changepwSection.classList.add('hidden');
            addressSection.classList.remove('hidden');
            orderSection.classList.add('hidden');

            personalBtn.classList.remove('active-btn');
            addressBtn.classList.add('active-btn');
            changepwBtn.classList.remove('active-btn');
        }
        else if (section === 'orders') {
            personalSection.classList.add('hidden');
            changepwSection.classList.add('hidden');
            addressSection.classList.add('hidden');
            orderSection.classList.remove('hidden');
            personalBtn.classList.remove('active-btn');
            addressBtn.classList.add('active-btn');
            changepwBtn.classList.remove('active-btn');
        }

    }
</script>
<style>
    .hidden {
        display: none;
    }

    .active-btn {

        /* Adjust the color as needed */
        color: #ec1464;
        /* Adjust the color as needed */
    }
</style>



<script>
    const toggleCurrentPassword = document.getElementById('toggleCurrentPassword');
    const currentPasswordInput = document.getElementById('current_password');

    toggleCurrentPassword.addEventListener('click', () => {
        const type = currentPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        currentPasswordInput.setAttribute('type', type);
    });
</script>

<!-- Script for New Password -->
<script>
    const toggleNewPassword = document.getElementById('toggleNewPassword');
    const newPasswordInput = document.getElementById('new_password');

    toggleNewPassword.addEventListener('click', () => {
        const type = newPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        newPasswordInput.setAttribute('type', type);
    });
</script>

<!-- Script for Confirm New Password -->
<script>
    const toggleConfirmNewPassword = document.getElementById('toggleConfirmNewPassword');
    const confirmNewPasswordInput = document.getElementById('new_password_confirmation');

    toggleConfirmNewPassword.addEventListener('click', () => {
        const type = confirmNewPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmNewPasswordInput.setAttribute('type', type);
    });
</script>
@endsection


