<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\StoreController;
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

// Admin Routes

// Manage Dashboard Controller
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Auth Admin
Route::group(['prefix' => '/admin'], function () {
    Route::get('/form-login', [LoginController::class, 'showLoginForm'])->name('auth.admin.formLogin');

    Route::Post('/login', [LoginController::class, 'login'])->name('auth.admin.login');

    Route::Post('/logout', [LoginController::class, 'logout'])->name('auth.admin.logout');
});

// Manage Store Controller
Route::group(['prefix' => 'admin-store'], function () {
    Route::get('/index', [StoreController::class, 'index'])->name('admin.store.index');

    Route::get('/create', [StoreController::class, 'create'])->name('admin.store.create');

    Route::post('/save', [StoreController::class, 'save'])->name('admin.store.save');

    Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('admin.store.edit');

    Route::post('/update/{id}', [StoreController::class, 'update'])->name('admin.store.update');

    Route::get('/delete/{id}', [StoreController::class, 'destroy'])->name('admin.store.destroy');
});

// Manage Client Controller
Route::group(['prefix' => 'admin-client'], function () {
    Route::get('/index', [ClientController::class, 'index'])->name('admin.client.index');
});
