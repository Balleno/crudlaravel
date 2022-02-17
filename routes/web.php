<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('plato', PlatoController::class);