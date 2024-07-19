<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('movies', [MovieController::class, 'allmovies']);
    Route::get('movies/{id}', [MovieController::class, 'movieindex']);
    Route::get('directors/{id}', [MovieController::class, 'getDirector']);
    Route::get('actors/{id}', [MovieController::class, 'getActor']);
    Route::get('moviegenre', [MovieController::class, 'getMovieWithGenre']);
    Route::get('movierate', [MovieController::class, 'getMovieWithRate']);
});