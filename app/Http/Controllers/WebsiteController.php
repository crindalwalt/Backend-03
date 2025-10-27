<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homePage (){
        return view("home");
    }

    public function aboutPage(){
        return view("about");
    }


    public function contactUsPage (){
        // return "contact us";
        return redirect()->route("about");
    }
}
