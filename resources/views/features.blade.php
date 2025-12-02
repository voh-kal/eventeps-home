@extends('layouts')
@section('content')

<!-- Hero Section -->
<section class="hero-section-feature ">
    <!-- Main Navigation -->
    @include('navbar')
    <div class="d-flex align-items-center text-white">
        <div class="container">
            <div class="row hero-content-feature">
                <div class="col-lg-9 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4" style="text-transform: uppercase;">

                        Explore Our <span class="highlight-text">Powerful</span> Event
                        <span class="highlight-text">Features</span>
                    </h1>

                    <p class="lead mb-5">
                        Unlock a suite of innovative tools designed to streamline every aspect of your event. From planning and engagement to analytics and feedback, our features empower you to create unforgettable experiences effortlessly.
                    </p>



                </div>
            </div>
        </div>
    </div>

</section>



<section>
    <div class="container my-5">
        <ul class="nav " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pre-event</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">During Event</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Post Event</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row g-4 my-3">
                    <div class="col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-body d-flex flex-column justify-content-center p-4 ">
                                <h3 class="row1">Comprehensive Event Management Tools</h3>
                                <p class="mb-0 row2">Effortlessly manage every aspect of your event with TEPS' all-in-one platform. From ticketing and attendee registration to engagement and analytics, we provide powerful tools designed to streamline the planning process and enhance the attendee experience."
                                    This heading and summary highlight the breadth of services offered while emphasizing ease of use and comprehensive management.</p>
                                <a href="#" class="get_started mx-0 col-md-5" style="padding: 10px;margin: 20px 0px;">Explore This Tool</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 ">
                            <div class="card-body p-0">
                                <div class="">

                                    <img src="/images/fe1.png" alt="Event management dashboard screenshot" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row g-4 my-3">
                    <div class="col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-body d-flex flex-column justify-content-center p-4 ">
                                <h3 class="row1">Enhance Your Event in Real-Time</h3>
                                <p class="mb-0 row2">Keep the momentum going during your event with features designed to ensure smooth operations and maximize engagement. From seamless check-ins to live polls and surveys, TEPS offers the tools you need to create an interactive and efficient event experience.</p>
                                <a href="#" class="get_started mx-0 col-md-5" style="padding: 10px;margin: 20px 0px;">Explore This Tool</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 ">
                            <div class="card-body p-0">
                                <div class="">
                                    <img src="/images/fe2.png" alt="Attendee engagement tools screenshot" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row g-4 my-3">
                    <div class="col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-body d-flex flex-column justify-content-center p-4 ">
                                <h3 class="row1">Maximize Impact After the Event</h3>
                                <p class="mb-0 row2">Your event doesn't end when the last session wraps up. With our post-event features, you can gather valuable feedback, analyze performance metrics, and maintain engagement with your audience through follow-up communications. Turn insights into action and make every event better than the last.</p>
                                <a href="#" class="get_started mx-0 col-md-5" style="padding: 10px;margin: 20px 0px;">Explore This Tool</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 ">
                            <div class="card-body p-0">
                                <div class="">
                                    <img src="/images/fe3.png" alt="Post-event analytics dashboard screenshot" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- features -->
<section style="background-color: #EFEFEF;">
    <div class="container py-5" style="text-align: -webkit-center;">

        <h5 class="section-header mt-5 mb-4">
            <span>Our Features</span>
        </h5>

        <div>
            <h4 class="sectionH4 col-md-7 mb-4">Powerful <span>tools</span> to make every event a <span>success</span>.</h4>
            <p class="col-md-10 sectionP">All-in-one platform for seamless event planning, management, and engagement. Simplify every step, from ticketing to post-event analytics, for a smooth experience.</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-4 ">
            <div class="col-md-4 my-3">
                <div class=" card h-100 border-0" style="    background: #04C2FF;">
                    <div class="card-body d-flex flex-column p-5 text-center">
                        <h3 class="featurerow1 text-white">Custom Event Pages</h3>
                        <a href="#" class="get_started mx-0 " style="padding: 10px;margin: 10px 0px;">Explore This Tool</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev2.png" alt="Ticketing and attendee types icon" style="width: fit-content;">
                        <h3 class="featurerow1">Ticketing & Attendee Types</h3>
                        <p class="mb-0 featurerow2 col-md-10">Manage various ticket types with options for early bird pricing and discounts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev3.png" alt="RSVP and communication icon" style="width: fit-content;">
                        <h3 class="featurerow1">RSVP & Communication</h3>
                        <p class="mb-0 featurerow2 col-md-10">Simplify RSVP handling and stay connected with attendees via email and WhatsApp.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev4.png" alt="Session scheduling icon" style="width: fit-content;">
                        <h3 class="featurerow1">Session Scheduling</h3>
                        <p class="mb-0 featurerow2 col-md-10">Organize speaker schedules and sessions seamlessly, with tools for real-time updates.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev5.png" alt="Seamless check-ins icon" style="width: fit-content;">
                        <h3 class="featurerow1">Seamless Check-ins</h3>
                        <p class="mb-0 featurerow2 col-md-10">Generate unique QR codes for fast and secure check-ins, whether onsite or virtual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev6.png" alt="Live engagement tools icon" style="width: fit-content;">
                        <h3 class="featurerow1">Live Engagement Tools</h3>
                        <p class="mb-0 featurerow2 col-md-10">Use live polling, surveys, and Q&A features to keep attendees engaged during the event.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev7.png" alt="Real-time analytics icon" style="width: fit-content;">
                        <h3 class="featurerow1">Real-Time Analytics</h3>
                        <p class="mb-0 featurerow2 col-md-10">Track event performance with live analytics for insights on attendance and engagement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev8.png" alt="Feedback and survey icon" style="width: fit-content;">
                        <h3 class="featurerow1">Post-Event Communication</h3>
                        <p class="mb-0 featurerow2 col-md-10">Send feedback surveys and follow-up emails to continue engaging attendees and gathering valuable insights.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="custom-border card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column p-4 pb-0">

                        <img src="/images/ev9.png" alt="Event branding icon" style="width: fit-content;">
                        <h3 class="featurerow1">Detailed Reporting</h3>
                        <p class="mb-0 featurerow2 col-md-10">Get comprehensive post-event reports to measure success and plan for future events.</p>
                    </div>
                </div>
            </div>
            <div class="col my-5 text-center">

                <a href="#" class="get_started col-md-2" data-bs-toggle="modal" data-bs-target="#zohoFormModal">Get started</a>
            </div>
        </div>
    </div>
