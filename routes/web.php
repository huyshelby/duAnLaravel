<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [SanPhamController::class, 'index']);

Route::prefix('product')->group(function(){
    Route::get('detail/{id}', [SanPhamController::class, 'detail'])->name('product.detail');
    Route::get('search', [SanPhamController::class, 'search'])->name('product.search');
    Route::get('cate/{id?}', [SanPhamController::class, 'product_cate'])->name('product.product_cate');
});
// Route::prefix('cate')->group(function(){
//     Route::get('loa-marshall', [CateController::class, 'show-cate'])->name('cate.loa-marshall');
// });
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::prefix('product')->group(function(){
        Route::resource('add', AdminController::class)->names([
            'create' => 'admin.product.add'
        ]);
        Route::resource('add_', AdminController::class)->names([
            'store' => 'admin.product.add_'
        ]);
        // Route::get('add', [AdminController::class, 'create'])->name('admin.product.add');
    });
    
});
