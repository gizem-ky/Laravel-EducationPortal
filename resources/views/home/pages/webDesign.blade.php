@extends('layouts.home')
@section('content')
    <section class="courses">

        <h1 class="heading">our courses</h1>

        <div class="box-container">

            <div class="box">
                <div class="tutor">
                    <img src="{{asset('assets')}}/img/team-1.jpg" alt="">
                    <div class="info">
                        <h3>Emilia Jones</h3>
                        <span>17-08-2022</span>
                    </div>
                </div>
                <div class="thumb">
                    <img src="{{asset('assets')}}/img/thumb-1.png" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">complete HTML tutorial</h3>
                <a href="" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="{{asset('assets')}}/img/team-1.jpg" alt="">
                    <div class="info">
                        <h3>Emilia Jones</h3>
                        <span>21-10-2022</span>
                    </div>
                </div>
                <div class="thumb">
                    <img src="{{asset('assets')}}/img/thumb-2.png" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">complete CSS tutorial</h3>
                <a href="" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img class="img-fluid" src="{{asset('assets')}}/img/team-1.jpg" alt="">
                    <div class="info">
                        <h3>Emilia Jones</h3>
                        <span>21-10-2022</span>
                    </div>
                </div>
                <div class="thumb">
                    <img src="{{asset('assets')}}/img/thumb-3.png" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">complete JS tutorial</h3>
                <a href="" class="inline-btn">view playlist</a>
            </div>

        </div>

    </section>
@endsection
