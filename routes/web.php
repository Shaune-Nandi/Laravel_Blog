<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/child', function () {
//     return view('child');
// });

//Route::get('/show_all_posts', [App\Http\Controllers\PostController::class, 'index'])->name('index');   *** The ->name('index') is the name of the route ***

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');

Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth', 'admin');

Route::post('/posts', [PostController::class, 'store'])->middleware('auth', 'admin');

Route::get('/posts/posts-table', [PostController::class, 'posts_table'])->middleware('auth', 'admin');

Route::post('/posts/posts-table/{post}', [PostController::class, 'posts_table_actions'])->middleware('auth', 'admin');

Route::post('/posts/{post}', [PostController::class, 'update'])->middleware('auth', 'admin');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth', 'admin');

Route::post('/posts/posts-table/update/{post}', [PostController::class, 'update'])->middleware('auth', 'admin');

Route::get('/posts/{post}', [PostController::class, 'show'])->middleware('auth');

Route::get('/posts/{post}/delete', [PostController::class, 'destroy'])->middleware('auth', 'admin');

Route::post('/posts/comments/{post}', [CommentController::class, 'store'])->middleware('auth');

route::get('/register', [UserController::class, 'create'])->middleware('guest');
route::post('/register', [UserController::class, 'store'])->middleware('guest');

route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
route::post('/login', [UserController::class, 'login_store'])->middleware('guest');

route::post('/logout', [UserController::class, 'logout'])->middleware('auth');