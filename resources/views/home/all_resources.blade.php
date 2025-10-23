@extends('layout.homelayout')
@section('content')
@php use App\Models\User; @endphp
<style>
    body {
        color: black;
    }

    .resource_head {
        padding-left: 13px;
    }

    .card_pad {
        border-radius: 13px;
        box-shadow: 0 0 4px 0px #37b4;
        height: 500px;
    }

    .img_clip1 {
        /* clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 0% 89%);
        height: 260px; */
        height: 100%;
    }

    .img_clip2 {
        /* clip-path: polygon(0% 0%, 100% 0%, 100% 89%, 0% 75%);
        height: 260px; */
        border-radius: 13px;
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

    .home_btn {
        margin-right: 25px;
        background: #fff;

        padding: 11px;
    }

    .header_bg {
        padding-top: 200px !important;
        font-size: 50px;
        color: white;
        text-align: center;
    }

    .header_bg1 {
        background-image: url('/img/resources.png');
        background-size: cover;
        height: 80vh;
    }

    .word {
        font-weight: 600;
        color: black;
        font-size: xx-large;
    }

    @media(max-width:400px) {
        .header_bg {
            padding-top: 130px !important;
            font-size: 30px;
            color: white;
            text-align: center;
        }

        .header_bg1 {
            background-image: url('/img/resources.png');
            background-size: cover;
            height: 40vh;
        }

        .img_clip1 {
            /* clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 0% 75%);
            height: 260px; */
            border-radius: 13px;
        }

        .img_clip2 {
            /* clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 0% 75%);
            height: 260px; */
            border-radius: 13px;
        }
    }

    @media(max-width:991px) {

        .img_clip1 {
            /* clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 0% 75%);
            height: 260px; */
            border-radius: 13px;
        }

        .img_clip2 {
            /* clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 0% 75%);
            height: 260px; */
            border-radius: 13px;
        }
    }


    .card_p {
        padding-bottom: 48px;
    }

    .card_body {
        padding: 10px;
    }
</style>
<section class="bg-light">

    <div class="header_bg1">
        <h3 class="header_bg">Resources</h3>
    </div>
    @if($count > 0)
    <div class="container">
        <div  class="mb-3 resource_head">
            <p class="word mt-5 text-left">Latest Posts</p>
            <p class=" text-left"> Here’s what we've been up to recently.</p>
        </div>
        <div class="updat1">
            <div style="position: relative; left: -121px; top: 400px">
                <img src="/img/slice1.png" alt="" style="position: absolute; left: -107px;">
            </div>

            <div style="top: 223px;  position: relative; left: 1221px;">
                <img src="/img/slice2.png" alt="" style="position: absolute;">
            </div>
        </div>
        <div class="row">
            @foreach($get_all as $all)
            @php $user = User::where(['id' => $all->user_id])->first(); @endphp
            <div class="col-xs-12 col-lg-4 col-md-6 mb-4">
                <div class="box pl-3 row_bg">
                    <div class="card card_pad">
                        <div style="height: 300px;border-radius: inherit;">
                            <img class="img_clip1 img-fluid" src="{{env('TEPS')}}/storage/assets/images/{{$all->image}}" alt="" style="border-radius: inherit;">

                        </div>
                        <div class="card-body card_body">
                            <h4>{{$all->topic}}</h4>
                            <p class="read_more">{{substr($all->description, 0, 75)}}... <a href="/resources/{{base64_encode($all->id)}}" style="float: right; margin: 0; color: #348cee" class="dropdown_toggle">Read more <i class="fas fa-angle-right"></i></a></p>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><img src="/img/tobi.jpg" alt="" style="    height: 39px;  border-radius: 50%; width: 39px;"> {{ucwords($user->name)}}<span style="float:right; padding-top: 12px;">{{$all->created_at->format('M d, Y')}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            <!-- <div class="col-xs-12 col-lg-6 mb-4">
                <div class="box pl-3 row_bg">
                    <div class="card card_pad">
                        <img class="img_clip1" src="/img/banner/tep2.jpg" alt="">
                        <div class="card-body card_body">
                            <h4>TEPS Launch 2022</h4>
                            <p>TEPS is kicking off its first virtual conference for all business stakeholders, partners and corporate bodies. On Tuesday, 12th of April, 2022. Experience Revolutionizing virtual events</p>
                            <p id="read" style="display: none;"> hello world</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><img src="/img/tobi.jpg" alt="" style="    height: 39px;  border-radius: 50%; width: 39px;"> Tobi Olanihun <span style="float:right; padding-top: 12px;">March 22, 2021</span></p>
                                </div>
                            </div>
                            <hr>
                            <p style="float: right; margin: 0; color: #348cee" class="dropdown_toggle">Read more <i class="fas fa-angle-right"></i></p>

                        </div>
                    </div>
                </div>

            </div> -->
            <!-- <div class="col-xs-12 col-lg-6 mb-4">
                <div class="box pl-3 row_bg">
                    <div class="card card_pad">
                        <img class="img_clip2" src="/img/banner/tep1.jpg" alt="">
                        <div class="card-body card_body">
                            <h4>Hybrid Event Features</h4>
                            <p>At this point, event organizers know that virtual and in-person events are completely different beasts. Here are the best five key features of an hybrid event platform</p>
                            <div class="row">
                                <div class="col-md-12">

                                    <p><img src="/img/image05.png" alt="">Ope Williams <span style="float:right; padding-top: 12px;">Oct 12, 2021</span></p>

                                </div>

                            </div>
                            <hr>
                            <p style="float: right; margin: 0; color: #348cee">Read more <i class="fas fa-angle-right"></i></p>

                        </div>
                    </div>
                </div>

            </div> -->
            <!-- <div class="col-xs-12 col-lg-6 mb-4">
                <div class="box pl-3 row_bg">
                    <div class="card card_pad">
                        <img class="img_clip2" src="/img/her.jpeg" alt="">
                        <div class="card-body card_body">
                            <h4>Hybrid Event Features</h4>
                            <p>At this point, event organizers know that virtual and in-person events are completely different beasts. Here are the best five key features of an hybrid event platform</p>
                            <div class="row">
                                <div class="col-md-12">

                                    <p><img src="/img/image05.png" alt="">Ope Williams <span style="float:right; padding-top: 12px;">Oct 12, 2021</span></p>

                                </div>

                            </div>
                            <hr>
                            <p style="float: right; margin: 0; color: #348cee">Read more <i class="fas fa-angle-right"></i></p>

                        </div>
                    </div>
                </div>

            </div> -->
            <!-- <div class="col-xs-12 col-lg-6 mb-4">
                <div class="box pl-3 row_bg">
                    <div class="card card_pad" style="">
                        <img class="img_clip1" src="/img/image03.png" alt="">
                        <div class="card-body card_body">
                            <h4>Guide to virtual event planning</h4>
                            <p>The fact there’s virtually no barrier to attendance, other than internet access, means there’s capacity to invite way more people.“Those who couldn’t otherwise afford to travel, be away from their computer, leave overnight and be away from their family, or have mobility concerns, can now attend.”</p>
                            <div class="row">
                                <div class="col-md-12">

                                    <p><img src="/img/image06.png" alt=""> Dorcas Inigbedion <span style="float:right; padding-top: 12px;">Oct 12, 2021</span></p>

                                </div>

                            </div>
                            <hr>
                            <p style="float: right; margin: 0; color: #348cee">Read more <i class="fas fa-angle-right"></i></p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-lg-6 mb-4">
                <div class="box pl-3 row_bg">
                    <div class="card card_pad" style="">
                        <img class="img_clip2" src="/img/image02.png" alt="">
                        <div class="card-body card_body">
                            <h4>Why Virtual events1</h4>
                            <p class="card_p">Virtual events not only help planners expand their audience and promote inclusivity, but they can be an effective way to increase revenue and track key data about your audience.</p>
                            <div class="row">
                                <div class="col-md-12">

                                    <p><img src="/img/image07.png" alt=""> Chris Chiman <span style="float:right; padding-top: 12px;">Oct 12, 2021</span></p>

                                </div>

                            </div>
                            <hr>
                            <p style="float: right; margin: 0; color: #348cee">Read more <i class="fas fa-angle-right"></i></p>

                        </div>
                    </div>
                </div>

            </div> -->


        </div>
        <!-- <div class=" pb-4">
            <a class="btn home_btn mx-auto d-block text-white" href="/all-resources" style="background: linear-gradient(71deg, rgba(33, 69, 255, 1) 35%, rgba(0, 212, 255, 1) 100%);">Load more <i class="ti-arrow-right" style="font-size: x-small; padding: 0px 10px;"></i></a>
        </div> -->


    </div>
    @else
    <div class="container text-center" style="padding: 50px;">
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_2iDsZ8.json" mode="bounce" background="transparent" speed="1" style=" height: 300px;" loop autoplay></lottie-player>
        <h3 style="margin: 0; padding:20px; color: #a3a3a3">No Blog Content Yet</h3>
    </div>
    @endif

</section>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<script>
    $(document).ready(function() {
        $(".dropdown_toggle").click(function() {
            //Toggle the child but don't include them in the hide selector using .not()
            $('#read').toggle()
        });

    });
</script>

@endsection

