<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Rout::get('/imc/form', [imcController::class, '']);
Route::get('/imc/form', [imcController::class, 'form']);
Rout::post('/imc/salvar', [imcController::class, 'salvar']);
