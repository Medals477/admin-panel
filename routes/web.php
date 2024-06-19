<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MediaController;
use App\Models\Media;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::resource('dashboard', AdminController::class);
    Route::resource('category', CategoryController::class);
    Route::get('ajax/delete', [BlogController::class, 'getDelete']);
    Route::get('ajax', [BlogController::class, 'getAjax'])->name('blog.ajax');
    Route::get('search', [BlogController::class, 'search'])->name('blog.search');
    Route::resource('blog', BlogController::class);
    Route::post('ajax', [BlogController::class, 'setAjax']);
    Route::delete('ajax/delete', [BlogController::class, 'deleteAjax']);
    Route::resource('media', MediaController::class);
});
