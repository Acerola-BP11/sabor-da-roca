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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('rua');
            $table->string('complemento');
            $table->string('cidade');
            $table->int('numero_fixo', 9);
            $table->int('ddd_fixo', 2);
            $table->int('numero_cel', 9);
            $table->int('ddd_cel', 2);
            $table->int('cpf', 11);
            $table->string('nascimento', 10);
            $table->string('rg', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
