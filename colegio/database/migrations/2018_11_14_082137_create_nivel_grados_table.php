<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_grados', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_nivel_grado',60);
            $table->unsignedInteger('id_alumno');
            $table->char('nivel',60);
            $table->char('grado',60);
            
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
        Schema::dropIfExists('nivel_grados');
    }
}
