<?php

namespace App\Mov\ExternalData;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Requester
{
    /** @var string */
    protected $api;
    protected $query;
    protected $apiKey;

    /** @var \GuzzleHttp\Client */
    protected $client;

    public function __construct(string $api, string $query)
    {
        $this->api = $api;
        $this->query = $query;
        $this->client = new Client();
        $this->apiKey = $this->getApiKey($api);
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return call_user_func([$this, $this->api]);
    }

    /**
     * @param $api
     *
     * @return string
     */
    protected function getApiKey($api): string
    {
        $envKey = strtoupper($api) . '_API_KEY';

        return env($envKey, '');
    }

    /**
     * @return string
     */
    protected function omdb(): string
    {
        $uri = "http://www.omdbapi.com/?apikey={$this->apiKey}&i={$this->query}";
        $req = $this->client->get($uri);
        $res = $req->getBody()->getContents();

        return $res;
    }
}
