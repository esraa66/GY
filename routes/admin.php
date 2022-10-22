<?php

use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
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
        Route::get('lang/{lang}', [HomeController::class, 'translate']);
        Route::post('trans/{lang}', [HomeController::class, 'translate_submit'])->name('translate_submit');
        Route::group(['prefix' => 'developers', 'as' => 'dev.'], function () {
            Route::get('/create', [DeveloperController::class, 'create'])->name('create');
        });
        Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
            Route::get('/create', [
                ProjectController::class, 'create'
            ])->name('create');
            Route::post('/store', [ProjectController::class, 'store'])->name('store');
            Route::get('/', [ProjectController::class, 'index'])->name('index');
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
            Route::get('/', [TypeController::class, 'index'])->name('index');
        });
    });
});


    // Route::group(['middleware' => 'admin'], function () {});
