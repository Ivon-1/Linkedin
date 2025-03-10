<?php

namespace App\Http\Controllers;

use App\Models\Habilidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabilidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $usuario = Auth::user();
        $habilidades = Habilidade::where('usuario_id', $usuario->id)->get();
        return view('layouts.añadirHabilidades', compact('habilidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $habilidad = new Habilidade();
        $habilidad->usuario_id = Auth::id();
        $habilidad->nombre_habilidad = $request->nombre_habilidad;
        $habilidad->nivel = $request->nivel;
        // guardamos
        $habilidad->save();
        return redirect('dashboard')->with('success', 'Habilidad' . $habilidad->nombre_habilidad . 'añadida con exito');
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
