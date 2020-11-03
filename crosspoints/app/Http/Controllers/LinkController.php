<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function create()
    {
        return view('information.link');
    }

    public function store()
    {
        request()->validate([
            'link' => 'required',
            'label' => 'required'
        ]);

        $link = new Link();

        $link->link = request('link');
        $link->label = request('label');

        $link->save();

        return redirect('information')
            ->with('success', 'You successfully added a new link!');
    }
}
