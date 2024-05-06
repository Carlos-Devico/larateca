<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['nome'];

    public function livros()
    {
        return $this->belongsTo('App\Models\Livro');
    }
}
