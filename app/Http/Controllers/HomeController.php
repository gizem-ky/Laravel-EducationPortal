<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function about()
    {
        return view('home.pages.about');
    }

    public  function courses()
    {
        return view('home.pages.courses');
    }

    public  function teachers()
    {
        return view('home.pages.teachers');
    }

    public  function contact()
    {
        return view('home.pages.contact');
    }

}
