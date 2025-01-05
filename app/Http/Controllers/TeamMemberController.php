<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Team;
use App\Models\User;

class TeamMemberController extends Controller
{
    public function createTeamMemberView(Team $team)
    {
        $users = User::where('role', 'eventorganizer')->get();
        return view('add-members', compact('users', 'team'));
    }

    public function addMember(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $team = Team::findOrFail($id);
        $team->members()->attach($request->user_id);
        return redirect()->route('management.page')->with('success', 'Member added to team successfully');
    }
    public function deleteEmployee($id)
    {
        $user = User::findOrFail($id);


        if ($user->role === 'eventorganizer') {
            $user->delete();
        }


        return redirect()->route('manager.page')->with('status', 'Employee deleted successfully');
    }
}
