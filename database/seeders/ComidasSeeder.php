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
        DB::table('comidas')->insert([

            'nombre'=> 'Locro',
            'descripcion'=>'El locro (del quechua ruqru o luqru) ​ es una especie de guiso de origen prehispánico y preincaico, típico de varios pueblos andinos, a base de zapallo',
            'url'=> '\\\\',

        ]);
        DB::table('comidas')->insert([

            'nombre'=> 'Ají de gallina',
            'descripcion'=>'
            El ají de gallina es un plato típico de la gastronomía peruana, concretamente de la costa',
            'url'=> '\\\\',

        ]);
        DB::table('comidas')->insert([

            'nombre'=> 'Arroz chaufa',
            'descripcion'=>'El arroz chaufa se ha convertido en uno de los platos más solicitados en el Perú. Sus orígenes se remontan al siglo XIX, donde surge a partir de una fusión de culturas',
            'url'=> '\\\\',

        ]);
        DB::table('bebidas')->insert([

            'nombre'=> 'Coca-Cola',
            'descripcion'=>'Coca-Cola, conocida comúnmente como Coca en muchos países hispanohablantes, es una bebida gaseosa y refrescante',
            'url'=> '\\\\',

        ]);
        DB::table('bebidas')->insert([

            'nombre'=> 'Inca Kola',
            'descripcion'=>'Inca Kola es una bebida gaseosa peruana. Tiene un sabor dulce y un color amarillo-dorado. ',
            'url'=> '\\\\',

        ]);
        DB::table('bebidas')->insert([

            'nombre'=> 'Kola Escocesa',
            'descripcion'=>'Kola Escocesa es un refresco peruano, marca de la compañía Yura, ubicada en la ciudad de Yura',
            'url'=> '\\\\',

        ]);
        DB::table('bebidas')->insert([

            'nombre'=> 'Fanta',
            'descripcion'=>'Fanta es una marca de refresco con gas, propiedad de la compañía Coca-Cola',
            'url'=> '\\\\',

        ]);
        DB::table('postres')->insert([

            'nombre'=> 'mazamorra',
            'descripcion'=>'La mazamorra más conocida y consumida en el Perú es la limeña mazamorra morada',
            'url'=> '\\\\',

        ]);
        DB::table('postres')->insert([

            'nombre'=> 'Gelatina',
            'descripcion'=>'',
            'url'=> '\\\\',

        ]);
        DB::table('postres')->insert([

            'nombre'=> 'Gelatina - Fresa',
            'descripcion'=>'',
            'url'=> '\\\\',

        ]);
        DB::table('postres')->insert([

            'nombre'=> 'Helado de Fresa',
            'descripcion'=>'',
            'url'=> '\\\\',

        ]);
        DB::table('lugar_hora')->insert([

            'direccion'=> 'Avenida Mariscal Castilla #31',
            'Hora'=>'16:40:00',

        ]);
    }
}
