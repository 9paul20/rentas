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
        Schema::create('t_estados_pagos_rentas', function (Blueprint $table) {
            $table->tinyIncrements('clvEstadoPagoRenta');
            $table->string('estadoPagoRenta')->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();

            $table->index('clvEstadoPagoRenta');
            $table->index('estadoPagoRenta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_estados_pagos_rentas');
    }
};
