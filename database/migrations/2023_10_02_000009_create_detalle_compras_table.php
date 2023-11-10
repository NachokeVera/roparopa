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
            $table->unsignedBigInteger('vestimenta_id');
            $table->unsignedBigInteger('talla_id');
            $table->unsignedBigInteger('boleta_id');
            $table->foreign('vestimenta_id')->references('id')->on('vestimenta_tallas');
            $table->foreign('talla_id')->references('id')->on('vestimenta_tallas');
            $table->foreign('boleta_id')->references('id')->on('boletas');
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
