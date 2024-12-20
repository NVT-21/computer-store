<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Mail;
use App\Http\Middleware\IsVerifiedEmail;
use App\Mail\EmailVerification;



Route::get("/register",[AuthController::class,'showRegister'])->name('register');
// Route::post("/register",[AuthController::class,'register'])->name('post.register');
Route::get("/login",[AuthController::class,'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::get('categories/create',[CategoryController::class,'create'])->name('api.categories.create');
Route::middleware('auth')->group(function () {
        Route::get("/home/admin",[AuthController::class, 'showHomeAdmin'])->name('admin.home');
        Route::get("/logOut",[AuthController::class, 'logOut'])->name('logOut');
        Route::get('/my-profile', [UserController::class, 'showProfile'])->name('profile');
        Route::get('/check-out',[ProductController::class, 'showViewCheckOut'])->name('product.check-out');
        Route::Post('/update-cart',[ProductController::class,'updateCart'])->name('product.update-cart');
        //Order
        Route::post('/store-order',[OrderController::class, 'storeOrder'])->name('order.storeOrder');
        Route::get('/orders',[OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');
        Route::delete('/orders/{id}',[OrderController::class, 'destroy'])->name('orders.destroy');
        Route::put('/orders/{id}',[OrderController::class,'update'])->name('orders.update');
        //sales 
        Route::get('/sales',[OrderController::class,'showViewSales'])->name('sales.index');
        Route::post('/sales',[OrderController::class,'calculateOrdersByTime'])->name('sales.calculateOrdersByTime');
        //product
        Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
        Route::get('/products', [ProductController::class, 'index'])->name('product.index');
        Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
});

//product(user)
Route::get('/', [AuthController::class, 'showHome'])->name('home');
Route::get("/list-products",[ProductController::class, 'showViewProducts'])->name('product.listProducts');
Route::get('/products/getProductsByCategory/{categoryId}', [ProductController::class,'getProductsByCategory'])->name('product.productsByCategory');
Route::get('/products/getProductsByBrand/{brandId}',[ProductController::class,'getProductsByBrand'])->name('product.productsByBrand');
Route::get('/products/getProductsByPrice/{minPrice}/{maxPrice}',[ProductController::class,'getProductsByPrice'])->name('product.productsByPrice');
Route::get('/products/listView',[ProductController::class,'showViewListProducts'])->name('product.listView');
Route::get("/carts",[ProductController::class,'showCart'])->name('product.cart');
Route::post('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('cart.add');
Route::get("/searchProduct",[ProductController::class, 'showProductBySearch'])->name('product.searchProduct');
Route::get('/product-detail/{idProduct}',[ProductController::class, 'showProductDetail'])->name('product.productDetail');
Route::delete('/cart/remove/{id}', [ProductController::class, 'removeProductOfCart'])->name('cart.remove');
//product(admin)
// Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
// Route::get('/products', [ProductController::class, 'index'])->name('product.index');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
//verify password 
Route::get('/verify-password',[AuthController::class,'showVerifiedPassword'])->name('showVerifyPassword');
Route::post('/verify-password',[AuthController::class,'verifyEmail'])->name('verification.verify');
//order 
// Route::post('/store-order',[OrderController::class, 'storeOrder'])->name('order.storeOrder');
// Route::get('/orders',[OrderController::class, 'index'])->name('orders.index');
// Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');
// Route::delete('/orders/{id}',[OrderController::class, 'destroy'])->name('orders.destroy');
// Route::put('/orders/{id}',[OrderController::class,'update'])->name('orders.update');
// //sales 
// Route::get('/sales',[OrderController::class,'showViewSales'])->name('sales.index');
// Route::post('/sales',[OrderController::class,'calculateOrdersByTime'])->name('sales.calculateOrdersByTime');


