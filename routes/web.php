<?php

use App\Http\Controllers\Front\Api\MovieDataController;

Route::group([
    'as'         => 'FrontApi::',
    'prefix'     => 'FrontApi',
    'middleware' => 'web',
], function () {
    Route::get('omdb/{imdbId}', [MovieDataController::class, 'getOmdbData']);
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

/*Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('request_password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');*/
Auth::routes(['verify' => true]);

Route::any('{all}', function () {
    return view('site');
})->where(['all' => '.*'])->middleware('verified');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/filmes', 'FilmesController@filmes')->name('filmes');
Route::get('/filme', 'FilmeController@filme')->name('filme');
Route::get('/perfil', 'PerfilController@perfil')->name('perfil');
Route::get('/noticias', 'NoticiasController@noticias')->name('noticias');
Route::get('/noticia', 'NoticiaController@noticia')->name('noticia');
Route::get('/forum', 'ForumController@forum')->name('forum');
Route::get('/topics', 'TopicsController@topics')->name('topics');
Route::get('/topic', 'TopicController@topic')->name('topic');
Route::get('/premium', 'PremiumController@premium')->name('premium'); */
