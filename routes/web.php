<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;

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


// Admin

Route::get('swaj/admin',[adminLoginController::class,'login']);
Route::get('swaj/dashboard',[adminDashboardController::class,'dashboard']);

Route::get('swaj/category',[CategoryController::class,'category']);
Route::get('swaj/category/add',[CategoryController::class,'add']);
Route::post('swaj/category/store',[CategoryController::class,'store']);
Route::get('swaj/category/change-status/{id}',[CategoryController::class,'changeStatus']);
Route::get('swaj/category/delete/{id}',[CategoryController::class,'delete']);
Route::get('swaj/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('swaj/category/update',[CategoryController::class,'update']);

// color
Route::get('swaj/color',[ColorController::class,'color']);
Route::get('swaj/color/add',[ColorController::class,'add']);
Route::post('swaj/color/store',[ColorController::class,'store']);
Route::get('swaj/color/change-status/{id}',[ColorController::class,'changeStatus']);
Route::get('swaj/color/delete/{id}',[ColorController::class,'delete']);
Route::get('swaj/color/edit/{id}',[ColorController::class,'edit']);
Route::post('swaj/color/update',[ColorController::class,'update']);

// size
Route::get('swaj/size',[SizeController::class,'size']);
Route::get('swaj/size/add',[SizeController::class,'add']);
Route::post('swaj/size/store',[SizeController::class,'store']);
Route::get('swaj/size/change-status/{id}',[SizeController::class,'changeStatus']);
Route::get('swaj/size/delete/{id}',[SizeController::class,'delete']);
Route::get('swaj/size/edit/{id}',[SizeController::class,'edit']);
Route::post('swaj/size/update',[SizeController::class,'update']);







