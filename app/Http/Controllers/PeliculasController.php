<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;
use App\Http\Requests\PeliculasRequest;

class PeliculasController extends Controller
{
    
    public function index()
    {
    	$peliculas=Peliculas::orderBy('id','DESC')->paginate();
    	$num=1;
    	return view('vendor.adminlte.peliculas.index', compact('peliculas'), compact('num'));
    }


    public function create()
    {
    	return view('vendor.adminlte.peliculas.create');
    }


    public function store(PeliculasRequest $request)
    {
    	$peliculas= new Peliculas;

    	$peliculas->Nombre   = $request->Nombre;
    	$peliculas->Descripcion = $request->Descripcion;
    	$peliculas->Estreno   = $request->Estreno;
    	$peliculas->Genero   = $request->Genero;
    	$peliculas->Director = $request->Director;
    	$peliculas->Clase   = $request->Clase;

    	$peliculas->save();

    	return redirect()->route('peliculas.index')->with('info', 'La pelicula ha sido registrado');
    }


    public function edit($id)
    {
    	$peliculas=Peliculas::find($id);
    	return view('vendor.adminlte.peliculas.edit', compact('peliculas'));
    }


    public function update(PeliculasRequest $request, $id)
    {
    	$peliculas=Peliculas::find($id);

    	$peliculas->Nombre   = $request->Nombre;
    	$peliculas->Descripcion = $request->Descripcion;
    	$peliculas->Estreno   = $request->Estreno;
    	$peliculas->Genero   = $request->Genero;
    	$peliculas->Director = $request->Director;
    	$peliculas->Clase   = $request->Clase;

    	$peliculas->save();

    	return redirect()->route('peliculas.index')->with('info', 'La pelicula ha sido actualizado');
    }


    public function show($id)
    {
    	$peliculas=Peliculas::find($id);
    	return view('vendor.adminlte.peliculas.show', compact('peliculas'));
    }


    public function destroy($id)
    {
    	$peliculas=Peliculas::find($id);
    	$peliculas->delete();

    	return back()->with('info', 'La pelicula ha sido eliminada');
    }
}
