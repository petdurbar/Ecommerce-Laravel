@extends('admin/layouts/app')
@section('page_title', 'Admin - Add Banner')
@section('banner_select', 'bg-black text-white')
@section('container')
    <div class="flex gap-4">
        <a href="{{ url('admin/banner') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Add Banner1</div>
    </div>
    <div class="row m-t-30">
        <form method="post" action="{{ route('banner.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-5">
                <div class="flex flex-col my-5">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900" htmlFor="">
                            Banner name
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="banner_name" placeholder="Type banner name here" type="text"
                                value="{{ old('banner_name') }}" />
                            @error('banner_name')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>
                    </div>
                  
                    {{-- image --}}
                    <div class="mt-3">

                        <label class='text-sm font-semibold'>Image</label>
                        <div
                            class='text-sm p-2 form-control border-2 border-grey-400 w-full rounded-md shadow-sm mb-1 mt-2'>
                            <input type="file" name="banner_image" />
                        </div>
                        @error('banner_image')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            Banner Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="banner_link" placeholder="Type banner link here" type="text"
                                {{-- value="{{ request('banner' ?? 0) }}" --}} />
                            @error('banner_link')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Mobile View
                        </label>
                        <div>
                            <input  type="radio" id="yes" name="mobileview" value="1">
                            <label for="yes">Yes</label>
                            <input checked type="radio" id="no" name="mobileview" value="0">
                            <label for="no">No</label><br>
                            @if ($errors->has('mobileview'))
                            <div class="invalid-feedback text-red-400 text-sm">
                                * {{ $errors->first('mobileview') }}
                            </div>
                        @endif
                        </div>
                    </div>

                    <div class="">
                        <button
                            class="border mt-3 border-bg-black px-4 py-2 rounded-md mr-2 text-white bg-black">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
