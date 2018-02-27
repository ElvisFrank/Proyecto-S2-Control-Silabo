<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSesionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sesiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema');
            $table->integer('id_unidad')->unsigned();
            $table->char('val_docente',4);
            $table->char('val_delegado',4);
            $table->date('fecha');
            $table->foreign('id_unidad')->references('id')->on('t_unidades');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_sesiones');
    }
}
