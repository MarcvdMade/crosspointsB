<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function create(User $user)
    {
        $this->authorize('is_admin', $user);

        return view('information.link');
    }

    public function store(User $user)
    {
        $this->authorize('is_admin', $user);

        request()->validate([
            'link' => 'required',
            'label' => 'required'
        ]);

        $link = new Link();

        $link->link = request('link');
        $link->label = request('label');

        $link->save();

        return redirect()->route('problem')
            ->with('success', 'You successfully added a new link!');
    }
}
