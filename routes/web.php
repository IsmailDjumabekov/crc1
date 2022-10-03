<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\ProductController@index')->middleware('auth');
Route::get('/add-product','App\Http\Controllers\ProductController@create');
Route::post('/add-product', 'App\Http\Controllers\ProductController@store');
Route::get('/edit-product/{product}','App\Http\Controllers\ProductController@edit');
Route::put('/edit-product/{product}','App\Http\Controllers\ProductController@update');
Route::delete('/delete-product/{product}','App\Http\Controllers\ProductController@delete');
Route::get('/search', 'App\Http\Controllers\ProductController@search');

Route::get('/category','App\Http\Controllers\CategoryController@index');
Route::get('/add-category','App\Http\Controllers\CategoryController@create');
Route::post('/add-category', 'App\Http\Controllers\CategoryController@store');


Route::get('/', function (){
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
