<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSumillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumillas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion')->nullable();
            $table->date('fecha')->nullable();
            $table->enum('estado',['vigente','expirado'])->default('vigente');

            $table->integer('curso_id')->unsigned()->index();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            
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
        Schema::dropIfExists('sumillas');
    }
}
