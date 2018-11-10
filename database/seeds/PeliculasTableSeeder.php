<?php

use Illuminate\Database\Seeder;

class PeliculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('peliculas')->insert([
    		'Nombre'        => 'Batman',
            'Descripcion'   => 'Pelicula de super héroes',
    		'Estreno'       => '2008-10-23',
    		'Genero'        => 'Accion',
            'Director'      => 'Christofer Nolan',
            'Clase'         => 'B',
    	]);
    	DB::table('peliculas')->insert([
            'Nombre'        => 'Infinity War',
    		'Descripcion'   => 'Pelicula de super héroes',
    		'Estreno'       => '2018-06-21',
            'Genero'        => 'Accion',
            'Director'      => 'Hermanos Russo',
            'Clase'         => 'A',
    	]);
    	DB::table('peliculas')->insert([
            'Nombre'        => 'Bajo la misma estrella',
    		'Descripcion'   => 'Pelicula sobre el cáncer',
    		'Estreno'       => '2016-08-18',
            'Genero'        => 'Romance',
            'Director'      => 'Jhon Green',
            'Clase'         => 'A',
    	]);
    	DB::table('peliculas')->insert([
            'Nombre'        => 'IT',
    		'Descripcion'   => 'Pelicula de terror con un payaso',
    		'Estreno'       => '2018-07-12',
            'Genero'        => 'Terror',
            'Director'      => 'Stephen King',
            'Clase'         => 'B',
    	]);
    	DB::table('peliculas')->insert([
            'Nombre'        => 'Minions',
    		'Descripcion'   => 'Pelicula sobre los minions',
    		'Estreno'       => '2018-01-28',
            'Genero'        => 'Comedia',
            'Director'      => 'Illumination',
            'Clase'         => 'A',
    	]);
    }
}
