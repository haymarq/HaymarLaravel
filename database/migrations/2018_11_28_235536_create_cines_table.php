<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagenC',255);
            $table->string('nombre',150);
            $table->string('ubicacion',100);
            $table->string('contacto',11);
            $table->string('pagina',100);
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
        Schema::dropIfExists('cines');
    }
}
