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

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/posts-table', [PostController::class, 'posts_table']);

Route::post('/posts/posts-table/{post}', [PostController::class, 'posts_table_actions']);

Route::post('/posts/{post}', [PostController::class, 'update']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::post('/posts/posts-table/update/{post}', [PostController::class, 'update']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/delete', [PostController::class, 'destroy']);


Route::post('/posts/comments/{post}', [CommentController::class, 'store']);

route::get('/register', [UserController::class, 'create'])->middleware('guest');
route::post('/register', [UserController::class, 'store'])->middleware('guest');

route::get('/login', [UserController::class, 'login'])->middleware('guest');
route::post('/login', [UserController::class, 'login_store'])->middleware('guest');

route::post('/logout', [UserController::class, 'logout'])->middleware('auth');