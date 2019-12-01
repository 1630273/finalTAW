<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_persona');
            $table->string('email',30)->unique();
            $table->string('password');
            $table->integer('condicion')->defult(1);
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
