@extends('layouts')

@section('title', 'TEPS - Your Platform for Seamless Event Management | Virtual, Hybrid & In-Person Events')

@section('meta')
<meta name="description" content="TEPS is your all-in-one platform for seamless event planning, management, and engagement. Create customized event pages, manage registrations, and engage attendees with interactive tools.">
<meta name="keywords" content="event management, event platform, virtual events, hybrid events, event registration, event planning, TEPS, event ticketing">
<meta property="og:title" content="TEPS - Your Platform for Seamless Event Management">
<meta property="og:description" content="Plan and manage seamless events with TEPS. From organizing guest lists to engaging remote audiences, our platform has everything you need.">
<meta property="og:image" content="{{ url('/images/logo.png') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="TEPS - Your Platform for Seamless Event Management">
<meta name="twitter:description" content="Plan and manage seamless events with TEPS. From organizing guest lists to engaging remote audiences, our platform has everything you need.">
<meta name="twitter:image" content="{{ url('/images/logo.png') }}">
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "TEPS",
        "applicationCategory": "EventManagement",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "operatingSystem": "Web",
        "description": "TEPS is your all-in-one platform for seamless event planning, management, and engagement. From organizing guest lists to engaging remote audiences.",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "250"
        },
        "featureList": "Custom Event Pages, Ticketing & Attendee Types, RSVP & Communication, Session Scheduling, Seamless Check-ins, Live Engagement Tools"
    }
</script>
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section ">
    <!-- Main Navigation -->
    @include('navbar')
    <div class="row">
        @include('flashmessage')
    </div>
    <div class="d-flex align-items-center text-white">
        <div class="container">
            <div class="row hero-content">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">
                        YOUR <span class="highlight-text">PLATFORM</span> FOR
                        <span class="highlight-text">SEAMLESS</span> EVENTS
                    </h1>
                    <p class="lead mb-5" style="height: 60px;">
                        Quickly and Easily <span id="typewriter" style="text-transform: capitalize;    color: #007bff;  font-weight: bold;"></span> </p>

                    <div class="row justify-content-center gx-3">
                        <div class="col-auto mt-2">
                            <a href="https://app.eventeps.com/pages/signup" target="_blank" class="m-0 get_started btn-lg" aria-label="Sign up for TEPS event management platform">Sign Up</a>
                        </div>
                        <div class="col-auto mt-2">
                            <a href="#" class="m-0 get_started-a btn-lg" data-bs-target="#tiddyModal" data-bs-toggle="modal" aria-label="Schedule a demo with TEPS">Schedule a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@include('admin.slider')


<section id="why-teps" aria-labelledby="why-teps-heading">
    <div class="container py-5" style="text-align: -webkit-center;">

        <h2 class="section-header mt-5 mb-4" id="why-teps-heading">
            <span>Why TEPS</span>
        </h2>

        <div>
            <h3 class="sectionH4 col-lg-7 col-md-9 mb-4">More than just <span class="highlight-text">a software,</span> We are Innovators with <span class="highlight-text">years of experience</span>.</h3>
            <p class="col-md-10 sectionP">From organising guest lists to engaging remote audiences, our platform has everything you need to create and manage seamless events, all in one place.</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-4 my-3">
            <div class="col-md-4">
                <div class="card h-100 border-0" style="background-color: #F2FBFF;    border-radius: 25px;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 ">
                        <h3 class="row1" style=" color: #2145FF;">Simple</h3>
                        <h3 class="row1">for you to use.</h3>
                        <p class="mb-0 row2">Use existing templates, Customize event websites to brand, assign roles to team members, schedule emails to guests, and much more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card h-100 border-0 ">
                    <div class="card-body p-0">
                        <div class="bg-alice-blue d-flex justify-content-center" style="padding: 100px 20px 0">

                            <img src="/images/firstrow.png" alt="TEPS event management dashboard screenshot" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- second row -->
        <div class="row g-4 my-3">
            <div class="col-md-8">
                <div class="card h-100 border-0 ">
                    <div class="card-body p-0">
                        <div class="">

                            <img src="/images/secondrow.png" alt="TEPS attendee engagement tools screenshot" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0" style="background-color: #F2FBFF;    border-radius: 25px;">
                    <div class="card-body d-flex flex-column justify-content-center p-4">
                        <h3 class="row1" style=" color: #2145FF;">Versatile. </h3>
                        <h3 class="row1">Built <span class="highlight-text">for Every </span> Event</h3>
                        <p class="mb-0 row2">TEPS adapts to every event type-from conferences to team retreats -designed to support events of all sizes and formats with ease. Whether you are managing registration for 50 or 5,000 guests, TEPS makes the process smooth, intuitive, and stress-free</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- third row -->
        <div class="row g-4 my-3">
            <div class="col-md-4">
                <div class="card h-100 border-0" style="background: rgb(163,233,255); background: linear-gradient(184deg, rgba(163,233,255,1) 9%, rgba(0,127,213,1) 62%);   border-radius: 25px;">
                    <div class="card-body d-flex flex-column justify-content-center p-4">
                        <h3 class="row1 text-white">Event</h3>
                        <h3 class="row1 text-white">
                            in just a click.</h3>
                        <p class="mb-0 row2 text-white">Planning a Virtual, Hybrid or In-person event in a click</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card h-100 border-0 ">
                    <div class="card-body p-0">
                        <div class="bg-alice-blue d-flex justify-content-center" style="padding: 100px 20px 0">
                            <img src="/images/thirdrow.png" alt="TEPS attendee engagement tools" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- features -->
