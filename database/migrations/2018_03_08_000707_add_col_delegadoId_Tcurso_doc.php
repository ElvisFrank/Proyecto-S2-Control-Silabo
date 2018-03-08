<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColDelegadoIdTcursoDoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curso_docente', function (Blueprint $table) {
            $table->integer('delegado_id')->unsigned()->nullable()->after('silabo_id');
            $table->foreign('delegado_id')->references('id')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso_docente', function (Blueprint $table) {
            //
        });
    }
}
