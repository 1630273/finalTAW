<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_creador');
            $table->string('titulo');
            $table->string('cliente');
            $table->double('presupuesto');
            $table->integer('progreso');
            $table->string('descripcion');
            $table->boolean('condicion')->default(1);
            $table->date('f_inicio');
            $table->date('f_final');
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
        Schema::dropIfExists('proyectos');
    }
}