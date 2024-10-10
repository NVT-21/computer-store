<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\IsVerifiedEmail;
// Route::post("/register",[AuthController::class,'register'])->name('api.register');
// Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::middleware('web')->group(function () {
Route::post("/register",[AuthController::class,'register'])->name('api.register');
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::put('/user/update', [UserController::class, 'update'])->name('api.userUpdate');
Route::put('/user/changePassword', [UserController::class, 'changePassword'])->name('api.userChangePassword');
});

Route::middleware('web')->group(function () {
Route::apiResource('/products', ProductController::class);
Route::post('categories',[CategoryController::class,'store'])->name('api.categories.store');
});
