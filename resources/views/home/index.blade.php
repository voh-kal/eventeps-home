@extends('layout.homelayout')
@section('content')
<style>
    .box_pad {
        padding: 4% 10%;
    }

    .navbar-toggler span {
        display: block;
        width: 25px;
        height: 3px;
        background: #255fe2;
        margin: auto;
        margin-bottom: 4px;
        transition: all 400ms linear;
        cursor: pointer;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .profilepic {
        height: 90px;
        width: 90px;
    }

.fas .fa-play{
    position: relative;
    top: 14%;
    left: 23%;
    font-size: 60px;
    color: red;
}

    .profilepic,
    .profilepic-sm,
    .profilepic-sm-2,
    .profilepic-xs {
        border-radius: 50px;
        overflow: hidden;
        position: relative;
    }

    .imager1 {
        background: url(../img/groupa.png);
        background-size: cover;
    }

    .imager1:hover {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../img/groupa.png);
        background-size: cover;
    }

    .imager2 {
        background: url(../img/groupb.png);
        background-size: cover;
    }

    .imager2:hover {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../img/groupb.png);
        background-size: cover;
    }

    .home_btn:hover {
        background: darkturquoise;
        font-size: inherit;
        padding: 13px;
    }

    .home_btn2:hover,
    .tour_btn .home_btn2as:hover {
        background: darkturquoise;
        font-size: inherit;
        padding: 13px;
        border: none;
    }

    .mend2 {
        padding-bottom: 4px;
    }

    .mend1 {
        padding-bottom: 7px;
    }

    .mend {
        padding-bottom: 30px;
    }

    .prot {
        padding-bottom: 48px;
    }

    .prot1 {
        padding-bottom: 56px;
    }

    .color2 {
        background: rgba(133, 237, 187, 0.1);

    }

    .color1 {
        background: rgba(235, 247, 252, 1)
    }

    .box-title {
        font-size: 21px;
        color: #4183D7;
    }

    .box-title_f {
        font-size: 21px;
        color: #4183D7;
    }

    .box-text {
        font-size: small;
        padding: 0px 10px;
    }

    .social-box .box {
        border-radius: 10px;
        padding: 40px 10px;
        margin: 20px 10px;
        cursor: pointer;
        transition: all 0.5s ease-out;
        min-height: 365px;
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

    @media(max-width: 763px) {
        .ttour {
            display: none;
        }
    }

    @media (max-width:1024px) {
        .video1 {
            border: none !important;
            position: unset !important;
            background: none !important;
            left: 0;
            top: 0;
            z-index: 98;
            border-radius: 0px;
        }

        .tour_pro {
            padding-top: 76px !important;
            padding-left: 30px !important;
        }

        .feature2 {
            text-align: center;
            padding: 0px 246px !important;
        }

        .use1 {
            padding: 10px 11% !important;
        }

        .img1 {
            position: absolute;
            bottom: 243px !important;
            right: 33%;
        }

        .img_border {
            border-radius: 20px !important;
            padding: 50px !important;
            margin: 84px 270px !important;
        }

        .why2 {
            padding-top: 64px !important;
        }

        .plans_img1,
        .plans_img2 {
            display: none;
        }

        .plans_img3 {
            border: 0px !important;
            position: unset !important;
            background: none;
            left: 0px !important;
            top: 0px !important;
            z-index: 98;
            height: auto;
            border-radius: 35 px;
            margin-right: 10px !important;
        }

        .plans {
            padding: 80% 30px 0px 30px !important;
        }

        .plans_height {
            height: 45vh !important;
        }
    }

    @media(max-width:769px) {
        .plans {
            padding: 0px 40% 0px 30px !important;
        }
    }

    .imagerr,
    .imagerr1,
    .imagerr2,
    .imagerr3 {
        display: none;
    }

    @media (max-width:768px) {
        .plans_height {
            height: 30vh !important;
        }


        .video_inn {
            margin: 10px 0px 0px !important;
            height: -webkit-fill-available;
            border-radius: inherit;
        }

        .tour_pro {
            padding-top: 73px !important;
            padding-left: 53px !important
        }

        .feature2 {
            text-align: center;
            padding: 0px 20px !important;
        }

        .use {
            padding: 20px !important;
        }

        .use1 {
            padding: 10px !important;
        }

        .imd_btn {
            margin-bottom: 15px !important;
        }

        .img1 {
            position: unset !important;
            bottom: 10px !important;
            right: 33%;
        }

        .img_border {
            border-radius: 20px !important;
            padding: 17px !important;
            margin: 3px 195px !important;
        }

        .plans_img3 {
            border: 0px;
            position: unset;
            background: none;
            left: 0px;
            top: 0px;
            z-index: 98;
            border-radius: 0px;
            margin: 0px;
            height: auto !important;
        }
    }

    @media (max-width:425px) {


        .part_tour {
            font-size: x-large;
        }

        .part_tour1 {
            margin: 29px 0px 40px;
            padding-right: 78px;

        }

        .services {
            margin-top: 97px !important;
        }

        .tour_img2 {
            margin: 0px !important;

        }

        .tour_img1 {
            border: 0px !important;
            position: absolute;
            background: none;
            top: -56px !important;
            z-index: 98;
            right: 15px !important;
        }

        .video1 {
            border: none !important;
            position: unset !important;
            background: none !important;
            left: 0;
            top: 0;
            z-index: 98;
            border-radius: 0px;
            padding: 0px
        }

        .feature2 {
            text-align: center;
            padding: 0px 64px !important;
        }

        .use {
            padding: 20px !important;
        }

        .use1 {
            padding: 10px !important;
        }

        .img_border {
            border-radius: 0px !important;
            padding: 17px !important;
            margin: 0px !important;
        }

        .plans_img3 {
            border: 0px;
            position: unset !important;
            background: none;
            left: 0px;
            top: 0px;
            z-index: 98;
            border-radius: 0px;
            margin: 10px;
            height: auto;
        }

        .video_inn {
            margin: 10px 0px 0px !important;
            height: -webkit-fill-available;
            border-radius: inherit;
        }

        .social-box .box {

            border-radius: 10px;
            padding: 40px 10px;
            margin: 10px 10px !important;
            cursor: pointer;
            transition: all 0.5s ease-out;
        }



        .feature1 {
            padding-top: 30px;

        }
    }

    @media(max-width: 380px) {



        .img1 {
            position: unset
        }

        .img_border {
            border-radius: 0px;
        }

        .why2 {
            padding-top: 34px !important;
        }

        .why {
            padding: 5px !important;
        }

        .video_inn {

            margin: 10px 0px 0px !important;
            height: -webkit-fill-available;
            border-radius: inherit;
        }

        .use {
            padding: 10px;
        }

        .use1 {
            color: #252432;
            padding: 10px;
        }

        .service_box2 {
            padding: 20px;
            margin: 10px;
            background: rgba(134, 234, 233, 0.1);
            border: none;
            border-radius: 10px;
        }

        .service_box3 {
            padding: 20px;
            margin: 10px;
            background: rgba(203, 229, 250, 0.5);
            border: none;
            border-radius: 10px;
        }

        .sevices {
            padding: 20px;
        }

        .service1 {
            padding: 0px 20px;
        }

        .service_box1 {
            padding: 20px;
            margin: 10px;
            background: rgba(0, 70, 200, 0.1);
            border: none;
            border-radius: 10px;
        }

        .tour_img1 {
            border: none;
            position: unset;
            background: none;
            margin-top: 20px;
            z-index: 98;
            right: 119px;
        }

        .tour_img2 {
            margin: 20px;
            height: -webkit-fill-available;
            border-radius: inherit;
        }

        .tour_btn {
            background-color: white;
            color: blue ! important;
            font-size: inherit;
            padding: 11px;
            border-radius: 10px;
        }

        .tour_pro {
            padding-top: 20px;
            padding-left: 20px
        }

        .tour_body {
            padding-right: 20px;
        }

        .tour {
            height: auto;
        }

        .feature_box1 {
            padding: 20px;
            margin: 10px;
            background: rgba(103, 191, 255, 1);
            border: none;
            border-radius: 5px;
        }

        .feature_box2 {
            padding: 20px;
            margin: 10px;
            background: rgba(74, 207, 217, 1);
            border: none;
            border-radius: 5px;
        }

        .feature_box3 {
            padding: 20px;
            margin: 10px;
            background: rgba(32, 43, 54, 1);
            border: none;
            border-radius: 5px;
        }

        .feature_boxes {
            padding: 0px 20px;
        }

        .feature2 {
            text-align: left;
            padding-left: 15px;
            padding: 0px 18px !important;
        }

        .feature {
            padding: 0px;
        }

        .feature1 {
            padding-top: 20px;

        }

        .plans_height {
            height: auto;
        }



        /* .plans_mains {
            margin: 5px !important;
            height: -webkit-fill-available;
            border-radius: inherit;
        } */

        .plans_img3 {
            border: 0px;
            position: unset !important;
            background: none;
            left: 0px;
            top: 0px;
            z-index: 98;
            border-radius: 0px;
            margin: 0px;
            height: auto;
        }

        .home_btn {
            margin-bottom: 10px;
            margin-right: 0px;
        }

        .home_btnn {
            padding: 0px 20px;
        }

        .why4 {
            padding: 10px;
        }

        .why_box1 {
            margin: 10px;
        }

        .why_box2 {
            margin: 10px;

        }

        .why_box3 {
            margin: 10px;

        }

        .plans {
            padding: 22px !important;
        }

        .image-grid-cover {
            width: 100%;
            background-size: cover;
            position: relative;
            margin-bottom: 30px;
            color: #FED;
            padding: 22px !important;
        }
    }

    .part_tour1 {
        margin: 29px 0px 40px;
        padding-right: 78px;

    }

    .part_tour {
        font-size: x-large;
    }

    .btn_bot {
        margin-bottom: 10px !important;
    }

    .btn-link:hover {

        text-decoration: none !important;

    }

    .btn-link {

        text-decoration: none !important;

    }

    .star-rating i {
        color: yellow;
        font-size: 24px;
    }

    .img1 {
        position: absolute;
        bottom: 200px;
        right: 38%;
    }

    .img_border {
        border-radius: 20px;
        padding: 50px;
        margin: 136px 367px;
    }

    .imd_btn {
        margin-bottom: 2% !important;
    }

    .image-grid-cover {
        width: 100%;
        background-size: cover;
        position: relative;
        margin-bottom: 30px;
        color: #FED;
        padding: 219px 153px 62px 36px;
    }

    .home_bg {
        background-color: #252432;
    }

    .home_cont {
        padding-top: 110px;
    }

    .home_head {
        font-size: 64px;
        line-height: 74px;
        font-weight: 900
    }

    .home_btn {
        margin-right: 25px;
        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
    }

    .home_btna {

        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
    }

    .home_btn2as {
        border: 1px solid;
        padding: 11px;
        background: #252432;
    }

    .home_btn2 {
        border: 1px solid;
        padding: 11px;

    }

    .video1 {
        border: 2px solid;
        position: absolute;
        background: white;
        left: 378px;
        top: -275px;
        z-index: 98;
        border-radius: 35px
    }

    .video_inn {
        margin: 20px;
        height: -webkit-fill-available;
        border-radius: inherit;
    }

    .home_btnn {
        display: block;
    }

    .why {
        padding: 6px;
    }

    .why2 {
        padding-top: 100px;
    }

    .why3 {
        color: rgba(62, 218, 216, 1)
    }

    .why_line {
        border-bottom: 2px solid;
        width: 30px;
        margin: 0px 49%;
    }

    .why4 {
        padding: 0px 106px;
    }

    .why_box1 {
        padding: 40px;
        margin-left: 75px;
        background: rgba(203, 229, 250, 0.3);
        border: none;
        border-radius: 30px;
    }

    .why_box1_head {
        color: #1c5eff;
        font-size: x-large;
        margin-top: 20px;
    }

    .why_box1_para {
        margin: 15px 0px;
    }

    .why_box1_btn {

        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
        font-size: inherit;
        margin-top: 30px;
    }

    .why_box1_btna {

        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
        font-size: inherit;
        margin-top: -4px;
    }

    .why_box2 {
        padding: 40px;
        margin: 0px 75px;
        background: rgba(134, 234, 233, 0.1);
        border: none;
        border-radius: 30px;
    }

    .why_box2_head {
        color: #1c5eff;
        font-size: x-large;
        margin-top: 20px;
    }

    .why_box2_para {
        margin: 25px 0px;
    }

    .why_box2_btn {
        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
        font-size: inherit;
        margin-top: 5px;
    }

    .why_box2_btna {
        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
        font-size: inherit;
        margin-top: 22px;
    }

    .why_box3 {
        padding: 40px;
        margin-right: 75px;
        background: rgba(54, 176, 227, 0.1);
        border: none;
        border-radius: 30px;

    }

    .why_box3_head {
        color: #1c5eff;
        font-size: x-large;
        margin-top: 20px;
    }

    .why_box3_para {
        margin: 18px 0px;
    }

    .why_box3_btn {
        background: rgb(33, 69, 255);
        background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);
        padding: 11px;
        font-size: inherit;
    }

    .plans {
        padding: 294px 100px 0px 0px;
    }

    .plans_img1 {
        background: url('/img/blend.png') no-repeat scroll center;
        position: absolute;
        left: 0;
        right: 372px;
        top: 0;
        bottom: 0;
        z-index: -1;
    }

    .plans_img2 {
        background: url('/img/element.png') no-repeat scroll center center;
        position: absolute;
        left: 0;
        right: 356px;
        top: 7px;
        height: 100%;
        bottom: 102;
        z-index: -2;
    }

    .plans_img3 {
        border: 2px solid #39bfdf;
        position: absolute;
        background: white;
        left: 83px;
        top: 170px;
        z-index: 98;
        border-radius: 35px;
        margin-right: 146px;
    }

    .plans_mains {
        margin: 77px 0px;

        border-radius: inherit;
    }

    .img-fluida {
        max-width: 98%;
    }

    .plans_height {
        height: 100vh;
    }

    .feature {
        padding: 50px 10px;
    }

    .feature2 {
        text-align: center;
        padding: 0px 403px;
    }

    .feature_boxes {
        padding: 0px 106px;
    }

    .feature_box1 {
        padding: 40px;
        margin: 10px;
        background: rgba(103, 191, 255, 1);
        border: none;
        border-radius: 30px;
    }

    .feature_box2 {
        padding: 40px;
        margin: 10px;
        background: rgba(74, 207, 217, 1);
        border: none;
        border-radius: 30px;
    }

    .feature_box3 {
        padding: 40px;
        margin: 10px;
        background: rgba(32, 43, 54, 1);
        border: none;
        border-radius: 30px;
    }

    .tour {
        height: 80vh;
    }

    .tour_pro {
        padding-top: 174px;
        padding-left: 180px
    }

    .tour_body {
        padding-right: 138px;
    }

    .tour_btn {
        background-color: white;
        color: blue ! important;
        font-size: inherit;
        padding: 14px;
        border-radius: 10px;
    }

    .tour_img1 {
        border: 0px;
        position: absolute;
        background: none;
        top: 53px;
        z-index: 98;
        right: 46px;
    }

    .tour_img2 {
        margin: 20px;
        height: -webkit-fill-available;
        border-radius: inherit;
    }

    .sevices {
        padding: 35px;
    }

    .service1 {
        padding: 0px 97px;
    }

    .service_box1 {
        padding: 0px 40px;
        margin: 0px 10px;
        background: rgba(0, 70, 200, 0.1);
        border: none;
        border-radius: 10px;
    }

    .service_box2 {
        padding: 0px 40px;
        margin: 0px 10px;
        background: rgba(134, 234, 233, 0.1);
        border: none;
        border-radius: 10px;
    }

    .service_box3 {
        padding: 0px 40px;
        margin: 0px 10px;
        background: rgba(203, 229, 250, 0.5);
        border: none;
        border-radius: 10px;
    }

    .use {
        padding: 100px 110px;
    }

    .use1 {
        color: #252432;
        padding: 10px 25%;
    }

    .box_new {
        min-height: 390px;
        border-radius: 10px;
    }

    .box_f {
        min-height: 390px;
        border-radius: 10px;
        margin: 20px 10px;
        cursor: pointer;
        border-radius: 10px;
        padding: 40px 10px;
    }

    .box_f:hover,
    .box_new:hover {

        box-shadow: 0 0 6px #4183D7;

    }

    .box-text1 {
        color: #464A55;
        font-size: 13px;
    }

    .self2 {
        padding: 15px;
    }

    .top_top {
        padding-top: 35px;
    }

    @media(max-width: 1024px) {
        .box-text1 {
            color: #464A55;
            font-size: 10px;
        }

        .social-box .box .box-text {
            margin: 20px 0px;
            font-size: 13px;
            line-height: 30px;
        }
    }

    @media(max-width:770px) {
        .tour {
            height: 55vh;
        }

        .resp {
            height: 70vh !important;
            background-color: #252432;
        }

        .part_tour1 {
            margin: 0px;
            padding-right: 41px;
        }

        .social-box .box {

            border-radius: 10px;
            padding: 40px 10px;
            margin: 20px 10px;
            cursor: pointer;
            transition: all 0.5s ease-out;
            min-height: 450px;
        }
    }

    .resp {
        height: 100vh;
        background-color: #252432;
    }


    @media(max-width:430px) {
        .img_border {
            border-radius: 20px !important;
            padding: 17px !important;
            margin: 10px 0px !important;
        }

        .plans {
            padding: 0px 50px 0px 50px !important;
        }

        .tour_pro {
            padding: 20px !important;
            margin: 34px auto;
        }

        .plans_height {
            height: 51vh !important;
        }

        .social-box .box {

            border-radius: 10px;
            padding: 40px 10px;
            margin: 20px 0px;
            cursor: pointer;
            transition: all 0.5s ease-out;
            min-height: 350px;
        }
    }

    @media (max-width:770px) {
        .box_f {
            min-height: 440px;
            border-radius: 10px;
            margin: 20px 10px;
            cursor: pointer;
            border-radius: 10px;
            padding: 40px 10px;
        }
    }

    @media (max-width:430px) {
        .box_f {
            min-height: 390px !important;
            border-radius: 10px;
            margin: 20px 10px;
            cursor: pointer;
            border-radius: 10px;
            padding: 40px 10px;
        }
    }

    .image-container {
  position: relative;
  display: inline-block; /* Ensures the container only takes up the space of the image */
}

