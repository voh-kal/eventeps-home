@extends('layouts')
@section('content')

<!-- Hero Section -->
<section class="hero-section-about ">
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
                        <a class="nav-link active" href="/about">About TEPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/use-cases">Use Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/resources">Resources</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <!-- <a href="#" class="btn btn_outline_light me-2" data-bs-target="#exampleModal" data-bs-toggle="modal">Get Started</a> -->
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
                        Our mission is to <span class="highlight-text">automate</span> and create
                        <span class="highlight-text">seamless</span> , engaging events.
                    </h1>
                    <div class="col-lg-7 mx-auto text-center">
                        <p class="lead mb-5">
                            Leverage virtual tools to seamlessly blend an in-person experience with a
                            remote audience for a wider reach and engaging hybrid event.
                        </p>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<section style="position: relative;" class="py-5">
    <div style="position: absolute; top: 0; left: 0; z-index: -1;">
        <img src="/images/left.png" alt="" style="max-width: 100%; height: auto;">
    </div>
    <div class="container py-5" style="text-align: -webkit-center;">

        <h5 class="section-header mt-5 mb-4">
            <span>Our Story</span>
        </h5>

        <div>
            <h4 class="sectionH4 col-md-7 mb-4">Where  <span>Passion</span> for Events Meets <span>Innovation</span>.</h4>
        </div>
    </div>
    <section class="container">
        <div class="row align-items-center">
            
            <div class="col-md-12 col-lg-6">
                <p style="font-size: 24px;" class="mb-4">
                    As event curators with over a decade of experience, we have encountered a diverse array of challenges in Africa.
                    We realized that these challenges were not unique to us; they were continent-wide challenges faced by event organisers & owners looking to curate global standard events.
                </p>
                <p style="font-size: 24px;">
                    We decided to build solutions to automate the event organising process, while helping organisers & owners save time, costs, and resources.
                    That's how TEPS was born. An end-to-end event management system for everyone by event organisers.
                </p>
            </div>

          
            <div class="col-md-12 col-lg-6">
                <div class="d-flex justify-content-center align-items-end">
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab1.png" alt="Event 1" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab2.png" alt="Event 2" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab3.png" alt="Event 3" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab4.png" alt="Event 4" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab5.png" alt="Event 4" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>

    </section>


    <div style="position: absolute; bottom: 0; right: 0; z-index: -1;">
        <img src="/images/right.png" alt="" style="max-width: 100%; height: auto;">
    </div>
</section>


<!-- features -->
<section >
    <div class="container py-5" style="text-align: -webkit-center;">

        <h5 class="section-header mt-5 mb-4">
            <span>Our Core Values</span>
        </h5>

        <div>
           
            <h4 class="sectionH4 col-md-7 mb-4"><span>Guiding</span> Every <span>Event</span> with Purpose</h4>
            <p class="col-md-10 sectionP">At TEPS, our core values drive everything we do. We are committed to:</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-4 ">
            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/core1.png" alt="" style="width: fit-content;">
                        <h3 class="featurerow1">Mission</h3>
                        <p class="mb-0 featurerow2 col-md-10">To empower event organisers & owners with tools to create personalised experiences for their attendees</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/core2.png" alt="" style="width: fit-content;">
                        <h3 class="featurerow1">Vision</h3>
                        <p class="mb-0 featurerow2 col-md-10">To inspire and power great experiences, one event at a time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/core3.png" alt="" style="width: fit-content;">
                        <h3 class="featurerow1">Values</h3>
                        <p class="mb-0 featurerow2 col-md-10">Consistency, Personalization, Innovation & Passion</p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/core4.png" alt="" style="width: fit-content;">
                        <h3 class="featurerow1">Brand promise</h3>
                        <p class="mb-0 featurerow2 col-md-10">To simplify the event management process and execution, leveraging technology to create powerful first impressions.</p>
                    </div>
                </div>
            </div>


        
        </div>
    </div>
</section>


<!-- video section -->
<section class="video_section">
    <div class="container video_background">
        <h5>VIDEO</h5>
        <p class="col-md-5">Experience the power of TEPS.</p>
        <a href="https://www.youtube.com/shorts/WY0mbKFuG_o" target="_blank"> <img src="/images/play.png" alt=""></a>
       
    </div>
    <div class="col my-5">
        <a  href="https://www.youtube.com/@powerofteps" class="get_started col-md-2" target="_blank"><img src="/images/youtube.png" alt=""> See more</a>
    </div>
</section>




<!-- slider -->
<section class="sliderbody">
    <div class="container">
        <div class="slider_cover">
            <div class="marquee" style="    background: none;">
                <img src="/images/sl1.png" alt="" style="width: fit-content;">
                <img src="/images/sl2.png" alt="" class="img-fluid">
                <img src="/images/sl3.png" alt="" class="img-fluid">
                <img src="/images/sl5.png" alt="" class="img-fluid">
                <img src="/images/sl6.png" alt="" class="img-fluid">
                <img src="/images/sl4.png" alt="" class="img-fluid">


            </div>
        </div>
    </div>
</section>

@endsection