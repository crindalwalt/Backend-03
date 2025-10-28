<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homePage()
    {

        $myName = "Shahzad Farooq";

        $friends = [
            "Zaid",
            "Muhtshim",
            "Ali Imran",
            "Hassan",
            "Hussain",
            "Ahmed",
            "Bilal",
            "Usman",
            "Hamza",
            "Danish",
            "Shahzad",
            "Ahsan",
            "Talha",
            "Tahir",
            "Noman",
            "Asad",
            "Farhan",
            "Zeeshan",
            "Rehan",
            "Saad",
            "Kashif",
            "Fahad",
            "Imran",
            "Owais",
            "Naveed",
            "Adnan",
            "Rizwan",
            "Waqas",
            "Waqar",
            "Junaid",
            "Arslan",
            "Shahid",
            "Adeel",
            "Shoaib",
            "Yasir",
            "Faisal",
            "Kamran",
            "Salman",
            "Muneeb",
            "Irfan",
            "Mahnoor",
            "Ayesha",
            "Hira",
            "Fatima",
            "Mariam",
            "Zainab",
            "Sana",
            "Iqra",
            "Anum",
            "Hafsa",
            "Laiba",
            "Kiran",
            "Maliha",
            "Rida",
            "Bushra",
            "Sara",
            "Sadia",
            "Sumaira",
            "Fariha",
            "Nimra",
            "Areeba",
            "Kinza",
            "Sumbul",
            "Misha",
            "Emaan",
            "Hania",
            "Alina",
            "Aiza",
            "Amna",
            "Maryam",
            "Aqsa",
            "Areej",
            "Aqila",
            "Afshan",
            "Mehwish",
            "Mishal",
            "Sadia Noor",
            "Sahar",
            "Nida",
            "Lubna",
            "Shazia",
            "Rimsha",
            "Nashit",
            "Adeel Ahmed",
            "Ahmad Raza",
            "Zohaib",
            "Saif",
            "Nabeel",
            "Taimoor",
            "Umer",
            "Sameer",
            "Daniyal",
            "Farrukh",
            "Faisal Mehmood",
            "Rehan Ali",
            "Ahsan Iqbal",
            "Asim",
            "Tayyab",
            "Umair"
        ];

        // $friends = [];
        return view("home", [
            "name" => $myName,
            "friends" => $friends,
        ]);
    }

    public function aboutPage()
    {


  

        return view("about");
    }


    public function contactUsPage()
    {
        // return "contact us";
        return redirect()->route("about");
    }
}
