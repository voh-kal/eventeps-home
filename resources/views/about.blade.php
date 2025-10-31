@extends('layouts')
@section('content')

<!-- Hero Section -->
<section class="hero-section-about ">
    <!-- Main Navigation -->
    @include('navbar')
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
        <img src="/images/left.png" alt="Decorative left background graphic" aria-hidden="true" style="max-width: 100%; height: auto;">
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
                        <img src="/images/ab1.png" alt="TEPS team at event 1" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab2.png" alt="TEPS team at event 2" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab3.png" alt="TEPS team at event 3" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab4.png" alt="TEPS team at event 4" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab5.png" alt="TEPS team at event 5" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>

    </section>


    <div style="position: absolute; bottom: 0; right: 0; z-index: -1;">
    <img src="/images/right.png" alt="Decorative right background graphic" aria-hidden="true" style="max-width: 100%; height: auto;">
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
                        
                        <img src="/images/core1.png" alt="Mission icon - Empower event organisers" style="width: fit-content;">
                        <h3 class="featurerow1">Mission</h3>
                        <p class="mb-0 featurerow2 col-md-10">To empower event organisers & owners with tools to create personalised experiences for their attendees</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                       
                        <img src="/images/core2.png" alt="Vision icon - Inspire and power experiences" style="width: fit-content;">
                        <h3 class="featurerow1">Vision</h3>
                        <p class="mb-0 featurerow2 col-md-10">To inspire and power great experiences, one event at a time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        
                        <img src="/images/core3.png" alt="Values icon - Consistency, Personalization, Innovation, Passion" style="width: fit-content;">
                        <h3 class="featurerow1">Values</h3>
                        <p class="mb-0 featurerow2 col-md-10">Consistency, Personalization, Innovation & Passion</p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 my-4">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                       
                        <img src="/images/core4.png" alt="Brand promise icon - Simplify event management" style="width: fit-content;">
                        <h3 class="featurerow1">Brand promise</h3>
                        <p class="mb-0 featurerow2 col-md-10">To simplify the event management process and execution, leveraging technology to create powerful first impressions.</p>
                    </div>
                </div>
            </div>


        
        </div>
    </div>
</section>


<!-- video section -->
 @include('videosection')




<!-- slider -->
@include('admin.slider')
 
@endsection