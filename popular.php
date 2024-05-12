<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap/app.php';

use Illuminate\Support\Facades\DB;
use App\Models\Autor;
use App\Models\Leitor;
use App\Models\Livro;
use App\Models\Emprestimo;
use Carbon\Carbon;

// Função para inserir registros na tabela autores
function populateAutores()
{
    foreach (range(1, 10) as $index) {
        Autor::create([
            'nome' => 'Autor ' . $index,
            'idade' => rand(20, 80),
        ]);
    }
}

// Função para inserir registros na tabela leitores
function populateLeitores()
{
    foreach (range(1, 10) as $index) {
        Leitor::create([
            'nome' => 'Leitor ' . $index,
            'idade' => rand(18, 70),
            'email' => 'leitor' . $index . '@example.com',
        ]);
    }
}

// Função para inserir registros na tabela livros
function populateLivros()
{
    foreach (range(1, 10) as $index) {
        Livro::create([
            'titulo' => 'Livro ' . $index,
            'genero' => 'Gênero ' . $index,
            'numero_paginas' => rand(100, 500),
            'ano_lancamento' => rand(2000, 2022),
            'autor_id' => rand(1, 10),
        ]);
    }
}

// Função para inserir registros na tabela emprestimos
function populateEmprestimos()
{
    $livros = Livro::pluck('id')->toArray();
    $leitores = Leitor::pluck('id')->toArray();

    foreach (range(1, 10) as $index) {
        $data_emprestimo = Carbon::now()->subDays(rand(1, 30));
        $data_devolucao = $data_emprestimo->copy()->addDays(rand(1, 30));

        Emprestimo::create([
            'data_emprestimo' => $data_emprestimo,
            'data_devolucao' => $data_devolucao,
            'leitor_id' => $leitores[array_rand($leitores)],
            'livro_id' => $livros[array_rand($livros)],
        ]);
    }
}

// Chamadas das funções de população
populateAutores();
populateLeitores();
populateLivros();
populateEmprestimos();

echo "Registros inseridos com sucesso!";