<section id="features" aria-labelledby="features-heading" style="background-color: #EFEFEF;">
    <div class="container py-5" style="text-align: -webkit-center;">

        <h2 class="section-header mt-5 mb-4" id="features-heading">
            <span>Our Features</span>
        </h2>

        <div>
            <h3 class="sectionH4 col-lg-7 col-md-9 mb-4">Powerful <span>tools</span> to make every event a <span>success</span>.</h3>
            <p class="col-md-10 sectionP">All-in-one platform for seamless event planning, management, and engagement. Simplify every step, from ticketing to post-event analytics, for a smooth experience.</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-4 ">
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/el1.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Custom Event Pages</h3>
                        <p class="mb-0 featurerow2 col-md-10">Create branded event pages with all essential details to engage your audience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev2.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Ticketing & Attendee Types</h3>
                        <p class="mb-0 featurerow2 col-md-10">Manage various ticket types with options for early bird pricing and discounts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev3.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">RSVP & Communication</h3>
                        <p class="mb-0 featurerow2 col-md-10">Simplify RSVP handling and stay connected with attendees via email and WhatsApp.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev4.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Session Scheduling</h3>
                        <p class="mb-0 featurerow2 col-md-10">Organize speaker schedules and sessions seamlessly, with tools for real-time updates.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev5.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Seamless Check-ins</h3>
                        <p class="mb-0 featurerow2 col-md-10">Generate unique QR codes for fast and secure check-ins, whether onsite or virtual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev6.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Live Engagement Tools</h3>
                        <p class="mb-0 featurerow2 col-md-10">Use live polling, surveys, and Q&A features to keep attendees engaged during the event.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev7.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Real-Time Analytics</h3>
                        <p class="mb-0 featurerow2 col-md-10">Track event performance with live analytics for insights on attendance and engagement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev8.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Post-Event Communication</h3>
                        <p class="mb-0 featurerow2 col-md-10">Send feedback surveys and follow-up emails to continue engaging attendees and gathering valuable insights.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-4 pb-0">
                        <img src="/images/ev9.png" alt="TEPS features" style="width: fit-content;">
                        <h3 class="featurerow1">Detailed Reporting</h3>
                        <p class="mb-0 featurerow2 col-md-10">Get comprehensive post-event reports to measure success and plan for future events.</p>
                    </div>
                </div>
            </div>
            <div class="col my-5 text-center">
                <a href="/get-started" class="get_started btn-md mx-auto" target="_blank" aria-label="get started with TEPS">Get started</a>
            </div>
        </div>
    </div>
</section>



