<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdificioController;


Route::resources([
<<<<<<< HEAD
    'Edificios'       => EdificioController::class,
=======
    'agenda'=> AgendaController::class,
>>>>>>> 5a320abd48ba385d1f9bc8f0d2d3ab51d6c44253
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
