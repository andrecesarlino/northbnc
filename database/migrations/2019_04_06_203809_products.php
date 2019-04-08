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
        $table->Integer('quantiade');
        $table->float('precoUnitario');
        $table->Integer('UnidadeEmEstoque');
        $table->Integer('UnidadeEmOrdem');
        $table->Integer('NivelDeReposicao');
        $table->string('descontinuado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
