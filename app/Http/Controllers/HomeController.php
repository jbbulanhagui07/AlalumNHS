<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function announcement()
    {
        return view('home.announcement');
    }

    public function performanceindicators()
    {
        return view('home.performanceindicators');
    }
}
