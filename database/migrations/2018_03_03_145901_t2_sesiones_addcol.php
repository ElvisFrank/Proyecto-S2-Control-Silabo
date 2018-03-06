<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class T2SesionesAddcol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_sesiones', function (Blueprint $table) {
            $table->string('obs_docente')->nullable();
            $table->string('obs_delegado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_sesiones', function (Blueprint $table) {
            //
        });
    }
}
