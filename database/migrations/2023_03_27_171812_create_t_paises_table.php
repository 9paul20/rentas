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
        Schema::create('t_paises', function (Blueprint $table) {
            $table->tinyIncrements('clvPais');
            $table->string('pais')->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();

            $table->index('clvPais');
            $table->index('pais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_paises');
    }
};
