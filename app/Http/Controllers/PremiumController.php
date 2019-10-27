<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function premium ()
    {
        return view('premium');
    }
}
