@extends('admin.layouts.app')

@section('container')
    <div class="p-4 z-0">
        @include('admin.includes.messages')
        <div class=" mx-auto px-5 ">
            <div class="mt-10  relative z-[0]">
                <div class="overflow-x-auto">
                    <table class="w-[100%] divide-x-2 divide-y divide-gray-200 z-[0]">
                        <thead class="font-normal  divide-x-2 bg-slate-800 ">
                            <tr class="">
                                <th scope="col " class="p-2 font-semibold text-white ">
                                    Page
                                </th>

                                <th scope="col" class="font-semibold text-white ">
                                    Edited At
                                </th>
                                <th scope="col" class="font-semibold text-white ">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        {{-- {{ dd($pages) }} --}}

                        @foreach ($pages as $key => $page)
                            <tbody class="bg-white divide-y divide-gray-200 text-center">
                                <tr>
                                    <td class=" divide border">
                                        {{ $page->page_name }}
                                    </td>
                                    <td class=" divide border">
                                        {{ $page->updated_at->format('Y/m/d') }}
                                    </td>


                                    <td class="p-2   border divide flex justify-center items-center">
                                        @if ($page->page_id == '1')
                                            <a
                                                href="
                                {{ route('termsandcondition.show', $page->id) }}
                                ">
                                                <button class="mr-2 py-1 px-3 bg-pink-600 text-white rounded-md">
                                                    View
                                                </button>
                                            </a>
                                        @endif


                                        @if ($page->page_id == '2')
                                            <a
                                                href="
                                {{ route('privacy-policy.show', $page->id) }}
                                ">
                                                <button class="mr-2 py-1 px-3 bg-pink-600 text-white rounded-md">
                                                    View
                                                </button>
                                            </a>
                                        @endif

                                        @if ($page->page_id == '3')
                                            <a
                                                href="
                            {{ route('aboutadmin.show', $page->id) }}
                            ">
                                                <button class="mr-2 py-1 px-3 bg-pink-600 text-white rounded-md">
                                                    View
                                                </button>
                                            </a>
                                        @endif

                                        {{-- edit --}}

                                        @if ($page->page_id == '1')
                                            <a
                                                href="
                            {{ route('termsandcondition.edit', $page->id) }}
                            ">
                                                <button class="mr-2 py-1 px-3 bg-green-500 text-white rounded-md">
                                                    Edit
                                                </button>
                                            </a>
                                        @endif

                                        @if ($page->page_id == '2')
                                            <a
                                                href="
                            {{ route('privacy-policy.edit', $page->id) }}
                            ">
                                                <button class="mr-2 py-1 px-3 bg-green-500 text-white rounded-md">
                                                    Edit
                                                </button>
                                            </a>
                                        @endif
                                        @if ($page->page_id == '3')
                                            <a
                                                href="
                            {{ route('aboutadmin.edit', $page->id) }}
                            ">
                                                <button class="mr-2 py-1 px-3 bg-green-500 text-white rounded-md">
                                                    Edit
                                                </button>
                                            </a>
                                        @endif

                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $pages->links() }}
        </div>
    </div>
    </div>
@endsection
