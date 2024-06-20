<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CodeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::resource('dashboard', AdminController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('code', CodeController::class);
});
