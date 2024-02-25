<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Jornal', function (Blueprint $table) {
            $table->increments("id");
            $table->text('nome_materia');
            $table->text('resumo_materia');
            $table->text('materia_p1');
            $table->text('materia_p2');
            $table->text('materia_p3');
            $table->text('materia_p4');
            $table->string("imagem_capa");
            $table->string("imagem_1");
            $table->string("imagem_2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storage');
    }
};
