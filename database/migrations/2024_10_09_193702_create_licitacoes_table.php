<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->id(); // ID autoincremental para cada registro de licitação
            $table->foreignId('pessoa_id')->constrained('pessoas'); // Chave estrangeira referenciando a pessoa
            $table->string('funcao'); // Função da pessoa na licitação (gestor, integrante técnico, fiscal)
            $table->date('data_licitacao'); // Data da licitação
            $table->string('objeto_contratacao'); // Objeto da contratação
            $table->timestamps(); // Criado / Atualizado
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('licitacoes');
    }
};
