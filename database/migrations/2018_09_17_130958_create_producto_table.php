<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fechaAlta');
            $table->double('costoCompra');
            $table->double('costoVenta');
            $table->double('stock');
            $table->string('modelo')->nullable();
            $table->integer('idUnidad')->unsigned();
            $table->integer('idMarca')->unsigned();
            $table->integer('idCategoria')->unsigned();
            $table->integer('idSubcategoria')->unsigned();
            $table->integer('idPromocion')->unsigned()->nullable();
            $table->integer('idImagen')->unsigned()->nullable();

            $table->foreign('idUnidad')->references('id')->on('cat_unidad')->onDelete('cascade');
            $table->foreign('idMarca')->references('id')->on('cat_marca')->onDelete('cascade');
            $table->foreign('idCategoria')->references('id')->on('cat_categoria')->onDelete('cascade');
            $table->foreign('idPromocion')->references('id')->on('promocion')->onDelete('cascade');
            $table->foreign('idImagen')->references('id')->on('imagen')->onDelete('cascade');

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
        Schema::dropIfExists('producto');
    }
}
