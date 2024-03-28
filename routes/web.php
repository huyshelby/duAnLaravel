<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\AdminProductController;
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

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminProductController::class, 'index'])->name('admin');
    Route::prefix('product')->group(function(){
        Route::get('show', [AdminProductController::class, 'show'])->name('admin.product.show');
        Route::resource('add', AdminProductController::class)->names([
            'create' => 'admin.product.add'
        ]);
        Route::resource('add_', AdminProductController::class)->names([
            'store' => 'admin.product.add_'
        ]);
        Route::get('edit/{id}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('update/{id}', [AdminProductController::class, 'update'])->name('admin.product.update');
        Route::get('delete/{id}', [AdminProductController::class, 'destroy'])->name('admin.product.delete');
        // Route::get('add', [AdminController::class, 'create'])->name('admin.product.add');
    });
    
});
