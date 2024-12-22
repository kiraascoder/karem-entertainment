<x-layout>
    <section id="account" class="container pt-5 font-scope-one">
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
                        class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow  bg-[#1B1A17] dark:border-gray-700 mx-auto">
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
    <section id="my-orders" class="container pt-5 font-scope-one">
        <h2 class="font-bold">My Orders</h2>
        <hr>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="table-command py-2">
                <a href="/booking">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300">
                        Booking
                    </button>
                </a>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text dark:text-gray-400">
                <thead class="text-xs text-[#EEEDEB] uppercase bg-[#1B1A17]">
                    <tr>
                        <th scope="col" class="px-6 py-3">Order ID</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Location</th>
                        <th scope="col" class="px-6 py-3">Phone Number</th>
                        <th scope="col" class="px-6 py-3">Booking Date</th>
                        <th scope="col" class="px-6 py-3">Category</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    @foreach ($orders as $order)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $order->order_id }}</td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $order->full_name }}</td>
                            <td class="px-6 py-4">{{ $order->location }}</td>
                            <td class="px-6 py-4">{{ $order->phone_number }}</td>
                            <td class="px-6 py-4">{{ $order->booking_date }}</td>
                            <td class="px-6 py-4">{{ $order->service }}</td>
                            <td class="px-6 py-4">Status</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
