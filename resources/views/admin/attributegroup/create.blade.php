@extends('admin.layouts.app')
@section('page_title', 'Add AttributeGroup')
@section('attributegroup_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="{{ route('attributegroup.index') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Add AttributeGroup</div>
    </div>
    <div class="row mt-10 w-[80%]">
        <form method="post" action="{{ route('attributegroup.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mt-5">
                <label for="category_name" class="font-medium">AttributeGroup Name</label>
                <input type="text" placeholder="Type category name here" name="attributename" id="category_name"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('category_name') }}">
                @if ($errors->has('attributename'))
                    <div class="invalid-feedback text-red-400 text-sm">
                        * {{ $errors->first('attributename') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <label class=" font-medium  " htmlFor="">
                    Attributegroup order
                </label>
                <div>
                    <input
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                        name="attribute_order" placeholder="Type category order here" type="text"
                        {{-- value="{{ request('category' ?? 0) }}" --}} />
                    @error('attribute_order')
                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>





            <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Add</button>
        </form>
    </div>
@endsection
