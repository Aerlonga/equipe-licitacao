<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Licitacao extends Model
{
    use HasFactory;

    protected $table = 'licitacoes';

    protected $fillable = ['id_gestor', 'id_integrante', 'id_fiscal', 'funcao', 'data_licitacao', 'objeto_contratacao'];

    // Relacionamento: uma licitação pertence a um gestor (pessoa)
    public function gestor()
    {
        return $this->belongsTo(Pessoa::class, 'id_gestor');
    }

    // Relacionamento: uma licitação pertence a um integrante (pessoa)
    public function integrante()
    {
        return $this->belongsTo(Pessoa::class, 'id_integrante');
    }

    // Relacionamento: uma licitação pertence a um fiscal (pessoa)
    public function fiscal()
    {
        return $this->belongsTo(Pessoa::class, 'id_fiscal');
    }
}
