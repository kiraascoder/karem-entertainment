<x-layout>
    <section id="booking" class="container mt-12 pt-5">
        <h2 class="text-center mb-4">Halo Manager</h2>

        <div class="reviews flex flex-col items-center space-y-4">
            <div class="review">
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </a>
            </div>
            <div class="">
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
            </div>

        </div>
    </section>
</x-layout>
