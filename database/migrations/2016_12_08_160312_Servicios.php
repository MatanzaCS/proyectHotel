<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('habitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomservicio');
            $table->string('fecha');
            $table->string('Precio_Servicio');
            $table->string('TipoServicio_id');
            $table->string('reserva_id');
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
        //
    }
}
