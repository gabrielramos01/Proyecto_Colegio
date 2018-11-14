<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_nivels', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_asig_nivel',60);
            $table->unsignedInteger('id_asignatura');
            $table->unsignedInteger('id_nivel_grado');
            
            $table->index(['id','id_asignatura','id_nivel_grado']);

            
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
        Schema::dropIfExists('asignatura_nivels');
    }
}
