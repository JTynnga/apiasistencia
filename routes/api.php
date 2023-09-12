<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DocenteController;
use App\Models\Alumno;
use App\Models\Docente;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// rutas para alumnos
Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/alumnos/crear', [AlumnoController::class, 'create']);
//Route::post('/alumnos/crear', [AlumnoController::class, 'create']);     (probar con el postman)
Route::get('/alumnos/{id}', [AlumnoController::class, 'getById']);
//Route::get('/alumnos?id={id}', [AlumnoController::class, 'getById']);      (no funciona)
Route::put('/alumnos/{id}', [AlumnoController::class, 'update']);
Route::put('/alumnos/{id}', [AlumnoController::class, 'destroy']);

// rutas para docentes
Route::get('/docentes', [DocenteController::class, 'index']);
Route::get('/docentes/crear', [DocenteController::class, 'create']);
//Route::post('/docentes/crear', [DocenteController::class, 'create']);     (probar con el postman)
Route::get('/docentes/{id}', [DocenteController::class, 'getById']);
//Route::get('/docentes?id={id}', [DocenteController::class, 'getById']);      (no funciona)
Route::put('/docentes/{id}', [DocenteController::class, 'update']);
Route::put('/docentes/{id}', [DocenteController::class, 'destroy']);

// rutas para cursos
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/crear', [CursoController::class, 'create']);
//Route::post('/cursos/crear', [CursoController::class, 'create']);     (probar con el postman)
Route::get('/cursos/{id}', [CursoController::class, 'getById']);
//Route::get('/cursos?id={id}', [CursoController::class, 'getById']);      (no funciona)
Route::put('/cursos/{id}', [CursoController::class, 'update']);
Route::put('/cursos/{id}', [CursoController::class, 'destroy']);


/*
Route::controller(AlumnoController::class)->group(function () {
    Route::get('/alumno', 'index');
    Route::post('/crear-alumno', 'store');
    Route::get('/alumno/{id}', 'show');
    Route::put('/alumno/{id}', 'update');
    Route::put('/alumno/{id}', 'destroy');
});

Route::controller(DocenteController::class)->group(function () {
    Route::get('/docente', 'index');
    Route::post('/crear-docente', 'store');
    Route::get('/docente/{id}', 'show');
    Route::put('/docente/{id}', 'update');
    Route::put('/docente/{id}', 'destroy');
});


Route::controller(CursoController::class)->group(function () {
    Route::get('/curso', 'index');
    Route::post('/crear-curso', 'store');
    Route::get('/curso/{id}', 'show');
    Route::put('/curso/{id}', 'update');
    Route::put('/curso/{id}', 'destroy');
}); */