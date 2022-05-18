<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaController;


Route::resources([
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
