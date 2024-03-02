<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Froala\FroalaController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/scraping', [\App\Http\Controllers\Scraping\ScrapingController::class, 'index'])->name("scraping");
Route::get('/', [\App\Http\Controllers\Common\IndexController::class, 'index'])->name("welcome");

Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.detail');
Route::get('/stores/{id}', [\App\Http\Controllers\Store\StoreController::class, 'index'])->name('store.detail');
Route::get('/blogs', [\App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{id}', [\App\Http\Controllers\Blog\BlogController::class, 'detail'])->name('blogs-detail');

Route::post('/upload-image', [FroalaController::class, 'uploadImage']);

//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
