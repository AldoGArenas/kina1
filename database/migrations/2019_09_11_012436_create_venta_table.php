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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idDescuento');
            $table->string('comprador');
            $table->string('descripcion');
            $table->double('total');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idDescuento')->references('id')->on('descuento');
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
