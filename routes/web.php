<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdificioController;


Route::resources([
    'Edificios'       => EdificioController::class,
    'agenda'=> AgendaController::class,
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
