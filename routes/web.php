<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ReportController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/movements', [SiteController::class, 'movements'])->name('site.movements');
Route::get('/products', [SiteController::class, 'products'])->name('site.products');
Route::get('/companies', [SiteController::class, 'companies'])->name('site.companies');
Route::get('/reports', [SiteController::class, 'reports'])->name('site.reports');
Route::get('/login', [SiteController::class, 'login'])->name('site.login');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::post('/products/update/', [ProductController::class, 'update'])->name('products.update');

Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
Route::post('/companies/update', [CompanyController::class, 'update'])->name('companies.update');

Route::post('/movements/store', [MovementController::class, 'store'])->name('movements.store');

Route::post('/reports/create', [ReportController::class, 'create'])->name('reports.create');
Route::post('/report/print', [ReportController::class, 'print'])->name('report.print');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class, 'logout'])->name('login.logout');