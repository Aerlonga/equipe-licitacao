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

     }
}
