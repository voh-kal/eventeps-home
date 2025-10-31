@extends('layouts')
@section('content')

<!-- Hero Section -->
<section class="hero-section-usecase ">
    <!-- Main Navigation -->
   @include('navbar')
    <div class="d-flex align-items-center text-white">
        <div class="container">
            <div class="row hero-content-usecase">
                <div class="col-lg-12 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4" style="text-transform: uppercase;">

                        The <span class="highlight-text">power</span> of teps in
                        <span class="highlight-text">action</span>
                    </h1>
                    <div class="col-lg-9 mx-auto text-center">
                        <p class="lead mb-5">
                            See how TEPS transforms event management across various scenarios. Explore practical examples of how our platform streamlines planning, enhances engagement, and delivers successful outcomes for every type of event.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- slider -->
@include('admin.slider')


<!-- case study -->
<section style="background-color: #252432;">
    <div class="container py-5" style="text-align: -webkit-center;">

        <h5 class="section-header mt-5 mb-4">
            <span>Case Study</span>
        </h5>

        <div>
            <h4 class="sectionH4 col-md-7 mb-4 text-white">Proven <span>Solutions</span> for Event <span>Success</span></h4>
            <p class="col-md-10 sectionP text-white">Discover how our all-in-one platform has empowered event organizers to achieve seamless planning, management, and engagement. Explore real examples where TEPS simplified every step, from ticketing to post-event analytics, resulting in smooth and impactful events.</p>
        </div>
    </div>
    <div class="container pb-5 pt-0">
        <div class="row g-4">
            <div class="col-lg-6 my-3">
                <div class="card h-100 border-0 " style="background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 ">
                        <h3 class="row1 text-white">Power of TEPS Case Study</h3>
                        <p class="mb-0 row2 text-white">Wondering if you can use TEPS for your event? The answer is yes...whether you're an event management professional or a beginner, TEPS helps you to deliver successful single day or multi day events - Conferences, Sales workshops, End of year parties, festivals from 10 people to hundreds of thousands of attendees.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-3">
                <div class="card h-100 border-0 " style="background: none;">
                    <div class="card-body p-0">
                        <div>
                            <img src="/images/case1.png" alt="Case study: TEPS event management" class="img-fluid" aria-label="Case study event image">
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>

<section>

    <div class="container py-5 my-5">
        <div class="row g-4">
            <div class="col-lg-6 my-3">
                <div class="card h-100 border-0 " style="background: none;">
                    <div class="card-body p-0">
                        <div>
                            <img src="/images/case2.png" alt="Case study: Nexford University graduation" class="img-fluid" aria-label="Nexford University graduation event image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-3">
                <div class="card h-100 border-0 " style="background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 ">
                        <h3 class="row1 ">Scenario</h3>
                        <p class="mb-0 row2 ">Nexford University was hosting their 2023 graduation ceremony, expecting numerous guests and aiming for a smooth and efficient entry process. They needed a solution to manage access control for different guest categories while ensuring a positive experience for everyone. Additionally, the ceremony featured an exhibition requiring exhibitor accreditation.</p>
                    </div>
                </div>
            </div>

        </div>




    </div>
</section>


<!-- challenges -->
<section>
    <div class="container py-5">
    <h2 class="section-title mb-5">Challenges</h2>
       
        <div class="row">
            <div class="col-lg-6 py-2">
                <div class="col-12">
                    <div class="challenge-carda challenge-card">
                        <div class="challenge-number col">1</div>
                        <div class="challenge-text">
                            Ensuring quick and hassle-free entry for a large number of attendees.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="challenge-cardb challenge-card">
                        <div class="challenge-number col">2</div>
                        <div class="challenge-text">
                            Verifying guest credentials efficiently.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-2">
                <div class="col-12">
                    <div class="challenge-carda challenge-card">
                        <div class="challenge-number col">3</div>
                        <div class="challenge-text">
                            Distinguishing different guest categories for access control.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="challenge-cardb challenge-card">
                        <div class="challenge-number col">4</div>
                        <div class="challenge-text">
                            Distinguishing different guest categories for access control.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- solutions -->
<section style="background-color:#EFFBFF">
    <h2 class="section-title">Solutions</h2>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 my-4">
                <div class="card h-100 border-0" style="    background: white;">
                    <div class="card-body d-flex flex-column justify-content-center p-4">

                        <h3 class="caserow1">QR Code Integration</h3>
                        <p class=" caserow2 col-md-10">TEPS provided personalized QR codes for each attendee, enabling swift entry through simple scanning. Guests are happy when there's no delay.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="card h-100 border-0" style="    background: white;">
                    <div class="card-body d-flex flex-column justify-content-center p-4">
                        <h3 class="caserow1">Swift Name Search</h3>
                        <p class=" caserow2 col-md-10">The TEPS platform offered a lightning-fast name search function for instant credential verification.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="card h-100 border-0" style="    background: white;">
                    <div class="card-body d-flex flex-column justify-content-center p-4">
                        <h3 class="caserow1">Access Wrist Tags</h3>
                        <p class=" caserow2 col-md-10">Personalized wrist tags were provided for easy identification and access control based on guest categories.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 my-4">
                <div class="card h-100 border-0" style="    background: white;">
                    <div class="card-body d-flex flex-column justify-content-center p-4">
                        <h3 class="caserow1">Exhibitor Accreditation</h3>
                        <p class=" caserow2 col-md-10">TEPS streamlined the exhibitor accreditation process, ensuring authorized participation in the exhibition.</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>


