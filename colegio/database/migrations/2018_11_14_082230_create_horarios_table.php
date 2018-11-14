<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            
            
            $table->unsignedInteger('id_profesor');
            $table->unsignedInteger('id_asignatura');
            
            $table->char('turno',60);
            $table->index(['id','id_profesor','id_asignatura']);

                
                $table->foreign('id_profesor')->references('id')->on('profesors');
                $table->foreign('id_asignatura')->references('id')->on('asignaturas');
                
            
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
        Schema::dropIfExists('horarios');
    }
}
