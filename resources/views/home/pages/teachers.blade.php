@extends('layouts.home')
@section('content')
    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                <h1>Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('assets')}}/img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <a href="{{route('home.teacher1')}}" class="nav-item nav-link active">Emilia Jones</a>
                            <p class="m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('assets')}}/img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <a href="{{route('home.teacher2')}}" class="nav-item nav-link active">Connor Jessup</a>
                            <p class="m-0">Game Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('assets')}}/img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <a href="{{route('home.teacher3')}}" class="nav-item nav-link active">Liyou Abere</a>
                            <p class="m-0">AI Specialist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('assets')}}/img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="https://laravel.com/"target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <a href="{{route('home.teacher4')}}" class="nav-item nav-link active">Jackson Robert Scott</a>
                            <p class="m-0">AI Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
