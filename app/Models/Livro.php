<?php

// app/Models/Livro.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'isbn', 'genero', 'numero_paginas','autor_id'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }
}
