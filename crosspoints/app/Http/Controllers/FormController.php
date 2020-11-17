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
        session()->forget('answers');
        session()->put('testscore',0);
        session()->put('question',0);
        session()->put('answers', []);
        return view('meldentest', ['user'=>$user]);
    }
    public function indexinfo(){
        return view('meldentestinfo');
    }

    public function checkscore(){
        $answer = request('button');
        $test = session()->get('testscore');
        $question = session()->get('question');
        $answers = session()->get('answers');

        if($question == 4){
            if($test <2){
                return view('testfalse');
            }else{
                return view('testtrue');
            }
        }
        if($answer == 1) {
            session()->put('lastbutton',1);

            $testupdate = $test+1;
            $questionupdate = $question+1;

            session()->put('testscore',$testupdate);
            session()->put('question',$questionupdate);
            session()->push('answers', 1);

            return view('/testform/meldentestQ'.$questionupdate, ['test'=>$testupdate], ['question'=>$questionupdate]);
        }else{
            session()->put('lastbutton',0);

            $questionupdate = $question+1;
            session()->push('answers', 0);

            session()->put('question',$questionupdate);
            return view('/testform/meldentestQ'.$questionupdate, ['test'=>$test], ['question'=>$questionupdate]);
        }
    }

    public function goback(){
        $test = session()->get('testscore');
        $question = session()->get('question');
        $answers = session()->get('answers');
        if($question == 1){
            return ($this->index());
        }

        $questionupdate = $question-1;
        if (last($answers) == 1){
            $test = $test-1;
        }
        array_pop($answers);

        session()->put('question',$questionupdate);
        session()->put('testscore',$test);
        session()->put('answers', $answers);


        return view('/testform/meldentestQ'.$questionupdate, ['test'=>$test], ['question'=>$questionupdate]);
    }
}
