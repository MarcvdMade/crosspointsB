<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
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
            'company' => ['required']
        ]);

        dd(\request()->all());

    }
}
