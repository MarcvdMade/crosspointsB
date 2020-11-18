<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class OverviewAdminController extends Controller
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
        $admins = User::latest()->get();

        return view('admin.admins', [
            'admins' => $admins
        ]);
    }

    public function destroy($id, User $user)
    {
        $this->authorize('is_admin', $user);

        $admin = User::find($id);

        $admin->delete();

        return redirect()->route('admins')
            ->with('success', 'Je hebt succesvol deze admin verwijderd');
    }
}
