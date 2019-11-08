<?php

namespace App\Http\Controllers\Front\Api;

use App\ArticleType;
use App\Http\Controllers\FrontApiController as Controller;

class NewsTypesController extends Controller
{
    public function __invoke()
    {
        return $this->respond(ArticleType::all());
    }
}
