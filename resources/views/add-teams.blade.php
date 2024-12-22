<x-layout>
    <section id="booking" class="container pt-5 font-scope-one flex justify-center items-center">
        <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
            <h2 class="text-center mb-4 font-bold">New Teams</h2>
            <form action="{{ route('manager.addTeams') }}" method="POST">
                @csrf
                <div class="mx-auto">
                    <!-- Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Team Name</label>
                        <input type="text"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                            id="name" name="name" required placeholder="Enter team name">
                    </div>

                    <!-- Select Manager -->
                    <div class="mb-3">
                        <label for="manager_id" class="form-label">Select Manager</label>
                        <select
                            class="form-select border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                            id="manager_id" name="manager_id" required>
                            <option value="">Choose a Manager</option>
                            @foreach ($users as $user)
                                @if ($user->role == 'manager')
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <!-- Select Order -->
                    <div class="mb-3">
                        <label for="order_id" class="form-label">Select Order</label>
                        <select
                            class="form-select border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                            id="order_id" name="order_id" required>
                            <option value="">Choose an Order</option>
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}">{{ $order->order_id }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button
                            class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-grey ease-out duration-300 font-scope-one"
                            type="submit">
                            Create Team
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
