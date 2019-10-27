<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;

class UtilController extends Controller
{
    public function sysInfo()
    {
        $info = [
            'PHP_version' => phpversion(),
            'env' => App::environment(),
            'debug' => config('app.debug'),
        ];

        $res = [
            'info' => $info,
            'laravel_version' => Application::VERSION
        ];

        return response()->json($res);
    }
}
