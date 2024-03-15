@extends('admin._layouts.master')

@section('page_title', 'Admin - Orders')
@section('order_select', 'bg-[#F1612D] text-white')
@section('body')

    <div class="px-5 bg-background w-full">

        <div class="flex justify-between">
            <div class="text-2xl font-bold">Latest Orders</div>

        </div>
        <div class='product-table bg-white p-3 rounded-lg font-main font-light shadow'>

            <!-- Tabs -->
            <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
                <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a
                        id="default-tab" href="#first">New/ Processing</a></li>
                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Verified</a></li>
                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Shipped</a></li>
                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#fourth">Delivered</a></li>
                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#fifth">Cancelled</a></li>
            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first" class="p-4">
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="font-normal p-10">
                                <tr class="">
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
                            {{-- @dd($orders) --}}
                                @if ($orders->order_status == 'PROCESSING')
                                    <tbody class="bg-white divide-y divide-gray-200 text-center">
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
                                            <td class="">
                                                <div class="p-2 bg-slate-300">{{ $orders->order_status }}</div>
                                            </td>
                                            <td>
                                                <div>{{ $orders->created_at }}</div>
                                            </td>
                                            {{-- <td>{{$orders->created_at->diffForHumans()}}</td>  --}}

                                            <td>
                                                <div class="flex p-2 justify-center">
                                                    <a href={{ route('order.details', $orders->order_id) }} >

                                                        <div class="bg-[#6B9E41] py-2 px-2 mx-2 text-white rounded-md">
                                                            View Details
                                                        </div>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>

                                        <!-- More rows... -->
                                    </tbody>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
                <div id="second" class="hidden p-4">
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="font-normal p-10">
                                <tr class="">
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
                                @if ($orders->order_status == 'VERIFIED')
                                    <tbody class="bg-white divide-y divide-gray-200 text-center">
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
                                            <td class="">
                                                <div class="p-2 bg-slate-300">{{ $orders->order_status }}</div>
                                            </td>
                                            <td>
                                                <div>{{ $orders->created_at }}</div>
                                            </td>
                                            {{-- <td>{{$orders->created_at->diffForHumans()}}</td>  --}}

                                            <td>
                                                <div class="flex p-2 justify-center">
                                                    <a href={{ route('order.details', $orders->order_id) }}>

                                                        <div class="bg-[#6B9E41] py-2 px-2 mx-2 text-white rounded-md">
                                                            View Details
                                                        </div>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>

                                        <!-- More rows... -->
                                    </tbody>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
                <div id="third" class="hidden p-4">
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="font-normal p-10">
                                <tr class="">
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
                                @if ($orders->order_status == 'SHIPPED')
                                    <tbody class="bg-white divide-y divide-gray-200 text-center">
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
                                            <td class="">
                                                <div class="p-2 bg-slate-300">{{ $orders->order_status }}</div>
                                            </td>
                                            <td>
                                                <div>{{ $orders->created_at }}</div>
                                            </td>
                                            {{-- <td>{{$orders->created_at->diffForHumans()}}</td>  --}}

                                            <td>
                                                <div class="flex p-2 justify-center">
                                                    <a href={{ route('order.details', $orders->order_id) }}>

                                                        <div class="bg-[#6B9E41] py-2 px-2 mx-2 text-white rounded-md">
                                                            View Details
                                                        </div>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>

                                        <!-- More rows... -->
                                    </tbody>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>

                <div id="fourth" class="hidden p-4">
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="font-normal p-10">
                                <tr class="">
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
                                @if ($orders->order_status == 'DELIVERED')
                                    <tbody class="bg-white divide-y divide-gray-200 text-center">
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
                                            <td class="">
                                                <div class="p-2 bg-slate-300">{{ $orders->order_status }}</div>
                                            </td>
                                            <td>
                                                <div>{{ $orders->created_at }}</div>
                                            </td>
                                            {{-- <td>{{$orders->created_at->diffForHumans()}}</td>  --}}

                                            <td>
                                                <div class="flex p-2 justify-center">
                                                    <a href={{ route('order.details', $orders->order_id) }}>

                                                        <div class="bg-[#6B9E41] py-2 px-2 mx-2 text-white rounded-md">
                                                            View Details
                                                        </div>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>

                                        <!-- More rows... -->
                                    </tbody>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
                <div id="fifth" class="hidden p-4">
                    <div class="relative overflow-x-auto mt-4">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="font-normal p-10">
                                <tr class="">
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
                            @if ($orders->order_status == 'CANCELED')
                            <tbody class="bg-white divide-y divide-gray-200 text-center">
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
                                    <td class="">
                                        <div class="p-2 bg-slate-300">{{ $orders->order_status }}</div>
                                    </td>
                                    <td>
                                        <div>{{ $orders->created_at }}</div>
                                    </td>
                                    {{-- <td>{{$orders->created_at->diffForHumans()}}</td>  --}}

                                    <td>
                                        <div class="flex p-2 justify-center">
                                            <a href={{ route('order.details', $orders->order_id) }}>

                                                <div class="bg-[#6B9E41] py-2 px-2 mx-2 text-white rounded-md">
                                                    View Details
                                                </div>
                                            </a>


                                        </div>
                                    </td>
                                </tr>

                                <!-- More rows... -->
                            </tbody>
                        @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>





        </div>

    </div>
    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l",
                        "-mb-px", "bg-white");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px",
                    "bg-white");
            });
        });
    </script>
@endsection
