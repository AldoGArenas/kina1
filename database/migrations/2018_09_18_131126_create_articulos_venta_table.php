<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->double('costoUnidad');
            $table->double('cantidad');
            $table->double('total');
            $table->integer('idVenta')->unsigned();
            $table->integer('idPromocion')->unsigned();
            $table->integer('idProducto')->unsigned();

            $table->foreign('idVenta')->references('id')->on('venta')->onDelete('cascade');
            $table->foreign('idPromocion')->references('id')->on('promocion')->onDelete('cascade');
            $table->foreign('idProducto')->references('id')->on('producto')->onDelete('cascade');

          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_venta');
    }
}
