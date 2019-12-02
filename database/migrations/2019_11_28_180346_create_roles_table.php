<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });

        DB::table('roles')->insert(array('nombre'=>'Administrador'));
        DB::table('roles')->insert(array('nombre'=>'Proyect_Manager'));
        DB::table('roles')->insert(array('nombre'=>'Colaborador'));
        DB::table('roles')->insert(array('nombre'=>'Cliente'));
       
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
