<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>


    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center pt-20">
        <div class="mx-auto  max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 border rounded-lg w-[100%] sm:w-[60vh]">
            <div class="text-center text-2xl  text-gray-900 font-medium ">Login</div>
            <div class="mx-auto max-w-lg">
                @include('admin.message.index')
                <form action="{{ route('admin.login.store') }}" method="post">
                    @csrf
                    <div>
                        <label for="email">Email</label>

                        <div class="relative">
                            <input type="email"
                                class="text-xs border border-gray-300 p-3 rounded mt-3 w-full focus:border-[#7065d4] hover:border-[#7065d4]"  value="{{ old('email') }}"
                                name="email" id="email" required />
                        </div>
                        @error('email')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="password">Password</label>

                        <div class="relative">
                            <input type="password"
                                class="text-xs border border-gray-300 p-3  w-full rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]"  value="{{ old('password') }}"
                                name="password" id="password" required/>
                        </div>
                        @error('password')
                            <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="block w-full rounded-lg mt-5 bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                        Login
                    </button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
