<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laralog;

class LogController extends Controller
{
//    protected $request;
//
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }
//
    public function index()
    {
        $response = [
            'latest' => Laralog::latest(),
            'list' => Laralog::list(),
            'dates' => Laralog::dates(),
            'groups' => Laralog::group(),
        ];

        return response()->json($response);
    }

    public function show($log)
    {
        $response = Laralog::process($log);

        return response()->json($response);
    }
}
