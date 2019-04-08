<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
        $table->string('nameProduct');
        $table->Integer('quantidade');
        $table->float('precoUnitario');
        $table->Integer('UnidadeEmEstoque');
        $table->Integer('UnidadeEmOrdem');
        $table->Integer('NivelDeReposicao');
        $table->string('descontinuado');
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
        //
    }
}
