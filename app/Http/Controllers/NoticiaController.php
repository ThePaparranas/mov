<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function noticia ()
    {
        return view('noticia');
    }
}