<!-- result -->
<section>
    <div class="container py-5">
    <h2 class="section-title mb-5">Result</h2>
       
        <div class="row">
            <div class="col-lg-6 py-2">
                <div class="col-12">
                    <div class="challenge-carda challenge-card">
                        <div class="challenge-number col">1</div>
                        <div class="challenge-text">
                        QR codes eliminated queues and manual checks, speeding up the entry process.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="challenge-cardb challenge-card">
                        <div class="challenge-number col">2</div>
                        <div class="challenge-text">
                        Instant name search on the platform ensured quick and accurate guest validation.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-2">
                <div class="col-12">
                    <div class="challenge-carda challenge-card">
                        <div class="challenge-number col">3</div>
                        <div class="challenge-text">
                        Wristbands categorized guests, allowing smooth entry management according to their access level.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="challenge-cardb challenge-card">
                        <div class="challenge-number col">4</div>
                        <div class="challenge-text">
                        The streamlined process minimized wait times and created a positive experience for everyone involved.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- overall -->
<section style="position: relative;" class="py-5">
    <div style="position: absolute; top: 0; left: 0; z-index: -1;">
    <img src="/images/left.png" alt="Decorative left background" aria-hidden="true" style="max-width: 100%; height: auto;">
    </div>
    <div class="container py-5" style="text-align: -webkit-center;">

        <h5 class="section-header mt-5 mb-4">
            <span>Overall</span>
        </h5>

        <div>
            <h4 class="sectionH4 col-md-7 mb-4">Unlock the Potential of Your Events</h4>
        </div>
    </div>
    <section class="container">
        <div class="row align-items-center">

            <div class="col-md-12 col-lg-6">
                <p style="font-size: 24px;" class="mb-4">
                    Nexford University used TEPS to achieve a smooth and efficient graduation ceremony. The technology-driven approach eliminated manual processes, ensured accurate identification, and allowed guests to focus on celebrating this momentous occasion.
                    Additionally, TEPS's exhibitor accreditation system facilitated a seamless and organized exhibition experience.
                </p>

            </div>


            <div class="col-md-12 col-lg-6">
                <div class="d-flex justify-content-center align-items-end">
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab1.png" alt="Graduation event photo 1" class="img-fluid rounded shadow" aria-label="Graduation event photo 1">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab2.png" alt="Graduation event photo 2" class="img-fluid rounded shadow" aria-label="Graduation event photo 2">
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab3.png" alt="Graduation event photo 3" class="img-fluid rounded shadow" aria-label="Graduation event photo 3">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab4.png" alt="Graduation event photo 4" class="img-fluid rounded shadow" aria-label="Graduation event photo 4">
                    </div>
                    <div class="col-lg-3 col-md-4 col-3 my-3 mx-2">
                        <img src="/images/ab5.png" alt="Graduation event photo 5" class="img-fluid rounded shadow" aria-label="Graduation event photo 5">
                    </div>
                </div>
            </div>
        </div>

    </section>


    <div style="position: absolute; bottom: 0; right: 0; z-index: -1;">
    <img src="/images/right.png" alt="Decorative right background" aria-hidden="true" style="max-width: 100%; height: auto;">
    </div>
</section>


<!-- case studies -->
<section style="background-color: #1F233E;">
    <div class="pt-5 text-center">
        <h4 class="sectionH4 mb-2 text-white">See more case studies</h4>
    </div>
    <div class="container py-5">
        <div class="row g-4 ">
            @if(count($resources) > 0)
            @foreach($resources as $resource)
            <div class="col-md-3 my-3">
                <div class="card h-100 cards border-0 custom-border2 " style="    background: none;">
                    <div class="card-body card-bodys d-flex flex-column justify-content-center px-0 pt-4 pb-0">
                        <div>
                    <img src="{{config('app.frontend_url')}}/storage/assets/images/{{$resource->image}}"
                        alt="Case study: {{ $resource->topic }}"
                        style="width: 100%;overflow:hidden;object-fit: cover;height: 200px; object-position: top;"
                        class="img-fluid text-white"
                        aria-label="Case study image for {{ $resource->topic }}">
                        </div>
                       
                        <h3 class="featurerow1 ft1 text-white">{{ Str::limit($resource->topic, 30) }}</h3>
                        <p class="mb-0 featurerow2 ft2 col-md-10 text-white">{{ Str::limit($resource->description, 50) }}</p>
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
            @endif



        </div>
    </div>
</section>

@endsection