@extends('admin._layouts.master')

@section('body')
    <div class=" w-full bg-white p-10 ">

        <p class="mb-10 text-lg font-bold">Add Attribute Group</p>
        <form action="{{ route('attributegroups.store') }}" method="post">
            @csrf
            <div class="gap-6 mb-6 w-full ">
                <div>
                    <label for="attribute_group_name" class="block mb-2 text-sm  font-medium text-gray-900  ">Attribute Group
                        Title</label>
                    <input name="attribute_group_name" type="text" id="attribute_group_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg @error('attribute_group_name') border-red-500 @enderror focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     "
                        value="{{ old('attribute_group_name') }}" placeholder="">
                    @error('attribute_group_name')
                        <div class="invalid-feedback text-red-400 text-sm ">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="sort_order" class="block mb-2 text-sm  font-medium text-gray-900">Sort Order</label>
                    <input name="sort_order" type="number" id="sort_order"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg @error('sort_order') border-red-500 @enderror focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('sort_order') }}" placeholder="">
                    @error('sort_order')
                        <div class="invalid-feedback text-red-400 text-sm">* {{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex gap-x-3">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <a href="{{ route('attributegroups.index') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
            </div>

        </form>
    </div>
@endsection
