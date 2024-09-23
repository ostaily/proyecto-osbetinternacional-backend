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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_producto_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('talla_id');
            $table->unsignedBigInteger('tela_id');
            $table->text('descripcion');
            $table->integer('es_estampado');
            $table->double('valor_venta');
            $table->unsignedBigInteger('impuesto_id');
        
            $table->foreign('tipo_producto_id')->references('id')->on('tipos_productos');
            $table->foreign('color_id')->references('id')->on('colores');
            $table->foreign('talla_id')->references('id')->on('tallas');
            $table->foreign('tela_id')->references('id')->on('telas');
            $table->foreign('impuesto_id')->references('id')->on('impuestos');
        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
