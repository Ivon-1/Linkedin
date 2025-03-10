<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // devolvemos vista principal
        $usuario = Auth::user();
        $experiencia = Experiencia::where('usuario_id', Auth::id());
        return view('layouts.gestionarExperiencia', compact('experiencia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $experiencia = new Experiencia();
        $experiencia->usuario_id = Auth::id(); // autorizar usuario por id
        $experiencia->empresa = $request->empresa;
        $experiencia->puesto = $request->puesto;
        $experiencia->fecha_inicio = $request->fecha_inicio;
        $experiencia->fecha_fin = $request->fecha_fin;
        $experiencia->descripcion = $request->descripcion;
        // guardamos
        $experiencia->save();
        return redirect()->route('dashboard')->with('success', 'Experiencia' . $experiencia->puesto . 'Añadido con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $userId= Auth::id(); // id del usuario logado
        $experiencia = Experiencia::where('usuario_id', $userId)->findOrFail($id);
        $experiencia->empresa = $request->empresa;
        $experiencia->puesto = $request->puesto;
        $experiencia->fecha_inicio = $request->fecha_inicio;
        $experiencia->fecha_fin = $request->fecha_fin;
        $experiencia->descripcion = $request->descripcion;
        $experiencia->save();
        // actualizamos campos
        $experiencia->update();
        // vista redireccionar a dashboard editados los campos
        return redirect('dashboard')->with('success', 'Experiencia'. $experiencia->empresa . 'Editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy() {}

    /** funcion para mostrar formulario de editar experiencia */
    public function mostrarFormularioEditar(){
        $userId = Auth::id();
        $experiencia = Experiencia::where('usuario_id', $userId)->first(); // QUE DEVUELVA EL PRIMERO . DABA ERROR SIN EL FIRST
        return view('.layouts.editarExperiencia', compact('experiencia'));
    }
}
