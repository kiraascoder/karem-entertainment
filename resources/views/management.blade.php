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
                            <td class="px-6 py-4">
                                @foreach ($team->members as $member)
                                    <div>{{ $member->name }}</div>
                                @endforeach
                            </td>
                            <td class="px-6 py-4">{{ $team->order->order_id }}</td>
                            <td class="px-6 py-4">
                                {{-- Form untuk mengubah status --}}
                                <form action="{{ route('team.update.status', $team->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="progress_status" class="bg-gray-200 p-2 rounded">
                                        <option value="not_started"
                                            {{ $team->order->progress_status === 'not_started' ? 'selected' : '' }}>Not
                                            Started</option>
                                        <option value="in_progress"
                                            {{ $team->order->progress_status === 'in_progress' ? 'selected' : '' }}>In
                                            Progress</option>
                                        <option value="completed"
                                            {{ $team->order->progress_status === 'completed' ? 'selected' : '' }}>
                                            Completed</option>
                                    </select>
                                    <button type="submit"
                                        class="ml-2 bg-blue-500 text-white rounded px-3 py-1">Update</button>
                                </form>
                            </td>
                            <td class="flex px-6 py-4 gap-2 justify-center">
                                <a href="{{ route('add-members.page', $team->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    aria-label="Add Member">
                                    Add
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
