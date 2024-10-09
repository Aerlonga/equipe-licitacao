<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Licitacao extends Model
{
    use HasFactory;

    protected $table = 'licitacoes';

    protected $fillable = ['pessoa_id', 'funcao', 'data_licitacao', 'objeto_contratacao'];

    // Relacionamento: uma licitação pertence a uma pessoa
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
