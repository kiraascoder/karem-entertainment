<!-- resources/views/teams/index.blade.php -->
<x-layout>
    <section id="teams" class="container mt-12 pt-5">
        <h2 class="text-center mb-4">Daftar Tim</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Tim</th>
                    <th>Manager</th>
                    <th>Anggota Tim</th> <!-- Kolom Anggota Tim -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->manager ? $team->manager->name : 'No Manager' }}</td>
                        <td>
                            <!-- Menampilkan anggota tim -->
                            @foreach ($team->members as $member)
                                <span>{{ $member->name }}</span><br>
                            @endforeach
                        </td>
                        <td>
                            <!-- Aksi seperti Edit atau Delete -->
                            <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
