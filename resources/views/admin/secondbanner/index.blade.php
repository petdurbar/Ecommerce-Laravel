@extends('admin/layouts/app')
@section('page_title', 'Admin - Banner')
@section('banner_select', 'bg-black text-white')
@section('container')
    <div class="px-5 bg-background w-full">

        <div class="flex justify-between">
            <div class="text-2xl font-bold">Banner</div>
            <a href='{{ route('secondbanner.create') }}'
                        class='bg-black text-white h-10 p-2 text-sm flex items-center font-main rounded-lg'>
                        <span class='material-symbols-outlined text-sm mr-2'>add</span>
                        <span>Add Banner</span>
                    </a>
        </div>
        <div class='product-table bg-white p-3 rounded-lg mt-10 font-main font-light shadow'>

            <div class="relative overflow-x-auto">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="font-normal p-10">
                        <tr class="">
                            <th scope="col " class="p-2 font-semibold ">
                                Banner Name
                            </th>
                            

                            <th scope="col" class="font-semibold ">
                                Image
                            </th>
                            <th scope="col" class="font-semibold ">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    @foreach ($secondbanners as $key => $secondbanner)
                        <tbody class="bg-white divide-y divide-gray-200 text-center">
                            <tr>
                                <td class="">
                                    <div>{{ $secondbanner->banner_name }}</div>
                                </td>
                            
                                <td class="p-2" style="width: 100px;">
                                    <img class="" src="{{ asset('/images/banner/' . $secondbanner->banner_image) }}"
                                        alt="Card" style="width: 70px;">
                                </td>
                               
                               
                                {{-- <td>{{$baner->created_at->diffForHumans()}}</td>  --}}

                                <td>
                                    <div class="flex p-2 justify-center">
                                        <a href="{{ route('secondbanner.edit',$secondbanner->id) }}">
                                            <div class="bg-slate-500 py-1 px-2 mx-2 text-white flex rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>
                                                {{-- <div>
                                                    edit
                                                 </div> --}}

                                            </div>
                                        </a>
                                        <form action="{{ route('secondbanner.destroy', $secondbanner->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="bg-red-500  py-1 px-2 mx-2 flex text-white rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                                {{-- <div>
                                                    Delete
                                                </div> --}}
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>

                            <!-- More rows... -->
                        </tbody>
                    @endforeach
                </table>
            </div>


        </div>

    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script>
        function changeStatus(vendorId) {
             
                Swal.fire({
                    title: 'Change Status',
                    text: 'Are you sure you want to change the status?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const route = document.getElementById('status-button-' + vendorId).getAttribute('data-route');
                document.getElementById('change-status-form').action = route;
                        document.getElementById('vendor_id').value = vendorId;
                        document.getElementById('change-status-form').submit();
                    }
                });
            }

            function deleteItem(itemSlug) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this !',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let form = document.querySelector(".delete-form-" + itemSlug)
                        form.submit();
                    }
                });
            }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

