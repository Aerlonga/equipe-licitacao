<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id(); // ID autoincremental para a pessoa
            $table->string('nome'); // Nome da pessoa
            $table->timestamps(); // Criado / Atualizado
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
