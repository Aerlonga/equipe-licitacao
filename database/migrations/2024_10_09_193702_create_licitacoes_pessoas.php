<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Criação da tabela 'pessoas'
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id_pessoa'); // ID autoincremental para a pessoa
            $table->string('nome'); // Nome da pessoa
            $table->timestamps(); // Criado / Atualizado
        });

        // Criação da tabela 'licitacoes'
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->bigIncrements('id_licitacao'); // ID autoincremental para cada registro de licitação
            $table->string('objeto_contratacao'); // Objeto da contratação

            // IDs das pessoas para as funções de gestor, integrante e fiscal
            $table->unsignedBigInteger('id_gestor');
            $table->unsignedBigInteger('id_integrante');
            $table->unsignedBigInteger('id_fiscal');

            // Coluna para armazenar a função de cada pessoa
            $table->string('funcao'); // Função da pessoa (gestor, integrante, fiscal)

            $table->date('data_licitacao'); // Data da licitação
            $table->timestamps(); // Criado / Atualizado

            // Definindo chaves estrangeiras corretamente
            $table->foreign('id_gestor')->references('id_pessoa')->on('pessoas')->onDelete('cascade');
            $table->foreign('id_integrante')->references('id_pessoa')->on('pessoas')->onDelete('cascade');
            $table->foreign('id_fiscal')->references('id_pessoa')->on('pessoas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('licitacoes');
        Schema::dropIfExists('pessoas');
    }
};
