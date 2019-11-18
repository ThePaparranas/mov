<?php

namespace App\Mov\ExternalData;

trait GetsExternalApiData
{
    public static function get($api, $searchString)
    {
        if (! method_exists(Requester::class, $api)) {
            // TODO
            dd('no such api');
        }

        $requester = new Requester($api, $searchString);

        return $requester->get();
    }
}
