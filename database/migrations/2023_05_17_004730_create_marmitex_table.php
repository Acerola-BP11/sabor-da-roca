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
        Schema::create('marmitex', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('preco');
            $table->string('tamanho', 12);
            $table->int('tara');
            $table->string('detalhamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marmitex');
    }
};
