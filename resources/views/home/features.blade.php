@extends('layout.homelayout')
@section('content')

<style>
    .coll {
        padding-top: 28px;
    }

    .updat,
    .updat1 {
        display: block;
    }

    @media(max-width:1024px) {

        .updat,
        .updat1 {
            display: none !important;
        }
    }

    .color2 {
        background: rgba(133, 237, 187, 0.1);

    }

    .color1 {
        background: rgba(235, 247, 252, 1)
    }

    .self1 {
        padding-bottom: 59px;
    }

    .self2 {
        padding-bottom: 30px;
    }

    .self3 {
        padding-bottom: 5px;
    }

    .box-title {
        font-size: 21px;
        color: #4183D7;
    }

    .box-text {
        font-size: small;
    }

    .word {
        font-weight: 500;
        font-size: 21px;
    }

    .na_me {
        margin: 0;
        margin-top: 15px;
        font-size: large;
    }

    .posi_tion {
        color: #2c7cf1;
        font-weight: 500;
    }

    body {
        color: black;
    }

    .body_top {
        margin-top: 114px !important
    }

    .social-box .box {

        border-radius: 10px;
        padding: 40px 10px;
        margin: 20px 0px;
        cursor: pointer;
        transition: all 0.5s ease-out;
        max-height: 275px;
    }

    .social-box .box:hover {
        box-shadow: 0 0 6px #4183D7;
    }

    .social-box .box .box-text {
        margin: 20px 0px;
        font-size: 15px;
        line-height: 30px;
    }

    .social-box .box .box-btn a {
        text-decoration: none;
        color: #4183D7;
        font-size: 16px;
    }

    .box_pad {
        padding: 7% 10%;
    }

    @media (max-width: 400px) {
        .box_pad {
            padding: 20px;
        }

        .body_top {
            margin-top: 40px !important
        }

        .box_head {
            font-size: 30px !important;
            padding: 53px 0px !important;
        }
    }

    .box_head {
        font-size: 32px;
        font-weight: 600;
        padding: 0px 135px;
    }
</style>


<div class="container text-center body_top">
    <h2 class="box_head">Whether it's a virtual, hybrid or in-person event, TEPs sees to it that planning and execution is seamless.</h2>

</div>
<div class="updat">
    <div style="position: relative;">
        <img src="/img/dots.png" alt="" style="position: absolute; left: 37px;">
    </div>

    <div style="top: 144px; position: relative; left: 1401px;">
        <img src="/img/dots.png" alt="" style="position: absolute;">
    </div>
</div>

<div class="social-box mt-5">
    <div class="container">
        <p class="text-left word mt-4">Pre Event</p>
        <div class="row">

            <div class="col-lg-4 col-xs-12 col-md-6 text-center">
                <div class="box pl-3 color1" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Attendee Registration</h3>
                    </div>
                    <div class="self1" style="">
                        <span class="box-text">Fully integrated online registration with automated email templates</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-xs-12 col-md-6  text-center">
                <div class="box pl-3 color2" style="">
                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Event Webpages</h3>
                    </div>
                    <div>
                        <span class="box-text">Event landing page that show your attendees all they need to know about the event after registering. Fully customizable with your branding.</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-xs-12 col-md-6 text-center">
                <div class="box pl-3 color1" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Ticketing</h3>
                    </div>
                    <div class="self2" style="">
                        <span class="box-text">Create tickets to your events with the possibility of more than one ticket type to give attendees various access levels.</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-xs-12 col-md-6 text-center">
                <div class="box pl-3 color2" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Discount Codes</h3>
                    </div>
                    <div class="self1">
                        <span class="box-text">Setup discount codes for groups or promotional purposes.</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-md-6 text-center">
                <div class="box pl-3 color1" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Payment Processing</h3>
                    </div>
                    <div class="self1">
                        <span class="box-text">Integrated with other payment platforms, so you can receive ticket payments directly</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-md-6 text-center">
                <div class="box pl-3 color2" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Communication</h3>
                    </div>
                    <div>
                        <span class="box-text">Manage the flow of information to attendees by scheduling emails for delivery. Integrate with your organization’s CRM database.</span>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<div class="updat1">
    <div style="position: relative; left: 35px">
        <img src="/img/slice1.png" alt="" style="position: absolute; left: -107px;">
    </div>

    <div style="top: 0px;  position: relative; left: 1401px;">
        <img src="/img/slice2.png" alt="" style="position: absolute;">
    </div>
</div>
<div class="social-box mt-5">
    <div class="container">
        <p class="text-left word mt-4">Event</p>
        <div class="row">

            <div class="col-lg-6 col-xs-12 text-center">
                <div class="box pl-3 color1" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">On-Site Check In </h3>
                    </div>
                    <div>
                        <span class="box-text p-3">Take the stress out of on-the-day In-person activities with QR Code scanning, name or email search, self check- in and badge printing.</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 color2" style="">
                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Session Management Systems</h3>
                    </div>
                    <div>
                        <span class="box-text p-3">Manage speakers, review and publish speaker notes and schedule sessions all in one place.</span>
                    </div>

                </div>
            </div>
            <!-- <div class="col-lg-6 col-xs-12 text-center">
                <div class="box pl-3 color2" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Breakout Rooms</h3>
                    </div>
                    <div>
                        <span class="box-text p-3">Enhance your event experience with small group interactions and activities</span>
                    </div>

                </div>
            </div> -->

            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 color1" style="">
                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Zoom Integration</h3>
                    </div>
                    <div>
                        <span class="box-text p-3">Host virtual events - webinars, live streams, with full Zoom integration.</span>
                    </div>

                </div>
            </div>






        </div>
    </div>
</div>

<div class="social-box mt-5">
    <div class="container">
        <p class="text-left word mt-4">Post Event</p>
        <div class="row">

            <div class="col-lg-6 col-xs-12 text-center">
                <div class="box pl-3 color1 coll" style="">

                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Feedback Forms & Surveys </h3>
                    </div>
                    <div>
                        <span class="box-text p-3">Send event surveys real time and request feedback based on attendee or ticket type.</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 color2" style="">
                    <div class="mt-4 mb-4">
                        <h3 class="box-title">Insights, Analytics and Post Event Communication</h3>
                    </div>
                    <div class="self3">
                        <span class="box-text p-3">Send post event call to action emails and links to recorded session. Review all attendee data for future planning.</span>
                    </div>

                </div>
            </div>







        </div>
    </div>
</div>


@endsection