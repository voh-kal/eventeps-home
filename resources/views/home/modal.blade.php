@extends('layout.homelayout')
@section('content')
<style>
    .home_btn2 {
        border: 1px solid;
        padding: 11px;
    }

    .body_top {
        margin-top: 114px !important
    }
</style>
<section>
    <div class="container mb-4 body_top">
        <p>Please share with us your basic details, we will get in touch shortly. <span style="border: 1px solid blue; float:right; padding: 7px">close</span></p>

        <div class="" style="padding: 0;">
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
                        <input type="email" class="form-control"="Email address" name="email" required placeholder="Input email address">
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
                            <option value="technology" id="technology" style="color: black;">Technology</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Region</label>
                        <select name="region" id="region" class="form-control" required>
                            <option value="">Select preffered location</option>
                            <option value="north-america" id="north-america" style="color: black;">North-America</option>

                        </select>
                    </div>

                </div>
                <div class="row mb-1 ">
                    <div class="form-group col-md-6">
                        <label for="">Event Agency</label>
                        <select name="event_agency" id="" class="form-control" required>
                            <option value="">Are you an event agency</option>
                            <option value="yes" id="yes" style="color: black;">Yes</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Event Size</label>
                        <select name="event_size" id="" class="form-control" required>
                            <option value="">Select your event agency size</option>
                            <option value="0-200" id="" style="color: black;">0-200 registrations</option>

                        </select>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="form-group col-md-12">
                        <label for="additional">Additional Info</label>
                        <textarea name="info" id="" cols="30" rows="10" placeholder="Are you an event agency" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="radio" id="check" name="check">
                        <label for="html">Yes, I opt-in to receive product news, best practices, and updates from TEPS.</label>
                    </div>
                </div>


                <a class="btn text-primary border-primary home_btn2 col-sm-6 col-md-2" href="#">Schedule a Demo</a>
            </form>



        </div>


    </div>
</section>
@endsection