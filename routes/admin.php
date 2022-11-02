<?php

use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DeveloperController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('check', [AdminController::class, 'check']);
// Route::any('login', [AdminController::class, 'login'])->name('alogin');




Route::group(['prefix' => 'admin'], function () {
    Route::get('/a/{page}', [UnitController::class, 'index']);
    Route::get('check', [AdminController::class, 'check'])->name('loginAdmin');
    Route::any('login', [AdminController::class, 'login'])->name('alogin');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::post('trans/{lang}', [HomeController::class, 'translate_submit'])->name('translate_submit');
        Route::group(['prefix' => 'developers', 'as' => 'dev.'], function () {
            Route::get('/', [DeveloperController::class, 'index'])->name('index');
            Route::get('/edit/{id}', [DeveloperController::class, 'edit'])->name('edit');
            Route::post('/store', [DeveloperController::class, 'store'])->name('store');
            Route::post('/update', [DeveloperController::class, 'update'])->name('update');
            Route::post('/delete', [DeveloperController::class, 'delete'])->name('delete');
        });
        Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
            Route::get('/create', [
                ProjectController::class, 'create'
            ])->name('create');
            Route::post('/store', [ProjectController::class, 'store'])->name('store');
            Route::get('/', [ProjectController::class, 'index'])->name('index');
            Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ProjectController::class, 'update'])->name('update');
        });
        Route::group(['prefix' => 'type', 'as' => 'type.'], function () {
            Route::get('/', [TypeController::class, 'index'])->name('index');
            Route::post('/store', [TypeController::class, 'store'])->name('store');
            Route::post('/delete', [TypeController::class, 'delete'])->name('delete');
            Route::post('/update', [TypeController::class, 'update'])->name('update');
        });
        Route::group(['prefix' => 'feature', 'as' => 'feature.'], function () {
            Route::get('/', [TypeController::class, 'index'])->name('index');
        });
        Route::group(['prefix' => 'location', 'as' => 'location.'], function () {
            Route::get('/', [TypeController::class, 'index'])->name('index');
        });
        Route::group(['prefix' => 'status', 'as' => 'status.'], function () {
            Route::get('/', [TypeController::class, 'index'])->name('index');
        });
        Route::group(['prefix' => 'reviews', 'as' => 'reviews.'], function () {
            Route::get('/', [TypeController::class, 'index'])->name('index');
        });
        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            Route::get('/', [SettingController::class, 'index'])->name('index');
            Route::post('/update', [SettingController::class, 'updateOne'])->name('update');
            Route::get('lang/{lang}', [SettingController::class, 'translate'])->name('lang');

        });
        Route::group(['prefix' => 'blogs', 'as' => 'blogs.'], function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::post('/store', [BlogController::class, 'store'])->name('store');
            Route::post('/delete', [BlogController::class, 'delete'])->name('delete');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
            Route::post('/update', [BlogController::class, 'update'])->name('update');
        });
        Route::group(['prefix' => 'area', 'as' => 'area.'], function () {
            Route::get('/', [AreaController::class, 'index'])->name('index');
            Route::get('/create', [AreaController::class, 'create'])->name('create');
            Route::post('/store', [AreaController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AreaController::class, 'edit'])->name('edit');
            Route::post('/update', [AreaController::class, 'update'])->name('update');
            Route::post('/delete', [AreaController::class, 'delete'])->name('delete');
            
            Route::get('/{id}', [AreaController::class, 'getArea'])->name('getarea');
        });
    });
});


    // Route::group(['middleware' => 'admin'], function () {});
