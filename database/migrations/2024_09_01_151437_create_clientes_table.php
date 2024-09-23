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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',250);
            $table->string('direccion',250);
            $table->string('telefono',250);
            $table->string('correo',250);
            $table->string('nit',250);
            $table->unsignedBigInteger('tipo_cliente_id');

            $table->foreign('tipo_cliente_id')->references('id')->on('tipos_clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
