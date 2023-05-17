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
        Schema::create('itens_marmitex', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('id_marmitex');
            $table->unsignedBigInteger('id_item');
            $table->foreign('id_marmitex')->references('id')->on('marmitex');
            $table->foreign('id_item')->references('id')->on('itens');
            $table->primary(array('id_marmitex', 'id_item'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_marmitex');
    }
};
