@extends('admin.layouts.main')

@section('content')


<form action="
{{ route('privacy.update', $privacy->id) }}
" method="post" enctype="multipart/form-data">

    @csrf
    @method('put')


   
    <div class="flex flex-col w-[90%] pl-10 pt-6">
        <label for="name" class="font-medium">
            Privacy Policy
        </label>

        <textarea name="description" id=""
            class="tinymce text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]" id=""
            cols="10" rows="5" placeholder="Type SecondSection Description  here">
                {{$privacy->description}}
            </textarea>
            @error('description')
            <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                {{ $message }}

            </div>
        @enderror
    </div>
    <div class="pl-10 pt-4">
        <button type="submit"
            class="border mt-3 border-primary px-6 py-2 rounded-md mr-2 text-[#02ccfe] bg-white hover:bg-[#02ccfe] hover:text-white">
            Edit 
        </button>
    </div>
</form>
</div>
@endsection