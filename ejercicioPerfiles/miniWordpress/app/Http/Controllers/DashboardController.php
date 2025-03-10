<?php

namespace App\Http\Controllers;

use App\Models\Perfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $perfil = Perfile::where('usuario_id', Auth::id())->get();
        return view('dashboard', compact('perfil'));
    }

    // funcion para bsucar
    public function buscarCv(Request $request)
    {
        $perfil = Perfile::where('nombre_completo', 'like', '%' . $request->nombre_completo. '%')->get();
        if ($perfil) {
            return view('dashboard', compact('perfil'));
        } else {
            return view('dashboard');
        }
    }
}