</section>



<!-- services -->
<section>
    <div class="container pt-5" style="text-align: -webkit-center;">

        <h5 class="section-header mt-5 mb-4">
            <span>Our Services</span>
        </h5>

        <div>
            <h4 class="sectionH4 col-md-9 mb-2"><span>Seemless</span> setup. <span>Effortless</span> engagement.</h4>
            <h4 class="sectionH4 col-md-7 mb-4"><span>Powerful</span> results.</h4>
        </div>
    </div>

    <div class="container pt-3">
        <div class="row g-4 mt-0 mb-5">
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h3 class="featurerow1" style="    margin: 0px 0px 20px;">Set Up and Manage Your Event</h3>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Create Customized Event Pages: Design and set up personalized event pages with branding and all relevant details</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Speaker and Session Management: Organize and manage speaker schedules and session agendas effortlessly.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Ticket Sales and Discounts: Manage ticket sales, including discount codes and early bird pricing.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>RSVP Management: Handle RSVPs seamlessly through email and WhatsApp.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Registration Management: Facilitate smooth online registration for all attendees.</p>
                            </div>
                        </div>


                        <a href="#" class="get_started mx-0 col-md-4" style="padding: 10px;margin:0px" data-bs-toggle="modal" data-bs-target="#zohoFormModal">Get started</a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <img src="/images/se1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
        <div class="row g-4 mt-0 mb-5">

            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <img src="/images/se2.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h3 class="featurerow1" style="    margin: 0px 0px 20px;">Engage and Interact with Attendees</h3>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Activate Live Polling & Q&A: Keep attendees engaged with interactive polling and Q&A features throughout the event.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Schedule Email Reminders and Teasers: Automate communication with attendees using email reminders and event teasers.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Track Real-Time Event Performance: Monitor attendance, engagement, and other key metrics with live analytics.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Generate Post-Event Reports: Create detailed reports to analyze event success.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Create Content QR Codes: Generate QR codes for easy access to event programs, menus, and surveys.</p>
                            </div>
                        </div>

                        <a href="#" class="get_started mx-0 col-md-4" style="padding: 10px;margin:0px" data-bs-toggle="modal" data-bs-target="#zohoFormModal">Get started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-0 mb-5">
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h3 class="featurerow1" style="    margin: 0px 0px 20px;">Facilitates Check-ins</h3>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Facilitate Onsite Check-ins</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Facilitate Onsite Check-ins: Provide check-in officers and queue managers for smooth attendee entry.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Implement QR Code Check-ins: Speed up the check-in process with unique QR codes for each attendee.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Print Badges and Labels Onsite: Offer onsite badge and label printing for convenience.</p>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="">
                                <img src="/images/mark.png" alt="" style="width: fit-content;">
                            </div>
                            <div class="col" style="margin-left: 10px;">
                                <p>Provide Helpdesk Support: Assist attendees with helpdesk services throughout the event.</p>
                            </div>
                        </div>

                        <a href="#" class="get_started mx-0 col-md-4" style="padding: 10px;margin:0px" data-bs-toggle="modal" data-bs-target="#zohoFormModal">Get started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class=" card h-100 border-0" style="    background: none;">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <img src="/images/se3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection