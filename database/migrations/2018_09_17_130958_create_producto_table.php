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
            $table->string('nombre', 200);
            $table->string('descripcion', 50);
            $table->date('fechaAlta', 50);
            $table->double('costoCompra');
            $table->double('costoVenta', 100);
            $table->double('stock', 20);
            $table->string('modelo', 50)->nullable();
            $table->integer('idUnidad')->unsigned();
            $table->integer('idMarca')->unsigned();
            $table->integer('idCategoria')->unsigned();
            $table->integer('idSubcategoria')->unsigned();
            $table->integer('idPromocion')->nullable();
            $table->integer('idImagen')->nullable();

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
