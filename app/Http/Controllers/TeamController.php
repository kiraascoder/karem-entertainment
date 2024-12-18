<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Routing\Controller;
use App\Models\User;

class TeamController extends Controller
{
    // Menampilkan halaman untuk membuat tim
    public function createTeamForm()
    {
        $users = User::all(); // Atau gunakan query sesuai dengan kebutuhan Anda
        return view('manager', compact('users'));
    }

    // Membuat tim baru
    public function createTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'manager_id' => 'required|exists:users,id',  // Pastikan manager ada di tabel users
        ]);

        // Membuat tim baru
        $team = Team::create([
            'name' => $request->name,
            'manager_id' => $request->manager_id,
        ]);

        // Menambahkan anggota tim
        if ($request->has('members')) {
            foreach ($request->members as $userId) {
                TeamMember::create([
                    'team_id' => $team->id,
                    'user_id' => $userId,
                ]);
            }
        }

        // Redirect ke halaman tim
        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }

    // Menampilkan halaman untuk mengubah peran pengguna
    public function updateRole(Request $request, $userId)
    {
        $request->validate([
            'role' => 'required|in:user,manager,eventorganizer', // Peran yang valid
        ]);

        $user = User::findOrFail($userId);  // Mencari user berdasarkan ID
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('users.index')->with('success', 'Role updated successfully.');
    }

    // Menampilkan halaman manager dan memilih pengguna
    public function showManagerPage()
    {
        $users = User::all(); // Mengambil semua user
        return view('manager', compact('users'));
    }

    // Menampilkan halaman untuk mengedit tim
    public function edit($id)
    {
        $team = Team::findOrFail($id); // Mencari tim berdasarkan ID
        $users = User::all(); // Mengambil semua user untuk memilih manager dan anggota tim
        return view('teams.edit', compact('team', 'users'));
    }

    // Menampilkan daftar tim beserta anggota tim
    public function index()
    {
        $teams = Team::with('members')->get();  // Mengambil semua tim beserta anggota timnya
        return view('teams.index', compact('teams'));  // Mengirimkan data tim ke view
    }
}
