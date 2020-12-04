<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CounselorController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('is_counselor', $user);

        return view('counselor.index');
    }
}
