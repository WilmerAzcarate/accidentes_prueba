<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('persona',PersonaController::class);
