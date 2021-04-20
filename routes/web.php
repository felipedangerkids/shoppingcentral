<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
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
Route::get('/estetica', [SiteController::class, 'cosmeticos']);
Route::get('/lojas', [SiteController::class, 'lojas']);
Route::get('/coming', [SiteController::class, 'coming']);
Route::get('/cardapio/{id}', [SiteController::class, 'cardapio']);
Route::get('/produto/{slug}', [SiteController::class, 'produto']);
Route::middleware(['auth:sanctum', 'verified'])->get('/cliente', [SiteController::class, 'cliente'])->name('cliente');
Route::middleware(['auth:sanctum', 'verified'])->post('/produto-store', [ProdutoController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('/user-store', [UserController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->any('/user-delete/{id}', [UserController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->any('/product-delete/{id}', [ProdutoController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->any('/category-delete/{id}', [CategoryController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->any('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->get('/product-list', [ProdutoController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/categoria-list', [CategoryController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->post('/categoria-update/{id}', [CategoryController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->post('estabelecimento-store', [EstabelecimentoController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->post('estabelecimento-update/{id}', [EstabelecimentoController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('estabelecimento-show', [EstabelecimentoController::class, 'show']);
Route::middleware(['auth:sanctum', 'verified'])->get('estabelecimento-edit/{id}', [EstabelecimentoController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->get('teste', [EstabelecimentoController::class, 'teste']);

Route::middleware(['auth:sanctum', 'verified'])->post('categoria-store', [CategoryController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::post('/cart-add', [CartController::class, 'cartAdd']);
