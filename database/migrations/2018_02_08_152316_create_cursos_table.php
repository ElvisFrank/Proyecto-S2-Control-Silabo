<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',10);
            $table->string('nombre',100);
            $table->integer('creditos');
            $table->integer('hora_teorica');
            $table->integer('hora_practica');
            $table->string('area',254);
            $table->string('ciclo',4);
            $table->enum('caracter',['obligatorio','electivo']);
            $table->nullableTimestamps();
        });

        /*Para la relacion de cursos con sus requerimientos...*/
        Schema::create('curso_requisito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->integer('curso_requisito_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('curso_requisito_id')->references('id')->on('cursos')->onDelete('cascade');
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
        Schema::dropIfExists('cursos');
    }
}
