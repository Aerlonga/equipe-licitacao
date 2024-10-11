<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacao;
use App\Models\Pessoa;
use App\Http\Requests\CadastroLicitacaoRequest;
use App\Service\LicitacaoService;

class LicitacaoController extends Controller
{
    private $licitacaoservice;

    public function __construct(LicitacaoService $licitacaoservice) {
        $this->licitacaoservice = $licitacaoservice;
    }

    public function gerarEquipe(CadastroLicitacaoRequest $request)
    {   
        $mensagemsalva = $this->licitacaoservice->salvarlicitacao($request->input('objeto_contratacao'));

        return redirect()->route('EquipeSalva')->with('success', $mensagemsalva);


    



    //     $funcoes = ['gestor do contrato', 'integrante técnico', 'fiscal do contrato'];
    //     $pessoas = Pessoa::all();

    //     // Verifica se há pessoas suficientes
    //     if (count($pessoas) < count($funcoes)) {
    //         return response()->json(['message' => 'Número insuficiente de pessoas'], 400);
    //     }

    //     // Embaralha as pessoas e tenta garantir que não haja repetição imediata
    //     $pessoas = $pessoas->shuffle();

    //     $equipe = [];
    //     foreach ($pessoas as $index => $pessoa) {
    //         $funcao = $funcoes[$index];

    //         // Verifica a coluna correta para cada função
    //         $colunaFuncao = $this->getColunaPorFuncao($funcao);

    //         // Verifica se essa pessoa já teve essa função na última licitação
    //         $ultimaLicitacao = Licitacao::where($colunaFuncao, $pessoa->id)
    //             ->where('funcao', $funcao)
    //             ->latest('data_licitacao')
    //             ->first();

    //         // Se a última função dessa pessoa foi a mesma, troca a função
    //         if ($ultimaLicitacao) {
    //             $funcao = $this->getFuncaoAlternativa($pessoa, $funcoes, $funcao);
    //             $colunaFuncao = $this->getColunaPorFuncao($funcao); // Atualiza a coluna da função
    //         }

    //         // Adiciona a pessoa com a função escolhida para a equipe
    //         $equipe[] = [
    //             'id_pessoa' => $pessoa->id,
    //             'nome' => $pessoa->nome,
    //             'funcao' => $funcao,
    //             'coluna_funcao' => $colunaFuncao // Adiciona a coluna correta para salvar
    //         ];
    //     }

    //     // Pega a data atual e o objeto da contratação enviado pelo formulário
    //     $dataLicitacao = now();
    //     $objetoContratacao = $request->input('objeto_contratacao');

    //     // Salva a nova equipe no banco com data e objeto da contratação
    //     foreach ($equipe as $membro) {
    //         Licitacao::create([
    //             $membro['coluna_funcao'] => $membro['id_pessoa'], // Usa a coluna correta (id_gestor, id_integrante, id_fiscal)
    //             'funcao' => $membro['funcao'],
    //             'data_licitacao' => $dataLicitacao,
    //             'objeto_contratacao' => $objetoContratacao
    //         ]);
    //     }

    //     return response()->json($equipe);
    // }

    // // Função auxiliar para garantir que a pessoa não receba a mesma função imediatamente
    // private function getFuncaoAlternativa($pessoa, $funcoes, $funcaoAtual)
    // {
    //     // Remove a função atual da lista de funções disponíveis
    //     $funcoesDisponiveis = array_diff($funcoes, [$funcaoAtual]);

    //     // Embaralha as funções disponíveis e retorna uma nova função
    //     return $funcoesDisponiveis[array_rand($funcoesDisponiveis)];
    // }

    // // Função auxiliar para determinar qual coluna usar na tabela licitacoes
    // private function getColunaPorFuncao($funcao)
    // {
    //     switch ($funcao) {
    //         case 'gestor do contrato':
    //             return 'id_gestor';
    //         case 'integrante técnico':
    //             return 'id_integrante';
    //         case 'fiscal do contrato':
    //             return 'id_fiscal';
    //         default:
    //             throw new \Exception("Função desconhecida: $funcao");
    //     }
     }
}
