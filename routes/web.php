<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
$home =
// Route::get('/', [PostController::class, "index"]);
// Route::get('/posts', [PostController::class, "index"]);
// Route::get('/users', [PostController::class, "index_u"]);
// Route::get("/posts/create", [PostController::class, "create"]);
// Route::get("/posts/{id}", [PostController::class, "show"])->where('id', '[0-9]+');
// Route::post('/posts', [PostController::class, "store"]);
// Route::get('/posts/{id}/edit', [PostController::class, "edit"])->where('id', '[0-9]+');
// Route::put('/posts/{id}', [PostController::class, "update"])->where('id', '[0-9]+');
// Route::delete('/posts/{id}', [PostController::class, "destroy"])->where('id', '[0-9]+');

Route::resource('posts',PostController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
Route::get('/',function(){
    return view("welcome");
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

