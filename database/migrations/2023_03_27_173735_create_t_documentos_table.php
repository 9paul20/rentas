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
        Schema::create('t_documentos', function (Blueprint $table) {
            $table->bigIncrements('clvDocumento');
            $table->unsignedInteger('clvTipoDocumento')->nullable();
            $table->unsignedBigInteger('noDocumento')->unique();
            $table->date('fechaExpidicion');
            $table->date('fechaVencimiento');
            $table->string('autoridadEmisora');
            $table->unsignedTinyInteger('clvPais')->nullable();
            $table->string('imagenEscaneada')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();

            $table->index('clvDocumento');
            $table->index('noDocumento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_documentos');
    }
};
