<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicitacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipe', function () {
    return view('equipe');
})->name('EquipeSalva');


Route::get('/teste', function () {
    return view('teste');
})->name('teste');



Route::post('/gerar-equipe', [LicitacaoController::class, 'gerarEquipe'])->name('LicitacoesSalvar');


