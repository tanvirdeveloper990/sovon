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



Auth::routes(); // ✅ Removed ['verify' => true]

require __DIR__ . '/admin.php';


// php artisan migrate:refresh --path=database/migrations/22025_10_05_153148_create_categories_table.php