<?php

namespace App\Http\Controllers;
use App\Company;
use App\VP;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return(view('addvp'));
    }
    public function store(){
        $VP = new VP();
        $VP->firstname = request('firstname');
        $VP->lastname = request('lastname');

        $VP->save();
        return redirect("/home");
    }
}
