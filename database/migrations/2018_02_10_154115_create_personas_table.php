<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('codigo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->nullableTimestamps();
        });
                /*Para la relacion de cursos con sus requerimientos...*/
        Schema::create('persona_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('personas');
    }
}
