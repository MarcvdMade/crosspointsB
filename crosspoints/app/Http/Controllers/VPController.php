<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class VPController extends Controller
{
    protected function index(User $user){
        $this->authorize('is_admin', $user);
        return view('admin.makeVP');
    }

    protected function store(User $user)
    {
        $this->authorize('is_admin', $user);

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required', 'string', 'min:8', 'confirmed'] ,
        ]);

        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $user->save();
        $user->assignRole(2);


        return redirect()->route('admin')->with('succes','Er is een niewe vertrouwenspersoon toegevoegd');
    }
}
