<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/cmd', function () {
    // Artisan::call('storage:link');
    // Artisan::call('optimize:clear');
    // Artisan::call('route:clear');
    // Artisan::call('view:clear');
    // Artisan::call('cache:clear');
    // Artisan::call('make:controller /Admin/HeroController -r');

    return 'Done';
});




Route::get('/', [WebsiteController::class, 'index'])->name('index');



Route::get('/service/{slug}', [WebsiteController::class, 'serviceSingle'])->name('service.single');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
Route::get('/events', [WebsiteController::class, 'events'])->name('events');
Route::get('/teams', [WebsiteController::class, 'teams'])->name('teams');
Route::get('/news-and-media', [WebsiteController::class, 'news'])->name('news');
Route::get('/news-and-media/{slug}', [WebsiteController::class, 'newsSingle'])->name('news.single');
Route::get('/contacts', [WebsiteController::class, 'contacts'])->name('contacts');



Auth::routes(); // ✅ Removed ['verify' => true]

require __DIR__ . '/admin.php';


// php artisan migrate:refresh --path=database/migrations/22025_10_05_153148_create_categories_table.php