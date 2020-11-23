<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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


Route::get("/posts", [PostController::class, "index"])->name("posts.all");

Route::get("/posts/create", [PostController::class, "create"])->name("posts.create");

Route::get("/posts/{post}", [PostController::class, "show"])->name("posts.show");

Route::post("/posts/save_post", [PostController::class, "save"])->name("posts.save");

Route::get("/posts/{post}/edit", [PostController::class, "edit"])->name("posts.edit");

Route::put("/posts/{post}/update", [PostController::class, "update"])->name("posts.update");

Route::delete("/posts/{post}/delete", [PostController::class, "delete"])->name("posts.delete");

Route::get('/tags', [TagController::class, 'index'])->name('tags.all');

Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');

Route::post('/tags/save', [TagController::class, 'save'])->name('tags.save');

Route::delete('/tags/{tag}/delete', [TagController::class, 'delete'])->name('tags.delete');

Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');

Route::put('/tags/{tag}/update', [TagController::class, 'update'])->name('tags.update');





