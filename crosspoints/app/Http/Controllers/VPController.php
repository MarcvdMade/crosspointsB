<?php

namespace App\Http\Controllers;
use App\Company;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class VPController extends Controller
{
    protected function index(User $user){
        $this->authorize('is_admin', $user);

        $companies = Company::latest()->get();

        return view('admin.makeVP', [
            'companies' => $companies
        ]);
    }

    protected function store(User $user)
    {
        $this->authorize('is_admin', $user);

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required', 'string', 'min:8', 'confirmed'] ,
            'company' => ['required']
        ]);

        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $user->save();
        $user->assignRole(2);
        $user->assignCompany(request('company'));


        return redirect()->route('counselors')
            ->with('success', 'Er is een nieuwe vertrouwenspersoon toegevoegd');
    }
}
