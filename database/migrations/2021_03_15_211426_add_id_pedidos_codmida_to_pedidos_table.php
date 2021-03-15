<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdPedidosCodmidaToPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedInteger('id_pedidos_comida');
            $table->foreign('id_pedidos_comida')->references('id')->on('pedidos_comida');
            $table->unsignedInteger('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign(['id_pedidos_comida']);
            $table->dropColumn('id_pedidos_comida');
            $table->dropForeign(['id_servicio']);
            $table->dropColumn('id_servicio');
        });
    }
}