.play-button {
    position: absolute;
    top: 57%;
    left: 54%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background-color: rgb(245 236 236 / 50%);
    border-radius: 50%;
    cursor: pointer;
}
</style>
<style>
    .land {
        border-radius: inherit;
        height: 399px;
        margin: auto;
    }

    @media(max-width:1025px) {
        .why {
            padding: 6px !important;
        }

        .tour_pro {
            padding-top: 85px;
            padding-left: 90px;
        }

        .land {
            border-radius: inherit;
            height: 343px;
            margin: auto;
        }
    }

    @media(max-width:770px) {

        .vid {
            display: none !important;

        }

        .why {
            padding: 6px !important;
        }

    }

    .vid {
        width: 100%;
        z-index: 97;
        margin-top: -12%;
    }

    .hero_img {
        margin: auto;
        height: 343px;
    }
</style>
<!--================Home Banner Area =================-->
<section class="home_banner_area home_bg">
    <div class="banner_inner ">
        <div class="overlay"></div>
        <div class="container home_cont">
            <div class="text-center">
                <div class="banner_content">
                    <h3 class="home_head">Your Platform for  <br />Seamless Events</h3>
                    <p style="font-size: 20px;">Quickly and Easily <span style="color: #85EDE5;" class="txt-type" data-wait="1000" data-words='["Sell tickets","Create Landing Pages","Create Polls","Communicate With Attendees","Generate QR Codes", "Check-In Guests","Schedule Sessions","Manage Speaker"]'></span></p>
                    <div class="row home_btnn">
                        <button class="btn text-white home_btn col-sm-6 col-md-4 mb-2 col-lg-3" data-toggle="modal" data-target="#exampleModal">Get Started <i class="ti-arrow-right"></i></button>
                        <a href="" data-target="#tiddyModal" data-toggle="modal">
                            <button class="btn text-white border-white home_btn2as col-sm-6 col-md-4 mb-2 col-lg-3" style="">Schedule a Demo</button> </a>
                    </div>
                    @include('home.flashmessage')
                </div>

            </div>

            <!-- <button class="btn btn-primary free btn-wrap-text">Schedule time with Tomie for 15mins (Free)</button> -->


        </div>
    </div>

