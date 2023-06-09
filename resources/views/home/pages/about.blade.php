@extends('layouts.home')
@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="https://cdn-images-1.medium.com/v2/resize:fit:1200/1*HNz6D6ur44z6ohw7abccog.png" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h1>why we used laravel</h1>
                    </div>
                    <p>This website was made using laravel framework. ecourses is a website with online courses. Laravel is a PHP framework that can meet the necessary needs from basic applications to the most advanced projects with its simple and understandable code structure. It has MVC structure and enables the development of web applications by taking advantage of all the features of PHP and OOP.</p>
                    <a href="https://laravel.com/" target="_blank" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">A great site to learn from home. The courses are very useful</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('assets')}}/img/testimonial-1.jpg" alt="">
                            <h5 class="m-0">Griffin Gluck</h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">I wanted to improve myself in the field of machine learning, but I could not find resources to work. I progressed very quickly after encountering this site</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('assets')}}/img/testimonial-2.jpg" alt="">
                            <h5 class="m-0">Nicole Stamp</h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">ecourses offers you the opportunity to learn from home. You can learn to code by sitting in your chair without any effort. This is perfect</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('assets')}}/img/testimonial-3.jpg" alt="">
                            <h5 class="m-0">Steven Williams</h5>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
