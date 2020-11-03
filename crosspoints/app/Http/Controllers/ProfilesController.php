<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        $this->authorize('isUserProfile', $user);

        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('isUserProfile', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('isUserProfile', $user);

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'] ,
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $user->update();

        return redirect($user->path())->with('success', 'Je hebt succesvol je informatie aangepast');
    }
}
