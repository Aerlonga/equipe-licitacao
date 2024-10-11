<?php

namespace App\Service;

use App\Models\Licitacao;
use App\Models\Pessoa;
use App\Models\SequenciaLicitacao;
use DateTime;

use function PHPUnit\Framework\isNull;

class LicitacaoService
{

    public function salvarlicitacao($contracao)
    {
        $pessoas = Pessoa::all();
        $pessoasIds = $pessoas->pluck('id_pessoa')->toArray();
        shuffle($pessoasIds);

        $idGestor = $pessoasIds[0];
        $idIntegrante = $pessoasIds[1];
        $idFiscal = $pessoasIds[2];

        $licitacao = [
            'id_gestor' => $idGestor,
            'id_integrante' => $idIntegrante,
            'id_fiscal' => $idFiscal,
            'objeto_contratacao' => $contracao
        ];

        $licitacaosalva = Licitacao::create($licitacao);

        //verifica se a sequencia existe
        $existesequencia = $this->sequenciaLicitacaoExistente($idGestor, $idIntegrante, $idFiscal);
        //metodo create = salvar no banco
        
        if ($existesequencia) {
            return 'Existe essa sequencia! Salvo com sucesso!';
        } else {
            $sequenciaLicitacao = [
                'id_gestor' => $idGestor,
                'id_integrante' => $idIntegrante,
                'id_fiscal' => $idFiscal,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
            ];
            SequenciaLicitacao::create($sequenciaLicitacao);
            return 'Sequencia não existe! Salvo com sucesso!';
        }

    }

    private function sequenciaLicitacaoExistente($idGestor, $idIntegrante, $idFiscal)
    {

        $sequencia = SequenciaLicitacao::where('id_gestor', $idGestor)
            ->where('id_integrante', $idIntegrante)
            ->where('id_fiscal', $idFiscal)
            ->first();


        return !is_null($sequencia);
    }
}
