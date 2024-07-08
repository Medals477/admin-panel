<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CodeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::resource('dashboard', AdminController::class);
    Route::resource('profile', ProfileController::class);
    Route::get('category/search', [CategoryController::class, 'search'])->name('category.search');
    Route::resource('category', CategoryController::class);
    Route::get('ajax/delete', [BlogController::class, 'getDelete']);
    Route::get('ajax', [BlogController::class, 'getAjax'])->name('blog.ajax');
    Route::get('search', [BlogController::class, 'search'])->name('blog.search');
    Route::get('blog/search', [BlogController::class, 'search'])->name('blog.search');
    Route::resource('blog', BlogController::class);
    Route::post('ajax', [BlogController::class, 'setAjax']);
    Route::delete('ajax/delete', [BlogController::class, 'deleteAjax']);
    Route::get('code/search', [CodeController::class, 'search'])->name('code.search');
    Route::resource('code', CodeController::class);
    Route::get('media/search', [MediaController::class, 'search'])->name('media.search');
    Route::resource('media', MediaController::class);
    Route::get('setting/search', [SettingController::class, 'search'])->name('setting.search');
    Route::resource('setting', SettingController::class);
    // Media View For Multiple Image
    Route::get('media/multiple/image', [MediaController::class, 'view'])->name('media.view');
    Route::post('media/multiple/image', [MediaController::class, 'multipleImage'])->name('media.multiple.image');
});

Route::get('/', [FrontController::class ,'index'])->name('home');
Route::get('/blog/{slug}', [FrontController::class ,'blogDetails']);

