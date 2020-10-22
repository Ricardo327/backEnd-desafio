<?php

use App\Http\Controllers\Api\ClientesController;
use App\Http\Controllers\Api\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResources([
     'clientes' => ClientesController::class,
     'produtos' => ProdutosController::class
]);

Route::get('findClientes', [ClientesController::class,'search']);
Route::get('findProdutos', [ProdutosController::class,'search']);


