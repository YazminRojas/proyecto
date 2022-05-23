<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdificioController;
Route::resources([
    'edificios' => EdificioController::class,
]);

use App\Http\Controllers\AgendaController;
Route::resources([
    'agendas'=> AgendaController::class,
]);

//-------------------------------------------------------------------

use App\Http\Controllers\EventoController;
Route::resources([
    'eventos'=> EventoController::class,
]);


use App\Http\Controllers\SalonController;
Route::resources([
    'salons'=> SalonController::class,
]);


//-------------------------------------------------------------------

use App\Http\Controllers\MateriaController;

Route::resources([
    'materias' => MateriaController::class,
]);

use App\Http\Controllers\DocenteController;

Route::resources([
    'docentes' => DocenteController::class,
]);



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
