@extends('layouts')
@section('content')
@php
use App\Models\User;
@endphp
<!-- Hero Section -->
<section class="hero-section-resource ">
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark main-nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.png" alt="TEPS">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/about">About TEPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/use-cases">Use Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/resources">Resources</a>
                    </li>
                </ul>

                <div class="d-flex">
                <a href="/get-started" class="btn btn_outline_light me-2"  target="_blank">Get started</a> 
                   <a href="https://app.eventeps.com/" class="btn btn_primary" target="_blank">Login</a>                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center text-white">
        <div class="container">
            <div class="row hero-content-about">
                <div class="col-lg-12 mx-auto text-center">

                    <h1 class="display-4 fw-bold mb-4" style="text-transform: uppercase;">
                        Event Planning Resources
                    </h1>
                    <div class="col-lg-9 mx-auto text-center">
                        <p class="lead mb-5">
                            Dive into our collection of guides, tips, and tools designed to help you master every aspect of event planning. From best practices to insider insights, our resources are here to empower you to create exceptional events with ease
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<!-- <section class="teps_section">
    <div class="container py-5">
        <div class="row my-3 mx-0" style="    border: 1px solid blue;    border-radius: 7px;">
            <div class=" col-lg-7 m-0 p-0">
                <div class="card h-100 border-0 p-0">
                    <div class="card-body p-0">
                        <div class=" ">
                            <img src="/images/re1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card h-100 border-0">
                    <div class="card-body d-flex flex-column p-4 ">
                        <div class="button_cont">
                            <button class="button_btn">featured</button>
                        </div>
                        <a href="#" class="row1">Get ready to experience the POWER OF TEPS at Event Tech Live Las Vegas!🚀</a>

                        <p class="row3">January 25, 2024</p>
                        <p><img src="/images/author.png" alt=""><span style="margin-left: 10px;font-size:14px">EMS ADMIN</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>  -->


@if($getPinned)
@php $adminUser = User::where(['id' => $getPinned->user_id])->first(); @endphp
<section class="teps_section">
    <div class="container py-5">
        <div class="row my-3 mx-0" style="    border: 1px solid blue;    border-radius: 7px;">
            <div class=" col-lg-7 m-0 p-0">
                <div class="card h-100 border-0 p-0">
                    <div class="card-body p-0">
                        <div class=" ">
                            <img src="{{env('TEPS')}}/storage/assets/images/{{$getPinned->image}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card h-100 border-0">
                    <div class="card-body d-flex flex-column p-4 ">
                        <div class="button_cont">
                            <button class="button_btn">featured</button>
                        </div>
                        <a href="/resources/{{base64_encode($getPinned->id)}}" class="row1">{{$getPinned->topic}}</a>

                        <p class="row3">{{$getPinned->created_at->format('M d, Y')}}</p>
                        <p><img src="/images/author.png" alt=""><span style="margin-left: 10px;font-size:14px">{{ucwords($adminUser->name)}}</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif



<!-- case studies -->
<section class="others">
    <div class="container py-5">
        <div class="row g-4 ">
            @foreach($get_all as $all)
            @php $user = User::where(['id' => $all->user_id])->first(); @endphp
            <div class="col-md-4 my-3">

                <div class="card h-100 cards" style="background: none;border: 1px solid black">
                    <div style="height: 300px;border-radius: inherit;    overflow: hidden;">
                        <img src="{{env('TEPS')}}/storage/assets/images/{{$all->image}}" alt="" class="img-fluid">
                    </div>

                    <div class="card-body card-bodys d-flex flex-column justify-content-center p-3">
                        <a href="/resources/{{base64_encode($all->id)}}" class=" ft1 ">{{$all->topic}}</a>
                        <p class="row4">{{$all->created_at->format('M d, Y')}}</p>
                        <p><img src="/images/author.png" alt=""><span style="margin-left: 10px;font-size:14px">{{ucwords($user->name)}}</span></p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- video section -->
<section class="video_section" style="margin:0px;">
    <div class="container video_background">
        <h5>VIDEO</h5>
        <p class="col-md-5">Experience the power of TEPS.</p>
        <a href="https://www.youtube.com/shorts/CpVJq5Jdbl0" target="_blank"> <img src="/images/play.png" alt=""></a>

    </div>
    <div class="col my-5">
        <a href="https://www.youtube.com/@powerofteps" class="get_started col-md-2" target="_blank"><img src="/images/youtube.png" alt=""> See more</a>
    </div>
</section>


@endsection