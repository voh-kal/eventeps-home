@extends('layouts')
@section('content')

<!-- Hero Section -->
<section class="hero-section-faqs ">
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
                        <a class="nav-link active" href="/faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/resources">Resources</a>
                    </li>
                </ul>

                <div class="d-flex">
                <a href="/get-started" class="btn btn_outline_light me-2"  target="_blank">Get started</a> 
                    <a href="#" class="btn btn_primary" data-bs-target="#tiddyModal" data-bs-toggle="modal">Schedule a demo</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center text-white">
        <div class="container">
            <div class="row hero-content-about">
                <div class="col-lg-12 mx-auto text-center">
                  
                    <h1 class="display-4 fw-bold mb-4" style="text-transform: uppercase;">
                        <span class="highlight-text">Frequently</span> Asked
                        <span class="highlight-text">Questions</span> 
                    </h1>
                    <div class="col-lg-7 mx-auto text-center">
                        <p class="lead mb-5">
                        Find quick answers to common questions about using TEPS. Whether you're just getting started or looking for specific details, our FAQs provide the information you need to make the most of your event planning experience.
                        </p>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<!-- FAQs -->
<section >
    <div class="container py-5">
        <div class="row g-4 ">
            <div class="col-md-5 my-3">
                <h5 class="section-header mt-5 mb-4" style="padding-left: 10px;">
                    <span>Frequently asked questions</span>
                </h5>
                <h2 style="font-size: 40px; font-weight: 700;">Got questions? We got answers! </h2>
                <p style="font-size:20px;font-weight:400;color:#6C747D" class="col-md-11">Feel free to reach out to us if you have more questions for us.</p>
                <div class="my-3">
                    <a href="#" class="m-0 get_started btn col-md-4">Contact Us <img src="/images/arrow.png" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-md-7 my-3">
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">
                            What types of events can I organize with Eventpeps?
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="accordion-content">
                            <p>Eventpeps supports virtual, hybrid, and in-person events. Whether you're hosting a small meeting, a large conference, or a music festival, our platform is designed to handle events of any size and type.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-header">
                            How does the ticketing system work?
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="accordion-content">
                            <p>Eventpeps supports virtual, hybrid, and in-person events. Whether you're hosting a small meeting, a large conference, or a music festival, our platform is designed to handle events of any size and type.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-header">
                            Can I customize my event page?
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="accordion-content">
                            <p>Eventpeps supports virtual, hybrid, and in-person events. Whether you're hosting a small meeting, a large conference, or a music festival, our platform is designed to handle events of any size and type.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-header">
                            How do I engage my audience during the event?
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="accordion-content">
                            <p>Eventpeps supports virtual, hybrid, and in-person events. Whether you're hosting a small meeting, a large conference, or a music festival, our platform is designed to handle events of any size and type.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-header">
                            Is real-time data available during the event?
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="accordion-content">
                            <p>Eventpeps supports virtual, hybrid, and in-person events. Whether you're hosting a small meeting, a large conference, or a music festival, our platform is designed to handle events of any size and type.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<!-- overall -->
<section style="position: relative" class="py-5">
    <div style="position: absolute; top: 0; left: 0; z-index: -1;">
        <img src="/images/left.png" alt="" style="max-width: 100%; height: auto;">
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


<script>
    document.querySelectorAll('.accordion-header').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.toggle-icon');

            // Toggle active class for content
            content.classList.toggle('active');

            // Toggle icon rotation
            icon.classList.toggle('active');

            // Close other accordion items
            document.querySelectorAll('.accordion-content').forEach(item => {
                if (item !== content) {
                    item.classList.remove('active');
                    item.previousElementSibling.querySelector('.toggle-icon').classList.remove('active');
                }
            });
        });
    });
</script>

@endsection