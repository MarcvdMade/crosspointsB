<?php

namespace App\Http\Controllers;
use App\meldentest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexinfo(){
        return view('meldentestinfo');
    }
    public function indexform(){
        $selected = request('select');
        return view('meldentestform', ['selected'=>$selected]);
    }
    public function indexselect(){
        $questions = DB::table('questions')->get();
        return view('meldentestselect', ['questions'=>$questions]);
    }
}
