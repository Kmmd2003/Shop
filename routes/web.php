<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdmidController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[HomeController::class, 'home'])->name('home');

Route::get('/admin',[AdmidController::class, 'admin']);

#restaurant
Route::get('/restaurant/{id}',[HomeController::class, 'restaurant'])->name('restaurant');

Route::get('/admin/restaurant/list',[AdmidController::class,'restaurantList'])->name('restaurant-list');

Route::get('/admin/restaurant/create',[AdmidController::class,'restaurantCreat'])->name('restaurant-create');

Route::post('/admin/restaurant/insert',[AdmidController::class,'restaurantInsert'])->name('restaurant-insert');

Route::get('/admin/restaurant/edit/{id}',[AdmidController::class,'restaurantEdit'])->name('restaurant-edit');

Route::post('/admin/restaurant/update',[AdmidController::class,'restaurantUpdate'])->name('restaurant-update');

Route::get('/admin/restaurant/delete/{id}',[AdmidController::class,'restaurantDelete'])->name('restaurant-delete');
#endrestaurant


#category
Route::get('/admin/category/list',[AdmidController::class,'categoryList'])->name('category-list');

Route::get('/admin/category/create',[AdmidController::class,'categoryCreate'])->name('category-create');

Route::post('/admin/category/insert',[AdmidController::class,'categoryInsert'])->name('category-insert');

Route::get('/admin/category/edit/{id}',[AdmidController::class,'categoryEdit'])->name('category-edit');

Route::post('/admin/category/update',[AdmidController::class,'categoryUpdate'])->name('category-update');

Route::get('/admin/category/delete/{id}',[AdmidController::class,'categoryDelete'])->name('category-delete');
#endcategory

#product
Route::get('/admin/product/list',[AdmidController::class,'productList'])->name('product-list');

Route::get('/admin/product/create',[AdmidController::class,'productCreate'])->name('product-create');

Route::post('/admin/product/insert',[AdmidController::class,'productInsert'])->name('product-insert');

Route::get('/admin/product/edit/{id}',[AdmidController::class,'productEdit'])->name('product-edit');

Route::post('/admin/product/update',[AdmidController::class,'productUpdate'])->name('product-update');

Route::get('/admin/product/delete/{id}',[AdmidController::class,'productDelete'])->name('product-delete');
#endproduct


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


