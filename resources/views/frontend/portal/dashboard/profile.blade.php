@extends('frontend.portal._layouts.master')

@section('body')
    <!-- Static sidebar for desktop -->
    @include("admin.message.index")
    <div  class=" md:flex md:flex-shrink-0 ">
        <div class="flex flex-col w-0 flex-1 ">
            <div class="flex  flex-shrink-0 ">
                <div class="flex flex-col w-0 flex-1 ">
                    <div class="flex-1 relative flex-shrink-0 overflow-y-auto focus:outline-none">
                        <div class="py-6">

                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">

                                    <div class="mt-2">
                                        <div class="w-full ">
                                            <div class="mt-4">
                                                <form method="POST" id="updateform"
                                                    action="{{ route('user.updates', Auth::guard('softsaro__users')->user()->id) }}">
                                                    @csrf
                                                    @method('post')

                                                    <div class="flex gap-2 mt-1">
                                                        <label class="block mb-2">
                                                            <span class="text-gray-700">Full Name</span>
                                                            <input name="name" type="text"
                                                                value="{{ $user_personal_details != null ? $user_personal_details->name : '' }}"
                                                                class="
                                                          block
                                                          w-full
                                                          mt-1 border h-10 rounded-lg p-2" />
                                                        </label>
                                                        <label class="block mb-2">
                                                            <span class="text-gray-700">Address</span>
                                                            <input name="address" type="text"
                                                                value="{{ $user_personal_details != null ? $user_personal_details->address : '' }}"
                                                                class="
                                                          block
                                                          w-full
                                                          mt-1
                                                          border-gray-300
                                                          border h-10 rounded-lg p-2" />
                                                        </label>
                                                    </div>


                                                    <div class="flex gap-2 mt-2">
                                                        <label class="block mb-2">
                                                            <span class="text-gray-700">Phone</span>
                                                            <input name="phonenumber" type="text"
                                                                value="{{ $user_personal_details != null ? $user_personal_details->phonenumber : '' }}"
                                                                class="block w-full mt-1 border-gray-300 border h-10 rounded-lg p-2" />
                                                        </label>
                                                        <label class="block mb-2">
                                                            <span class="text-gray-700">Email</span>
                                                            <input name="email" type="text"
                                                                value="{{ $user_personal_details != null ? $user_personal_details->email : '' }}"
                                                                class="block w-full mt-1 border-gray-300 border h-10 rounded-lg p-2" />
                                                        </label>
                                                    </div>

                                                    <button class="bg-[#0f577d] text-white px-4 py-2 rounded">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
