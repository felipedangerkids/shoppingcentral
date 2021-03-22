<?php

use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
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
Route::get('/cardapio/{id}', [SiteController::class, 'cardapio']);
Route::get('/produto/{slug}', [SiteController::class, 'produto']);
Route::middleware(['auth:sanctum', 'verified'])->get('/cliente', [SiteController::class, 'cliente']);
Route::middleware(['auth:sanctum', 'verified'])->post('/produto-store', [ProdutoController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->post('estabelecimento-store', [EstabelecimentoController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('teste', [EstabelecimentoController::class, 'teste']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
