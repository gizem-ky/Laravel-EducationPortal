@extends('layouts.home')
@section('content')


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{asset('assets')}}/img/team-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h1>Emilia Jones</h1>
                    </div>
                    <p>This website was made using laravel framework. ecourses is a website with online courses. Laravel is a PHP framework that can meet the necessary needs from basic applications to the most advanced projects with its simple and understandable code structure. It has MVC structure and enables the development of web applications by taking advantage of all the features of PHP and OOP.</p>
                    <a href="https://laravel.com/" target="_blank" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
