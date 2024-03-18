<!-- component -->
<!-- This is an example component -->
@extends('admin._layouts.master')

@section('body')
    <div class="relative w-full">
        <div class="p-4">
            @include('admin.message.index')

            <div class="flex justify-between my-5">

                <p class="mb-2 text-lg font-bold">Attribute Groups</p>
                <a href="{{ route('attributegroups.create') }}"
                    class="bg-orange-500 text-white h-10 p-2 text-sm flex gap-2 items-center font-main rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus pt-1 " width="20"
                        height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Add Attribute Groups
                </a>
            </div>

            <!-- component -->
            <div class='product-table bg-white p-3 rounded-lg mt-10 font-main  shadow'>
                <div class="relative overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="font-normal p-10">
                            <tr>
                                <th class="p-2 font-semibold">
                                    Attribute Group Title</th>
                                <th class="font-semibold">
                                    Sort Order</th>
                                <th class="font-semibold">
                                    Actions</th>
                            </tr>
                        </thead>


                        <tbody class="bg-white divide-y divide-gray-200 text-center">
                            @foreach ($attributeGroups as $attributeGroup)
                                <tr class=" ">
                                    <td class="">{{ $attributeGroup->attribute_group_name }}</td>
                                    <td class="">{{ $attributeGroup->sort_order }}</td>
                                    <td class="">
                                        <div class="flex p-2 justify-center">

                                            <a href="{{ route('attributegroups.edit', $attributeGroup->id) }}"
                                                class="bg-[#266688] py-1 px-2 mx-2 text-white flex rounded-md">Edit</a>
                                            <form action="{{ route('attributegroups.destroy', $attributeGroup->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500  py-1 px-2 mx-2 flex text-white rounded-md">Delete</button>
                                            </form>
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
@endsection
