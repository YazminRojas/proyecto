<?php

use Illuminate\Support\Facades\Route;

//-------------------------------------------------------------------

use App\Http\Controllers\EventoController;
Route::resources([
    'eventos'=> EventoController::class,
]);

use App\Http\Controllers\PerfilController;
Route::resources([
    'perfils'=> PerfilController::class,
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

//------------------------------------------------------
use App\Http\Controllers\CalendarioController;

Route::resources([
   'calendarios' => CalendarioController::class,
]);
//Route::resources([
  //'calendarios/event' => CalendarioController::class,
//]);
//Route::resources([
  //'calendarios/event/{mes}' => CalendarioController::class,
//]);

//Route::get('Calendario/event/{mes}','ControllerCalendar@index_month');
//Route::get('Calendar/event','ControllerCalendario@index');
//------------------------------------------------------


use App\Http\Controllers\NotaController;

Route::resources([
    'notas' => NotaController::class,
]);

use App\Http\Controllers\CompartirController;

Route::resources([
    'compartirs' => CompartirController::class,
]);


use App\Http\Controllers\ConfiguracionController;

Route::resources([
    'configuracions' => ConfiguracionController::class,
]);




Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
