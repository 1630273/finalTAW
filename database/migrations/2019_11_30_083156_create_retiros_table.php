<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_metodoPago');
            $table->double('monto');
            $table->boolean('condicion');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('id_metodoPago')->references('id')->on('metodos_pago')->onDelete('cascade');
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
        Schema::dropIfExists('retiros');
    }
}
