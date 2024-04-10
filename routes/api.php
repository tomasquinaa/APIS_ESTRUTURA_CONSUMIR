<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\FootballController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/timezone', [FootballController::class, 'getTimezone'])->name('fuso-horario');
Route::get('/countries', [CountriesController::class, 'getCountries'])->name('countries');
Route::get('/players', [PlayerController::class, 'getPlayers'])->name('players');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/comments', [CommentController::class, 'handle'])->name('comments');
Route::get('/albums', [AlbumController::class, 'handle'])->name('albums');

Route::get('/links', function () {

    $routes = [
        [
            'descricao' => 'API da RapidApi: Fuso Horario',
            'url' => route('fuso-horario'),
        ],
        [
            'descricao' => 'API da RapidApi: Países',
            'url' => route('countries'),
        ],
        [
            'descricao' => 'API da RapidApi: Jogadores',
            'url' => route('players'),
        ],
        [
            'descricao' => 'API da JsonPlaceholder: Publicar',
            'url' => route('posts'),
        ],
        [
            'descricao' => 'API da JsonPlaceholder: Comentarios',
            'url' => route('comments'),
        ],
        [
            'descricao' => 'API da JsonPlaceholder: Albums',
            'url' => route('albums'),
        ]

    ];

    return response()->json($routes);
});
