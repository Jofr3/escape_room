<?php

use App\Http\Controllers\ControllerReservations;
use App\Http\Controllers\ControllerReviews;
use App\Http\Controllers\ControllerRooms;
use App\Http\Controllers\ControllerGames;
use App\Http\Controllers\ControllerUsers;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerGames::class, 'show']);
Route::fallback(function () { return view('/404'); });

Route::get('/users', [ControllerUsers::class, 'all']);
Route::get('/users/edit/{id}', [ControllerUsers::class, 'edit']);
Route::post('/users/editPost/{id}', [ControllerUsers::class, 'editPost']);
Route::view('/users/create', 'users/createUser');
Route::post('/users/createPost', [ControllerUsers::class, 'createPost']);
Route::get('/users/delete/{id}', [ControllerUsers::class, 'delete']);

Route::get('/games', [ControllerGames::class, 'all']);
Route::get('/games/edit/{id}', [ControllerGames::class, 'edit']);
Route::post('/games/editPost/{id}', [ControllerGames::class, 'editPost']);
Route::view('/games/create', 'games/createGame');
Route::post('/games/createPost', [ControllerGames::class, 'createPost']);
Route::get('/games/delete/{id}', [ControllerGames::class, 'delete']);

Route::get('/rooms', [ControllerRooms::class, 'all']);
Route::get('/rooms/edit/{id}', [ControllerRooms::class, 'edit']);
Route::post('/rooms/editPost/{id}', [ControllerRooms::class, 'editPost']);
Route::get('/rooms/create', [ControllerRooms::class, 'create']);
Route::post('/rooms/createPost', [ControllerRooms::class, 'createPost']);
Route::get('/rooms/delete/{id}', [ControllerRooms::class, 'delete']);

Route::get('/reservations', [ControllerReservations::class, 'all']);
Route::get('/reservations/edit/{id}', [ControllerReservations::class, 'edit']);
Route::post('/reservations/editPost/{id}', [ControllerReservations::class, 'editPost']);
Route::get('/reservations/create', [ControllerReservations::class, 'create']);
Route::post('/reservations/createPost', [ControllerReservations::class, 'createPost']);
Route::get('/reservations/delete/{id}', [ControllerReservations::class, 'delete']);

Route::get('/reviews', [ControllerReviews::class, 'all']);
Route::get('/reviews/edit/{id}', [ControllerReviews::class, 'edit']);
Route::post('/reviews/editPost/{id}', [ControllerReviews::class, 'editPost']);
Route::get('/reviews/create', [ControllerReviews::class, 'create']);
Route::post('/reviews/createPost', [ControllerReviews::class, 'createPost']);
Route::get('/reviews/delete/{id}', [ControllerReviews::class, 'delete']);
