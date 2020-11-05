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
        session()->forget('testscore');
        session()->forget('question');
        session()->put('testscore',0);
        session()->put('question',0);
        return view('meldentest', ['user'=>$user]);
    }
    public function checkscore(){
        $answer = request('button');
        if($answer == 1) {
            $test = session()->get('testscore');
            $question = session()->get('question');

            $testupdate = $test+1;
            $questionupdate = $question+1;

            session()->put('testscore',$testupdate);
            session()->put('question',$questionupdate);
            return view('/testform/meldentestQ'.$questionupdate, ['test'=>$testupdate], ['question'=>$questionupdate]);
        }else{
            $test = session()->get('testscore');
            $question = session()->get('question');

            $questionupdate = $question+1;

            session()->put('question',$questionupdate);
            return view('/testform/meldentestQ'.$questionupdate, ['test'=>$test], ['question'=>$questionupdate]);
        }

    }
}
