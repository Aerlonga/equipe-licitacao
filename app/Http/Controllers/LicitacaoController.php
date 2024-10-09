<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacao;
use App\Models\Pessoa;

class LicitacaoController extends Controller
{
    public function gerarEquipe(Request $request)
    {
        $funcoes = ['gestor do contrato', 'integrante técnico', 'fiscal do contrato'];
        $pessoas = Pessoa::all();

        // Verifica se há pessoas suficientes
        if (count($pessoas) < count($funcoes)) {
            return response()->json(['message' => 'Número insuficiente de pessoas'], 400);
        }

        // Embaralha as pessoas e seleciona
        $pessoas = $pessoas->shuffle();

        $equipe = [];
        foreach ($funcoes as $index => $funcao) {
            $equipe[] = [
                'pessoa_id' => $pessoas[$index]->id,
                'nome' => $pessoas[$index]->nome,
                'funcao' => $funcao
            ];
        }

        // Verifica se já houve essa combinação anteriormente
        foreach ($equipe as $membro) {
            $exists = Licitacao::where('pessoa_id', $membro['pessoa_id'])
                ->where('funcao', $membro['funcao'])
                ->exists();

            if ($exists) {
                return response()->json(['message' => 'Combinação já ocorreu antes. Tente novamente.'], 400);
            }
        }

        // Pega a data atual e o objeto da contratação enviado pelo formulário
        $dataLicitacao = now();
        $objetoContratacao = $request->input('objeto_contratacao');

        // Salva a nova equipe no banco com data e objeto da contratação
        foreach ($equipe as $membro) {
            Licitacao::create([
                'pessoa_id' => $membro['pessoa_id'],
                'funcao' => $membro['funcao'],
                'data_licitacao' => $dataLicitacao,
                'objeto_contratacao' => $objetoContratacao
            ]);
        }

        return response()->json($equipe);
    }
}
