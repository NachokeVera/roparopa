<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('vestimentas', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_categoria');
            //foreing keys
            $table->foreign('id_admin')->references('id')->on('users');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->timestamps();
    
            
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prendas');
    }
};
