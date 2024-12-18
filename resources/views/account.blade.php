<x-layout>
    <section id="account" class="container pt-5 font-scope-one">
        <!-- Menampilkan nama pengguna yang login -->
        <h2 class="text-center mb-4 font-bold">Halo, {{ Auth::user()->name }}</h2>

        <div class="text-center mt-4">
            <div class="flex gap-2 justify-center p-2">
                <a href="edit-account">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300">
                        Edit Your Account
                    </button>
                </a>

                <a href="/logout">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300">
                        Log Out
                    </button>
                </a>

            </div>

        </div>

        <div class="user-info flex justify-center items-center space-x-8 mt-4">
            <div class="booking-status text-center">
                <h4 class="font-bold">Booking Status</h4>
                <div class="status">

                    <div
                        class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow hover:bg-gray-100 bg-[#1B1A17] dark:border-gray-700 dark:hover:bg-gray-700 mx-auto">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Project Name
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400 no-underline">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Tempore necessitatibus consequuntur itaque nostrum officiis
                            similique totam mollitia, repellat laboriosam accusantium sapiente veritatis eos a sint nam
                            temporibus. Quo, harum nisi.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-layout>
