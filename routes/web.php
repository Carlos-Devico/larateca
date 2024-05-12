<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\LeitorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [LivroController::class, 'index']);

Route::resource('livros', LivroController::class);
Route::resource('autores', AutorController::class);
Route::resource('leitores', LeitorController::class);
Route::resource('emprestimos', EmprestimoController::class);
