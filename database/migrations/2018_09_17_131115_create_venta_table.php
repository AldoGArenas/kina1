<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
            $table->double('subtotal', 200);
            $table->double('total', 50);
            $table->date('fecha', 50);
            $table->string('factura');
            $table->integer('idMetodoPago', 100);
            $table->integer('idPromocion', 20);
            $table->integer('idPersona', 50);
            $table->timestamps();


            $table->foreign('idMetodoPago')->references('id')->on('cat_metodo_pago')->onDelete('cascade');
            $table->foreign('idPromocion')->references('id')->on('promocion')->onDelete('cascade');
            $table->foreign('idPersona')->references('id')->on('persona')->onDelete('cascade');

         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
