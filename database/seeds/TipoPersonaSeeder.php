<?php

use Illuminate\Database\Seeder;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipo_persona')->insert([

            ['id' => 1, 'tipo' => 'ADMINISTRADOR'],
            ['id' => 2, 'tipo' => 'CAJERO'],
            ['id' => 3, 'tipo' => 'PROVEEDOR'],
            ['id' => 4, 'tipo' => 'CLIENTE'],
            ['id' => 5, 'tipo' => 'EMPLEADO'] ,
           
            ]);
    }
}
