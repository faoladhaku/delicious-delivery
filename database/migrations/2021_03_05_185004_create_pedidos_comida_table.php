<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosComidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_comida', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pedidos_id')->nullable();
            $table->foreign('pedidos_id')->references('id')->on('pedidos');
            $table->unsignedInteger('Lunes')->nullable();
            $table->foreign('Lunes')->references('id')->on('carta');
            $table->unsignedInteger('Martes')->nullable();
            $table->foreign('Martes')->references('id')->on('carta');
            $table->unsignedInteger('Miercoles')->nullable();
            $table->foreign('Miercoles')->references('id')->on('carta');
            $table->unsignedInteger('Jueves')->nullable();
            $table->foreign('Jueves')->references('id')->on('carta');
            $table->unsignedInteger('Viernes')->nullable();
            $table->foreign('Viernes')->references('id')->on('carta');
            $table->unsignedInteger('Sabado')->nullable();
            $table->foreign('Sabado')->references('id')->on('carta');
            $table->unsignedInteger('Domingo')->nullable();
            $table->foreign('Domingo')->references('id')->on('carta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_comida');
    }
}
