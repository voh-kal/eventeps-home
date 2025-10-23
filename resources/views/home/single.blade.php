@extends('layouts')
@section('content')
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
        padding-top: 100px !important;
        font-size: 50px;
        color: white;
        text-align: center;
    }

    .header_bg1 {
        background-image: url('/img/resources.png');
        background-size: cover;
        height: 40vh;
    }

    .word {
        font-weight: 600;
        color: black;
        font-size: xx-large;
    }

    @media(max-width:400px) {
        .header_bg {
            padding-top: 100px !important;
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
        padding: 30px;
    }

    .word2 {
        font-weight: 600;
        color: blue !important;
        text-decoration: none !important;
    }

    .margin_top {
        padding-top: 80px;
    }

    .img_cat {
        height: 400px;
        width: 1050px;
    }

    @media(max-width:500px) {
        .img_cat {
            height: auto;
            width: 100%;
            max-height: 300px;
        }
    }



    .bdge {
        height: 21px;
        background-color: orange;
        color: #fff;
        font-size: 11px;
        padding: 8px;
        border-radius: 4px;
        line-height: 3px;
    }

    .comments {
        text-decoration: underline;
        text-underline-position: under;
        cursor: pointer;
    }

    .dot {
        height: 7px;
        width: 7px;
        margin-top: 3px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }

    .hit-voting:hover {
        color: blue;
    }

    .hit-voting {
        cursor: pointer;
    }

    .trigger {
        height: $height;
        line-height: $height;
        font-size: 14px;
        text-align: center;
        cursor: pointer;
        transition: color .2s, border .2s;

        a {
            color: currentColor;
            text-decoration: none;
            transform: skew(10deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        i {
            font-size: 14px;
            line-height: $height;
        }

        &:hover {
            color: #2c2c2c;
            border-color: #2c2c2c !important;
        }

        &.share-btn {
            i {
                margin: 0 5px 0 0;
            }
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section-resource ">
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
                        <a class="nav-link " href="/faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/resources">Resources</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <a href="#" class="btn btn_outline_light me-2" data-bs-target="#exampleModal" data-bs-toggle="modal">Get Started</a>
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
                        {{ucfirst($all->topic)}}
                    </h1>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="m-0">By <b>{{ucwords($user->name)}}</b> </p>
                        </div>
                        <div class="col-md-3">
                            <p class="m-0"> {{$all->created_at->format('F d, Y')}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<section class="bg-light">
    <div class="container margin_top">
        <div class="mb-3 resource_head p-0">
            <a href="/resources" class="word2 mt-3 text-left"> <i class="fas fa-arrow-left"></i> Back</a>
        </div>
    
        <div class="row">
            <div class="col-md-12 mt-2 mb-2">
                <img src="{{env('TEPS')}}/storage/assets/images/{{$all->image}}" alt="" class="img-fluid">
            </div>
            <div class="col-xs-12 col-lg-12 mb-4 mt-4">
                <p style="text-align: justify;">{{$all->description}}</p>
            </div>

        </div>
    </div>

    <hr />
    <div>

        <div class="container">
            <div class="share-window row mx-auto">
                <div class="trigger mx-2 like-btn"><a href="{{ route('like.store', ['post' => $all->id]) }}"><i class="fas fa-heart"></i> {{ $all->likes->count() }} Likes </a></div>

            </div>


        </div>

    </div>
    <hr />
    <div class="container mt-5 mb-3 shadow">
        <div class="d-flex justify-content-center row">
            <div class=" col-md-12">

                <div class="coment-bottom bg-white p-2 px-4">
                    <div class="add-comment-section mt-4 mb-4">
                        <form action="{{ route('comments.store') }}" method="post">
                            @csrf()

                            <input type="hidden" name="post_id" value={{ $all->id }}>
                            <input type="hidden" name="user_id" value={{ auth()->user() ? auth()->user()->id : 1 }}>
                            <textarea name="comment" class="form-control mr-3" placeholder="Add comment"></textarea>

                            <button class="btn btn-primary mt-2 btn-block" type="submit">Comment</button>

                        </form>
                    </div>
                    @include('home.comments', ['comments' => $all->comments, 'post_id' => $all->id])

                </div>
            </div>
        </div>
    </div>


    </div>


</section>

@endsection