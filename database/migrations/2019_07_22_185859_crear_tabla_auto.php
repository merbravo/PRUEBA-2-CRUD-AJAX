<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('auto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('marca')->unsigned();
            $table->string('modelo');
            $table->string('placa');
            $table->string('color');
            $table->string('precio');
            $table->timestamps();
            $table->foreign('marca')->references('id')->on('marca');
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
        Schema::dropIfExists('auto');
    }
}
