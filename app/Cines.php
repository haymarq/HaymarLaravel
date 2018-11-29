<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cines extends Model
{
    protected $fillable = [
    	'imagenC', 'nombre', 'ubicacion', 'contacto', 'pagina',
    ];
}
