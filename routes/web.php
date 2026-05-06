<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WolmartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;


Route::get('/',[WolmartController::class,'index'])->name('home');


Route::get('/customer/register',[CustomerController::class,'register'])->name('customer.register');
Route::get('/check-customer-email',[CustomerController::class,'checkCustomerEmail'])->name('check-customer-email');
Route::post('/customer/register',[CustomerController::class,'saveNewCustomer'])->name('customer.register');

Route::get('/customer/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/customer/login',[CustomerController::class,'loginCheck'])->name('customer.login');
Route::get('/customer/logout',[CustomerController::class,'logout'])->name('customer.logout');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('category', CategoryController::class );

});