</section>
<div class="vid col-lg-12 mx-auto d-flex">
    <img src="img/new-img.gif" alt="" class="hero_img img-fluid">
</div>

<!-- ============= why teps area =============== -->
<section class="why">
    <div class="updat1">
        <div style="top: 273px; position: relative;">
            <img src="/img/slice1.png" alt="" style="position: absolute; left: -70px;">
        </div>

        <div style="top: 253px;  position: relative; left: 1395px;">
            <img src="/img/slice2.png" alt="" style="position: absolute; left: -29px;">
        </div>
    </div>

    <!-- video overlapping -->
    <!-- <div class="col-md-12 col-sm-12 p-sm-0 p-0">
       

    </div> -->

    <div class="why2">
        <div class="text-center why3">
            <h5>WHY TEPS </h5>
            <div class="why_line"></div><br>
            <p style="color:#252432" class="feature2">Want to plan an event and not sure how to begin? TEPS can help <a href="/features">Click here</a>.
                Have an event and looking for a solution to manage ticketing and guest registration? TEPS can help <a href="/case-studies">Click here</a>. </p>

        </div>
        <div class="social-box mt-3 mt-sm-3">
            <div class="container">


                <div class="col-md-12 m-auto row" style="justify-content: space-evenly;">
                    <div class="col-lg-5 col-xs-12 col-md-5 p-0 text-center">
                        <div class="box color1">
                            <div>
                                <img src="/img/video-conference.png" alt="tems_img">
                            </div>
                            <div class="mt-4 mb-4">
                                <h3 class="box-title">User Friendly</h3>
                            </div>
                            <div class="self1 mb-4">
                                <span class="box-text">Simple and Intuitive interface for you and your attendees</span>
                            </div>
                            <a class="btn text-white why_box1_btna "  data-target="#tiddyModal" data-toggle="modal">
                                Schedule a Demo</a>

                        </div>
                    </div>

                    <div class="col-lg-5 col-xs-12 col-md-5 p-0  text-center">
                        <div class="box color2">
                            <div>
                                <img src="/img/donation.png" alt="tems_img">
                            </div>
                            <div class="mt-4 mb-4">
                                <h3 class="box-title">Flexible</h3>
                            </div>
                            <div class="mb-4">
                                <span class="box-text">There's a plan for every size and budget</span>
                            </div>
                            <a class="btn text-white why_box2_btna " data-toggle="modal" data-target="#exampleModal" href="#">Request a quote</a>

                        </div>
                    </div>




                </div>


            </div>
        </div>


    </div>


