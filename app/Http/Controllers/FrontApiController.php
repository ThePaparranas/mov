<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FrontApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @param $message
     * @param int $status
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($message, $status = 200): JsonResponse
    {
        return response()->json($message, $status);
    }
}
