<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function topics ()
    {
        return view('forum/topics');
    }
}
