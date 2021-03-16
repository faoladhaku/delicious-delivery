<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([

            'Fecha_Inicio'=> '2021-03-10 00:00:00',
            'Fecha_Final'=>'2021-03-10 00:00:20',
            'user_id'=>'1',
            'id_pedidos_comida'=>'1',
            'id_servicio'=>'1',

        ]);
    }
}
