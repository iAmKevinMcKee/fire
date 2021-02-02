<?php

namespace App\Http\Controllers;

use App\Models\Talk;
use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function index()
    {
        return view('talks.index', [
            'talks' => Talk::orderBy('date', 'desc')->get(),
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
        Talk::create([
            'name' => $request->name,
            'speaker' => $request->speaker,
            'date' => $request->date,
        ]);

        return redirect()->back();
    }
}
