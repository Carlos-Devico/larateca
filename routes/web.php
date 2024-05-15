<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\LeitorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [LivroController::class, 'index']);

Route::resource('livros', LivroController::class);
Route::resource('autores', AutorController::class);



Route::get('/leitores', [LeitorController::class, 'index']);
// Rota para exibir o formulário de cadastro de leitor (GET)
Route::get('leitores/create', [LeitorController::class, 'create'])->name('leitores.create');

// Rota para processar o cadastro de leitor (POST)
Route::post('leitores', [LeitorController::class, 'store'])->name('leitores.store');

Route::resource('emprestimos', EmprestimoController::class);
