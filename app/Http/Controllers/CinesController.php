<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Cines;
use App\Http\Requests\CinesRequest;
use Illuminate\Support\Facades\Storage;

class CinesController extends Controller
{
    public function index()
    {
    	$cines=Cines::orderBy('id','DESC')->paginate();
    	$num=1;
    	return view('vendor.adminlte.cines.index', compact('cines'), compact('num'));
    }


    public function create()
    {
    	return view('vendor.adminlte.cines.create');
    }


    public function store(CinesRequest $request)
    {
    	$cines= Cines::create($request->all());

        if ($request->file('imagenC')) {
            $path = Storage::disk('public')->put('imagenesC', $request->file('ImagenC'));
            $cines->fill(['imagenC' => asset($path)])->save();
        }

        return redirect()->route('cines.index')->with('info', 'El cine ha sido registrado');
    }


    public function edit($id)
    {
    	$cines=Cines::find($id);
    	return view('vendor.adminlte.cines.edit', compact('cines'));
    }


    public function update(CinesRequest $request, $id)
    {
    	$cines= Cines::find($id);
        $cines->fill($request->all())->save();

        if ($request->file('imagenC')) {
            $path = Storage::disk('public')->put('imagenesC', $request->file('imagenC'));
            $cines->fill(['imagenC' => asset($path)])->save();
        }

        return redirect()->route('cines.index')->with('info', 'El cine ha sido actualizado');
    }


    public function show($id)
    {
    	$cines=Cines::find($id);
    	return view('vendor.adminlte.cines.show', compact('cines'));
    }


    public function destroy($id)
    {
    	$cines=Cines::find($id);
    	$cines->delete();

    	return back()->with('info', 'El cine ha sido eliminado');
    }
}