</section>


<!-- ==========plans==========  -->
<section>
    <div class="row ">
        <div class="col-md-8">
            <!-- <div class=" plans_img1"></div>
            <div class="plans_img2"></div>

            <div class="plans_img3">
                <div class="plans_mains">
                    <img src="img/youtube/plan_ori" alt="" class="img-fluid">
                </div>
            </div> -->
            <div class="plans_mains image-container">
                <img src="img/youtube/plan_ori.png" alt="" class="img-fluida">
                <div class="play-button"><a href="https://youtu.be/wu8AlfjjnmU?si=kyvAq7knK_S22Deq" target="_blank"><i class="fas fa-play" aria-hidden="true" style="  position: relative;
    top: 14%;
    left: 23%;
    font-size: 60px;
    color: blue;"></i></a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="plans">
                <div>
                    <p style="color: rgba(62, 218, 216, 1)">Planning a Virtual, Hybrid or In-person event?</p>
                </div>
                <p>Create an easy and enjoyable attendee journey with great analytics.</p>
                <a class="btn text-white text-sm-left" style="margin-right:25px; background: rgb(33,69,255); background: linear-gradient(71deg, rgba(33,69,255,1) 35%, rgba(0,212,255,1) 100%); padding: 11px;" href="#" data-toggle="modal" data-target="#exampleModal">Get Started <i class="ti-arrow-right"></i></a>
            </div>


        </div>
    </div>
</section>


<!-- ==========KEY FEATURES==========  -->
<section class="feature">
    <div class="feature1">
        <div class="text-center" style="color: rgba(62, 218, 216, 1)">
            <a href="/features" class="why3">
                <h5 class="pt-sm-5 pt-5">KEY FEATURES </h5>
            </a>

            <div style="border-bottom: 2px solid; width: 30px; margin: 0px 49%;"></div><br>

            <p style="color:#252432" class="feature2">TEPS is designed by event management professionals, who understand what goes into successful events. TEPS create best in-class, engaging and personalized events!</p>

        </div>
        <div class="social-box">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-xs-12 col-md-4 p-0 text-center">
                        <a href="/features">
                            <div class="box_f pl-3 color1" style="background-color:#67BFFF; color:white">
                                <div>
                                    <img src="/img/calendar.png" alt="tems_img">
                                </div>
                                <div class="mt-4 mb-4">
                                    <h3 class="box-title_f" style="color:white">Pre Event</h3>
                                </div>
                                <div class="self1 mb-4 mend">
                                    <span class="box-text">At your fingertips, everything you and your attendees require beforehand.</span>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-md-4 p-0  text-center">
                        <a href="/features">
                            <div class="box_f pl-3 color2" style="background-color:#4ACFD9;color:white">
                                <div>
                                    <img src="/img/schedule.png" alt="tems_img">
                                </div>
                                <div class="mt-4 mb-4">
                                    <h3 class="box-title_f" style="color:white">Event</h3>
                                </div>
                                <div class="mb-4 mend">
                                    <span class="box-text">All you need to create engaging and interactive virtual, hybrid or in person events.</span>
                                </div>


                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-md-4 p-0 text-center">
                        <a href="/features">
                            <div class="box_f pl-3 color1" style="background-color:#202B36;color:white">
                                <div>
                                    <img src="/img/event.png" alt="tems_img">
                                </div>
                                <div class="mt-4 mb-4">
                                    <h3 class="box-title_f" style="color:white">Post Event</h3>
                                </div>
                                <div class=" mb-4 mend">
                                    <span class="box-text">Get comprehensive feedback from attendees and measure the impact of your sessions with our embedded Analytics tool(or with TEPS Analytics).</span>
                                </div>

                            </div>
                        </a>

                    </div>




                </div>
            </div>
        </div>

        <!-- <div class="row feature_boxes">
            <div class="card col-md-3 text-center text-white feature_box1">


                <p style="font-size: x-large; margin-top: 20px;"></p>
                <p style="margin: 15px 0px; font-size:smaller"></p>

            </div>

            <div class="col-md-1"></div>

            <div class="card col-md-3 col-sm-12 text-center text-white feature_box2">

                <p style="font-size: x-large; margin-top: 20px;"></p>
                <p style="margin: 15px 0px; font-size:smaller"></p>


            </div>

            <div class="col-md-1"></div>

            <div class="card col-md-3 text-center text-white feature_box3">

                <p style="font-size: x-large; margin-top: 20px;"></p>
                <p style="margin: 15px 0px; font-size:smaller"></p>


            </div>
        </div> -->

    </div>


</section>


<!-- ==========product tour========== -->
<section style="background: url(../img/pics.png); background: url(../img/pics.png);  background-repeat: no-repeat, repeat;  background-size: cover;" id="product_tour">

    <div class="row tour">
        <div class="col-md-5 text-white">
            <div class="tour_pro">
                <p class="part_tour mb-3">Product Tour</p>
                <p class="part_tour1 mb-3">TEPs allows you to seamlessly create memorable and engaging events. Sign up now for a tour to explore the features that make the TEPs platform quick and easy to use.</p>
                <a class="col-6 tour_btn btn" data-target="#tiddyModal" data-toggle="modal">Sign up</a><br>
            </div>


        </div>
        <div class="col-md-7 ttour">


            <div class="tour_img1">
                <div class="tour_img2">
                    <img src="/img/product_tour.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
</section>



