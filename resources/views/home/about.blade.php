@extends('layout.homelayout')
@section('content')
<style>
    .n-br {
        background: blue;
        color: white;
        padding: 80px 0px;
        border-radius: 50%;
        margin: 4px 0px;
        text-align: center;
        width: 200px;
    }

    .n-br2 {
        background: blue;
        color: white;
        padding: 80px 0px;
        border-radius: 50%;
        margin: 78px 0px;
        position: relative;
        left: -82px;
        top: 24px;
        width: 200px;
    }

    .n-ro {
        padding: 8px 0px 50px;
        align-items: center;
    }

    .n2-po {
        background: aquamarine;
        padding: 18px 0px;
        color: white;
        border-radius: 5px;
    }

    .n2-br {
        font-size: 15px;
        text-align: center;
    }

    @media(max-width:770px) {

        .n-br2,
        .n-br {
            width: 185px;
        }
    }

    @media(max-width:500px) {

        .n-ro {
            padding: 0px 15px 50px;
        }
    }

    @media(max-width:750px) {


        .n-br2 {
            margin: 10px auto;
        }

        .n-br {
            margin: 20px auto;
        }

        .n-br2,

        .n-br {
            color: white;
            padding: 104px 0px;
            border-radius: 50%;

            text-align: center;
            width: 257px;
            position: unset;
        }

    }

    .i-pad {
        padding: 40px 0px 30px;
    }

    .ma-t {
        margin: 20px 0px;
    }

    .why3 {
        color: rgba(62, 218, 216, 1)
    }

    .why_line {
        border-bottom: 2px solid;
        width: 30px;
        margin: 0px 49%;
    }
    .box-text{
        padding: 0px;
    }
