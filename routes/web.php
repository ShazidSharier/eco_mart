<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WolmartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\CheckoutController;




Route::get('/',[WolmartController::class,'index'])->name('home');
Route::get('/shop{id}',[WolmartController::class,'product'])->name('shop');
Route::get('/sub-category-shop/{id}',[WolmartController::class,'subCategoryProduct'])->name('sub-category-shop');
Route::get('/product/details/{id}/{slug}',[WolmartController::class,'productDetails'])->name('product.details');
Route::get('/brand-shop/{id}', [WolmartController::class, 'brandShop'])->name('brand-shop');
Route::get('/category-shop/{id}', [WolmartController::class, 'categoryShop'])->name('category-shop');


Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::delete('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::put('/update-cart/{id}', [CartController::class, 'updateCart'])->name('cart.update');

Route::get('/checkout',[CheckoutController::class,'checkout'])->name('checkout');

Route::get('/customer/register',[CustomerController::class,'register'])->name('customer.register');
Route::get('/check-customer-email',[CustomerController::class,'checkCustomerEmail'])->name('check-customer-email');
Route::post('/customer/register',[CustomerController::class,'saveNewCustomer'])->name('customer.register');

Route::get('/customer/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/customer/login',[CustomerController::class,'loginCheck'])->name('customer.login');
Route::get('/customer/logout',[CustomerController::class,'logout'])->name('customer.logout');

Route::get('/customer/dashboard',[CustomerDashboardController::class,'index'])->name('customer.dashboard')->middleware('customer');
Route::get('/customer/profile',[CustomerDashboardController::class,'profile'])->name('customer.profile')->middleware('customer');
Route::post('/customer/update/{id}',[CustomerDashboardController::class,'update'])->name('customer.update')->middleware('customer');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('category', CategoryController::class );
    Route::resource('sub-category', SubCategoryController::class );
    Route::resource('brand', BrandController::class );
    Route::resource('unit', UnitController::class );
    Route::resource('color', ColorController::class );
    Route::resource('size', SizeController::class );
    Route::resource('product', ProductController::class );

});
