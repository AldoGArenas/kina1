<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_subcategoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('idCategoria');
            $table->timestamps();

            $table->foreign('idCategoria')->references('id')->on('cat_categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_subcategoria');
    }
}
