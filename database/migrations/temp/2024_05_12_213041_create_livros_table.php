<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('isbn');
            $table->string('genero');
            $table->integer('numero_paginas');
            $table->foreignId('autor_id')->constrained('autores');
            $table->enum('status', ['disponivel', 'emprestado'])->default('disponivel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
