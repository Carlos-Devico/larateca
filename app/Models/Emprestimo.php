<?php

// app/Models/Emprestimo.php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $fillable = ['data_emprestimo', 'data_devolucao', 'leitor_id', 'livro_id'];
    protected $dates = ['data_emprestimo', 'data_devolucao'];

    public function setDataEmprestimo($value)
    {
        $this->attributes['data_emprestimo'] = $value;
        $this->attributes['data_devulucao'] = Carbon::parse($value)->addDays(10);
    }

    public function leitor()
    {
        return $this->belongsTo(Leitor::class);
    }

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