<!-- =========== product and services ===========  -->
<section>
    <div class="services">
        <div class="text-center mt-2">
            <h3 class="top_top">Product & Services </h3>

        </div>
        <div class="updat1">
            <div style="top: 273px; position: relative;">
                <img src="/img/slice1.png" alt="" style="position: absolute; left: -70px;">
            </div>

            <div style="top: 253px;  position: relative; left: 1395px;">
                <img src="/img/slice2.png" alt="" style="position: absolute; left: -29px;">
            </div>
        </div>

        <div class="social-box mt-2">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-xs-12 col-md-4 text-center">
                        <a href="/features">
                            <div class="box_new color1 mt-4">
                                <div>
                                    <img src="/img/virtual.png" alt="tems_img">
                                </div>
                                <div class="">
                                    <h3 class="box-title">Virtual Events</h3>
                                </div>
                                <div class="self2">
                                    <span class="box-text1">Keeping participants engaged in virtual events can be difficult. TEPs provides a highly engaging and interactive platform for organisers to create remarkable events with a few clicks.</span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-lg-4 col-xs-12 col-md-4  text-center">
                        <a href="/features">
                            <div class="box_new color2 mt-4">
                                <div>
                                    <img src="/img/hybrid.png" alt="tems_img">
                                </div>
                                <div class="">
                                    <h3 class="box-title">Hybrid Events</h3>
                                </div>
                                <div class="self2">
                                    <span class="box-text1">Hybrid events are here to stay. TEPS will help you achieve unison and connectivity across both audiences.</span>
                                </div>


                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-md-4 text-center">
                        <a href="/features">
                            <div class="box_new color1 mt-4">
                                <div>
                                    <img src="/img/virtual.png" alt="tems_img">
                                </div>
                                <div class="">
                                    <h3 class="box-title">In-person Events</h3>
                                </div>
                                <div class="self2">
                                    <span class="box-text1">From registration tables to attendee seating, TEPS provides a platform to help you create and deliver excellent events.</span>
                                </div>

                            </div>
                        </a>
                    </div>




                </div>
            </div>
        </div>
        <!-- <div class="row service1">
           
        </div> -->

    </div>


</section>

<div class="updat">
    <div style="top: 314px; position: relative;">
        <img src="/img/dots.png" alt="" style="position: absolute; left: 39px; height: 288px;">
    </div>

    <div style="top: 586px; position: relative; left: 1462px;">
        <img src="/img/dots.png" alt="" style="position: absolute; height: 253px;">
    </div>
</div>



<!-- ==========use cases==========  -->

<section class="use" id="cases">
    <div>
        <div class="text-center" style="color: rgba(62, 218, 216, 1);">
            <h5 class="top_top">Case Studies/ Use Case </h5>
            <div style="border-bottom: 2px solid; width: 30px; margin: 0px 49%;"></div>

            <p class="use1"> Wondering if you can use TEPS for your event? The answer is yes...whether you're an event management professional or a beginner, TEPS helps you to deliver successful single day or multi day events - Conferences, Sales workshops, End of year parties, Festivals from 10 people to hundreds of thousands of attendees. </p>

        </div><br>
        <div class="row">


            <div class="col-12 col-sm-6 col-md-6 image-grid-item">
                <div class="image-grid-cover text-white imager1 imago">
                    <h3>Power of TEPS</h3>
                    <p>TEPS is an online event platform that manage hybrid events, virtual events and resources for Individual, Advertising & Media Specialist, Organizations and anyone.</p>
                    <a href="/case-studies" class="text-white imagerr">Read Case Study > </a>

                </div>
            </div>
            <!-- 
            <div class="col-12 col-sm-6 col-md-6 image-grid-item">
                <div class="image-grid-cover text-white imager2 imago1 text-white">
                    <h3>Power of TEPS</h3>
                    <p>TEPS is an online event platform that manage hybrid events, virtual events and resources for Individual, Advertising & Media Specialist, Organizations and anyone.</p>
                    <a href="/case-studies" class="text-white imagerr1">Read Case Study ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 image-grid-item">
                <div class="image-grid-cover text-white imager1 imago2">
                    <h3>Power of TEPS</h3>
                    <p>TEPS is an online event platform that manage hybrid events, virtual events and resources for Individual, Advertising & Media Specialist, Organizations and anyone.</p>
                    <a href="/case-studies" class="text-white imagerr2">Read Case Study ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 image-grid-item">
                <div class="image-grid-cover text-white imager2 imago3">
                    <h3>Power of TEPS</h3>
                    <p>TEPS is an online event platform that manage hybrid events, virtual events and resources for Individual, Advertising & Media Specialist, Organizations and anyone.</p>
                    <a href="/case-studies" class="text-white imagerr3">Read Case Study ></a>
                </div>
            </div>
-->
            <div class="col-12 offset-md-4 offset-sm-2">
                <a class="text-center p-3 col-sm-8 col-md-4 btn text-white border-white home_btn2 " href="/case-studies" style="background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%); margin: auto ">See all case studies</a>
            </div>






        </div>
    </div>
</section>


