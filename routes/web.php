<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get("/register",[AuthController::class,'showRegister'])->name('register');
// Route::post("/register",[AuthController::class,'register'])->name('post.register');
Route::get("/login",[AuthController::class,'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::middleware('auth')->group(function () {
    Route::get("/home/admin",[AuthController::class, 'showHomeAdmin'])->name('admin.home');
    Route::get('/home', [AuthController::class, 'showHome'])->name('home');
    Route::get('/my-profile', [UserController::class, 'showProfile'])->name('profile');

});





