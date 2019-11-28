<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_persona');
            $table->string('correo');
            $table->string('contrasena');
            $table->boolean('condicion')->default(1);
            $table->foreign('id_rol')->references('id_rol')->on('roles');
            $table->foreign('id_persona')->references('id_persona')->on('personas')->onDelete('cascade');
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
        Schema::dropIfExists('usuarios');
    }
}
