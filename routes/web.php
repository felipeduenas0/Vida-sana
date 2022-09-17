<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\OrderController;

// Pages
Route::get('/', [PagesController::class, 'start'])->name('start');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');

// Blogs
Route::get('/single-news', [NewsController::class, 'singleNews'])->name('single-news');
Route::get('/fibras', [NewsController::class, 'fibras'])->name('fibras');
Route::get('/pnaturales', [NewsController::class, 'pNaturales'])->name('pnaturales');
Route::get('/desintox', [NewsController::class, 'desintox'])->name('desintox');

// Rutas de gestión de productos
Route::get('/admin', [ProductController::class, 'admin'])->name('admin');
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
Route::patch('/product/update/{product}', [ProductController::class, 'update']);
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy']);



/* Rutas pendientes

// Rutas de solicitud de órdenes
Route::get('/makeOrder/{category}', [OrderController::class, 'getMakeOrder'])->name('makeOrder');
Route::get('/addProduct/{product}', [OrderController::class, 'addProduct']);
Route::delete('/removeProduct', [OrderController::class, 'removeProduct']);
Route::post('/finalizeOrder', [OrderController::class, 'finalizeOrder']);
Route::post('/downloadReceipt', [OrderController::class, 'downloadReceipt']);

Route::post('/sendMessage', [PagesController::class, 'sendMessage']);

*/