<!-- ==========get started========== -->
<section id="price_plan">
    <div style="background: rgba(37, 36, 50, 1);" class="box_pad text-center mb-5">
        <h4 class="pt-4 mb-3 pr-2 text-white" style="font-size: 25px;">Find the right plan for you.</h4>
        <p class="pt-4 pr-5 text-white">TEPS is an all in one event management platform to help you create and deliver engaging and seamless events of any type and scale.</p>
        <a class="text-center col-sm-6 col-xs-6 col-md-4 btn text-white p-3 mt-3 mb-3" href="https://app.eventeps.com/pages/signup" style="font-size: inherit;background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%); ">Get Started for free</a>
    </div>
    <!-- <div class="row m-md-5 m-sm-1 p-3">
       

        <div class="col-lg-4 col-sm-12 col-md-6 pl-3 p-sm-3">
            <h4 class="pt-4 text-dark mb-3 pr-2" style="font-size: 25px;">Find the right plan for you.</h4>
            <p class="pt-4 pr-5">TEPS is an all in one event management platform to help you create and deliver engaging and seamless events of any type and scale.</p>
            <a class="text-center col-sm-6 col-xs-6 col-md-8 btn text-white p-3 mt-3 mb-3" href="#" style="font-size: inherit;background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%); ">Get Started for free</a>
        </div>

        <div class="col-lg-4 col-md-10 col-sm-12 mb-3">
            <div class="card p-4" style="box-shadow: 0px 0px 10px #cccc; border-top: none;">
                <h3 style="color:#1a63ff">Business <span class="text-muted" style="float: right; font-size: xx-small; font-weight: 500;">$965/Annually</span></h3>
                <p class="mr-6">Best for highly engaging webinars, career coaching, workshops, virtual conference and internal events.</p>
                <section class="row p-2 m-0 mb-3" style="border: 1px solid #e7dede; border-radius: 4px;">
                    <i class="fas fa-circle p-2"></i>
                    <div class="pl-3">
                        <p> 500 registration/event </p>
                        <h4 style="font-size: 15px; color:black">$965/Annually</h4>
                    </div>
                    <span class="fas fa-angle-down ml-auto p-3"></span>
                </section>
                <div class=" home_btnn m-0 mb-2">
                    <a class="btn text-white home_btna col-sm-6 col-md-5 mb-2" href="#" style="font-size: inherit;">Get Started </a>
                    <a class="btn home_btn2 col-sm-6 col-md-6 mb-2" style="font-size: inherit; border: 1px solid linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%); " href="#">Request a Demo</a>
                </div>
                <ul class="mt-3 m-0">
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">10 Organizers</p>
                    </li>
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Unlimited Sessions</p>
                    </li>
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Custom Registration form</p>
                    </li>
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Content Marketing</p>
                    </li>
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Third Party Integration</p>
                    </li>
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Event Analytics</p>
                    </li>
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Priority Support</p>
                    </li>
                </ul>
                <div style="background-image: url(/img/foot.png); background-size: cover; height: 76px; position: relative; left: 23px; top: 23px;"></div>
            </div>
        </div>

        <div class="col-lg-4 col-md-10 col-sm-12 mb-3">

            <div class="card p-4" style="box-shadow: 0px 0px 10px #cccc; border-top: none;">

                <h3 style="color:#1a63ff">Business <span class="text-muted" style="float: right; font-size: xx-small; font-weight: 500;">$965/Annually</span></h3>
                <p class="mr-6">Best for highly engaging webinars, career coaching, workshops, virtual conference and internal events.</p>

                <div class=" home_btnn m-0 mb-2">
                    <a style="font-size: inherit;" class="mb-2 btn text-white home_btna col-sm-6 col-md-5" href="#">Get Started </a>
                    <a class="btn home_btn2 col-sm-6 col-md-6 mb-2" style="font-size: inherit; border: 1px solid linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%); " href="#">Request a Demo</a>
                </div>
                <hr style="    margin: 20px 0px;">
                <p>Up to 100,000 registrations/event</p>
                <hr style="    margin: 11px 0px;">

                <ul class="mt-3 m-0">
                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">10 Organizers</p>
                    </li>

                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Unlimited Sessions</p>
                    </li>

                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Custom Registration form</p>
                    </li>

                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Content Marketing</p>
                    </li>

                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Third Party Integration</p>
                    </li>

                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Event Analytics</p>
                    </li>

                    <li class="row m-0 mb-2" style="align-items: center;">
                        <i class="fas fa-check-circle" style="color:rgba(0, 212, 255, 1)"></i>
                        <p class="pl-3 m-0">Priority Support</p>
                    </li>
                </ul>
                <div style="background-image: url(/img/foot.png); background-size: cover; height: 76px; position: relative; left: 23px; top: 23px;"></div>
            </div>
        </div>
    </div> -->
</section>

<!-- ==========testimonial========== -->
<!-- <section>

    <div class=" pt-5 pt-sm-3 resp">
        <h3 class="text-white text-center mb-sm-3 imd_btn top_top">What Our Clients Say About Us</h3>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bg-white col-md-6 text-center img_border" style="">
                        <img src="/img/img1.png" alt="" class="img1">
                        <p class="p-md-3 p-sm-2"> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</p>

                        <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                        <div class="star-rating">
                            <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                            <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                            <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                            <i class="fas fa-star" id="star4" onclick="add(this,4)"></i>
                            <i class="fas fa-star" id="star5" onclick="add(this,5)"></i>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-white col-md-6 text-center img_border" style="">
                        <img src="/img/img1.png" alt="" class="img1">
                        <p class="p-md-3 p-sm-2"> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</p>

                        <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                        <div class="star-rating">
                            <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                            <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                            <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                            <i class="fas fa-star" id="star4" onclick="add(this,4)"></i>
                            <i class="fas fa-star" id="star5" onclick="add(this,5)"></i>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-white col-md-6 text-center img_border" style="">
                        <img src="/img/img1.png" alt="" class="img1">
                        <p class="p-md-3 p-sm-2"> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</p>

                        <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                        <div class="star-rating">
                            <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                            <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                            <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                            <i class="fas fa-star" id="star4" onclick="add(this,4)"></i>
                            <i class="fas fa-star" id="star5" onclick="add(this,5)"></i>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section> -->

<!-- =========faq======= -->
<section id="faq">
    <h3 class="text-dark text-center mb-4 mt-4 top_top">Frequently Asked Questions</h3>
    <div id="accordion">
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;" onclick="myNa()">
                What is TEPS? <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    TEPS is short form for The Experience Plug systems. It is your Platform for seamless events, designed by event professionals for everyone; novice or experienced event organizers & owners. It is used for ticketing, event registration, custom email marketing to attendees, RSVP, Multiple information stored in Attendee Unique QR code, Dashboard for analytics and insights, and lots more.
                    </p>
                    <p>
                    TEPS provides all the tools needed to enhance the attendee experience and make planning, organizing and execution of Virtual, Hybrid or In-Person events seamless.
                    </p>
                </div>


            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#collapseTao" aria-expanded="false" aria-controls="collapseTao" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">
                Who can use TEPS?
                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="collapseTao" class="collapse caro" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>Everyone. Whether it is your first time planning an event or you have planned for many years- TEPS will simply the event process right from the RSVP and registration phase.</p>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#collapseTbo" aria-expanded="false" aria-controls="collapseTbo" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">
            How do I get started with TEPS?<i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="collapseTbo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>Sign up for free with your name and email to create your account. Log in after verifying your email and start creating your events with our easy intuitive interface. You can also Sign up and Schedule a Demo for a step by step demonstration of our features.
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#collapseTco" aria-expanded="false" aria-controls="collapseTco" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">
            I'm not an event planner, but I have an event I would like to organize. Can i still use TEPS?
                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="collapseTco" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    Yes you can use TEPS to manage key elements of your event, regardless of the size and complexity
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#collapseTdo" aria-expanded="false" aria-controls="collapseTdo" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">
            How do I get started with TEPS? <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="collapseTdo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    Sign up for free with your name and email to create your account. Log in after verifying your email and start creating your events with our easy intuitive interface. You can also Sign up and Schedule a Demo for a step by step demonstration of our features.

                    </p>
                   
                </div>

            </div>
        </div>


        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa1" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">What are the features of TEPS?

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    Sell your tickets. Send Email RSVP. Send QR Codes for events. Onsite Check in. Create Polls & surveys. Create customized Landing pages. Send Email Marketing. 
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa2" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">Do i need an special tech skills to use TEPS?
                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    No you don't. TEPS is easy to use and we can guide you through the process. Sign up here or schedule a demo here.
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa3" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">Can i use TEPS for a concert?

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    You most definitely can, sign up and start selling tickets.
                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa4" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">I have a 3 day event with many sessions per day, can TEPS handle this? 

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                    Yes. TEPS can handle events from 10-100,000 and any number of sub events. Schedule a demo here and sign up here
                    </p>
                </div>

            </div>
        </div>


        <!-- not added yet
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa5" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">Is TEPS useful before or after the event?

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                        TEPS is invaluable at every stage of your event.


                    </p>
                    <p>Pre Event( Attendee Registration & Ticketing
                        , Create Event Webpages, Discount Codes ,Payment Processing,
                        Communication ) Event (On-site Check-in, Session Management Systems, Zoom Integration) Post Event (Feedback Forms & Surveys
                        Insights , Analytics & Post Event Communication)
                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa6" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">Can we conduct all ticketing and registration processes ourselves or the TEPS team has to?

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>

                        The TEPS platform is first of all an easy DIY system where everything can be done without our additional help or services. If for any reason you prefer the TEPS team to handle any aspect like building the registration forms or managing communication with all attendee types; these services are available at an additional fee.

                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa7" aria-expanded="false" aria-controls="" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">My event is in London, can you handle our on-site check in services?

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                        At present we only handle onsite check-in services in Lagos, Nigeria but we have made the system so easy that you can conduct check in services yourself with bar scanners, computers and mobile phones. <a href="https://app.eventeps.com/pages/signup">Sign up</a> and let’s help you get started.


                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
            <button class=" btn-link collapsed text-white col-md-12 p-3 text-left btn_bot" data-toggle="collapse" data-target="#fa8" aria-expanded="false" aria-controls="fa8" style="background: rgba(0, 70, 200, 1); border-radius: 7px;    border: none;">Where do I go if I need support on the platform?

                <i class="fas fa-caret-right" style="float: right; margin: 6px;"></i>
            </button>


            <div id="fa8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                <div class="btn-link text-dark col-md-12 bg-light btn_bot text-left p-2">
                    <p>
                        We are always here to support you. You can reference our Explainer videos and User Guides at any time or <a href="/contactus">Contact Us.</a>
                    </p>
                </div>

            </div>
        </div> -->
    </div>


