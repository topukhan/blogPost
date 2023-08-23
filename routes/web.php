<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostListController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Post routes
    Route::resource('/posts', PostController::class);

    //Post List
    Route::get('/postList', [PostListController::class, 'index'])->name('posts.list');
    Route::get('/postShow/{post}', [PostListController::class, 'show'])->name('post.show');
    Route::get('/post/search', [PostListController::class, 'search'])->name('post.search');
});

require __DIR__.'/auth.php';
