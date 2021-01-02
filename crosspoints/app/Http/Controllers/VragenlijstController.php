<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vraag;

class VragenlijstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('vragenlijst');
    }

}
