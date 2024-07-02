<?php

use App\Http\Controllers\ExploradorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Route;

//Index
Route::get('/', [IndexController::class, 'index']);

//Trade
Route::get('/explorers/{id}/inventory/partner', [TradeController::class, 'index']);
Route::get('/explorers/{id}/inventory/partner/{id2}', [TradeController::class, 'show']);
Route::patch('/explorers/{id}/inventory/partner/{id2}', [TradeController::class, 'edit']);

// Inventário
Route::get('/relatorio', [InventoryController::class, 'relatorio']);
Route::get('/explorers/{id}/inventory', [InventoryController::class, 'show']);
Route::get('/explorers/{id}/inventory/item', [InventoryController::class, 'createview']);
Route::post('/explorers/{id}/inventory', [InventoryController::class, 'create']);

//Location
Route::get('/explorers/{id}/edit', [LocationController::class, 'index']);
Route::patch('/explorers/{id}', [LocationController::class, 'edit']);
Route::get('/explorers/{id}/history', [LocationController::class, 'createview']);
Route::post('/explorers/{id}', [LocationController::class, 'create']);

//Explorer
Route::get('/explorers', [ExploradorController::class, 'index']);
Route::get('/explorers/create', [ExploradorController::class, 'createview']);
Route::get('/explorers/{id}', [ExploradorController::class, 'show']);
Route::post('/explorers', [ExploradorController::class, 'create']);







