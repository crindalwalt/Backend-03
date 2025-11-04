<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



Route::get("/",[BlogController::class,"index"])->name("home");
Route::get("/blog/1",[BlogController::class,'show'])->name("blog.detail");

Route::get("/books",[BookController::class,'index']);
