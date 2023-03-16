<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("postovi",[PostController::class , "show" ])->name('home');
Route::get("/post/create",[PostController::class , "create" ]);
Route::post("/post/create",[PostController::class , "store" ]);
Route::get("/post/{id}",[PostController::class , "show_post" ]);
Route::get("/post/{id}/edit",[PostController::class ,"show_for_edit"]);
Route::put("/post/{id}/edit",[PostController::class ,"update"]);
Route::get("/post/{id}/delete",[PostController::class ,"delete"]);
Route::get("/users",[UsersController::class , "index" ]);
Route::get("/user/{user}",[UsersController::class , "destroy" ]);
Route::get("/user/{user}/posts",[UsersController::class , "posts" ]);
