<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;

class TeamController extends Controller
{
    // Menampilkan halaman manajer
    public function showManagerPage()
    {
        $users = User::all();
        return view('manager', compact('users'));
    }
    // Menampilkan halaman manajemen
    public function showManagementPage()
    {
        $users = User::all();
        return view('management', compact('users'));
    }

    // Menyimpan data user baru
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'eventorganizer',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('manager.page')->with('success', 'User successfully created');
    }


    public function showTeams()
    {
        $teams = Team::with('manager', 'order')->get();
        return view('management', compact('teams'));
    }

    public function createTeamsView()
    {
        $users = User::all();
        $orders = Order::all();
        return view('add-teams', compact('users', 'orders'));
    }

    // Menyimpan tim baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'manager_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
        ]);

        Team::create([
            'name' => $request->name,
            'manager_id' => $request->manager_id,
            'order_id' => $request->order_id,
        ]);

        return redirect()->route('management.page')->with('success', 'Team created successfully');
    }

    // Menampilkan form untuk mengedit tim
    public function edit(Team $team)
    {
        $users = User::all();
        $orders = Order::all();
        return view('teams.edit', compact('team', 'users', 'orders'));
    }

    // Memperbarui tim
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'manager_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
        ]);

        $team->update([
            'name' => $request->name,
            'manager_id' => $request->manager_id,
            'order_id' => $request->order_id,
        ]);

        return redirect()->route('teams.index')->with('success', 'Team updated successfully');
    }

    // Menghapus tim
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
    }

    // Menampilkan Team Member
    public function showTeamMembers()
    {

        $teams = Team::with('members')->get();

        return view('management', compact('teams'));
    }
    public function updateStatus(Request $request, $teamId)
    {

        $validated = $request->validate([
            'progress_status' => 'required|in:not_started,in_progress,completed',
        ]);


        $team = Team::findOrFail($teamId);

        // Update progress_status di tabel orders yang terkait dengan team
        $team->order->progress_status = $validated['progress_status'];
        $team->order->save();  // Simpan perubahan status


        return redirect()->route('management.page')->with('status', 'Status updated successfully!');
    }
}
