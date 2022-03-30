<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Admin\InfoController;
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


Route::prefix('admin')
    ->group(function () {
        /* GET */
        Route::get('/', [InfoController::class, 'index'])->name('admin.index');
        Route::get('create', [InfoController::class, 'create'])->name('admin.create');
        Route::get('edit/{id}', [InfoController::class, 'edit'])->name('admin.edit');
        /* POST */
        Route::post('edit/{id}', [InfoController::class, 'update'])->name('admin.update');
        Route::post('create', [InfoController::class, 'store'])->name('admin.store');
        /* DELETE */
        Route::delete('{id}', [InfoController::class, 'destroy'])->name('admin.destroy');
    });

Route::prefix('users')
    ->group(function () {
        /* GET */
        Route::get('/', [UserController::class, 'index']);
    });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('auth')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::post('/logout', [LogoutController::class, 'logout']);
    });
