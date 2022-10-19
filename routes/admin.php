<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('layouts.admin.app');
});

Route::group(['prefix' => 'admin'], function () {
    // Route::get('check', [AdminAuth::class, 'check']);
    // Route::any('login', [AdminAuth::class, 'login'])->name('alogin');
    Route::group(['prefix' => 'developers'], function () {
        Route::get('/create', [AdminAuth::class, 'create'])->name('createadmin');
    });
});


    // Route::group(['middleware' => 'admin'], function () {});
