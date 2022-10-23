<?php

use App\Localization\Locale;
use Illuminate\Support\Facades\App;
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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::post('/post', [App\Http\Controllers\HomeController::class, 'storTest'])->name('teststore');

Route::get('/locale/{lang}', function ($lang) {
    \Session(['locale' => $lang]);
    // App::setLocale($lang);
    // return getLang();
    // dd(App::getLocale($lang));
    return back();
})->name('set.localization');
