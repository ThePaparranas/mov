<?php

namespace App\Http\Controllers\Front\Api;

use Illuminate\Http\JsonResponse;
use App\Mov\ExternalData\GetsExternalApiData as ApiData;
use App\Http\Controllers\FrontApiController as Controller;

class MovieDataController extends Controller
{
    use ApiData;

    public function getOmdbData($imdbId): JsonResponse
    {
        return $this->respond(ApiData::get('omdb', $imdbId));
    }
}
