<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\HabilidadesController;
use App\Http\Controllers\miCvController;
use App\Http\Controllers\perfiles;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectosController;
use App\Models\Experiencia;
use App\Models\Habilidade;
use App\Models\Perfile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// PASARLe EL CONTROLADOR DE PERFILES AQUI  CON EL SHOW PARA NO DUPLICAR RUTA
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [DashboardController::class, 'buscarCv'])->name('localizar');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// rutas para los perfiles
Route::get('/gestionPerfiles', [perfiles::class, 'index'])->name('gestionPerfiles');
Route::post('/agregar', [perfiles::class, 'store'])->name('agregarPerfil');

// ruta para mostrar el curriculum del usuario
Route::get('/mostrarCv', [miCvController::class, 'index'])->name('mostrarCurriculum');

// rutas experiencia laboral
Route::get('/gestionarExperiencia', [ExperienciaController::class, 'index'])->name('gestionarExperiencia');
Route::post('/agregarExperiencia', [ExperienciaController::class, 'store'])->name('agregarExperiencia');
Route::get('/experiencia/editar', [ExperienciaController::class, 'mostrarFormularioEditar'])->name('formularioEditar');
Route::put('/experiencia/editar/{id}', [ExperienciaController::class, 'update'])->name('editarPorId');

// rutas educacion/formaicon
Route::get('/educacion', [FormacionController::class, 'index'])->name('mostrarFormulario');
Route::post('/educacion/agregar', [FormacionController::class, 'store'])->name('agregarEducacion');

// rutas habilidades
Route::get('/habilidades', [HabilidadesController::class, 'index'])->name('mostrarHabilidades');
Route::post('/agregar/habilidades', [HabilidadesController::class, 'store'])->name('agregarHabilidad');

// rutas proyecto
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('verProyectos');
Route::post('/proyectos/agregar', [ProyectosController::class, 'store'])->name('agregarProyecto');
require __DIR__.'/auth.php';
