<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



route::get('/', [App\Http\Controllers\ProdutosController::class, 'index'])->name('produto.index');

route::get('/produto', [App\Http\Controllers\CreateController::class, 'create'])->name('produto.create');

route::post('/produto', [App\Http\Controllers\CreateController::class, 'store'])->name('produto.store');

route::get('/produto/{id}', [App\Http\Controllers\EditController::class, 'edit'])->name('produto.edit');

route::post('/produto/{id}', [App\Http\Controllers\EditController::class, 'update'])->name('produto.update');

route::get('/visualizar/{id}', [App\Http\Controllers\ShowController::class, 'Show'])->name('produto.Show');

route::get('/destroy/{id}', [App\Http\Controllers\destroyController::class, 'destroy'])->name('produto.destroy');



