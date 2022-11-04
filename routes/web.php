<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;



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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/details/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('details');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [CartController::class, 'success'])->name('succees');

Route::get('/register/success', [RegisterController::class, 'sukses'])->name('register-success');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/product', [ProductController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/product/add', [ProductController::class, 'create'])->name('dashboard-products-add');
Route::get('/dashboard/product/{id}', [ProductController::class, 'details'])->name('dashboard-products-details');

Route::get('/dashboard/transaction', [TransactionController::class, 'index'])->name('dashboard-transaction');
Route::get('/dashboard/transaction/{id}', [TransactionController::class, 'details'])->name('dashboard-transaction-details');

Route::get('/dashboard/setting', [SettingController::class, 'setting'])->name('dashboard-setting');
Route::get('/dashboard/account', [SettingController::class, 'account'])->name('dashboard-account');

// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    // ->namespace('Admin')
    ->group(function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('category', CategoryController::class);
    });

Auth::routes();



