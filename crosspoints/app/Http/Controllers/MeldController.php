<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meld;

class MeldController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('melding/meld');
    }

    public function createMeld()
    {

        request()->validate([
            'situation' => 'required',
            'since' => 'required',
            'experience' => 'required',
            'counselor' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'conditions' => 'required',
            'user_id' => 'required'
        ]);

        $meld = new Meld();

        $meld->situation = request('situation');
        $meld->since = request('since');
        $meld->experience = request('experience');
        $meld->counselor = request('counselor');
        $meld->contact = request('contact');
        $meld->phone = request('phone');
        $meld->conditions = true;
        $meld->user_id = request('user_id');

        $meld->save();

        return redirect('/home')->with('success','Het formulier is verzonden, binnen 2 dagen wordt er contact opgenomen');
    }

}
