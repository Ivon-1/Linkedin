<?php

namespace App\Http\Controllers;

use App\Models\Educacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuario = Auth::user();
        $educacion = Educacione::where('usuario_id', $usuario->id)->get();
        // formulario agregar educacion
        return view('layouts.educacionFormacion', compact('educacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $educacion = new Educacione();
        $educacion->usuario_id = Auth::id();
        $educacion->institucion = $request->institucion;
        $educacion->titulo_obtenido = $request->titulo_obtenido;
        $educacion->fecha_inicio = $request->fecha_inicio;
        $educacion->fecha_fin = $request->fecha_fin;
        // guardamos
        $educacion->save();
        return redirect()->route('dashboard')->with('success', 'Educacion' . $educacion->institucion . 'Añadida con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
