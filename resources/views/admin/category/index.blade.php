@extends('admin/layouts/app')
@section('page_title', 'Category')
@section('category_select', 'bg-black text-white')
@section('container')
<div class="px-5 bg-background w-full">
    @include('admin.includes.messages')
    <div class="flex justify-between">
        @if (request('category'))
        <div class="text-2xl font-bold">Sub Categories</div>
        <div class='flex'>
                <a href='{{ route('category.create', ['category' => request('category')]) }}'
                    class='bg-black text-white h-10 p-2 text-sm flex items-center font-main rounded-lg'>
                    <span class='material-symbols-outlined text-sm mr-2'>add</span>
                    <span>Add SubCategory</span>
                </a>
            @else
        <div class="text-2xl font-bold">Categories</div>

                <a href='{{ route('category.create') }}'
                    class='bg-black text-white h-10 p-2 text-sm flex items-center font-main rounded-lg'>
                    <span class='material-symbols-outlined text-sm mr-2'>add</span>
                    <span>Add Category</span>
                </a>
            @endif
        </div>
    </div>
    @if (request('category'))
            <div class="flex text-gray-500 mb-5">
                <div class="breadcrumbs">
                    <ul class="flex">
                        <li> <a href="{{ route('category.index') }}">Category</a>
                        </li>
                        {{-- @foreach ($breadcrumbs as $breadcrumb)
                            <span class="separator mx-2">></span>
                            <li>
                                <a href="{{ route('category.index', ['category' => $breadcrumb->id]) }}">{{ $breadcrumb->category_name }}
                                </a>
                            </li>
                        @endforeach --}}
                    </ul>
                </div>
            </div>
        @endif

    <div class='product-table bg-white p-3 rounded-lg mt-10 font-main font-light shadow'>

        <div class="relative overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="font-normal p-10">
                    <tr class="">
                        <th scope="col " class="p-2 font-semibold ">
                            Category Name
                        </th>

                        <th scope="col" class="font-semibold ">
                          Image
                        </th>
                        <th scope="col" class="font-semibold ">
                            Created At
                        </th>
                        <th scope="col" class="font-semibold ">
                            Actions
                        </th>
                    </tr>
                </thead>
               
                @foreach ($categories as $key => $category)
                
                <tbody class="bg-white divide-y divide-gray-200 text-center">
                    <tr>
                        <td class="">
                            <div>{{ $category->category_name}}</div>
                        </td>


                        <td class="p-2" style="width: 100px;">
                            <img class="" src="{{ asset('/images/category/' . $category->image) }}" alt="Card"
                                style="width: 70px;">
                        </td>
                        <td> @if ($category->created_at)
                            <div>{{ $category->created_at->format('F j, Y') }}</div>
                            @else
                            <div>-</div>
                            @endif
                        </td>


                        <td>
                            <div class="flex p-2 justify-center items-center">
                                <a href={{ route('category.index', ['category' => $category->id]) }}>

                                    <div class="bg-[#ec1464] py-2 px-2 mx-2 text-white rounded-md">
                                        Sub Category
                                    </div>
                                </a>
                                <a href='{{ route('category.show', $category->id)}}'
                                    >

                                    <div class="bg-slate-500 py-1 px-2 mx-2 text-white flex  rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="
                                    {{ route('category.edit', $category->id)}}
                                    ">
                                    <div class="bg-slate-500 py-1 px-2 mx-2 text-white flex rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                            </path>
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                            </path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>

                                    </div>
                                </a>
                                {{-- <form action="{{ route('service.destroy', $service->slug) }}"
                                    class="delete-form-{{ $service->slug}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button"
                                        class="bg-black  py-1 px-2 mx-2 mt-4 flex  text-white rounded-md"
                                        onclick="deleteItem('{{ $service->slug}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>

                                    </button>
                                </form> --}}
                                <form action="
                                {{ route('category.destroy', $category->id) }}
                                " class="delete-form-{{ $category->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="bg-red-500 py-1 px-2 mx-2 mt-4 flex text-white rounded-md"
                                        onclick="deleteItem('{{ $category->id}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>


                </tbody>
                @endforeach
            </table>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script>
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
                    // alert("delete-form-"+itemSlug)
                   let form= document.querySelector(".delete-form-" + itemSlug)
                   form.submit();
                }
            });
        }
    </script>








</div>
@endsection