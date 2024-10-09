<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicitacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipe', function () {
    return view('equipe');
});


Route::get('/gerar-equipe', [LicitacaoController::class, 'gerarEquipe']);