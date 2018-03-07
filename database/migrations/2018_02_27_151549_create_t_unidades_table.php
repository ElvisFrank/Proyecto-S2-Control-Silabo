<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_unidad')->nullable();
            $table->integer('id_silabo')->unsigned();
            $table->foreign('id_silabo')->references('id')->on('t_silabos')->ondelete('cascade');
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
        Schema::dropIfExists('t_unidades');
    }
}
