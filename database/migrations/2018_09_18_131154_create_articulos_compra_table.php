<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_compra', function (Blueprint $table) {
            $table->increments('id');
            $table->double('costoUnidad');
            $table->double('cantidad');
            $table->double('total');
            $table->integer('idCompra')->unsigned();
            $table->integer('idProducto')->unsigned();

            $table->foreign('idCompra')->references('id')->on('venta')->onDelete('cascade');
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
        Schema::dropIfExists('articulos_compra');
    }
}