</style>
<style>
    .box-title {
        font-size: 21px;
        color: #4183D7;
    }

    .box-text {
        font-size: small;
    }

    .word {
        font-weight: 600;
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
        height: 240px;
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

    @media (max-width: 430px) {
        .box_pad {
            padding: 20px;
        }

        .body_top {
            margin-top: 40px !important
        }

        .box_head {
            font-size: 28px !important;
            padding: 53px 0px !important;
        }

        .newpad {
            padding: 20px 10px !important;
        }
    }

    .box_head {
        font-size: 56px;
    }

    @media (max-width: 769px) {
        .box_head {
            font-size: 40px;
        }
    }


    .newpad {
        padding: 20px 60px;
    }

    .newpad1 {
        padding: 20px;
    }

    .mart {
        padding-right: 6px;
    }
</style>
<div class="container text-center body_top">
    <div class="updat">
        <div style="position: relative;">
            <img src="/img/dots.png" alt="" style="position: absolute; left: -107px;">
        </div>

        <div style="top: 144px; position: relative; left: 619px;">
            <img src="/img/dots.png" alt="" style="position: absolute;">
        </div>
    </div>
    <h2 class="box_head">Our mission is to enhance, automate create engaging and seamless events</h2>
    <!-- <p class="word mt-4"></p> -->
    <div class="text-center why3">
        <p class="text-center word mt-4">Our Story</p>
        <div class="why_line"></div>
    </div>
    <p class="newpad">As event curators with over a decade of experience, we have encountered a diverse array of challenges in Africa. We realized that these challenges were not unique to us, they were continent-wide challenges faced by event organisers & owners looking to curate global standard events. We decided to build solutions to automate the event organising process, while helping organisers & owners save time, costs and resources. That's how TEPS was born. An end to end event management system for everyone by event organisers. </p>

</div>


<div class="social-box">
    <div class="container">
        <!-- <p class="text-center word mt-4">Our Core Values</p> -->
        <div class="text-center why3">
            <p class="text-center word mt-4">Our Core Values</p>
            <div class="why_line"></div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-xs-12 col-md-6 text-left">
                <div class="box pl-3" style="background:rgba(235, 247, 252, 1)">

                    <div class="mb-2">
                        <h3 class="box-title">MISSION</h3>
                    </div>
                    <div class="mart">
                        <p class="box-text">To empower event organisers & owners with tools to create personalised experiences for their attendees</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-xs-12 col-md-6  text-left">
                <div class="box pl-3" style="background: rgba(133, 237, 187, 0.1);">
                    <div class="mb-2">
                        <h3 class="box-title">VISION</h3>
                    </div>
                    <div class="mart">
                        <p class="box-text">To inspire and power great experiences, one event at a time.</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-xs-12 col-md-6 text-left">
                <div class="box pl-3" style="background: rgba(133, 237, 187, 0.1);">

                    <div class="mb-2">
                        <h3 class="box-title">VALUES</h3>
                    </div>
                    <div class="mart">
                        <p class="box-text">Consistency, Personalization, Innovation & Passion</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-xs-12 col-md-6 text-left">
                <div class="box pl-3" style="background: rgba(0, 97, 255, 0.1);">

                    <div class="mb-2">
                        <h3 class="box-title">BRAND PROMISE</h3>
                    </div>
                    <div class="mart">
                        <p class="box-text">To ease the stress of event managers by simplifying the event planning process, to help you leverage the power of the first impression</p>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

<section>
    <div class="container mb-3 mt-3">
        <div class="updat1">
            <div style="position: relative;">
                <img src="/img/slice1.png" alt="" style="position: absolute; left: -283px;">
            </div>


        </div>
        <div style="background: rgba(37, 36, 50, 1);" class="box_pad text-center mb-5">
            <p class="text-white">We empower event organisers with tools to create and curate a memorable and personalised event experience for their attendees because we believe an event may last a day but experiences last a lifetime. We are powering great experiences, one event at a time.</p>
        </div>
    </div>
</section>

<!-- <section>

    <div class="container">
        <div class="updat">
            <div style="top: 22px; position: relative; left: 1221px;">
                <img src="/img/dots.png" alt="" style="position: absolute;">
            </div>
        </div>
        <div class="text-center">
            <p class="word mt-4">Team</p>
            <p class="newpad1">Diverse uniue individuals with exceptional abililties.</p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/tobi.png" alt="">
                <p class="na_me">Tobi Ibidapo</p>
                <p class="posi_tion">COO</p>
            </div>
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/malam.png" alt="">
                <p class="na_me">Malam Sule</p>
                <p class="posi_tion">Business analyst</p>
            </div>
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/ogbeni.png" alt="">
                <p class="na_me">Ogbeni Maria</p>
                <p class="posi_tion">Business Developer</p>
            </div>
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/benji.png" alt="">
                <p class="na_me">Toluwani Benji</p>
                <p class="posi_tion">Customer Support</p>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/tobi.png" alt="">
                <p class="na_me">Tobi Ibidapo</p>
                <p class="posi_tion">COO</p>
            </div>
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/malam.png" alt="">
                <p class="na_me">Malam Sule</p>
                <p class="posi_tion">Business analyst</p>
            </div>
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/ogbeni.png" alt="">
                <p class="na_me">Ogbeni Maria</p>
                <p class="posi_tion">Business Developer</p>
            </div>
            <div class="col-lg-3 col-xs-12 text-center col-md-6">
                <img src="/img/benji.png" alt="">
                <p class="na_me">Toluwani Benji</p>
                <p class="posi_tion">Customer Support</p>
            </div>

        </div>
    </div>
</section> -->
<div class="social-box">
    <div class="container">
        <div class="text-center why3">
            <p class="text-center word mt-4">Our Services</p>
            <div class="why_line"></div>
        </div>
        <p class="text-center mt-2">A digital Event management, enagagement and hospitality software</p>

        <div class="row">

            <div class="col-lg-4 col-xs-12 col-md-4 text-center ma-t">
                <a href="/features">
                    <div class="box_f color2 m-auto col-md-11 i-pad rounded mt-2 " style="background-color:#67BFFF; color:white">
                        <div>
                            <img src="/img/set.png" alt="teps_img">
                        </div>
                        <div class="mt-4 mb-4">
                            <h3 class="box-title_f" style="color:white">Event Management</h3>
                        </div>
                        <div class="self1 mb-4 mend">
                            <p class="box-text">overseeing all logistics leading up to and during an event</p>

                        </div>

                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-xs-12 col-md-4  text-center ma-t">
                <a href="/features">
                    <div class="box_f color2 m-auto col-md-11 i-pad rounded mt-2 " style="background-color:#4ACFD9;color:white">
                        <div>
                            <img src="/img/wom.png" alt="teps_img">
                        </div>
                        <div class="mt-4 mb-4">
                            <h3 class="box-title_f" style="color:white">Event Hospitality</h3>
                        </div>
                        <div class="mb-4 mend">
                            <p class="box-text">we take care of your guests and anticipating their needs.</p>
                        </div>


                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-xs-12 col-md-4 text-center ma-t">
                <a href="/features">
                    <div class="box_f color2 m-auto col-md-11 i-pad rounded mt-2 " style="background-color:#202B36;color:white">
                        <div>
                            <img src="/img/arrow.png" alt="teps_img">
                        </div>
                        <div class="mt-4 mb-4">
                            <h3 class="box-title_f" style="color:white">Event Engagement</h3>
                        </div>
                        <div class=" mb-4 mend">
                            <p class="box-text">We hold the attention of audience as well as promote full participation from event attendee</p>
                        </div>

                    </div>
                </a>

            </div>




        </div>
    </div>
</div>
<!-- <section>
    <div class="container">
        <p class="text-center word mt-4">Our Services</p>
        <div class="row n-ro">

            <div class="col-md-6 col-lg-5 p-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 p-0">
                            <div class="n-br" style="background-color: #2145ff;">
                                <h4 style="text-align: center;">Event Management</h4>
                            </div>
                        </div>


                        <div class="col-md-12 p-0">
                            <div class="n-br" style="background-color: #000000;">
                                <h4 style="text-align: center;">Event Hospitality</h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 ">
                        <div class="n-br2" style="background-color:#3edad8">
                            <h4 style="text-align: center;">Event Engagement</h4>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-6 col-lg-7 p-0">
                <div class="col-md-12">
                    <div class="n2-po" style="    background: linear-gradient(12deg, rgba(33, 69, 255, 1) -20%, rgba(0, 212, 255, 1) 60%);">
                        <h4 class="n2-br">A digital Event management, enagagement and hospitality software</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection