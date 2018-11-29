<?php

use Illuminate\Database\Seeder;

class CinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cines')->insert([
    		'imagenC'     => 'http://localhost:8000/imagenesC/imagen.png',
    		'nombre'      => 'Cinex',
    		'ubicacion'   => 'Maracay',
    		'contacto'    => '04129382323',
    		'pagina'      => 'www.cine.com',
    	]);
    	DB::table('cines')->insert([
    		'imagenC'     => 'http://localhost:8000/imagenesC/imagen.png',
    		'nombre'      => 'Cines Unidos',
    		'ubicacion'   => 'Caracas',
    		'contacto'    => '02443237232',
    		'pagina'      => 'www.cine.com',
    	]);
    	DB::table('cines')->insert([
    		'imagenC'     => 'http://localhost:8000/imagenesC/imagen.png',
    		'nombre'      => 'Cine City',
    		'ubicacion'   => 'La Victoria',
    		'contacto'    => '04164323232',
    		'pagina'      => 'www.cine.com',
    	]);
    	DB::table('cines')->insert([
    		'imagenC'     => 'http://localhost:8000/imagenesC/imagen.png',
    		'nombre'      => 'Cinema',
    		'ubicacion'   => 'Falcon',
    		'contacto'    => '04143233299',
    		'pagina'      => 'www.cine.com',
    	]);
    	DB::table('cines')->insert([
    		'imagenC'     => 'http://localhost:8000/imagenesC/imagen.png',
    		'nombre'      => 'Universal',
    		'ubicacion'   => 'Caracas',
    		'contacto'    => '02442873233',
    		'pagina'      => 'www.cine.com',
    	]);
    }
}
