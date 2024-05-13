<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Populando a tabela "livros"
        DB::table('livros')->insert([
            ['titulo' => 'O Senhor dos Anéis', 'isbn'=> '978-0-261-10242-2', 'genero' => 'Fantasia', 'numero_paginas' => 250, 'autor_id' => 1, 'status' => 'emprestado'],
            ['titulo' => 'Harry Potter e a Pedra Filosofal', 'isbn'=> '978-85-325-3387-8', 'genero' => 'Fantasia', 'numero_paginas' => 500, 'autor_id' => 2, 'status' => 'disponível'],
            ['titulo' => '1984', 'isbn'=> '978-85-325-2890-4', 'genero' => 'Ficção Científica', 'numero_paginas' => 412, 'autor_id' => 3, 'status' => 'emprestado'],
            ['titulo' => 'Dom Casmurro', 'isbn'=> '978-85-03-01594-4', 'genero' => 'Romance', 'numero_paginas' => 905, 'autor_id' => 4, 'status' => 'emprestado'],
            ['titulo' => 'Orgulho e Preconceito', 'isbn'=> '978-85-66701-56-4', 'genero' => 'Romance', 'numero_paginas' => 546, 'autor_id' => 5, 'status' => 'disponível'],
            ['titulo' => 'A Menina que Roubava Livros', 'isbn'=> '978-85-8057-043-7', 'genero' => 'Drama', 'numero_paginas' => 584, 'autor_id' => 6, 'status' => 'emprestado'],
            ['titulo' => 'O Hobbit', 'isbn'=> '978-85-7536-400-2', 'genero' => 'Fantasia', 'numero_paginas' => 310, 'autor_id' => 1, 'status' => 'emprestado'],
            ['titulo' => 'A Revolução dos Bichos', 'isbn'=> '978-85-01-00765-7', 'genero' => 'Ficção', 'numero_paginas' => 152, 'autor_id' => 3, 'status' => 'emprestado'],
            ['titulo' => 'A Cabana', 'isbn'=> '978-85-64850-51-7', 'genero' => 'Ficção Cristã', 'numero_paginas' => 288, 'autor_id' => 7, 'status' => 'emprestado'],
            ['titulo' => 'A Culpa é das Estrelas', 'isbn'=> '978-85-7818-207-7', 'genero' => 'Drama', 'numero_paginas' => 288, 'autor_id' => 8, 'status' => 'disponível']
        ]);


        // Populando a tabela "leitores"
        DB::table('leitores')->insert([
            ['nome' => 'João', 'email' => 'joao@example.com', 'idade' => 15],
            ['nome' => 'Maria', 'email' => 'maria@example.com', 'idade' => 39],
            ['nome' => 'Pedro', 'email' => 'pedro@example.com', 'idade' => 24],
            ['nome' => 'Ana', 'email' => 'ana@example.com', 'idade' => 35],
            ['nome' => 'Carlos', 'email' => 'carlos@example.com', 'idade' => 19],
            ['nome' => 'Mariana', 'email' => 'mariana@example.com', 'idade' => 28],
            ['nome' => 'Lucas', 'email' => 'lucas@example.com', 'idade' => 31],
            ['nome' => 'Juliana', 'email' => 'juliana@example.com', 'idade' => 22],
            ['nome' => 'Rafael', 'email' => 'rafael@example.com', 'idade' => 26],
            ['nome' => 'Patrícia', 'email' => 'patricia@example.com', 'idade' => 41]
        ]);

        // Populando a tabela "autores"
        DB::table('autores')->insert([
            ['nome' => 'J.R.R. Tolkien', 'idade' => 30, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'J.K. Rowling', 'idade' => 82, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'George Orwell', 'idade' => 43, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'Machado de Assis', 'idade' => 33, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'Jane Austen', 'idade' => 60, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'Markus Zusak', 'idade' => 50, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'William P. Young', 'idade' => 60, 'created_at' => now(), 'updated_at' => null],
            ['nome' => 'John Green', 'idade' => 30, 'created_at' => now(), 'updated_at' => null]
        ]);

        // Populando a tabela "emprestimos"
        DB::table('emprestimos')->insert([
            ['livro_id' => 1, 'leitor_id' => 1, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 2, 'leitor_id' => 2, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 3, 'leitor_id' => 3, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 4, 'leitor_id' => 4, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 5, 'leitor_id' => 5, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 6, 'leitor_id' => 6, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 7, 'leitor_id' => 7, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 8, 'leitor_id' => 8, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 9, 'leitor_id' => 9, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 10, 'leitor_id' => 10, 'data_emprestimo' => now(), 'data_devolucao' => null]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
