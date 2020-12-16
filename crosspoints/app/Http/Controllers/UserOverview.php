<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserOverview extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();

        return view('counselor.gebruikers', [
            "users" => $users
        ]);
    }
}
