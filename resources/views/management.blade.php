<x-layout>
    <section id="management" class="container pt-5 font-scope-one">
        <h2 class="text-center mb-4 font-bold">Tim List</h2>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="table-command py-2 flex">
                <a href="/add-teams">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300"
                        aria-label="Add New Employee">
                        Add Team
                    </button>
                </a>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text dark:text-gray-400">
                <thead class="text-xs text-[#EEEDEB] uppercase bg-[#1B1A17]">
                    <tr>
                        <th scope="col" class="px-6 py-3">Team Name</th>
                        <th scope="col" class="px-6 py-3">Members</th>
                        <th scope="col" class="px-6 py-3">Order ID</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    @foreach ($teams as $team)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $team->name }}
                            </td>

                            <td class="px-6 py-4"></td>
                            <td class="px-6 py-4">{{ $team->order->order_id }}</td>
                            <td class="px-6 py-4">{{ $team->order->status }}</td>
                            <td class="flex px-6 py-4 gap-2 justify-center">
                                <a href="{{ route('add-members.page', $team->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    aria-label="Add Member">
                                    Add
                                </a>
                                <p>|</p>
                                <a href="management/{{ $team->id }}/remove-members"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    aria-label="Edit User">
                                    Remove
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
