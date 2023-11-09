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
        Schema::create('detalle_compras', function (Blueprint $table) {
            //keys
            $table->id();
            //atributos
            $table->string('cantidad_compra');
            //foreing key
            $table->unsignedBigInteger('id_vestimenta');
            $table->unsignedBigInteger('id_talla');
            $table->unsignedBigInteger('id_boleta');
            $table->foreign('id_vestimenta')->references('id_vestimenta')->on('vestimenta_tallas');
            $table->foreign('id_talla')->references('id_talla')->on('vestimenta_tallas');
            $table->foreign('id_boleta')->references('id')->on('boletas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_carritos');
    }
};
