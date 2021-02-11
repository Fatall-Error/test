<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});

Route::get('/', [PageController::class, 'index']);
Route::get('/product/{slug}', [PageController::class, 'product']);
Route::get('/add-to-cart/{product_id}', [CartController::class, 'add']);





