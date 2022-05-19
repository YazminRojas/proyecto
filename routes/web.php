<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdificioController;


Route::resources([
    'Edificios'       => EdificioController::class,
]);

Route::get('/', function () {
    return view('welcome');
});

//-------------------------------------------------------------------

Route::resources([
    'eventos'=> EventoController::class,
]);

Route::get('/', function () {
    return view('welcome');
});

//-------------------------------------------------------------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
