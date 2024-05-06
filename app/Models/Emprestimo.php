<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $fillable = ['data_emprestimo', 'data_devolucao'];
    
    public function livros(){
        return $this->belongsTo('App\Models\Livro');
    }

    public function leitor(){
        return $this->belongsTo('App\Models\Leitor');
    }
}
