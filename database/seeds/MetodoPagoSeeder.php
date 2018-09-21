<?php

use Illuminate\Database\Seeder;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_metodo_pago')->insert([

            ['id' => 1, 'tipo' => 'CHEQUE'],
            ['id' => 2, 'tipo' => 'TARJETA DE DEBITO'],
            ['id' => 3, 'tipo' => 'TARJETA DE CREDITO'],
            ['id' => 4, 'tipo' => 'MONEDERO ELECTRÓNICO'],
            ['id' => 5, 'tipo' => 'VALES DE DESPENSA'] ,
            ['id' => 6, 'tipo' => 'EFECTIVO'] ,
            ['id' => 7, 'tipo' => 'PAYPAL']        
            ]);
    
        }
}
