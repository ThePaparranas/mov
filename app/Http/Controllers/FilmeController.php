<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function filme ()
    {
        return view('filme');
    }
}