</section>
<!-- upmi        https://app.eventeps.com/pages/signup            -->
<!--      data-target="#tiddyModal" data-toggle="modal"       -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 20px">
            <p>Please share with us your basic details, we will get in touch shortly. <button type="button" class="btn bg-white text-primary border-primary" data-dismiss="modal" style="float: right;">Close</button></p>

            <div class="">
                <form action="" method="post">

                    @csrf

                    <div class="row mb-1 ">
                        <div class="form-group col-md-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="fname" required placeholder="Input first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lname" required placeholder="Input last name">
                        </div>
                    </div>

                    <div class="row mb-1 ">
                        <div class="form-group col-md-6">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" name="email" required placeholder="Input email address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" name="number" required placeholder="Input phone number">
                        </div>
                    </div>



                    <div class="row mb-1 ">
                        <div class="form-group col-md-6">
                            <label for="">Industry</label>
                            <select name="industry" id="industry" class="form-control" required>
                                <option value="">Select what best describe you</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
                                <option value="Alternative Medicine">Alternative Medicine</option>
                                <option value="Animation">Animation</option>
                                <option value="Apparel/Fashion">Apparel/Fashion</option>
                                <option value="Architecture/Planning">Architecture/Planning</option>
                                <option value="Arts/Crafts">Arts/Crafts</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                                <option value="Banking/Mortgage">Banking/Mortgage</option>
                                <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                                <option value="Broadcast Media">Broadcast Media</option>
                                <option value="Building Materials">Building Materials</option>
                                <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                                <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
                                <option value="Chemicals">Chemicals</option>
                                <option value="Civic/Social Organization">Civic/Social Organization</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Commercial Real Estate">Commercial Real Estate</option>
                                <option value="Computer Games">Computer Games</option>
                                <option value="Computer Hardware">Computer Hardware</option>
                                <option value="Computer Networking">Computer Networking</option>
                                <option value="Computer Software/Engineering">Computer Software/Engineering</option>
                                <option value="Computer/Network Security">Computer/Network Security</option>
                                <option value="Construction">Construction</option>
                                <option value="Consumer Electronics">Consumer Electronics</option>
                                <option value="Consumer Goods">Consumer Goods</option>
                                <option value="Consumer Services">Consumer Services</option>
                                <option value="Cosmetics">Cosmetics</option>
                                <option value="Dairy">Dairy</option>
                                <option value="Defense/Space">Defense/Space</option>
                                <option value="Design">Design</option>
                                <option value="E-Learning">E-Learning</option>
                                <option value="Education Management">Education Management</option>
                                <option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
                                <option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
                                <option value="Environmental Services">Environmental Services</option>
                                <option value="Events Services">Events Services</option>
                                <option value="Executive Office">Executive Office</option>
                                <option value="Facilities Services">Facilities Services</option>
                                <option value="Farming">Farming</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Fine Art">Fine Art</option>
                                <option value="Fishery">Fishery</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Food/Beverages">Food/Beverages</option>
                                <option value="Fundraising">Fundraising</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Gambling/Casinos">Gambling/Casinos</option>
                                <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                                <option value="Government Administration">Government Administration</option>
                                <option value="Government Relations">Government Relations</option>
                                <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                                <option value="Health/Fitness">Health/Fitness</option>
                                <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                                <option value="Hospital/Health Care">Hospital/Health Care</option>
                                <option value="Hospitality">Hospitality</option>
                                <option value="Human Resources/HR">Human Resources/HR</option>
                                <option value="Import/Export">Import/Export</option>
                                <option value="Individual/Family Services">Individual/Family Services</option>
                                <option value="Industrial Automation">Industrial Automation</option>
                                <option value="Information Services">Information Services</option>
                                <option value="Information Technology/IT">Information Technology/IT</option>
                                <option value="Insurance">Insurance</option>
                                <option value="International Affairs">International Affairs</option>
                                <option value="International Trade/Development">International Trade/Development</option>
                                <option value="Internet">Internet</option>
                                <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                                <option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
                                <option value="Judiciary">Judiciary</option>
                                <option value="Law Enforcement">Law Enforcement</option>
                                <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                                <option value="Legal Services">Legal Services</option>
                                <option value="Legislative Office">Legislative Office</option>
                                <option value="Leisure/Travel">Leisure/Travel</option>
                                <option value="Library">Library</option>
                                <option value="Logistics/Procurement">Logistics/Procurement</option>
                                <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                                <option value="Machinery">Machinery</option>
                                <option value="Management Consulting">Management Consulting</option>
                                <option value="Maritime">Maritime</option>
                                <option value="Market Research">Market Research</option>
                                <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                                <option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
                                <option value="Media Production">Media Production</option>
                                <option value="Medical Equipment">Medical Equipment</option>
                                <option value="Medical Practice">Medical Practice</option>
                                <option value="Mental Health Care">Mental Health Care</option>
                                <option value="Military Industry">Military Industry</option>
                                <option value="Mining/Metals">Mining/Metals</option>
                                <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                                <option value="Museums/Institutions">Museums/Institutions</option>
                                <option value="Music">Music</option>
                                <option value="Nanotechnology">Nanotechnology</option>
                                <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                                <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                                <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                                <option value="Online Publishing">Online Publishing</option>
                                <option value="Other Industry">Other Industry</option>
                                <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                                <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                                <option value="Packaging/Containers">Packaging/Containers</option>
                                <option value="Paper/Forest Products">Paper/Forest Products</option>
                                <option value="Performing Arts">Performing Arts</option>
                                <option value="Pharmaceuticals">Pharmaceuticals</option>
                                <option value="Philanthropy">Philanthropy</option>
                                <option value="Photography">Photography</option>
                                <option value="Plastics">Plastics</option>
                                <option value="Political Organization">Political Organization</option>
                                <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                                <option value="Printing">Printing</option>
                                <option value="Professional Training">Professional Training</option>
                                <option value="Program Development">Program Development</option>
                                <option value="Public Relations/PR">Public Relations/PR</option>
                                <option value="Public Safety">Public Safety</option>
                                <option value="Publishing Industry">Publishing Industry</option>
                                <option value="Railroad Manufacture">Railroad Manufacture</option>
                                <option value="Ranching">Ranching</option>
                                <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                                <option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
                                <option value="Religious Institutions">Religious Institutions</option>
                                <option value="Renewables/Environment">Renewables/Environment</option>
                                <option value="Research Industry">Research Industry</option>
                                <option value="Restaurants">Restaurants</option>
                                <option value="Retail Industry">Retail Industry</option>
                                <option value="Security/Investigations">Security/Investigations</option>
                                <option value="Semiconductors">Semiconductors</option>
                                <option value="Shipbuilding">Shipbuilding</option>
                                <option value="Sporting Goods">Sporting Goods</option>
                                <option value="Sports">Sports</option>
                                <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                                <option value="Supermarkets">Supermarkets</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Think Tanks">Think Tanks</option>
                                <option value="Tobacco">Tobacco</option>
                                <option value="Translation/Localization">Translation/Localization</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Venture Capital/VC">Venture Capital/VC</option>
                                <option value="Veterinary">Veterinary</option>
                                <option value="Warehousing">Warehousing</option>
                                <option value="Wholesale">Wholesale</option>
                                <option value="Wine/Spirits">Wine/Spirits</option>
                                <option value="Wireless">Wireless</option>
                                <option value="Writing/Editing">Writing/Editing</option>


                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Region</label>
                            <input type="text" class="form-control" name="region" required placeholder="Input preffered location">
                            <!-- <select name="region" id="region" class="form-control" required>
                                <option value="">Select preffered location</option>
                                <option value="north-america" id="north-america" style="color: black;">North-America</option>

                            </select> -->

                        </div>

                    </div>
                    <div class="row mb-1 ">
                        <div class="form-group col-md-6">
                            <label for="">Event Agency</label>
                            <select name="event_agency" id="" class="form-control" required>
                                <option value="">Are you an event agency</option>
                                <option value="yes" id="yes" style="color: black;">Yes</option>
                                <option value="no" id="no" style="color: black;">No</option>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Event Size</label>
                            <select name="event_size" id="" class="form-control" required>
                                <option value="">Select your event agency size</option>
                                <option value="0-200" id="" style="color: black;">0-200 registrations</option>
                                <option value="0-200" id="" style="color: black;">201-500 registrations</option>
                                <option value="0-200" id="" style="color: black;">500 above registrations</option>

                            </select>
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="form-group col-md-12">
                            <label for="additional">Additional Info</label>
                            <textarea name="additional_info" id="" cols="30" rows="10" placeholder="Additional information" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="checkbox" id="check" name="check" value='Yes'>
                            <!-- <input type="radio" id="check" name="check" value='No' hidden active> -->
                            <label for="html">Yes, I opt-in to receive product news, best practices, and updates from TEPS.</label>
                        </div>
                    </div>

                    <button type='submit' class="btn text-primary border-primary home_btn2 col-sm-6 col-md-4" style="background: aliceblue;">Schedule a Demo
                    </button>

                </form>



            </div>


        </div>
    </div>
