<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrosController;



Route::get('/', [App\Http\Controllers\CadastrosController::class, 'index']);

Route::post('/', [App\Http\Controllers\CadastrosController::class, 'create'])->name('cadastrar_usuario');

Route::get('/fotos', function () {return view('fotos');});
