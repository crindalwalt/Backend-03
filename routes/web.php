<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



// Route::get("/",[BlogController::class,"index"])->name("home");
// Route::get("/blog/{blog:slug}",[BlogController::class,'show'])->name("blog.detail");


// Route::get("/contact",[BlogController::class,"contact"]);

Route::get("/",function (){
    return redirect()->route("home");
});
Route::prefix("app")->group(function () {


    Route::get("/", [BlogController::class, "index"])->name("home");
    Route::get("/blog/{blog:slug}", [BlogController::class, 'show'])->name("blog.detail");


    Route::get("/contact", [BlogController::class, "contact"]);
});
