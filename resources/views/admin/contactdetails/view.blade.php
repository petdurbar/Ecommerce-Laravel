@extends('admin.layouts.app')

@section('container')
    <div class="ml-10 font-bold mt-6 text-xl">Contact Details</div>

    <div class="flow-root rounded-lg border border-gray-100 py-3 bg-white mt-5 shadow-sm mx-14">
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">First Name</dt>
                <dd class="text-gray-700 sm:col-span-2">
                    {{ $contactadmin->firstname }}
                </dd>
            </div>
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Last Name</dt>
                <dd class="text-gray-700 sm:col-span-2">
                    {{ $contactadmin->lastname }}
                </dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Email</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $contactadmin->email }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Phone</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $contactadmin->phone }}</dd>
            </div>

            {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Country</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $contactadmin->country }}</dd>
            </div> --}}
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Message</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $contactadmin->message }}</dd>
            </div>





        </dl>
    </div>
@endsection
