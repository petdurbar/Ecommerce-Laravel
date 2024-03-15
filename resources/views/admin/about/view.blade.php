@extends('admin.layouts.app')

@section('container')
    <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm mx-28">
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Story About Hope2Help</dt>
                <dd class="text-gray-700 sm:col-span-2"> {{ $about->aboutherosection_description }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900"> About Hero Section Image</dt>
                <dd class="text-gray-700 sm:col-span-2"> <img src="{{ asset('/uploads/' . $about->aboutherosection_image) }}"
                        alt="herosectionimage" class="oldimage" /></dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">About Us</dt>
                <dd class="text-gray-700 sm:col-span-2">{!! $about->aboutsecondsection_description !!}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900"> About Us Image</dt>
                <dd class="text-gray-700 sm:col-span-2"> <img
                        src="
          {{ asset('/uploads/' . $about->aboutsecondsection_image) }}
      " alt="aboutimage"
                        class="oldimages" /></dd>
            </div>


            {{--
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900"> THANK YOU – THANK YOU…. JESUS.</dt>
                <dd class="text-gray-700 sm:col-span-2"> {{ $about->thankyou_title }} <br> {!! $about->thankyou_des !!}</dd>


            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900"> Image-1</dt>
                <dd class="text-gray-700 sm:col-span-2"> <img
                        src="
      {{ asset('/images/' . $about->thankyou_image1) }}
  " alt="thankyouimage" /></dd>
            </div>
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900"> Image-2</dt>
                <dd class="text-gray-700 sm:col-span-2"> <img src="
    {{ asset('/images/' . $about->thankyou_image2) }}
"
                        alt="thankyouimage" /></dd>
            </div> --}}

        </dl>
    </div>
@endsection
