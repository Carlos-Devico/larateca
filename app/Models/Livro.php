<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

    protected $fillable = ['titulo', 'isbn', 'genero','paginas'];

    public function autores() {
        return $this->belongsToMany('App\Models\Autor');
    }

    public function emprestimos() {
        return $this->hasMany('App\Models\Emprestimo');
    }
}
