<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\usuarioController;
use App\Http\Controllers\api\movimientoController;
use App\Http\Controllers\api\criptomonedaController;


//  Usuarios
Route::get('/usuarios', [usuarioController::class, 'index']);
Route::get('/usuarios/{id}', [usuarioController::class, 'show']);
Route::delete('/usuarios/eliminar/{id}', [usuarioController::class, 'destroy']);
Route::post('/usuarios/registrar', [usuarioController::class, 'store']);
Route::patch('/usuarios/actualizar/{id}', [usuarioController::class, 'update']);

// Movimientos
Route::get('/movimientos', [movimientoController::class, 'index']);
Route::get('/movimientos/{usuario_id}', [movimientoController::class, 'show']);
Route::post('/movimientos/registrar', [movimientoController::class, 'store']);

// Criptomonedas
Route::get('/criptos', [criptomonedaController::class, 'index']);
Route::get('/criptos/{id}', [criptomonedaController::class, 'show']);

// Transacciones
Route::post('/comprar/{cripto_id}', [transaccionController::class, 'comprar']);
Route::post('/vender/{cripto_id}', [transaccionController::class, 'vender']);

// Comentarios
Route::get('/criptos/comentarios/{cripto_id}', [comentarioController::class, 'index']);
Route::post('/criptos/comentarios/{cripto_id}', [comentarioController::class, 'store']);
