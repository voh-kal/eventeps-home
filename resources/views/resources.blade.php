@extends('layouts')
@section('content')
@php
use App\Models\User;
@endphp
<style>
    .pinned-image {
        height: 310px;
        width: 100%;
        object-fit: cover;
        border-radius: 7px 0 0 7px;
        object-position: top;
    }

    .unpinned-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
    }
</style>
<!-- Hero Section -->
<section class="hero-section-resource ">
    <!-- Main Navigation -->
    @include('navbar')
    <div class="d-flex align-items-center text-white">
        <div class="container">
            <div class="row hero-content-about">
                <div class="col-lg-12 mx-auto text-center">

                    <h1 class="display-4 fw-bold mb-4" style="text-transform: uppercase;">
                        Event Planning Resources
                    </h1>
                    <div class="col-lg-9 mx-auto text-center">
                        <p class="lead mb-5">
                            Dive into our collection of guides, tips, and tools designed to help you master every aspect of event planning. From best practices to insider insights, our resources are here to empower you to create exceptional events with ease
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@if($getPinned)
@php $adminUser = User::where(['id' => $getPinned->user_id])->first(); @endphp
<section class="teps_section">
    <div class="container py-5">
        <div class="row my-3 mx-0" style="    border: 1px solid blue;    border-radius: 7px;">
            <div class=" col-lg-7 m-0 p-0">
                <div class="card h-100 border-0 p-0">
                    <div class="card-body p-0">
                        <div class=" ">
                            <img src="{{config('app.frontend_url')}}/storage/assets/images/{{$getPinned->image}}" alt="Featured resource image: {{$getPinned->topic}}" class="img-fluid pinned-image ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card h-100 border-0">
                    <div class="card-body d-flex flex-column p-4 ">
                        <div class="button_cont">
                            <button class="button_btn">featured</button>
                        </div>

                        <a href="/resources/{{base64_encode($getPinned->id)}}" class="row1" aria-label="Read resource: {{$getPinned->topic}}">{{$getPinned->topic}}</a>

                        <p class="row3">{{$getPinned->created_at->format('M d, Y')}}</p>
                        <p><img src="/images/author.png" alt="Author profile image"><span style="margin-left: 10px;font-size:14px">{{ucwords($adminUser->name)}}</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif



<!-- case studies -->
<section class="others">
    <div class="container py-5">
        <div class="row g-4 ">
            @foreach($get_all as $all)
            @php $user = User::where(['id' => $all->user_id])->first(); @endphp
            <div class="col-md-4 my-3">

                <div class="card h-100 cards" style="background: none;border: 1px solid black">
                    <div style="height: 300px;border-radius: inherit;    overflow: hidden;">

                        <img src="{{config('app.frontend_url')}}/storage/assets/images/{{$all->image}}" alt="Resource image: {{$all->topic}}" class="img-fluid unpinned-image">
                    </div>

                    <div class="card-body card-bodys d-flex flex-column justify-content-center p-3">

                        <a href="/resources/{{base64_encode($all->id)}}" class=" ft1 " aria-label="Read resource: {{$all->topic}}">{{$all->topic}}</a>

                        <p class="row4">{{$all->created_at->format('M d, Y')}}</p>
                        <p><img src="/images/author.png" alt="Author profile image"><span style="margin-left: 10px;font-size:14px">{{ucwords($user->name)}}</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- video section -->
 @include('videosection')


@endsection