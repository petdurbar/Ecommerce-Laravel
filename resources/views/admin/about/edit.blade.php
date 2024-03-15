@extends('admin.layouts.app')

@section('container')
    <form action="
{{ route('aboutadmin.update', $about->id) }}
" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="flex flex-col w-[90%] pl-10 pt-6">
            <label for="name" class="font-medium">
                About Sajilo Mobile
            </label>

            <textarea id="tinymce" name="aboutherosection_description"
                class=" text-xs border border-gray-300 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]" cols="10"
                rows="5" placeholder="Type HeroSection Description  here">
                {{ $about->aboutherosection_description }}
            </textarea>
            @error('aboutherosection_description')
                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                    {{ $message }}

                </div>
            @enderror
        </div>
        <div class="flex flex-col w-[90%] pl-10 pt-6">
            <label for="name" class="font-medium">
                About Page Image
            </label>
            <input class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]"
                name="aboutherosection_image" placeholder="Type category name here" type="file"
                onchange="loadFile(event)" />
            <img src="
            {{ asset('/uploads/' . $about->aboutherosection_image) }}
        "
                alt="herosectionimage" class="oldimage h-[70vh] object-contain" />
            <img id="output" />


        </div>

        <div class="flex flex-col w-[90%] pl-10 pt-6">
            <label for="name" class="font-medium">
                What do Sajilo Mobile Offer?
            </label>

            <textarea name="aboutsecondsection_description" id="tinymce"
                class="tinymce text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]"
                cols="10" rows="5" placeholder="Type Second Section Description  here">
                {{ $about->aboutsecondsection_description }}
            </textarea>
            @error('aboutsecondsection_description')
                <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                    {{ $message }}

                </div>
            @enderror
        </div>
        <div class="flex flex-col w-[90%] pl-10 pt-6">
            <label for="name" class="font-medium">
                What do Sajilo Mobile Offer Image?
            </label>
            <input class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]"
                name="aboutsecondsection_image" placeholder="Type category name here" type="file"
                onchange="loadFiles(event)" />
            <img src="
            {{ asset('/uploads/' . $about->aboutsecondsection_image) }}
        " alt="aboutimage"
                class="oldimages h-[250px] object-contain" />
            <img id="outputs" />

        </div>

        <div class="pl-10 pt-4">
            <button type="submit"
                class="border mt-3 border-primary px-6 py-2 rounded-md mr-2 text-gray-800 bg-white hover:bg-gray-800 hover:text-white">
                Edit
            </button>
        </div>
    </form>
    </div>
@endsection
