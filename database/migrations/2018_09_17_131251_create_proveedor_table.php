<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEmpresa')->unsigned();
            $table->integer('idMarca')->unsigned();
            $table->integer('idPersona')->unsigned();
            $table->timestamps();

            $table->foreign('idEmpresa')->references('id')->on('cat_empresa')->onDelete('cascade');
            $table->foreign('idMarca')->references('id')->on('cat_marca')->onDelete('cascade');
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
        Schema::dropIfExists('proveedor');
    }
}
