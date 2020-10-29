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
        $problems = Problem::all();

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
//        dd(request()->all());
        request()->validate([
            'problem' => 'required',
            'description' => 'required',
            'tips' => 'exists:tips,id',
            'links' => 'exists:links,id'
        ]);

        $problem = new Problem();

        $problem->name = request('problem');
        $problem->description = request('description');

        $problem->save();
        $problem->tips()->attach(request('tips'));
        $problem->links()->attach(request('links'));

        return redirect('information')
            ->with('success', 'You added a new problem!');
    }

    public function edit(Problem $problem)
    {
        //renders a list of a resource
//        $problem = Problem::find($problem);
        dd($problem);
        $links = Link::all();
        $tips = Tip::all();

        //show a view to edit a resource
        return view('information.edit', [
            'problem' => $problem,
            'links' => $links,
            'tips' => $tips
        ]);
    }

    public function update(Problem $problem)
    {
        $problem->tips()->detach();
        $problem->links()->detach();
//        dd(\request()->all());
        //persist the edited resource
        request()->validate([
            'problem' => 'required',
            'description' => 'required',
            'tips' => 'exists:tips,id',
            'links' => 'exists:links,id'
        ]);

        $problem->name = request('problem');
        $problem->description = request('description');

        $problem->save();
        $problem->tips()->attach(request('tips'));
        $problem->links()->attach(request('links'));

        return redirect('information')
            ->with('success', 'You have successfully edited your post!');
    }

}
