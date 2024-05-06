<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\LeitorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;


Route::get('/livros', [LivroController::class, 'index']);
Route::get('/livros/{livro}', [LivroController::class, 'show']);
Route::post('/livros', [LivroController::class, 'store']);
Route::put('/livros/{livro}', [LivroController::class, 'update']);
Route::delete('/livros/{livro}', [LivroController::class, 'destroy']);

Route::get('/leitores', [LeitorController::class, 'index']);
Route::get('/leitores/{leitor}', [LeitorController::class, 'show']);
Route::post('/leitores', [LeitorController::class, 'store']);
Route::put('/leitores/{leitor}', [LeitorController::class, 'update']);
Route::delete('/leitores/{leitor}', [LeitorController::class, 'destroy']);

Route::get('/emprestimos', [EmprestimoController::class, 'index']);
Route::get('/emprestimos/{emprestimo}', [EmprestimoController::class, 'show']);
Route::post('/emprestimos', [EmprestimoController::class, 'store']);
Route::put('/emprestimos/{emprestimo}', [EmprestimoController::class, 'update']);
Route::delete('/emprestimos/{emprestimo}', [EmprestimoController::class, 'destroy']);

Route::get('/autores', [AutorController::class, 'index']);
Route::get('/autores/{autor}', [AutorController::class, 'show']);
Route::post('/autores', [AutorController::class, 'store']);
Route::put('/autores/{autor}', [AutorController::class, 'update']);
Route::delete('/autores/{autor}', [AutorController::class, 'destroy']);


Route::get('/', function () {
    return view('index');
});
