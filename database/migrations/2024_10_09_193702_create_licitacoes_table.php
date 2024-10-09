<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\Prompts\Key;

return new class extends Migration
{

    public function up()
    {
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->increments('id_licitacao')->primaryKey(); // ID autoincremental para cada registro de licitação
            $table->string('objeto_contratacao'); // Objeto da contratação
            $table->integer('id_gestor'); // Registro do gestor
            $table->integer('id_integrante'); // Registro do integrante
            $table->integer('id_fiscal'); // Registro do fiscal
            $table->date('data_licitacao'); // Data da licitação
            $table->timestamps(); // Criado / Atualizado
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('licitacoes');
    }
};
