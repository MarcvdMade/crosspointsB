<?php

namespace App\Http\Controllers;

use App\Link;
use App\Problem;
use App\Tip;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //login middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //render resources
        $problems = Problem::latest()->get();

        return view('information.info', [
            'problems' => $problems
        ]);
    }

    public function show($id)
    {
        $problem = problem::find($id);

        return view('information.show', [
            'problem' => $problem
        ]);

    }

    public function create()
    {
        //shows view to create a new resource
        $links = Link::all();
        $tips = Tip::all();

        return view('information.create', [
            'links' => $links,
            'tips' => $tips
        ]);
    }

    public function store()
    {
        request()->validate([
            'problem' => 'required',
            'summary' => 'required',
            'description' => 'required',
            'tips' => 'exists:tips,id',
            'links' => 'exists:links,id'
        ]);

        $problem = new Problem();

        $problem->name = request('problem');
        $problem->summary = request('summary');
        $problem->description = request('description');

        $problem->save();
        $problem->tips()->attach(request('tips'));
        $problem->links()->attach(request('links'));

        return redirect('information')
            ->with('success', 'Je hebt successvol een informatie onderwerp toegevoegd');
    }

    public function edit($id)
    {
        //renders a list of a resource
        $problem = Problem::find($id);
        $links = Link::all();
        $tips = Tip::all();

        //show a view to edit a resource
        return view('information.edit', [
            'problem' => $problem,
            'links' => $links,
            'tips' => $tips
        ]);
    }

    public function update($id)
    {

        $problem = Problem::find($id);

        $problem->tips()->detach();
        $problem->links()->detach();

        //persist the edited resource
        request()->validate([
            'problem' => 'required',
            'summary' => 'required',
            'description' => 'required',
            'tips' => 'exists:tips,id',
            'links' => 'exists:links,id'
        ]);

        $problem->name = request('problem');
        $problem->summary = request('summary');
        $problem->description = request('description');

        $problem->save();
        $problem->tips()->attach(request('tips'));
        $problem->links()->attach(request('links'));

        return redirect('information')
            ->with('success', 'Je hebt succesvol een informatie onderwerp gewijzigd');
    }

    public function destroy($id)
    {
        $problem = Problem::find($id);

        $problem->delete();

        return redirect('information')->with('success', 'Je hebt succesvol een informatie onderwerp verwijderd');
    }

}
