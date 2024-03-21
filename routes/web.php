<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
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

// Route::get('/', function () {
//     return view('trangchu');
// });

// Route::get('/', function () {
//     return view('layout.layout');
// });

Route::get('/', [SanPhamController::class, 'index']);

Route::get('gioithieu', function(){
    return view('gioithieu');
});
Route::get('project', function(){
    return view('project');
});
Route::prefix('product')->group(function(){
    Route::get('detail/{id?}', [SanPhamController::class, 'detail'])->name('product.detail');
    Route::get('search', [SanPhamController::class, 'search'])->name('product.search');
});

