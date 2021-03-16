<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carta')->insert([

            'comidas_id'=> '1',
            'bebida_id'=>'1',
            'postre_id'=>'1',
            'lugar_hora_id'=>'1',

        ]);
    }
}
