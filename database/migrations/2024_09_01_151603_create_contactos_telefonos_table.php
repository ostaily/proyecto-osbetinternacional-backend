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
        Schema::create('contactos_telefonos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contacto_id');
            $table->string('telefono',20);

            $table->foreign('contacto_id')->references('id')->on('contactos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos_telefonos');
    }
};
