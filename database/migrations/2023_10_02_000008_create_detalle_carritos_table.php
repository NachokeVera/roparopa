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
        Schema::create('detalle_carritos', function (Blueprint $table) {
            //keys
            $table->unsignedBigInteger('id_vestimenta');
            $table->unsignedBigInteger('id_talla');
            $table->unsignedBigInteger('id_carrito');
            //atributos
            $table->string('cantidad');
            $table->string('precio_de_venta');
            //foreing key
            $table->foreign('id_vestimenta')->references('id')->on('vestimentas');
            $table->foreign('id_talla')->references('id')->on('tallas');
            $table->foreign('id_carrito')->references('id')->on('carritos');

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
