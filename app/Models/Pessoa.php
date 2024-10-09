<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Licitacao;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    // Relacionamento: uma pessoa pode estar em várias licitações
    public function licitacoes()
    {
        return $this->hasMany(Licitacao::class);
    }
}
