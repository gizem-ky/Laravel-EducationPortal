<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function About()
    {
        return view('layouts.about');
    }

    public  function Courses()
    {
        return view('layouts.courses');
    }

    public  function Teachers()
    {
        return view('layouts.teachers');
    }

}
