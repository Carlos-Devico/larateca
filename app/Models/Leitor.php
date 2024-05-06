<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leitor extends Model
{
    protected $fillable = ['nome', 'email', 'idade'];
    
    public function emprestimos() {
        return $this->hasMany('App\Models\Emprestimo');
    }
}
