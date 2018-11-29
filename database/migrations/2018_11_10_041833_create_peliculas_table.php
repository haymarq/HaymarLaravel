<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagenP',255);
            $table->string('Nombre',150);
            $table->string('Descripcion',255);
            $table->date('Estreno');
            $table->enum('Genero', ['Accion', 'Comedia', 'Terror', 'Romance', 'Drama']);
            $table->string('Director',60);
            $table->enum('Clase', ['A', 'B', 'C', 'D']);
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
        Schema::dropIfExists('peliculas');
    }
}
