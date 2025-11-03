<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get("/",[BlogController::class,"index"])->name("home");
Route::get("/blog/1",[BlogController::class,'show'])->name("blog.detail");
