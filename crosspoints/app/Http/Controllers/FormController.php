<?php

namespace App\Http\Controllers;
use App\meldentest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user=Auth::user();

        return view('meldentest', ['user'=>$user]);
    }
    public function checkscore(){
        $answer = request('button');
        if($answer == 1) {
            return view('/testtrue');
        }else{
           return view('/testfalse');
        }

    }
}
