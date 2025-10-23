@extends('layout.homelayout')
@section('content')
<style>
    .bgbg {
        background-image: url(/img/bg.png);
        background-size: cover;

    }

    .l-h3 {
        padding-top: 12%;
        font-weight: 800;
        font-size: 50px;
        color: white;
    }

    .l-p {
        font-size: 28px;
        color: white;
        margin-top: 20px;
    }

    .l-di {
        padding-top: 10px;
    }

    .l-sp {
        font-size: 13px;
        color: white;
        margin-left: 10px;
    }

    .l-cont {
        padding: 151px 15px 85px;
    }

    .l-btn {
        padding: 12px;
        margin-top: 50px;
        color: white;
        font-size: 13px;
        background: linear-gradient(5deg, rgba(33, 69, 255, 59) -6%, rgba(0, 212, 255, 1) 84%);
    }

    .l-img {
        max-width: 681px;
        height: 443px;
        margin-top: 0px;
    }

    @media(max-width: 430px) {
        .l-cont {
            padding: 67px 15px;
        }

        .l-h3 {
            padding-top: 5%;
            font-weight: 800;
            font-size: 41px;
            color: white;
        }

        .l-p {
            font-size: 24px;
            color: white;
            margin-top: 10px;
        }

        .l-btn {
            padding: 12px;
            margin-top: 30px;
            color: white;
            font-size: 13px;
            background: linear-gradient(5deg, rgba(33, 69, 255, 59) -6%, rgba(0, 212, 255, 1) 84%);
        }

        .l-img {
            max-width: 311px !important;
            height: 255px !important;
            padding-top: 46px !important;
        }
    }

    @media(max-width: 770px) {
        .l-img {
            max-width: 311px;
            height: 255px;
            padding-top: 46px;
        }

        .l-cont {
            padding: 56px 15px;
        }
    }

    @media(max-width: 1025px) {
        .l-img {
            max-width: 487px;
            height: 365px;
            margin-top: 0px;
        }

        .l-p {
            font-size: 24px;
            color: white;
            margin-top: 20px;
        }

        .l-h3 {
            padding-top: 6%;
            font-weight: 800;
            font-size: 50px;
            color: white;
        }
    }
</style>
<div class="bgbg">

    <div class="container l-cont">
        <div class="row">
            <div class="col-md-10 col-lg-6">
                <h3 class="l-h3">TEPS LAUNCH</h3>
                <p class="l-p">Revolutionizing The Attendee Journey </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="l-di">
                            <img src="img/date.png" alt=""><span class="l-sp">Tuesday 12th April, 2022</span>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="l-di">
                            <img src="img/time.png" alt=""><span class="l-sp">3pm - 6pm WAT</span>

                        </div>
                    </div>
                </div>
                <a href="https://app.eventeps.com/TEPSHL">
                    <button class="btn l-btn col-md-4">Register</button>

                </a>
            </div>
            <div class="col-md-10 col-lg-6">
                <img src="img/lap.png" alt="" class="l-img">
            </div>
        </div>
    </div>
</div>

@endsection