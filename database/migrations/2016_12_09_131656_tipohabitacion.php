<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipohabitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipohabitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('precio_habitacion');
            $table->string('foto');
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
