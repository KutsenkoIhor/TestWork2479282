<?php

use App\Http\Controllers\Api\CinemaMovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth_api')->group(function () {
    Route::get('/cinema', [CinemaMovieController::class, 'cinema']);
    Route::get('/movie', [CinemaMovieController::class, 'movie']);
    Route::get('/movie/sort', [CinemaMovieController::class, 'movieSort']);
    Route::get('/cinema/sort', [CinemaMovieController::class, 'cinemaSort']);
    Route::get('/search/movie/{name_movie}', [CinemaMovieController::class, 'movieSearch']);
    Route::get('/search/cinema/{name_cinema}', [CinemaMovieController::class, 'cinemaSearch']);
    Route::get('/search', [CinemaMovieController::class, 'search']);
});

//Route::middleware('auth_api')->get('/cinema', [CinemaMovieController::class, 'cinema']);
//Route::middleware('auth_api')->get('/movie', [CinemaMovieController::class, 'movie']);
//Route::middleware('auth_api')->get('/movie/sort', [CinemaMovieController::class, 'movieSort']);
//Route::middleware('auth_api')->get('/cinema/sort', [CinemaMovieController::class, 'cinemaSort']);
//Route::middleware('auth_api')->get('/search/movie/{name_movie}', [CinemaMovieController::class, 'movieSearch']);
//Route::middleware('auth_api')->get('/search/cinema/{name_cinema}', [CinemaMovieController::class, 'cinemaSearch']);
//Route::middleware('auth_api')->get('/search', [CinemaMovieController::class, 'search']);

