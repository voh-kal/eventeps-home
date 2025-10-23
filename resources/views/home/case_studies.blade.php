@extends('layout.homelayout')
@section('content')

<style>
    .paddd {
        padding: 30px 0px;
    }

    .box_pad {
        padding: 3% 10%;
    }

    @media (max-width: 400px) {
        .box_pad {
            padding: 20px;
        }
    }

    .word {
        font-weight: 600;
        font-size: 21px;
    }

    .word1 {
        font-weight: 700;
        font-size: 30px;
        line-height: initial;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    body {
        color: black;
    }

    .body_top {
        margin-top: 114px !important
    }

    .home_btn {
        margin-right: 25px;
        background: #fff;

        padding: 11px;
    }
</style>
<!--<div class="bg-info text-center" style="position:fixed; z-index:1; padding:10px; margin-top:56px; width: 100%">
    <p style="margin:0px">Planning a Virtual, Hybrid or in-person events? <a href="/homepage" style="color: white;">Learn more</a></p>
</div> -->
<div class="container body_top">

    <div class="updat">
        <div style="position: relative;">
            <img src="/img/dots.png" alt="" style="position: absolute; left: -107px;">
        </div>

        <div style="top: 144px; position: relative; left: 1221px;">
            <img src="/img/dots.png" alt="" style="position: absolute;">
        </div>
    </div>
    <img src="/img/case1.png" alt="case" class="rounded">

    <div class="paddd">
        <p class="word mt-4 text-center">Power of TEPS Case Study</p>
        <p class="text-justify">Wondering if you can use TEPS for your event? The answer is yes...whether you're an event management professional or a beginner, TEPS helps you to deliver successful single day or multi day events - Conferences, Sales workshops, End of year parties, festivals from 10 people to hundreds of thousands of attendees.</p>
    </div>
    <div class="paddd">
        <p class="word mt-4 text-center">Scenario</p>
        <p class=" text-justify">Nexford University was hosting their 2023 graduation ceremony, expecting numerous guests and aiming for a smooth and efficient entry process. They needed a solution to manage access control for different guest categories while ensuring a positive experience for everyone. Additionally, the ceremony featured an exhibition requiring exhibitor accreditation.</p>
    </div>
    <div>
        <div class="updat1">
            <div style="position: relative;">
                <img src="/img/slice1.png" alt="" style="position: absolute; left: -283px;">
            </div>


        </div>
        <div class="pt-3 pb-3 pl-5 pr-5 rounded" style="    background: linear-gradient(10deg, #2145FF,#3EDAD8);    color: white;">
            <p class="word mt-4 text-center">Challenges</p>
            <!-- <p class="p-0">Sandra had many challenges she identified;</p> -->
            <ul style="list-style-type: circle;" class="text-justify">
                <li class="pt-3">Ensuring quick and hassle-free entry for a large number of attendees.</li>
                <li class="pt-3">Verifying guest credentials efficiently.</li>
                <li class="pt-3">Distinguishing different guest categories for access control.</li>
                <li class="pt-3">Maintaining a smooth and organized flow at the entry point. </li>
                <li class="pt-3">Managing exhibitor accreditation for a seamless exhibition experience.</li>
            </ul>
        </div>

    </div>
    <div class="updat">
        <div style="top: 22px; position: relative; left: 1221px;">
            <img src="/img/dots.png" alt="" style="position: absolute;">
        </div>
    </div>
    <div class="pt-3 pb-3 pl-3 pr-3 paddd">
        <p class="word mt-4 text-center">Solutions</p>
        <ul style="list-style-type: disc;" class="text-justify">
            <li class="pt-3"><span style="font-weight: 600">QR Code Integration:</span> TEPS provided personalized QR codes for each attendee, enabling swift entry through simple scanning. Guests are happy when there's no delay.</li>
            <li class="pt-3"><span style="font-weight: 600">Swift Name Search: </span>The TEPS platform offered a lightning-fast name search function for instant credential verification.</li>
            <li class="pt-3"><span style="font-weight: 600">Access Wrist Tags: </span>Personalized wrist tags were provided for easy identification and access control based on guest categories.</li>
            <li class="pt-3"><span style="font-weight: 600">Exhibitor Accreditation: </span>TEPS streamlined the exhibitor accreditation process, ensuring authorized participation in the exhibition.</li>

        </ul>
    </div>

    <div class="pt-3 pb-3 pl-5 pr-5 rounded" style="    background: linear-gradient(10deg, #2145FF,#3EDAD8);    color: white;">
        <p class="word mt-4 text-center">Results</p>
        <!-- <p class="p-0">Sandra had many challenges she identified;</p> -->
        <ul style="list-style-type: disc;" class="text-justify">
            <li class="pt-3"><span style="font-weight: 600"> Seamless Entry: </span> QR codes eliminated queues and manual checks, speeding up the entry process.</li>
            <li class="pt-3"><span style="font-weight: 600">Fast and Accurate Verification: </span> Instant name search on the platform ensured quick and accurate guest validation.</li>
            <li class="pt-3"><span style="font-weight: 600">Organized Access Control: </span> Wristbands categorized guests, allowing smooth entry management according to their access level.</li>
            <li class="pt-3"><span style="font-weight: 600"> Memorable and Stress-free Experience:</span> The streamlined process minimized wait times and created a positive experience for everyone involved.</li>
            <li class="pt-3"><span style="font-weight: 600">Successful Exhibition Management:</span> TEPS's accreditation system ensured a well-organized and secure exhibition experience for both exhibitors and attendees.</li>

        </ul>
    </div>

    <div class="paddd">
        <p class="word mt-4 text-center">Overall</p>
        <p class=" text-justify">Nexford University used TEPS to achieve a smooth and efficient graduation ceremony. The technology-driven approach eliminated manual processes, ensured accurate identification, and allowed guests to focus on celebrating this momentous occasion. Additionally, TEPS's exhibitor accreditation system facilitated a seamless and organized exhibition experience.</p>
    </div>


    <section class="paddd">
        <div class="container mb-3 mt-3 p-0">
            <div style="background: rgba(37, 36, 50, 1);" class="box_pad text-center mb-5 rounded">
                <p class="text-white">Wondering where to start?</p>
                <p class="text-white word1">TEPS offers easy solutions with a user friendly intuitive interface.</p>
                <a class="btn home_btn col-sm-6 col-lg-3" href="#">Get Started <i class="ti-arrow-right" style="font-size: x-small; padding: 0px 10px;"></i></a>
            </div>

        </div>
    </section>

    <div class="row">
        <div class="col-md-8 m-auto">
            <p>Share case study via <span class="m-auto">
                    <!-- <a href="#"><img src="/img/fb.png" alt=""></a> -->
                    <a href="https://instagram.com/thepowerofteps"><img src="/img/insta.png" alt=""></a>
                    <!-- <a href="#"><img src="/img/twitter.png" alt=""></a> -->
                    <!-- <a href="#"><img src="/img/youtube.png" alt=""></a> -->
                    <a href="https://www.linkedin.com/company/thepowerofteps"><img src="/img/casein.png" alt=""></a>
                </span></p>

        </div>


    </div>




</div>



@endsection