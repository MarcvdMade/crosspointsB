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

    public function getMeld()
    {
        $melds = Meld::orderBy('id')->get();

        return view('melding/meldingen', [
            "melds" => $melds
        ]);
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
            'hidden' => 'required',
            'completed' => 'required',
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
        $meld->hidden_vp = request('hidden');
        $meld->completed = request('completed');
        $meld->user_id = request('user_id');

        $meld->save();

        return redirect('/home')->with('success','Het formulier is verzonden, binnen 2 dagen wordt er contact opgenomen');
    }

    public function search1()                                        //You can search in the kolom address
    {
        $search_text = $_GET['query'];
        $melds = Meld::where('user','LIKE', '%'.$search_text.'%')->get();

        return view('search',compact('melds'));
    }

}
