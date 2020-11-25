<?php

namespace App\Http\Controllers;

use App\Problem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

//    shows all types of inappropriate behaviour
    public function problem()
    {
        $problems = Problem::latest('created_at')->get();

        return view('admin.problems', [
            "problems" => $problems
        ]);
    }
}
