<x-layout>
    <section id="order-list" class="container pt-5 font-scope-one">
        <h2 class="text-center mb-4 font-bold">Order List</h2>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text dark:text-gray-400">
                <thead class="text-xs text-[#EEEDEB] uppercase bg-[#1B1A17]">
                    <tr>
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
                            <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $order->full_name }}</td>
                            <td class="px-6 py-4">{{ $order->location }}</td>
                            <td class="px-6 py-4">{{ $order->phone_number }}</td>
                            <td class="px-6 py-4">{{ $order->booking_date }}</td>
                            <td class="px-6 py-4">{{ $order->service }}</td>
                            <td class="px-6 py-4">Status</td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>

</x-layout>
