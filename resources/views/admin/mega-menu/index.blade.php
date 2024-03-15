@extends('admin/layouts/app')
@section('page_title', 'Admin - Product')
@section('product_select', 'bg-black text-white')
@section('container')
    <div class="px-5 bg-background w-full">
        @include('admin.includes.messages')

        <div class="flex justify-between">
            <div class="text-2xl font-bold">Mega Menu</div>
            <div class="flex">
                <a href='{{ route('product.create') }}'
                    class='bg-black text-white h-10 p-2 text-sm flex items-center font-main rounded-lg'>
                    <span class='material-symbols-outlined text-sm mr-2'>add</span>
                    <span>Add Product</span>
                </a>
            </div>

        </div>
        <div class="mx-4 max-sm:-mx-8 lg:-mx-10 px-8 max-md:px-9 py-4 overflow-x-auto z-[0] max-h-screen overflow-y-auto">

            <div class="max-h-screen min-w-full  shadow rounded-lg z-[0] overflow-y-hidden">
                <table class="min-w-full leading-normal">

                    <thead class="font-normal p-10">
                        <tr class="">
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Product Name</th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Created At
                            </th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>

                    {{-- @foreach ($data as $key => $product) --}}
                        <tbody>

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $product->product_name }}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $product->created_at->format('jS M Y') }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class=" px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <div class="">
                                            <div x-data="{ dropdownOpen: false }" class="">
                                                <button @click="dropdownOpen = ! dropdownOpen"
                                                    class=" w-6 h-6 overflow-hidden focus:outline-none hover:rounded-full hover:bg-slate-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-dots-vertical" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                </button>

                                                <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false"
                                                    class="fixed inset-0 z-10 w-full h-full">
                                                </div>

                                                <div x-cloak x-show="dropdownOpen"
                                                    class="absolute right-6 mr-auto z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                                                    <a href="{{ route('product.show', $product->id) }}"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-500 hover:text-white">View</a>

                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-500 hover:text-white">Edit
                                                    </a>

                                                    <form method="POST"
                                                        action="{{ route('product.destroy', $product->id) }}"
                                                        id="delete-form-{{ $product->id }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button"
                                                            onclick="deleteSingleImage({{ $product->id }})"
                                                            class="flex w-full items-center gap-2   px-2 py-2 text-md openModal text-center text-red-700 hover:bg-red-50">
                                                            <span class="pl-2">
                                                                Delete

                                                            </span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    {{-- @endforeach --}}
                </table>
            </div>



        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <script>
            function deleteItem(itemSlug) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // alert("delete-form-"+itemSlug)
                        let form = document.querySelector(".delete-form-" + itemSlug)
                        form.submit();
                    }
                });
            }
        </script>

    </div>
@endsection
