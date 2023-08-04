<?php

use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

https://github.com/spekulatius/PHPScraper
|
*/

Route::get('/', [SiteController::class, 'home'])->name('home');


Route::group(['prefix'=> 'admin', 'as'=> 'admin.', 'middleware'=> ['auth']],function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resources([
        'posts'=> PostController::class,
        'categories'=> CategoryController::class,
        'users'=> UserController::class,
    ]);
});


/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';

Route::get('/author/{author}', [SiteController::class, 'author'])->name('author');
Route::get('/archive/{year}/{month}', [SiteController::class, 'archive'])->name('archive');
Route::get('/{category}', [SiteController::class, 'category'])->name('category');
Route::get('/{category}/{post}', [SiteController::class, 'post'])->name('post');
