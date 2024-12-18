<x-layout>
    <section id="account" class="container mt-12 pt-5">
        <h2 class="text-center">Halo Manager</h2>
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
            <div class="manager info">
                <div class="booking-status text-center">

                    <div class="status">
                        <div
                            class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow hover:bg-gray-100 bg-[#1B1A17] dark:border-gray-700 dark:hover:bg-gray-700 mx-auto">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Project
                                Name
                            </h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400 no-underline">Lorem ipsum, dolor sit
                                amet
                                consectetur adipisicing elit. Tempore necessitatibus consequuntur itaque nostrum
                                officiis
                                similique totam mollitia, repellat laboriosam accusantium sapiente veritatis eos a sint
                                nam
                                temporibus. Quo, harum nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="">
                <form action="{{ route('team.create') }}" method="POST">
                    @csrf
                    <!-- Team Name Input -->
                    <div class="form-group">
                        <label for="name">Team Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <!-- Add Members Input (Checkbox) -->
                    <div class="form-group">
                        <label for="members">Add Members</label><br>
                        @foreach ($users as $user)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="members[]"
                                    value="{{ $user->id }}" id="member{{ $user->id }}">
                                <label class="form-check-label" for="member{{ $user->id }}">
                                    {{ $user->name }} - {{ $user->role }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <!-- Select Manager Input -->
                    <div class="form-group">
                        <label for="manager_id">Select Manager</label>
                        <select name="manager_id" id="manager_id" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Team</button>
                </form>
            </div> --}}

        </div>
    </section>
</x-layout>
