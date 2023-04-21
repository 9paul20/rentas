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
        Schema::create('t_categorias', function (Blueprint $table) {
            $table->tinyIncrements('clvCategoria');
            $table->string('categoria')->unique();
            $table->text('descripcion')->nullable();
            $table->unsignedTinyInteger('clvTipoCategoria')->nullable();
            $table->timestamps();

            $table->index('clvCategoria');
            $table->index('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_categorias');
    }
};
