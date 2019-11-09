<?php

namespace App\Http\Controllers\Front\Api;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\FrontApiController as Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->respond(Article::all()->load(['type', 'author']));
    }

    /**
     * @param string $slug
     *
     * @return JsonResponse
     */
    public function getBySlug(string $slug): JsonResponse
    {
        $deslugged = $this->deslug($slug);
        $slg = $deslugged['slug'];
        $date = $deslugged['date'];

        $nw = Article::whereDate('created_at', $date)
            ->where(function($query) use ($slg) {
                return $query->where('title', 'like', '%' . $slg . '%');
            })
            ->first();

        if (! is_null($nw)) {
            $nw->load(['type', 'author']);

            return $this->respond($nw);
        }

        return $this->respond(false);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(): JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function edit($id): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        //
    }

    /**
     * @param string $slug
     *
     * @return array
     */
    protected function deslug(string $slug): array
    {
        $exp = explode('_', $slug);

        return [
            'slug' => str_replace('-', ' ', $exp[0]),
            'date' => $exp[1],
        ];
    }
}
