<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/movements', [SiteController::class, 'movements'])->name('site.movements');
Route::get('/products', [SiteController::class, 'products'])->name('site.products');
Route::get('/companies', [SiteController::class, 'companies'])->name('site.companies');
Route::get('/reports', [SiteController::class, 'reports'])->name('site.reports');
Route::get('/login', [SiteController::class, 'login'])->name('site.login');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::post('/products/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
Route::post('/companies/edit', [CompanyController::class, 'edit'])->name('companies.edit');

Route::post('/movements/store', [MovementController::class, 'store'])->name('movements.store');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class, 'logout'])->name('login.logout');