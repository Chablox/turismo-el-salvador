<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return redirect('/destinos');
});

Route::get('/destinos', [DestinoController::class, 'index']);

Route::get('/destinos/{id}', [DestinoController::class, 'show']);

Route::get('/contacto', [ContactoController::class, 'create']);

Route::post('/contacto', [ContactoController::class, 'store']);