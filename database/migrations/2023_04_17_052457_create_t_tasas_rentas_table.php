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
        Schema::create('t_tasas_rentas', function (Blueprint $table) {
            $table->bigIncrements('clvTasaRenta')->index();
            $table->string('tasaRenta')->unique()->index();
            $table->decimal('rentaUnMes', 10, 2)->nullable();
            $table->decimal('rentaDosMeses', 10, 2)->nullable();
            $table->decimal('rentaTresMeses', 10, 2)->nullable();
            $table->decimal('ivaUnMes', 10, 2)->nullable();
            $table->decimal('ivaDosMeses', 10, 2)->nullable();
            $table->decimal('ivaTresMeses', 10, 2)->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tasas_rentas');
    }
};