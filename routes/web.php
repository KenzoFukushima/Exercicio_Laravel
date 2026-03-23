<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc/form', [ImcController::class, 'form']);
Route::post('/imc/salvar', [ImcController::class, 'salvar']);
