<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

Route::get('/',[HomeController::class,'home']);
Route::get('/shop',[HomeController::class,'shop']);
Route::get('/product-detail/{id}',[HomeController::class,'detail']);
Route::get('/cart',[HomeController::class,'cart']);
Route::get('my-order',[HomeController::class,'myOrder']);
Route::get('my-order/{id}',[HomeController::class,'orderHistory']);
Route::get('login',[LoginController::class,'login']);
Route::get('register',[LoginController::class,'register']);
Route::get('contact',[ContactController::class,'contact']);
Route::get('checkout',[HomeController::class,'checkout']);


