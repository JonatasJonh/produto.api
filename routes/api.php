<?php

use App\Http\Controllers\ProdutosContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('produtos', [ProdutosContoller::class, "index"]);
Route::post('produtos', [ProdutosContoller::class, "store"]);
Route::put('Podrutos/{id}', [ProdutosContoller::class, "uptade"]);
Route::delete('Podrutos/{id}', [ProdutosContoller::class, "delete"]);