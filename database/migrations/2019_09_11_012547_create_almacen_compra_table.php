<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_compra', function (Blueprint $table) {
            $table->unsignedBigInteger('idAlmacen');
            $table->unsignedBigInteger('idCompra');
            $table->foreign('idAlmacen')->references('id')->on('almacen');
            $table->foreign('idCompra')->references('id')->on('compra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacen_compra');
    }
}
