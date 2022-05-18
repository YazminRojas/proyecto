<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdificioController;


Route::resources([
    'Edificios'       => EdificioController::class,
]);

Route::get('/', function () {
    return view('welcome');
});
