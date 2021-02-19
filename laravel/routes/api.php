<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/user', [UserController::class, 'index']);
//Roles
Route::get('/rol', [RolController::class, 'index']);
//Productos
Route::get('/producto', [ProductoController::class, 'index']);
//Pedidos
Route::get('/pedido', [PedidoController::class, 'index']);