<!-- services -->
<section id="services" aria-labelledby="services-heading">
    <div class="container pt-5" style="text-align: -webkit-center;">

        <h2 class="section-header mt-5 mb-4" id="services-heading">
            <span>Our Services</span>
        </h2>

        <div>
            <h3 class="sectionH4 col-lg-7 col-md-9 mb-2"><span>Seemless</span> setup. <span>Effortless</span> engagement.</h3>
            <h3 class="sectionH4 col-lg-7 col-md-9 mb-4"><span>Powerful</span> results.</h3>
        </div>
    </div>

    <div class="container pt-3">
        <div class="row g-4 mt-0">
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h3 class="featurerow1" style="    margin: 0px 0px 20px;">Set Up and Manage Your Event</h3>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="set up and manage your event" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Create Customized Event Pages: Design and set up personalized event pages with branding and all relevant details</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="organise and manage speakers" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Speaker and Session Management: Organize and manage speaker schedules and session agendas effortlessly.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="manage ticket sales" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Ticket Sales and Discounts: Manage ticket sales, including discount codes and early bird pricing.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="rsvp management" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>RSVP Management: Handle RSVPs seamlessly through email and WhatsApp.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="attendee registration management" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Registration Management: Facilitate smooth online registration for all attendees.</p>
                            </div>
                        </div>

                        <div class="col text-left">
                            <a href="/get-started" class="get_started btn-md mx-auto" target="_blank" aria-label="get started with TEPS">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <img src="/images/se1.png" alt="TEPS management system" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
        <div class="row g-4 mt-0">

            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <img src="/images/se2.png" alt="attendee engagement" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h3 class="featurerow1" style="    margin: 0px 0px 20px;">Engage and Interact with Attendees</h3>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="activate live polling & Q&A" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Activate Live Polling & Q&A: Keep attendees engaged with interactive polling and Q&A features throughout the event.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="schedule email reminders and teasers" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Schedule Email Reminders and Teasers: Automate communication with attendees using email reminders and event teasers.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="track real-time event performance" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Track Real-Time Event Performance: Monitor attendance, engagement, and other key metrics with live analytics.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="generate post-event reports" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Generate Post-Event Reports: Create detailed reports to analyze event success.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="create content QR codes" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Create Content QR Codes: Generate QR codes for easy access to event programs, menus, and surveys.</p>
                            </div>
                        </div>

                        <a href="/get-started" class="get_started mx-0 col-md-4" style="padding: 10px;margin:0px" target="_blank" aria-label="get started with TEPS">Get started</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-0">
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h3 class="featurerow1" style="    margin: 0px 0px 20px;">Facilitate Check-ins</h3>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="facilitate onsite check-ins" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Facilitate Onsite Check-ins</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="facilitate onsite check-ins" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Facilitate Onsite Check-ins: Provide check-in officers and queue managers for smooth attendee entry.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="implement QR code check-ins" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Implement QR Code Check-ins: Speed up the check-in process with unique QR codes for each attendee.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="print badges and labels onsite" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Print Badges and Labels Onsite: Offer onsite badge and label printing for convenience.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="provide helpdesk support" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Provide Helpdesk Support: Assist attendees with helpdesk services throughout the event.</p>
                            </div>
                        </div>
                        <a href="/get-started" class="get_started mx-0 col-md-4" style="padding: 10px;margin:0px" target="_blank" aria-label="get started with TEPS">Get started</a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <img src="/images/se3.png" alt="TEPS event management" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- video section -->
 @include('videosection')




<!-- case studies -->
<section id="case-studies" aria-labelledby="case-studies-heading" style="background-color: #1F233E;">
    <div class="container py-5" style="text-align: -webkit-center;">

        <h2 class="section-header mt-5 mb-4" id="case-studies-heading">
            <span>Case Studies</span>
        </h2>

        <div>
            <h3 class="sectionH4 col-lg-7 col-md-9 mb-4 text-white">Curious if <span>TEPS</span> is Right for Your <span>Event</span>?</h3>
            <p class="col-md-10 sectionP text-white">Discover how Eventeps has helped businesses and organizations create seamless and successful events. From virtual conferences to large in-person gatherings, our platform has delivered top-notch solutions for every scenario.</p>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row g-4 ">

            @if(count($apiResources) > 0)
            @foreach($apiResources as $resource)
            <div class="col-md- col-lg-3 my-3">
                <div class="card h-100 cards border-0 custom-border2 " style="    background: none;">
                    <div class="card-body card-bodys d-flex flex-column justify-content-center pb-1">
                        <div style="height: 200px; width: 100%; overflow: hidden;">
                            <img src="{{env('TEPS')}}/storage/assets/images/{{$resource['image']}}"
                                alt="Teps resource image"
                                style="object-fit: cover;"
                                class="img-fluid">
                        </div>
                        <h3 class="featurerow1 ft1 text-white">{{ Str::limit($resource['topic'], 30) }}</h3>
                        <p class="mb-0 featurerow2 ft2 col-md-10 text-white">{{ Str::limit($resource['description'], 50) }}</p>
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        <div class="row justify-content-center gx-3 my-5">
            <div class="col-auto mt-2">

                <a href="/use-cases" class="m-0 get_started-a btn-md">See more case studies <img src="/images/arrow.png" alt="see more TEPS cases" class="img-fluid"></a>
            </div>
            <div class="col-auto mt-2">
                <a href="https://app.eventeps.com/" class="m-0 get_started btn-md" target="_blank" rel="noopener" aria-label="Login to TEPS">Login</a>
            </div>
        </div>

    </div>
