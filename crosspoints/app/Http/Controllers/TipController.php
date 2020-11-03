<?php

namespace App\Http\Controllers;

use App\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function create()
    {
        return view('information.tip');
    }

    public function store()
    {
        request()->validate([
            'tip' => 'required',
        ]);

        $tip = new Tip();

        $tip->tip = request('tip');

        $tip->save();

        return redirect('information')
            ->with('success', 'You successfully added a new tip!');
    }
}
