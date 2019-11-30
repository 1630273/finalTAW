<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_proyecto');
        
            // $table->unsignedBigInteger('id_usuario');
            // $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');           
            
            $table->string('descripcion');
            $table->integer('status');
            $table->foreign('id_proyecto')->references('id')->on('proyectos')->onDelete('cascade');           
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
        Schema::dropIfExists('tickets');
    }
}
