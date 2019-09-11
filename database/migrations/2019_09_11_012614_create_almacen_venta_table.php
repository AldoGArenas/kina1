<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_venta', function (Blueprint $table) {
            $table->unsignedBigInteger('idAlmacen');
            $table->unsignedBigInteger('idVenta');
            $table->foreign('idAlmacen')->references('id')->on('almacen');
            $table->foreign('idVenta')->references('id')->on('venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacen_venta');
    }
}