</section>



<!-- FAQs -->
<section id="faqs" aria-labelledby="faqs-heading" style="background-color: #fafafa;">
    <div class="container py-5">
        <div class="row g-4 ">
            <div class="col-md-5 my-3">
                <h2 class="section-header mt-5 mb-4" id="faqs-heading" style="padding-left: 10px;">
                    <span>Frequently asked questions</span>
                </h2>
                <h3 style="font-size: 40px; font-weight: 700;">Got questions? We got answers! </h3>
                <p style="font-size:20px;font-weight:400;color:#6C747D" class="col-md-11">Feel free to reach out to us if you have more questions for us.</p>
                <div class="my-3">
                    <a href="#" class="m-0 get_started btn-md" data-bs-toggle="modal" data-bs-target="#contactModal" aria-label="Open contact form modal">Contact Us <img src="/images/arrow.png" alt="contact us" class="img-fluid" width="16" height="16"></a>
                  @include('contactmodal')

                </div>
            </div>
            <div class="col-md-7 my-3">
                <div class="accordion" itemscope itemtype="https://schema.org/FAQPage">
                    <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="accordion-header" aria-expanded="false" aria-controls="faq-1">
                            <span itemprop="name">What types of events can I organize with Eventeps?</span>
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div id="faq-1" class="accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Eventeps supports virtual, hybrid, and in-person events. Whether you're hosting a small meeting, a large conference, or a music festival, our platform is designed to handle events of any size and type.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="accordion-header" aria-expanded="false" aria-controls="faq-2">
                            <span itemprop="name">How does the ticketing system work?</span>
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div id="faq-2" class="accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Our ticketing system allows you to create multiple ticket types with different pricing tiers, early bird discounts, and promotional codes. You can track sales in real-time and manage attendee information seamlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="accordion-header" aria-expanded="false" aria-controls="faq-3">
                            <span itemprop="name">Can I customize my event page?</span>
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div id="faq-3" class="accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Yes, TEPS offers fully customizable event pages that you can brand with your logo, colors, and messaging. You can add custom sections, speaker bios, schedules, and more to create a professional and engaging event website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="accordion-header" aria-expanded="false" aria-controls="faq-4">
                            <span itemprop="name">How do I engage my audience during the event?</span>
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div id="faq-4" class="accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>TEPS offers a suite of engagement tools including live polling, Q&A sessions, interactive surveys, and networking features. These tools work for both virtual and in-person attendees, allowing you to create an interactive experience for everyone.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="accordion-header" aria-expanded="false" aria-controls="faq-5">
                            <span itemprop="name">Is real-time data available during the event?</span>
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div id="faq-5" class="accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Yes, TEPS provides real-time analytics and reporting throughout your event. You can monitor attendance, engagement metrics, poll results, and other key data points from an intuitive dashboard to make informed decisions during the event.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>




<script>
    document.querySelectorAll('.accordion-header').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.toggle-icon');
            const expanded = button.getAttribute('aria-expanded') === 'true' || false;

            // Update ARIA state
            button.setAttribute('aria-expanded', !expanded);

            // Toggle active class for content
            content.classList.toggle('active');

            // Toggle icon rotation
            icon.classList.toggle('active');

            // Close other accordion items
            document.querySelectorAll('.accordion-content').forEach(item => {
                if (item !== content) {
                    item.classList.remove('active');
                    const otherButton = item.previousElementSibling;
                    otherButton.setAttribute('aria-expanded', 'false');
                    otherButton.querySelector('.toggle-icon').classList.remove('active');
                }
            });
        });
    });
