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
            $table->double('subtotal');
            $table->double('total');
            $table->date('fecha');
            $table->string('factura');
            $table->integer('idMetodoPago')->unsigned();
            $table->integer('idPromocion')->unsigned();
            $table->integer('idPersona')->unsigned();
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
