<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuario = Auth::user();
        $proyecto = Proyecto::where('usuario_id', $usuario->id)->get();
        return view('layouts.añadirProyectos', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $proyecto = new Proyecto();
        $proyecto->usuario_id = Auth::id();
        $proyecto->titulo = $request->titulo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->enlace_proyecto = $request->enlace_proyecto;
        // guardamos
        $proyecto->save();
        return redirect('dashboard')->with('success', 'Proyecto' . $proyecto->titulo . 'Añadido con exito');
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
