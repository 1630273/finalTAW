<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodosPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodos_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            // $table->string('imagen');
            $table->double('min_cant');
            $table->double('max_cant');
            $table->double('cambio');
            $table->double('moneda');
            $table->date('dias_habiles');
            $table->integer('status');
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
        Schema::dropIfExists('metodos_pago');
    }
}
