<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio')->insert([
            'costo'=>30,
            'descripcion'=>'Precio para gozus',
        ]);
    }
}
