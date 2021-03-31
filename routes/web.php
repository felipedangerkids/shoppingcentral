<?php

use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/delivery', [SiteController::class, 'delivery']);
Route::get('/gastronomia', [SiteController::class, 'gastronomia']);
Route::get('/cosmeticos', [SiteController::class, 'cosmeticos']);
Route::get('/lojas', [SiteController::class, 'lojas']);
Route::get('/coming', [SiteController::class, 'coming']);
Route::get('/cardapio/{id}', [SiteController::class, 'cardapio']);
Route::get('/produto/{slug}', [SiteController::class, 'produto']);
Route::middleware(['auth:sanctum', 'verified'])->get('/cliente', [SiteController::class, 'cliente']);
Route::middleware(['auth:sanctum', 'verified'])->post('/produto-store', [ProdutoController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('/user-store', [UserController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->any('/user-delete/{id}', [UserController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->any('/product-delete/{id}', [ProdutoController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/product-list', [ProdutoController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->post('estabelecimento-store', [EstabelecimentoController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('teste', [EstabelecimentoController::class, 'teste']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
