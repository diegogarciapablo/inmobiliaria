<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->integer('valor');
            $table->string('ci_cliente');
            $table->string('descripcion');
            $table->date('fecha_hoy');
            $table->date('fecha_lim');
            $table->timestamps();
            $table->foreign('ci_cliente')->references('ci')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
