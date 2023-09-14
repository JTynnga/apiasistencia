<?php

use App\Http\Controllers\PersonaController;
use App\Models\Usuario;
use App\Models\Role;
use App\Models\Persona;
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
Route::controller(PersonaController::class)->group(function () {
    Route::get('/personas', 'index');
    Route::post('/crear-alumno', 'store');
    Route::get('/personas/{id}', 'show');
    Route::put('/personas/{id}', 'update');
    Route::put('/personas/{id}', 'destroy');
});




/*// rutas para Personas
Route::get('/personas', [PersonaController::class, 'index']);
Route::post('/personas/crear', [PersonaController::class, 'create']);
Route::get('/Personas/{id}', [PersonaController::class, 'getById']);
Route::put('/Personas/{id}', [PersonaController::class, 'update']);
Route::put('/Personas/{id}', [PersonaController::class, 'destroy']);
/*
// rutas para Usuarios
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/Usuarios/crear', [UsuarioController::class, 'create']);
Route::get('/Usuarios/{id}', [UsuarioController::class, 'getById']);
Route::put('/Usuarios/{id}', [UsuarioController::class, 'update']);
Route::put('/Usuarios/{id}', [UsuarioController::class, 'destroy']);

// rutas para roles
Route::get('/roles', [RoleController::class, 'index']);
Route::get('/roles/crear', [RoleController::class, 'create']);
Route::get('/roles/{id}', [RoleController::class, 'getById']);
Route::put('/roles/{id}', [RoleController::class, 'update']);
Route::put('/roles/{id}', [RoleController::class, 'destroy']);
*/