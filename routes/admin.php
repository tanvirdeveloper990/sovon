<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\ClientreviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\OfferServiceController;
use App\Http\Controllers\Admin\OpportunitieController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TeammemberController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;


// Super Admin Auth
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')
    // ->middleware(['auth:admin', 'admin.only', 'role:super-admin'])
    ->middleware(['auth:admin', 'admin.only', 'admin.has.role'])
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminProfileController::class, 'dashboard'])->name('dashboard');
        // Route::get('/dashboard', function () {
        //     return view('admin.dashboard');
        // })->name('dashboard');

        Route::get('/profile/settings', [AdminProfileController::class, 'settings'])->name('profile.settings');
        Route::put('/profile/settings', [AdminProfileController::class, 'updateSettings'])->name('profile.settings.update');

        Route::get('/change-password', [AdminProfileController::class, 'changePassword'])->name('change.password');
        Route::put('/change-password', [AdminProfileController::class, 'updatePassword'])->name('change.password.update');

        Route::post('/currency-update', [AdminProfileController::class, 'updateCurrency'])->name('currency.update');


        Route::resource('settings', SettingController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);

        // CRUD Start
        Route::resource('hero',HeroController::class);
        Route::resource('abouts',AboutController::class);
        Route::resource('counters',CounterController::class);
        Route::resource('brands',BrandController::class);
        Route::resource('certifications',CertificationController::class);

        Route::resource('faqs',FaqController::class);
        Route::resource('team-members',TeammemberController::class);
        Route::resource('opportunities',OpportunitieController::class);
        Route::resource('service',ServiceController::class);
        Route::resource('offer-service',OfferServiceController::class);
        Route::resource('client-review',ClientreviewController::class);
        Route::resource('blogs',BlogController::class);

        Route::resource('contacts',ContactController::class);
        Route::resource('events',EventController::class);
        Route::resource('categories',CategoryController::class);
        Route::resource('subcategories',SubCategoryController::class);
        Route::resource('products',ProductController::class);




    });


// php artisan migrate:refresh --path=database/migrations/22025_10_05_153148_create_categories_table.php
