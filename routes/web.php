<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::get("/",[WebsiteController::class,"homePage"])->name("home");
Route::get("/know-us",[WebsiteController::class,"aboutPage"])->name("about");

Route::get("/contact",[WebsiteController::class,"contactUsPage"]);

Route::get("blog",[BlogController::class,"index"])->name("blog");

Route::get("/terms-and-conditions",function (){
    return redirect()->route("home");
});
