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
        Schema::create('ventas_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->double('valor_unitario');
            $table->unsignedBigInteger('impuesto_id');

            $table->foreign('venta_id')->references('id')->on('ventas');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('impuesto_id')->references('id')->on('impuestos');
    
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_detalles');
    }
};
