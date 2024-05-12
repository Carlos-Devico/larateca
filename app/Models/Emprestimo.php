<?php

// app/Models/Emprestimo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $fillable = ['data_emprestimo', 'data_devolucao', 'leitor_id', 'livro_id'];

    public function leitor()
    {
        return $this->belongsTo(Leitor::class);
    }

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
