<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function index()
    {
        return view('talks.index', [
            //
        ]);
    }

    public function show()
    {
        return view('talks.show', [
            //
        ]);
    }

    public function store(Request $request)
    {
        return redirect()->back();
    }
}
