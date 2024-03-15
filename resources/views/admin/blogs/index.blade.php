@extends('admin/layouts/app')
@section('page_title', 'Blog')
@section('blog_select', 'bg-black text-white')
@section('container')
    {{-- @php
dd(Auth::guard('user_profiles')->user()->email)
@endphp --}}
    <div class="px-5 w-full">

        @include('admin.includes.messages')

        <div class="flex justify-between">
            <div class="text-2xl font-bold"> Blogs</div>
            <div class="flex">
                <a href='{{ route('blogs.create') }} '
                    class=' bg-black text-white h-10 p-2 text-sm flex gap-2 items-center rounded-lg'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z" />
                    </svg>
                    <span>Add Blogs</span>
                </a>
            </div>
        </div>
        <div class=" py-3">
            <div class="mt-1">
                {{-- -mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto z-[0] max-h-screen overflow-y-auto --}}
                <div class="bg-white p-3 product-tablerounded-lg mt-10 relative  shadow ">
                    <div class=" overflow-x-auto ">
                        {{-- max-h-screen min-w-full shadow rounded-lg z-[0] overflow-y-hidden --}}
                        <table class="min-w-full  divide-y divide-gray-200">
                            <thead class="">
                                <tr>
                                    <th class="px-5 py-3  text-left   font-semibold   ">
                                        Title</th>
                                    {{-- <th
                                    class="px-5 py-3  text-left   font-semibold   ">
                                    Description</th> --}}
                                    <th class="px-5 py-3  text-left   font-semibold   ">
                                        Image</th>
                                    <th class="px-5 py-3  text-left   font-semibold   ">
                                        Created at</th>
                                    {{-- <th
                                        class="px-5 py-3  text-left   font-semibold   ">
                                        Updated at</th> --}}
                                    {{-- <th
                                        class="px-5 py-3  text-left   font-semibold   ">
                                        Status</th> --}}
                                    <th class="px-5 py-3  text-left   font-semibold   ">
                                        Actions</th>
                                </tr>
                            </thead>


                            @foreach ($blogs as $key => $blog)
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    <tr>
                                        <td class="px-5 py-3  ">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $blog->title }}</p>
                                        </td>

                                        <td class="p-2" style="width: 100px;">
                                            <img class="w-full h-full "
                                                src="{{ asset('/images/blogs/' . $blog->featured_image) }}" alt="Card"
                                                style="width: 70px;">
                                        </td>

                                        <td class="px-5 py-3  text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $blog->created_at->format('jS M Y') }}
                                            </p>
                                        </td>
                                 

                                        <td>
                                            <div class="flex p-2 justify-center items-center">
                                      
                                                <a href='{{ route('blogs.show', $blog->id)}}'
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
                                                    {{ route('blogs.edit', $blog->id)}}
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
                                                
                                                <form action="
                                                {{ route('blogs.destroy', $blog->id) }}
                                                " class="delete-form-{{ $blog->id}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="bg-red-500 py-1 px-2 mx-2 mt-4 flex text-white rounded-md"
                                                        onclick="deleteItem('{{ $blog->id}}')">
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
                <div class="z-0 mt-3">
                    {{ $blogs->links('vendor.pagination.tailwind') }}
                </div>
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
