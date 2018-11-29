<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;
use App\Http\Requests\PeliculasRequest;
use Illuminate\Support\Facades\Storage;

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
        $peliculas= Peliculas::create($request->all());

        if ($request->file('imagenP')) {
            $path = Storage::disk('public')->put('imagenesP', $request->file('ImagenP'));
            $peliculas->fill(['imagenP' => asset($path)])->save();
        }

        return redirect()->route('peliculas.index')->with('info', 'La pelicula ha sido registrado');
    }


    public function edit($id)
    {
        $peliculas=Peliculas::find($id);
        return view('vendor.adminlte.peliculas.edit', compact('peliculas'));
    }


    public function update(PeliculasRequest $request, $id)
    {
        $peliculas= Peliculas::find($id);
        $peliculas->fill($request->all())->save();

        if ($request->file('imagenP')) {
            $path = Storage::disk('public')->put('imagenesP', $request->file('imagenP'));
            $peliculas->fill(['imagenP' => asset($path)])->save();
        }

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

        return back()->with('info', 'La pelicula ha sido eliminado');
    }
}
