<?php

use Illuminate\Database\Seeder;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_unidad')->insert([

            ['id' => 1, 'nombre' => 'PIEZA'],
            ['id' => 2, 'nombre' => 'KILOGRAMO'],
            ['id' => 3, 'nombre' => 'GRAMO'],
            ['id' => 4, 'nombre' => 'METRO'],
            ['id' => 5, 'nombre' => 'CENTIMETRO'] ,
            ['id' => 6, 'nombre' => 'LITRO'] ,
            ['id' => 7, 'nombre' => 'MILILITRO']        
            ]);
    }
}
