<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ImdbController extends Controller
{
    public function show()
    {
        return view('imdb');
    }

    public function find(Request $request)
    {
        $data = $this->getData($request->title);

        return view('imdb')->with('data', $data);
    }

    protected function getData($title)
    {
        $t = $title;
        $q = preg_replace('/\s+/', '+', $title);
        $r = $this->getResults($q);

        return ['title' => $t, 'query' => $q, 'results' => $r];
    }

    protected function getResults($query)
    {
        $fl = mb_substr($query, 0, 1);
        $client = new Client();
        $uri = "https://v2.sg.media-imdb.com/suggests/{$fl}/{$query}.json";

        try {
            $req = $client->get($uri);
        } catch (ClientException $e) {
            // TODO
            dd($e->getResponse());
        }

        $res = $req->getBody()->getContents();

        return $this->processResults($res);
    }

    public function update()
    {
        die('updating');
    }

    protected function processResults($res)
    {
        $fst = strpos($res, '(') + 1;
        $str = substr($res, $fst);
        $str = trim($str, '()');
        $obj = json_decode($str);
//dd($obj->d);
        return $obj->d;
    }

    protected function getImdbLists()
    {
        $listsPath = database_path('imdb') . '/';
        $uncompressedListsPath = $listsPath . '/downloads/';

    }
}
