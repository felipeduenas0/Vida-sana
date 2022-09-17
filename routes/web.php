<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WelcomeController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\ProductController;

// Rutas para la página principal
Route::get('/', [WelcomeController::class, 'index'])->name('start');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::post('/sendMessage', [WelcomeController::class, 'sendMessage']);

// Rutas de solicitud de ordenes
Route::get('/makeOrder/{category}', [OrderController::class, 'getMakeOrder'])->name('makeOrder');
Route::get('/addProduct/{product}', [OrderController::class, 'addProduct']);
Route::delete('/removeProduct', [OrderController::class, 'removeProduct']);
Route::post('/finalizeOrder', [OrderController::class, 'finalizeOrder']);
Route::post('/downloadReceipt', [OrderController::class, 'downloadReceipt']);

/* Rutas de autenticación */
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Rutas de modulos internos de administrador
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de gestión de productos
Route::get('/product/management', [ProductController::class, 'index'])->name('product/management');
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
Route::patch('/product/update/{product}', [ProductController::class, 'update']);
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy']);
