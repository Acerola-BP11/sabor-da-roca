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
            $table->integer('numero_fixo');
            $table->integer('ddd_fixo');
            $table->integer('numero_cel');
            $table->integer('ddd_cel');
            $table->integer('cpf');
            $table->string('nascimento');
            $table->integer('rg');
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
