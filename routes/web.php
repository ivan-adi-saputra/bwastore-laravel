<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('categories', [CategoryController::class, 'index'])->name('categories');

Route::get('details/{id}', [DetailController::class, 'index'])->name('details');

Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('success', [CartController::class, 'success'])->name('success');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-product');
Route::get('dashboard/products/create', [DashboardProductController::class, 'create'])->name('dashboard-product-create');
Route::get('dashboard/products/{id}', [DashboardProductController::class, 'details'])->name('dashboard-product-details');

Route::get('dashboard/transaction', [DashboardTransactionController::class, 'index'])->name('dashboard-transaction');
Route::get('dashboard/transaction/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transaction-details');

Route::get('dashboard/setting', [DashboardSettingController::class, 'setting'])->name('dashboard-settings');
Route::get('dashboard/account', [DashboardSettingController::class, 'account'])->name('dashboard-account');

Route::get('register', [RegisterController::class, 'index'])->name('register-success');
Route::get('register/success', [RegisterController::class, 'success'])->name('register-success');

Route::get('login', [LoginController::class, 'index'])->name('login');