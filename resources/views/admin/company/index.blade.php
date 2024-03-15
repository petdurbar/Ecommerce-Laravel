@extends('admin._layouts.master')


@section('body')
    <div class="p-4">
        @include ('admin.message.index')

        <div class="flex justify-between">
            <div class="text-2xl font-bold">Pages</div>
            {{-- add page --}}
            {{-- <div class="flex">
                <a href='{{ route('company.create') }}'
                    class='bg-[#0f577d] text-white h-10 p-2 text-sm flex gap-2 items-center font-main rounded-lg'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="svgicon" height="1em" viewBox="0 0 448 512">
                        <style>
                            .svgicon {
                                fill: #ffffff;
                            }
                        </style>
                        <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                    </svg>
                    <span>Add Page</span>
                </a>
            </div> --}}

        </div>

        <div class="container mx-auto p-5">
            <div class=" bg-white p-3 rounded-lg mt-10 font-main  shadow">
                <div class="relative overflow-x-auto ">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="font-normal p-10">
                            <tr class="">
                                <th scope="col " class="p-2 font-semibold ">
                                    Name
                                </th>

                                <th scope="col" class="font-semibold ">
                                    Created At
                                </th>
                                <th scope="col" class="font-semibold ">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-center">
                            @foreach ($companies as $key => $company)
                                <tr>
                                    <td class="">
                                        <div>{{ $company->title }}</div>
                                    </td>
                                    <td class="">
                                        <div>{{ date('Y-m-d', strtotime($company->created_at)) }}</div>

                                    </td>
                                    <td>
                                        <div class="flex p-2 justify-center">
                                            <a href="{{ route('company.edit', $company->id) }}">
                                                <div class="bg-[#266688] py-1 px-2 mx-2 text-white flex rounded-md ">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                        </path>
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                        </path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg>
                                                    <div class="ml-2">
                                                        Edit
                                                    </div>

                                                </div>
                                            </a>

                                            {{-- delete --}}

                                            {{-- <form method="POST" action="{{ route('company.destroy', $company->id) }}"
                                                id="delete-form-{{ $company->id }}">
                                                @csrf
                                                @method('delete')


                                                <button type="button" onclick="deleteSingleImage({{ $company->id }})"
                                                    class="bg-red-500 py-1 px-2 mx-2 flex text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 7l16 0"></path>
                                                        <path d="M10 11l0 6"></path>
                                                        <path d="M14 11l0 6"></path>
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                    </svg>
                                                </button>
                                            </form> --}}

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
    <script>
        function deleteSingleImage(event, imageId) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this Property Type!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + imageId).submit();
                }
            });
        }
    </script>
@endsection
