<!-- resources/views/teams/edit.blade.php -->

<x-layout>
    <section id="edit-team" class="container mt-12 pt-5">
        <h2 class="text-center mb-4">Edit Team</h2>

        <form action="{{ route('teams.update', $team->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Team Name Input -->
            <div class="form-group">
                <label for="name">Team Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $team->name }}"
                    required>
            </div>

            <!-- Add Members Input -->
            <div class="form-group">
                <label for="members">Add Members</label>
                <select name="members[]" id="members" class="form-control" multiple>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if (in_array($user->id, $team->members->pluck('id')->toArray())) selected @endif>
                            {{ $user->name }} - {{ $user->role }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Select Manager Input -->
            <div class="form-group">
                <label for="manager_id">Select Manager</label>
                <select name="manager_id" id="manager_id" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if ($user->id == $team->manager_id) selected @endif>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Team</button>
        </form>
    </section>
</x-layout>
