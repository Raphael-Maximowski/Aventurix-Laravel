<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExploradorAPIController;
use App\Http\Controllers\InventoryAPIController;
use App\Http\Controllers\LocationAPIController;
use App\Http\Controllers\TradeAPIController;
use App\Http\Controllers\Api\AuthController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']); // Register
Route::post('/login', [AuthController::class, 'login']); // Login
Route::get('/relatorio/{id}', [InventoryAPIController::class, 'relatorio']); // Relatorio


// Grupo de Rotas Privadas
Route::group(['prefix' => 'explorers', 'middleware' => 'auth:sanctum'], function() {
//Explorer
Route::get('/', [ExploradorAPIController::class, 'index']); // Ok
Route::post('/create', [ExploradorAPIController::class, 'create']); // Ok
Route::get('/{id}', [ExploradorAPIController::class, 'show']); // Ok

//Location
route::get('/{id}/history', [LocationAPIController::class, 'index']); // Ok
Route::patch('/{id}/edit', [LocationAPIController::class, 'edit']); // Ok
Route::post('/{id}/createloc', [LocationAPIController::class, 'create']); // OK

// Inventário
Route::get('/{id}/inventory', [InventoryAPIController::class, 'show']); // Ok
Route::post('/{id}/inventory', [InventoryAPIController::class, 'create']); // Ok

//Trade
Route::patch('/{id}/{item1}/inventory/partner/{id2}/{item2}', [TradeAPIController::class, 'edit']); // OK
});
