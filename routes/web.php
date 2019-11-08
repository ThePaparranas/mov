<?php

use App\Http\Controllers\Front\Api\MovieDataController;

Route::group([
    'as'         => 'FrontApi::',
    'prefix'     => 'FrontApi',
    'middleware' => 'web',
], function () {
    Route::get('omdb/{imdbId}', [MovieDataController::class, 'getOmdbData']);
    //Route::get('news', [NewsController::class, 'index']);
});

Route::group([
    'as'         => 'Admin::',
    'prefix'     => 'admin',
    'middleware' => 'web',
], function () {
    // GUEST
    Route::group([], function () {
    });

    // AUTH
    Route::group([
        'middleware' => 'auth',
    ], function () {
        //
    });

});

Auth::routes(['verify' => true]);

Route::any('{all}', function () {
    return view('site');
})->where(['all' => '.*'])->middleware('verified');
