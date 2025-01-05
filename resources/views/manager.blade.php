<x-layout>
    <section id="account" class="container pt-5 font-scope-one">
        <h2 class="text-center font-bold">Halo Manager</h2>
        <div class="flex gap-2 justify-center p-4">
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

        <div class="reviews flex flex-col items-center space-y-4">
            <section id="management" class="container pt-5 font-scope-one">
                <h2 class="font-bold">Employee List</h2>
                <hr>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="table-command py-2">
                        <a href="/add-employee">
                            <button
                                class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300">
                                Add
                            </button>
                        </a>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text dark:text-gray-400">
                        <thead class="text-xs text-[#EEEDEB] uppercase bg-[#1B1A17]">
                            <tr>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Team</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-black">
                            @foreach ($users as $user)
                                @if ($user->role == 'eventorganizer')
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $user->name }}</td>
                                        <td class="px-6 py-4">{{ $user->team ?? 'Tidak Terdaftar' }}</td>
                                        <td class="px-6 py-4">{{ $user->email }}</td>

                                        <td class="px-6 py-4">
                                            <!-- Form untuk delete employee -->
                                            <form action="{{ route('employee.delete', $user->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-red-600 hover:underline">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </section>
</x-layout>
