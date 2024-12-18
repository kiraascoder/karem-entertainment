<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Karem Entertainment</title>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Inter font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Vite CSS (if applicable) -->
    @vite('resources/css/app.css')

    <!-- Bootstrap CSS (for carousel) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
    <div class="flex justify-center items-center font-[sans-serif] h-full min-h-screen p-4"
        style="background-image: url(https://readymadeui.com/background-image.webp); background-repeat: no-repeat; background-size: cover;">
        <div class="max-w-md w-full mx-auto">
            <form class="bg-opacity-70 bg-white rounded-2xl p-6 shadow-[0_2px_16px_-3px_rgba(6,81,237,0.3)]"
                method="POST">
                @csrf
                <div class="mb-12">
                    <h3 class="text-gray-800 text-3xl font-extrabold">Sign in</h3>
                </div>
                @if ($errors->any())
                    <div class=" text-red-700 p-4 ">
                        <ul class="mt-2 list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Email Input -->
                <div>
                    <div class="relative flex items-center">
                        <input name="email" type="email"
                            class="bg-transparent w-full text-sm text-gray-800 border-b border-gray-400 focus:border-gray-800 px-2 py-3 outline-none placeholder:text-gray-800"
                            placeholder="Enter email" value="{{ old('email') }}" />
                    </div>
                </div>

                <div class="mt-6" x-data="{ showPassword: false }">
                    <div class="relative flex items-center">
                        <!-- Password Input -->
                        <input :type="showPassword ? 'text' : 'password'" name="password"
                            class="bg-transparent w-full text-sm text-gray-800 border-b border-gray-400 focus:border-gray-800 px-2 py-3 outline-none placeholder:text-gray-800"
                            placeholder="Enter password" />

                        <!-- Show/Hide Password Icon -->
                        <svg x-on:click="showPassword = !showPassword" xmlns="http://www.w3.org/2000/svg" fill="#333"
                            stroke="#333" class="w-[18px] h-[18px] absolute right-2 cursor-pointer"
                            viewBox="0 0 128 128">
                            <path
                                d=" M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                data-original="#000000">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Remember Me and Forgot Password Links -->
                <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox"
                            class="h-4 w-4 shrink-0 border-gray-300 rounded" />
                        <label for="remember-me" class="ml-3 block text-sm text-gray-800">Remember me</label>
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="text-blue-600 text-sm font-semibold hover:underline">Forgot
                            Password?</a>
                    </div>
                </div>

                <!-- Sign In Button -->
                <div class="mt-12">
                    <button type="submit"
                        class="w-full py-2.5 px-4 text-sm font-semibold tracking-wider rounded-full text-white bg-gray-800 hover:bg-[#222] focus:outline-none">
                        Sign in
                    </button>
                    <p class="text-gray-800 text-sm text-center mt-6">Don't have an account <a href="/register"
                            class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register here</a>
                    </p>
                </div>




            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
