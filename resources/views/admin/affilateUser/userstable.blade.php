@extends('admin._layouts.master')
@section('body')
    <section class="px-6 py-6">
        <div class="grid   grid-cols-1 gap-6 ">
            <div class="pt-4 bg-white rounded shadow  ">
                <div class="flex px-6 pb-4 border-b ">
                    <h2 class="text-xl font-bold text-gray-600  ">Affiliate Users</h2>
                </div>
                <div class="p-4 overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-xs text-left text-gray-500 ">
                                <th class="px-6 pb-3 font-medium">Name</th>
                                <th class="px-6 pb-3 font-medium ">Phonenumber </th>
                                <th class="px-6 pb-3 font-medium">Email </th>
                                <th class="px-6 pb-3 font-medium">Status </th>
                                <th class="px-6 pb-3 font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($affilateusers as $key => $affilateuser)
                                <tr class="text-xs bg-gray-100 ">
                                    <td class="px-6 py-5 font-medium">{{ $affilateuser->name }}</td>
                                    <td class="px-6 py-5 font-medium ">{{ $affilateuser->phonenumber }}</td>
                                    <td class="px-6 py-5 font-medium ">{{ $affilateuser->email }}</td>
                                    <td>
                                        @if ($affilateuser->status == 'PENDING')
                                            <span
                                                class="inline-block px-2 py-1 text-center text-yellow-600 bg-yellow-100 rounded-full">{{ $affilateuser->status }}</span>
                                        @elseif ($affilateuser->status == 'VERIFIED')
                                            <span
                                                class="inline-block px-2 py-1 text-center text-green-600 bg-green-100 rounded-full  ">{{ $affilateuser->status }}</span>
                                            {{-- @elseif ($affilateuser->status == 'rejected') --}}
                                        @else
                                            <span
                                                class="inline-block px-2 py-1 text-center text-red-600 bg-red-100 rounded-full ">
                                                {{ $affilateuser->status }}</span>
                                        @endif


                                    </td>
                                    <td class="px-6 py-5 ">
                                        <a href="{{route("viewaffilate",$affilateuser->slug)}}"
                                            class="px-4 py-2 font-medium text-blue-500 border border-blue-500 rounded-md hover:text-gray-100 hover:bg-blue-500"
                                            role="menuitem">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr class="text-xs ">
                                <td class="px-6 py-5 font-medium">018276td45</td>
                                <td class="px-6 py-5 font-medium ">08.4.2021</td>
                                <td class="px-6 py-5 font-medium ">abc@gmail.com</td>
                                <td>
                                    <span
                                        class="inline-block px-2 py-1 text-center text-yellow-600 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-5 ">
                                    <a href="#"
                                        class="px-4 py-2 font-medium text-blue-500 border border-blue-500 rounded-md  hover:text-gray-100 hover:bg-blue-500">Edit
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-xs bg-gray-100 ">
                                <td class="px-6 py-5 font-medium">018276td45</td>
                                <td class="px-6 py-5 font-medium ">08.4.2021</td>
                                <td class="px-6 py-5 font-medium ">abc@gmail.com</td>
                                <td>
                                    <span
                                        class="inline-block px-2 py-1 text-center text-green-600 bg-green-100 rounded-full ">Completed</span>
                                </td>
                                <td class="px-6 py-5 ">
                                    <a href="#"
                                        class="px-4 py-2 font-medium text-blue-500 border border-blue-500 rounded-md  hover:text-gray-100 hover:bg-blue-500">Edit
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-xs ">
                                <td class="px-6 py-5 font-medium">018276td45</td>
                                <td class="px-6 py-5 font-medium ">08.4.2021</td>
                                <td class="px-6 py-5 font-medium ">abc@gmail.com</td>
                                <td>
                                    <span class="inline-block px-2 py-1 text-center text-red-600 bg-red-100 rounded-full ">
                                        Cancelled</span>
                                </td>
                                <td class="px-6 py-5 ">
                                    <a href="#"
                                        class="px-4 py-2 font-medium text-blue-500 border border-blue-500 rounded-md  hover:text-gray-100 hover:bg-blue-500">Edit
                                    </a>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=" mt-1">
                {{ $affilateusers->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>
@endsection
