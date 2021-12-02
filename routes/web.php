<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\GoogleController;
use App\Models\User;
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


Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'showLogin'])->name('show.login');

    Route::post('/', [LoginController::class, 'login'])->name('login');

    Route::get('register', [LoginController::class, 'showRegister'])->name('show.register');

    Route::post('register', [LoginController::class, 'register'])->name('register');
});
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'showHome'])->name('show.home');

        Route::get('create',[HomeController::class,'create'])->name('show.create');

        Route::post('create',[HomeController::class,'store'])->name('store');

        Route::get('{id}/edit',[HomeController::class,'edit'])->name('show.edit');

        Route::post('{id}/edit',[HomeController::class,'store'])->name('store');

        Route::get('{id}/delete',[HomeController::class,'destroy'])->name('delete');
    }); 
});


Route::prefix('callback')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('google', [GoogleController::class, 'callbackFromGoogle'])->name('google.callback');
});
