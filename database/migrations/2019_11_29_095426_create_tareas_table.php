<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_actividad');
            $table->string('descripcion');
            $table->date('f_inicio');
            $table->date('f_final');
            $table->integer('tipo_factura');
            $table->double('precio');
            $table->integer('status');                       
            $table->boolean('condicion')->default(1);
            $table->foreign('id_actividad')->references('id')->on('actividades')->onDelete('cascade');
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
        Schema::dropIfExists('tareas');
    }
}
