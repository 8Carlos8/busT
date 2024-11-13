<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('/register', [UserController::class, 'store']);  // Crear usuario
Route::get('/users', [UserController::class, 'index']);       // Consultar todos los usuarios
Route::get('/users/{id}', [UserController::class, 'show']);   // Consultar un usuario específico
Route::delete('/users/{id}', [UserController::class, 'destroy']); // Eliminar usuario
Route::post('/login', [UserController::class, 'login']);      // Iniciar sesión

// Rutas protegidas con 'auth:sanctum'
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UserController::class, 'index']);       // Consultar todos los usuarios
    Route::get('/users/{id}', [UserController::class, 'show']);   // Consultar un usuario específico
    Route::delete('/users/{id}', [UserController::class, 'destroy']); // Eliminar usuario
    
    // Ruta adicional protegida para obtener datos del usuario autenticado
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});