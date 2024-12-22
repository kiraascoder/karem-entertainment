<x-layout>
    <section id="booking" class="container pt-5 font-scope-one flex justify-center items-center">
        <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
            <h2 class="text-center mb-4 font-bold">Add User</h2>
            <form action="{{ route('manager.addEmployee') }}" method="POST">
                @csrf
                <div class="mx-auto">
                    <!-- Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                            id="name" name="name" value="{{ old('name') }}" required
                            placeholder="Enter your name">
                        @error('name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                            id="email" name="email" value="{{ old('email') }}" required
                            placeholder="Enter your email">
                        @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="relative">
                            <input type="password"
                                class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                                id="password" name="password" required placeholder="Enter your password">
                            <!-- Show password SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                                class="w-[18px] h-[18px] absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer"
                                viewBox="0 0 128 128" onclick="togglePassword('password')">
                                <path
                                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504
                                    22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707
                                    63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32
                                    32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24
                                    24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                    data-original="#000000"></path>
                            </svg>
                        </div>
                        @error('password')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="relative">
                            <input type="password"
                                class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                                id="password_confirmation" name="password_confirmation" required
                                placeholder="Confirm your password">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                                class="w-[18px] h-[18px] absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer"
                                viewBox="0 0 128 128" onclick="togglePassword('password_confirmation')">
                                <path
                                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                    data-original="#000000"></path>
                            </svg>
                        </div>
                        @error('password_confirmation')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button
                            class="bg-[#FF8303] ccctext-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-grey ease-out duration-300 font-scope-one"
                            type="submit">
                            Add User
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>

<script>
    function togglePassword(id) {
        var x = document.getElementById(id);
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
