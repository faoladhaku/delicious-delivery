<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarCartaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar_carta', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('comidas_id');
            $table->foreign('comidas_id')->references('id')->on('comidas');
            $table->unsignedInteger('bebida_id');
            $table->foreign('bebida_id')->references('id')->on('bebidas');
            $table->unsignedInteger('postre_id');
            $table->foreign('postre_id')->references('id')->on('postres');
            $table->unsignedInteger('lugar_hora_id')->nullable();
            $table->foreign('lugar_hora_id')->references('id')->on('lugar_hora');
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
        Schema::dropIfExists('lugar_carta');
    }
}
