<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudRetiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_retiro', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_metodo');
            $table->double('cantidad');
            $table->date('fecha');
            $table->integer('status');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_proyecto')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('id_metodo')->references('id')->on('metodos_pago')->onDelete('cascade');
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
        Schema::dropIfExists('solicitud_retiro');
    }
}
