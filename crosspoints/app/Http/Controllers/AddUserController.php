<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AddUserController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('is_counselor', $user);

        $companies = Company::all();

        return view('counselor.adduser', [
            "companies" => $companies
        ]);
    }

    public function store(User $user) {
        $this->authorize('is_counselor', $user);

        request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'name' => ['required'],
            'password' => 'required',
            'company' => ['required']
        ]);

        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $user->save();
        $user->assignCompany(\request('company'));


        return redirect()->route('vertrouwenspersoon')
            ->with('success', 'Er is een nieuwe werknemer toegevoegd');

    }
}