</script>
<script>
    // AJAX handler for contact form submission
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactForm');
        if (form) {
            var submitBtn = document.getElementById('contactSubmitBtn');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Processing...';
                }
                var formData = new FormData(form);
                var settings = {
                    url: "{{ config('app.base_url') }}/contact-us",
                    method: "POST",
                    timeout: 0,
                    headers: {
                        "Accept": "application/json"
                    },
                    processData: false,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent',
                            text: "Thank you for contacting us! We'll get back to you soon.",
                            confirmButtonText: 'OK'
                        });
                        form.reset();
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Send Message';
                        }
                    },
                    error: function(xhr) {
                        var msg = 'There was an error submitting your message. Please try again.';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;
                            msg = Object.values(errors).map(function(arr) { return arr.join(' '); }).join(' ');
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            msg = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Submission Failed',
                            text: msg,
                            confirmButtonText: 'OK'
                        });
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Send Message';
                        }
                    }
                };
                if (window.$ && $.ajax) {
                    $.ajax(settings);
                } else {
                    // fallback to fetch if jQuery is not available
                    fetch(settings.url, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json'
                            },
                            body: formData
                        })
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(data) {
                            if (data && data.errors) {
                                var msg = Object.values(data.errors).map(function(arr) { return arr.join(' '); }).join(' ');
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Submission Failed',
                                    text: msg,
                                    confirmButtonText: 'OK'
                                });
                                if (submitBtn) {
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = 'Send Message';
                                }
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Message Sent',
                                    text: "Thank you for contacting us! We'll get back to you soon.",
                                    confirmButtonText: 'OK'
                                });
                                form.reset();
                                if (submitBtn) {
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = 'Send Message';
                                }
                            }
                        })
                        .catch(function(err) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Submission Failed',
                                text: 'There was an error submitting your message. Please try again.',
                                confirmButtonText: 'OK'
                            });
                            if (submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.textContent = 'Send Message';
                            }
                        });
                }
            });
        }
        // Reset modal on close
        var contactModal = document.getElementById('contactModal');
        if (contactModal) {
            contactModal.addEventListener('hidden.bs.modal', function() {
                form.reset();
                form.classList.remove('d-none');
                document.getElementById('contactSuccess').classList.add('d-none');
            });
        }
    });
</script>

<script>
    const sentences = [
        "Sell tickets",
        "Create landing pages",
        "Create polls",
        "Communicate with attendees",
        "Generate QR codes",
        "Check-in guests",
        "Schedule Sessions",
        "Manage Speakers",
    ];

    const el = document.getElementById("typewriter");
    let sentenceIndex = 0;
    let charIndex = 0;
    let typing = true;

    function typeEffect() {
        const currentSentence = sentences[sentenceIndex];

        if (typing) {
            el.textContent = currentSentence.substring(0, charIndex + 1);
            charIndex++;

            if (charIndex === currentSentence.length) {
                typing = false;
                setTimeout(typeEffect, 1500); // pause before deleting
                return;
            }
        } else {
            el.textContent = currentSentence.substring(0, charIndex - 1);
            charIndex--;

            if (charIndex === 0) {
                typing = true;
                sentenceIndex = (sentenceIndex + 1) % sentences.length;
            }
        }

        setTimeout(typeEffect, typing ? 100 : 50); // typing speed vs deleting speed
    }

    typeEffect();

    // Check if marquee content needs to be duplicated for smooth infinite scrolling
    document.addEventListener('DOMContentLoaded', function() {
        const marqueeContent = document.querySelector('.marquee-content');
        if (marqueeContent) {
            // Adjust animation duration based on the number of items for smooth scrolling
            const itemCount = document.querySelectorAll('.marquee-item').length / 2; // Divided by 2 because we duplicated the items
            const scrollSpeed = itemCount * 5; // 5 seconds per item
            marqueeContent.style.animationDuration = scrollSpeed + 's';
        }
    });
</script>

<style>
    /* Default Navigation Styles */
    .hero-section {
        position: relative;
        z-index: 1;
    }

    .navbar {
        position: relative;
        z-index: 1031;
    }

    /* Button styles to prevent text wrapping */
    .hero-content .get_started,
    .hero-content .get_started-a {
        white-space: nowrap;
        width: 100%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    /* Ensure col-auto takes appropriate width */
    .hero-content .col-auto {
        flex: 0 0 auto;
        width: auto;
    }

    /* Infinite Marquee Slider */
    .marquee-container {
        width: 100%;
        overflow: hidden;
        position: relative;
        padding: 20px 0;
    }

    .marquee-content {
        display: flex;
        animation: marquee 30s linear infinite;
    }

    .marquee-item {
        flex-shrink: 0;
        margin: 0 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .marquee-item img {
        max-height: 80px;
        width: auto;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Pause animation when hovering */
    .marquee-container:hover .marquee-content {
        animation-play-state: paused;
    }
</style>

@endsection