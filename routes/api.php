<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('test_api', [SanPhamController::class, 'showApi']);
Route::get('/', [SanPhamController::class, 'index'])->name('/');


Route::prefix('product')->group(function(){
    // Route::get('search', [SanPhamController::class, 'search'])->name('product.search');
});

