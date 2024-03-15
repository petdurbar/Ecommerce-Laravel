<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('logos/Logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | SajiloMobile</title>


</head>

<body>

    <div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="flex justify-center items-center py-5"><img src="{{ asset('logos/Logo.png') }}" alt=""
                class="w-48">
        </div>
        <form action="{{ route('admin.login.store') }}" method="post">
            @include('admin.includes.messages')
            @csrf
            <div class="flex flex-col border border-[#ec1464] rounded-lg p-10 lg:w-[30vw] w-full">
                <p class="text-2xl font-semibold text-center text-slate-700 pb-5">
                    Login
                </p>
                <label for="username">Email</label>
                <input type="text" name="email" id="username"
                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]">
                @error('email')
                    <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                        {{ $message }}

                    </div>
                @enderror
                <div class="pt-2 relative">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password"
                        class="text-xs w-full border border-gray-300 p-3 rounded mt-3 focus:border-[#7065d4] hover:border-[#7065d4]">
                    @error('password')
                        <div class="invalid-feedback text-sm text-red-500" style="display: block;">
                            {{ $message }}

                        </div>
                    @enderror
                    <div class="absolute top-14 right-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye cursor-pointer "
                            id="togglePassword" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path
                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                        </svg>
                    </div>
                </div>
                <div class="flex justify-center mt-5">
                    <button type="submit"
                        class="border mt-3 border-primary py-1 w-[100%] rounded-md mr-2 font-medium text-white bg-[#ec1464] hover:bg-white border-[#ec1464]  hover:text-[#ec1464]">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
</script>
