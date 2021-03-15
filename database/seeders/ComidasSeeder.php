<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ComidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comidas')->insert([

            'nombre'=> 'Arroz con Pato',
            'descripcion'=>'El arroz con pato es rico',
            'url'=> '\\\\',

        ]);
        DB::table('bebidas')->insert([

            'nombre'=> 'Coca-Cola',
            'descripcion'=>'Coca-Cola, conocida comúnmente como Coca en muchos países hispanohablantes, es una bebida gaseosa y refrescante',
            'url'=> '\\\\',

        ]);
        DB::table('postres')->insert([

            'nombre'=> 'mazamorra',
            'descripcion'=>'La mazamorra más conocida y consumida en el Perú es la limeña mazamorra morada',
            'url'=> '\\\\',

        ]);
        DB::table('lugar_hora')->insert([

            'direccion'=> 'Avenida Mariscal Castilla #31',
            'Hora'=>'16:40:00',

        ]);
    }
}
