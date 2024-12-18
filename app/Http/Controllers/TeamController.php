<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Routing\Controller;
use App\Models\User;

class TeamController extends Controller
{
    public function createTeamForm()
    {
        $users = User::all();
        return view('manager', compact('users'));
    }


    public function createTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'manager_id' => 'required|exists:users,id',  // Pastikan manager ada di tabel users
        ]);


        $team = Team::create([
            'name' => $request->name,
            'manager_id' => $request->manager_id,
        ]);


        if ($request->has('members')) {
            foreach ($request->members as $userId) {
                TeamMember::create([
                    'team_id' => $team->id,
                    'user_id' => $userId,
                ]);
            }
        }
        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }
    public function updateRole(Request $request, $userId)
    {
        $request->validate([
            'role' => 'required|in:user,manager,eventorganizer',
        ]);

        $user = User::findOrFail($userId);
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('users.index')->with('success', 'Role updated successfully.');
    }
    public function showManagerPage()
    {
        $users = User::all();
        return view('manager', compact('users'));
    }
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $users = User::all();
        return view('teams.edit', compact('team', 'users'));
    }
    public function index()
    {
        $teams = Team::with('members')->get();
        return view('teams.index', compact('teams'));
    }
}
