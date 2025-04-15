<?php

namespace App\Http\Controllers;

use App\Models\Educacione;
use App\Models\Experiencia;
use App\Models\Habilidade;
use App\Models\Perfile;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class miCvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mostramos la vista del cv
        $usuario = Auth::user();
        $perfil = Perfile::where('usuario_id', $usuario->id)->first();
        $experiencia = Experiencia::where('usuario_id', $usuario->id)->get();
        $educacion = Educacione::where('usuario_id', $usuario->id)->get();
        $habilidad = Habilidade::where('usuario_id', $usuario->id)->get();
        $proyecto = Proyecto::where('usuario_id', $usuario->id)->get();
        return view('layouts.miCv', compact('perfil', 'experiencia', 'educacion', 'habilidad', 'proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
