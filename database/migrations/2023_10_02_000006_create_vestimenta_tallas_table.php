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
        Schema::create('vestimenta_tallas', function (Blueprint $table) {
            //keys
            $table->id();
            $table->unsignedBigInteger('id_vestimenta');
            $table->unsignedBigInteger('id_talla');
            //atributos
            $table->mediumInteger('cantidad');
            //foreing key
            $table->foreign('id_vestimenta')->references('id')->on('vestimentas');
            $table->foreign('id_talla')->references('id')->on('tallas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vestimenta_tallas');
    }
};
