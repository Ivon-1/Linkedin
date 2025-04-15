<?php

namespace App\Http\Controllers;

use App\Models\Perfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class perfiles extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // devolver formulario como pagina principal
        $usuario = Auth::user();
        $perfil = Perfile::where('usuario_id', $usuario->id)->first(); // ESTE ERA EL FALLO
        return view('layouts.gestionPerfiles', compact('perfil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validacion me daba error 

        // crea el perfil
        $perfil = new Perfile();
        $perfil->usuario_id = Auth::id();
        $perfil->profesion = $request->profesion;
        $perfil->nombre_completo = Auth::user()->name; // tabla users
        $perfil->telefono = $request->telefono;
        $perfil->correo_electronico = Auth::user()->email; // tabla users
        $perfil->sobre_mi = $request->sobre_mi;
        $perfil->sitio_web = $request->sitio_web;
        $perfil->linkedin = $request->linkedin;
        $perfil->github = $request->github;
        // guardamos
        $perfil->save();
        // redireccionamos vista dashboard
        return redirect()->route('dashboard')->with('success', 'Perfil ' . $perfil->profesion . ' agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show() {}

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
        // eliminar perfil por id
        $perfil = Perfile::findOrFail($id);
        $perfil->delete();
        return redirect('dashboard')->with('success', 'perfil eliminado con exito');
    }
}
