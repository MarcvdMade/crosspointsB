<?php

namespace App\Http\Controllers;

use App\Tip;
use App\User;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function create(User $user)
    {
        $this->authorize('is_admin', $user);

        return view('information.tip');
    }

    public function store(User $user)
    {
        $this->authorize('is_admin', $user);

        request()->validate([
            'tip' => 'required',
        ]);

        $tip = new Tip();

        $tip->tip = request('tip');

        $tip->save();

        return redirect()->route('problem')
            ->with('success', 'You successfully added a new tip!');
    }
}
