<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');
Route::get('/', [SanPhamController::class, 'index'])->name('/');
// Route::get('cart', [SanPhamController::class, 'cart'])->name('cart');
// Route::group(['middleware' => 'discounted-total'], function () {
// });
Route::get('addCart/{id}/{quantity}', [SanPhamController::class, 'cart'])->name('addCart');
Route::get('showCart', [SanPhamController::class, 'show_cart'])->name('showCart');
Route::get('delete_cart/{id}', [SanPhamController::class, 'deleteCart'])->name('deleteCart');
Route::post('updateCart', [SanPhamController::class, 'update_cart'])->name('updateCart');
Route::post('sale', [SanPhamController::class, 'sale'])->name('sale');
Route::get('check_out', [SanPhamController::class, 'check_out'])->name('check_out');
Route::prefix('product')->group(function () {
    Route::get('detail/{id}', [SanPhamController::class, 'detail'])->name('product.detail');

    Route::get('search', [SanPhamController::class, 'search'])->name('product.search');

    Route::get('cate/{id?}', [SanPhamController::class, 'product_cate'])->name('product.product_cate');
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::post('register', [UserController::class, 'register'])->name('register');

    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login_', [UserController::class, 'login_'])->name('login_');

    Route::get('user_profile', [UserController::class, 'user_profile'])->name('profile');
    Route::get('forgot_pass', [UserController::class, 'forgot_pass'])->name('forgot_pass');
    Route::post('forgot_pass_', [UserController::class, 'forgot_pass_'])->name('forgot_pass_');
    Route::get('update-pass', [UserController::class, 'update_pass']);
    Route::post('update_pass_act', [UserController::class, 'update_pass_act'])->name('update_pass_act');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminProductController::class, 'index'])->name('admin');
    Route::prefix('product')->group(function () {
        Route::get('show', [AdminProductController::class, 'show'])->name('admin.product.show');
        Route::get('search', [AdminProductController::class, 'search'])->name('admin.product.search');
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
