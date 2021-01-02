<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vraag;

class VraagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('vraag');
    }

    public function createVraag()
    {
        request()->validate([
            'vraag' => 'required'
        ]);

        $vraag = new Vraag();
        $vraag->vraag = request('vraag');
        $vraag->save();
        return redirect('/vraag')->with('success','De vraag is opgeslagen');
    }

    public function getVraag()
    {
        $vraags = Vraag::orderBy('id')->get();

        return view('vragenlijst', [
            "vraags" => $vraags
        ]);
    }

    public function deleteVraag($id)
    {
        Vraag::where('id',$id)->delete();
        return back()->with('vraag_deleted', 'Vraag is verwijderd');
    }

    public function editVraag($id)
    {
        $vraag = Vraag::find($id);
        return view('edit-vraag',compact('vraag'));
    }

    public function updateVraag()
    {
        request()->validate([
            'vraag' => ['required', 'string', 'max:255']
        ]);

        $vraag = Vraag::find(request('id'));

        $vraag->vraag = request('vraag');

        $vraag->update();

        return redirect()->route('vragenlijst')->with('success', 'Je hebt succesvol de vraag aangepast');
    }

}
