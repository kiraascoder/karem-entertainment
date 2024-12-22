<x-layout>
    <section id="booking" class="container pt-5 font-scope-one flex justify-center items-center">
        <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
            <h2 class="text-center mb-4 font-bold">Add Member</h2>
            <form method="POST" action="{{ route('teams.addMember', $team->id) }}">
                @csrf
                <div class="mx-auto">
                    <!-- Select Employee -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Select Event Organizer</label>
                        <select
                            class="form-select border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2 w-full"
                            id="user_id" name="user_id" required>
                            <option value="">Choose an Employee</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">
                                    ID. {{ $user->id }} - {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button
                            class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-grey ease-out duration-300 font-scope-one"
                            type="submit">
                            Add
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
