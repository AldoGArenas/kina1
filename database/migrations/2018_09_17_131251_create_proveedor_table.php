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
            $table->double('idEmpresa', 50);
            $table->date('idMarca', 50);
            $table->string('idPersona');
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
