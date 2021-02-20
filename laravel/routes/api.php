<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//users 
Route::get('/users',[UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


//Roles
Route::get('/rols', [RolController::class, 'index']);
Route::post('/rols/create',[RolController::class, 'store']);
Route::get('/rols/{id}', [RolController::class, 'show']);
Route::put('/rols/{id}', [RolController::class, 'update']);
Route::delete('/rols/{id}', [RolController::class, 'destroy']);

//Productos
Route::get('/productos', [ProductoController::class, 'index']);
Route::post('/productos/create', [ProductoController::class, 'store']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

//Pedidos
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::post('/pedidos/create',[PedidoController::class, 'store']);
Route::get('/pedidos/{id}', [PedidoController::class, 'show']);
Route::put('/pedidos/{id}',[PedidoController::class, 'update']);
Route::delete('/pedidos/{id}',[PedidoController::class, 'destroy']);