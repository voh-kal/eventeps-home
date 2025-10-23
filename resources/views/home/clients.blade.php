@extends('layout.homelayout')
@section('content')
<style>
    .home_btn {
        margin-right: 25px;
        background: #fff;

        padding: 11px;
    }

    .body_top {
        padding-top: 114px !important
    }

    .bg_top {
        padding-top: 114px !important
    }

    .star-rating {
        color: yellow;
    }

    .social-box .box {

        border-radius: 10px;
        padding: 40px 10px;
        margin: 20px 0px;
        cursor: pointer;
        transition: all 0.5s ease-out;
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

    .rounded {
        position: absolute;
        bottom: 72%;
        left: 37%;
    }

    .row_top {
        margin-top: 16%;
    }

    .row_top1 {
        margin-top: 10%;
    }

    .row_bg {
        box-shadow: 0px 0px 10px #ccc;
        border-radius: 10px
    }

    @media (max-width: 400px) {
        .rounded {
            position: unset;
            padding-top: 20px;
        }

        .bg_top {
            padding-top: 34px !important
        }

        .row_top {
            margin-top: 10px;
        }

        .row_bg {
            box-shadow: 0px 0px 10px #ccc;
            border-radius: 0px
        }
    }
</style>


<div class="social-box bg-light pb-4">
    <div class="container body_top">
        <h3 class="text-dark text-center mb-sm-5 imd_btn">What our clients are saying..</h3>
        <div class="updat">
            <div style="position: relative;">
                <img src="/img/dots.png" alt="" style="position: absolute; left: -107px;">
            </div>

            <div style="top: 144px; position: relative; left: 1221px;">
                <img src="/img/dots.png" alt="" style="position: absolute;">
            </div>
        </div>
        <div class="row row_top">

            <div class="col-lg-6 col-xs-12 text-center">
                <div class="box pl-3 row_bg">

                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>
        </div>
        <div class="row row_top1">
            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>




        </div>
        <div class="row row_top1">
            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>




        </div>
        <div class="updat1">
            <div style="position: relative; left: -121px">
                <img src="/img/slice1.png" alt="" style="position: absolute; left: -107px;">
            </div>

            <div style="top: 0px;  position: relative; left: 1221px;">
                <img src="/img/slice2.png" alt="" style="position: absolute;">
            </div>
        </div>
        <div class="row row_top1">
            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-xs-12  text-center">
                <div class="box pl-3 row_bg">
                    <img src="/img/img1.png" alt="" class="img1 rounded mx-auto d-block">
                    <p class="bg_top"><i> TEPS is an online event platform that manage hybrid events, virtual events and resources for individual, Advertising & Media Specialist, Organisations and anyone.</i></p>

                    <h3 class="mt-md-3 mt-sm-3">Sumbo Tolulope</h3>
                    <div class="star-rating">
                        <i class="fas fa-star" id="star1" onclick="add(this,1)"></i>
                        <i class="fas fa-star" id="star2" onclick="add(this,2)"></i>
                        <i class="fas fa-star" id="star3" onclick="add(this,3)"></i>
                        <i class="far fa-star" id="star4" onclick="add(this,4)"></i>
                        <i class="far fa-star" id="star5" onclick="add(this,5)"></i>
                    </div>

                </div>
            </div>




        </div>

        <a class="btn home_btn col-sm-6 col-lg-3 mx-auto d-block text-white" href="#" style="background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);">Load more <i class="ti-arrow-right" style="font-size: x-small; padding: 0px 10px;"></i></a>
    </div>
</div>
@endsection