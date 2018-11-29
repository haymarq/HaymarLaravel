<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $fillable = [
    	'imagenP', 'Nombre', 'Descripcion', 'Estreno', 'Genero', 'Director', 'Clase',
    ];
}