</div>

<div class="modal fade" id="tiddyModal" tabindex="-1" role="dialog" aria-labelledby="tiddyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 20px">
            <!-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-xl-6 col-xxl-5">
                        <div class="w-100 mt-2 mt-sm-3 pt-4 text-center">
                            <div class="profilepic mb-4 mx-auto">
                                <img src="https://tidycal.com/img/smiley.svg" alt="">
                            </div>
                            <div class="pt-1">
                                <h4 class="mb-4 fw-bold text-dark">power@eventeps.com</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="" style="padding: 20px; box-shadow: 0px 0px 6px 3px #ccc; border-radius: 8px;">
                            <h4 class="text-dark py-2">15 Minute Meeting</h4>
                            <p class="py-3">Book a meeting with me for 15 minutes!</p>
                            <a href="">Book now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="" style="padding: 20px; box-shadow: 0px 0px 6px 3px #ccc; border-radius: 8px;">
                            <h4 class="text-dark py-2">30 Minute Meeting</h4>
                            <p class="py-3">Book a meeting with me for 15 minutes!</p>
                            <a href="">Book now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="tidycal-embed" data-path="power"></div>
        </div>
    </div>
</div>
<script src="https://asset-tidycal.b-cdn.net/js/embed.js" async></script>
<script>
    function add(ths, sno) {
        for (var i = 1; i <= 5; i++) {
            var cur = document.getElementById("star" + i)
            cur.className = "fas fa-star"
        }
        for (var i = 1; i <= sno; i++) {
            var cur = document.getElementById("star" + i)
            if (cur.className == "fas fa-star") {
                cur.className = "fas fa-star"
            }
        }
    }


    $('button').click(function() {
        if ($(this).children('i').hasClass('fa-caret-right')) {
            $(this).children('i').removeClass('fa-caret-right');
            $(this).children('i').addClass('fa-caret-down');
        } else {
            $(this).children('i').addClass('fa-caret-right');
            $(this).children('i').removeClass('fa-caret-down');
        }
    })
</script>
<script>
    class TypeWriter {
        constructor(txtElement, words, wait = 3000) {
            this.txtElement = txtElement;
            this.words = words;
            this.txt = '';
            this.wordIndex = 0;
            this.wait = parseInt(wait, 10);
            this.type();
            this.isDeleting = false;
        }

        type() {
            // Current index of word
            const current = this.wordIndex % this.words.length;
            // Get full text of current word
            const fullTxt = this.words[current];

            // Check if deleting
            if (this.isDeleting) {
                // Remove char
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                // Add char
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            // Insert txt into element
            this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

            // Initial Type Speed
            let typeSpeed = 100;

            if (this.isDeleting) {
                typeSpeed /= 2;
            }

            // If word is complete
            if (!this.isDeleting && this.txt === fullTxt) {
                // Make pause at end
                typeSpeed = this.wait;
                // Set delete to true
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                // Move to next word
                this.wordIndex++;
                // Pause before start typing
                typeSpeed = 500;
            }

            setTimeout(() => this.type(), typeSpeed);
        }
    }


    // Init On DOM Load
    document.addEventListener('DOMContentLoaded', init);

    // Init App
    function init() {
        const txtElement = document.querySelector('.txt-type');
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');
        // Init TypeWriter
        new TypeWriter(txtElement, words, wait);
    }
    $(".imago").hover(function() {
        $('.imagerr').show();
    }, function() {
        $('.imagerr').hide();
    });

    $(".imago1").hover(function() {
        $('.imagerr1').show();
    }, function() {
        $('.imagerr1').hide();
    });

    $(".imago2").hover(function() {
        $('.imagerr2').show();
    }, function() {
        $('.imagerr2').hide();
    });

    $(".imago3").hover(function() {
        $('.imagerr3').show();
    }, function() {
        $('.imagerr3').hide();
    });
</script>
@endsection