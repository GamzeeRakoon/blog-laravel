<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\CreationController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/account/user', [UserController::class, 'user'])->name('account.user');

Route::get('/post/{post}', [PostController::class, 'index'])->name('post.index');

Route::get('/blog/creation', [CreationController::class, 'index'])->name('post.creation');

Route::resource('/comment', CommentController::class);

Route::resource('/creation', CreationController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
