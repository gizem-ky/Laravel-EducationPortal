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

    public  function teacher1()
    {
        return view('home.pages.teacher1');
    }

    public  function teacher2()
    {
        return view('home.pages.teacher2');
    }

    public  function teacher3()
    {
        return view('home.pages.teacher3');
    }

    public  function teacher4()
    {
        return view('home.pages.teacher4');
    }

}
