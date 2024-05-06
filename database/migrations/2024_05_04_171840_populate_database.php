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
            ['titulo' => 'O Senhor dos Anéis', 'isbn' => '978-0-261-10242-2', 'genero' => 'Fantasia', 'paginas' => 250],
            ['titulo' => 'Harry Potter e a Pedra Filosofal', 'isbn' => '978-85-325-3387-8', 'genero' => 'Fantasia', 'paginas' => 500],
            ['titulo' => '1984', 'isbn' => '978-85-325-2890-4', 'genero' => 'Ficção Científica', 'paginas' => 412],
            ['titulo' => 'Dom Casmurro', 'isbn' => '978-85-03-01594-4', 'genero' => 'Romance', 'paginas' => 905],
            ['titulo' => 'Orgulho e Preconceito', 'isbn' => '978-85-66701-56-4', 'genero' => 'Romance', 'paginas' => 546]
        ]);

        // Populando a tabela "leitors"
        DB::table('leitors')->insert([
            ['nome' => 'João', 'email' => 'joao@example.com', 'idade' => 15],
            ['nome' => 'Maria', 'email' => 'maria@example.com', 'idade' => 39],
            ['nome' => 'Pedro', 'email' => 'pedro@example.com', 'idade' => 24],
            ['nome' => 'Ana', 'email' => 'ana@example.com', 'idade' => 35],
            ['nome' => 'Carlos', 'email' => 'carlos@example.com', 'idade' => 19]
        ]);

        // Populando a tabela "autors"
        DB::table('autores')->insert([
            ['nome' => 'J.R.R. Tolkien'],
            ['nome' => 'J.K. Rowling'],
            ['nome' => 'George Orwell'],
            ['nome' => 'Machado de Assis'],
            ['nome' => 'Jane Austen']
        ]);

        // Populando a tabela "emprestimos"
        DB::table('emprestimos')->insert([
            ['livro_id' => 1, 'leitor_id' => 1, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 2, 'leitor_id' => 2, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 3, 'leitor_id' => 3, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 4, 'leitor_id' => 4, 'data_emprestimo' => now(), 'data_devolucao' => null],
            ['livro_id' => 5, 'leitor_id' => 5, 'data_emprestimo' => now(), 'data_devolucao' => null]
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
