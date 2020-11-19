<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class OverviewVPController extends Controller
{
    //login middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $this->authorize('is_admin', $user);

        //render resources
        $counselor = User::latest()->get();

        return view('admin.counselors', [
            'counselors' => $counselor
        ]);
    }

    public function destroy($id, User $user)
    {
        $this->authorize('is_admin', $user);

        $admin = User::find($id);

        $admin->delete();

        return redirect()->route('counselors')
            ->with('success', 'Je hebt succesvol deze vertrouwenspersoon verwijderd');
    }
}
