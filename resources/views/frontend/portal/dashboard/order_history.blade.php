@extends('frontend.portal._layouts.master')

@section('body')
   
    <!-- Static sidebar for desktop -->
    <div class=" md:flex md:flex-shrink-0 ">
        {{-- @include('frontend.portal.dashboard.user_sidebar') --}}
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="flex  flex-shrink-0 ">

                <div class="flex flex-col w-0 flex-1 overflow-hidden">
                    <div class="flex-1 relative flex-shrink-0 overflow-y-auto focus:outline-none">
                        <div class="py-6">

                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <h1 class="text-2xl font-semibold text-gray-900">Order History</h1>

                                @if ($order_list->isEmpty())
                                    <div class="text-center text-gray-500 px-2 py-10">Nothing to show...</div>
                                @else
                                    <div class="pt-5">
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
                                                    <th scope="col" class="font-semibold ">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-gray-200">
                                                @foreach ($order_list as $key => $orders)
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
                                                            {{-- <td>{{$orders->created_at->diffForHumans()}}</td>  --}}

                                                            <td>
                                                                <div class="flex p-2 justify-center">
                                                                    <a href={{ route('user.details', $orders->order_id) }}>

                                                                        <div
                                                                            class="bg-[#6B9E41] py-2 px-2 mx-2 text-white rounded-md">
                                                                            View Details
                                                                        </div>
                                                                    </a>


                                                                </div>
                                                            </td>
                                                        </tr>
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


@endsection
