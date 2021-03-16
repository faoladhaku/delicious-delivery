<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Pedido_ComidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos_comida')->insert([

            'Lunes'=> '1',
            'Martes'=>'1',
            'Miercoles'=>'1',
            'Jueves'=>'1',
            'Viernes'=>'1',
            'Sabado'=>'1',
            'Domingo'=>'1',
        ]);
    }
}
