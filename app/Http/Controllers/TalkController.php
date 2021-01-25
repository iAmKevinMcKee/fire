<?php

namespace App\Http\Controllers;

class TalkController extends Controller
{
    public function index()
    {
        return view('talks.index');
    }

    public function show()
    {
        return view('talks.show');
    }

    public function create()
    {

    }
}
