<?php

// app/Models/Leitor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leitor extends Model
{
    protected $table = 'leitores';
    protected $fillable = ['nome', 'idade', 'email'];

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }
}
