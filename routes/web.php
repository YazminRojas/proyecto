<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdificioController;


Route::resources([
    'Edificios'       => EdificioController::class,
]);

//Route::get('/', function () {
  //  return view('welcome');
//});

//-------------------------------------------------------------------

Route::resources([
    'eventos'=> EventoController::class,
]);

Route::get('/', function () {
    return view('welcome');
});

//-------------------------------------------------------------------

use App\Http\Controllers\MateriaController;

Route::resources([
    'materias' => MateriaController::class,
]);

use App\Http\Controllers\DocenteController;

Route::resources([
    'docentes' => DocenteController::class,
]);



use App\Http\Controllers\PerfilController;

Route::resources([
    'perfils' => PerfilController::class,
]);



use App\Http\Controllers\CalendarioController;

Route::resources([
    'calendarios' => CalendarioController::class,
]);


use App\Http\Controllers\NotaController;

Route::resources([
    'notas' => NotaController::class,
]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
