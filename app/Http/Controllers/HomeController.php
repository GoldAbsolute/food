<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function specialties()
    {
        return view('specialties');
    }
    public function reservation()
    {
        
        return view('reservation');
    }
    public function stories()
    {
        return view('stories');
    }
    public function contact()
    {
        return view('contact');
    }
}
