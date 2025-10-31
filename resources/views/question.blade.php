@extends('layouts')
@section('content')
@php
use App\Models\User;
@endphp
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10 col-sm-10 col-11 text-center p-0 mt-3 mb-2">
            <div class="card pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Get Started with TEPS</h2>
                <p>Tell us about your event</p>
                <form id="msform">
                    <ul id="progressbar">
                        <li class="active" id="personal"><strong>Personal Information</strong></li>
                        <li id="account"><strong>Event Details</strong></li>
                        <li id="finish"><strong>Other Details</strong></li>
                    </ul>

                    <!-- Personal Information -->
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Personal Information:</h2>
                            <label>First Name: *</label>
                            <input type="text" name="fname" placeholder="Enter Firstname" required />
                            <label>Last Name: *</label>
                            <input type="text" name="lname" placeholder="Enter Lastname" required />
                            <label>Preferred Contact Method: *</label>
                            <select name="preferred_contact" id="" class="form-select mb-3" required>
                                <option value="both_phone_mail">Phone and Email</option>
                                <option value="phone">Phone Number</option>
                                <option value="email">Email</option>
                            </select>
                            <div class="email">
                                <label>Email Address: *</label>
                                <input type="email" name="email" placeholder="Input Email" />
                            </div>
                            <div class="phone">
                                <label>Phone Number: *</label>
                                <input type="tel" name="phone_number" placeholder="Enter Phonenumber" />
                            </div>
                        </div>
                        
<input type="button" name="next" class="next action-button" value="Next" aria-label="Go to next step" />
                    </fieldset>

                    <!-- Event Details -->
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Event Details:</h2>

                            <label>Organizer's Name: *</label>
                            <input type="text" name="organizer_name" placeholder="Organizer's Name" required />

                            <label>Event Name: *</label>
                            <input type="text" name="event_name" placeholder="Event Name" required />

                            <label>Brief Description: *</label>
                            <textarea name="description" placeholder="Description" required></textarea>

                            <label>What mode is your event: *</label>
                            <select class="form-select mb-3" name="mode_of_event" id="" required>
                                <option value="hybrid">Hybrid</option>
                                <option value="physical">Physical</option>
                                <option value="virtual">Virtual</option>
                            </select>

                            <div class="not_virtual " style="display:block">
                                <label>Where is the venue of your physical event?: *</label>
                                <input type="text" name="venue" placeholder="physical event venue" required />
                            </div>

                            <label>Event start date: *</label>
                            <input type="date" name="start_date" placeholder="start date" required />

                            <label>Start time of event: *</label>
                            <input type="time" name="start_time" placeholder="start time" required />

                            <label>End time of event: *</label>
                            <input type="time" name="end_time" placeholder="end time" required />

                            <label>What is the attendee capacity of your event?: *</label>
                            <select class="form-select" name="event_size" id="" required>
                                <option value="1-200">1-200 attendees</option>
                                <option value="201-500">201-500 attendees</option>
                                <option value="501">500 above attendees</option>
                            </select>
                            <small class="text-muted">This will be used to set the capacity for software, and to determine the size and structure of our check-in team.</small>


                            <label class="mt-3">Tell us your preferred model from the two options below: *</label>
                            <select class="form-select" name="service_option" id="" required>
                                <option value="Self-Service Option">Self-Service Option</option>
                                <option value="TEPS Setup and Support Services">TEPS Setup and Support Services</option>
                            </select>

                            <label class="mt-3">Is it a paid for event or free for attendees?: *</label>
                            <select class="form-select" name="payment_option" id="" required>
                                <option value="free">Free</option>
                                <option value="paid">Paid</option>
                                <option value="combined">Combined: Free and Paid</option>
                            </select>

                            <label class="mt-3">Tell us the type of event you are planning: *</label>
                            <select class="form-select" name="event_type" id="" required>
                                <option value="Conference">Conference</option>
                                <option value="Exhibition">Exhibition</option>
                                <option value="Annual General Meeting">Annual General Meeting</option>
                                <option value="Internal Meeting">Internal Meeting</option>
                                <option value="Birthday Celebration">Birthday Celebration</option>
                                <option value="Concert">Concert</option>
                                <option value="Sport Event">Sport Event</option>
                                <option value="Wedding Ceremony">Wedding Ceremony</option>
                                <option value="Anniversary">Anniversary</option>
                                <option value="Festival">Festival</option>
                                <option value="Seminar">Seminar</option>
                                <option value="Social Event">Social Event</option>
                                <option value="Other Ceremonies">Other Ceremonies</option>
                            </select>

                            <label class="mt-3">What features would you like in your event?: *</label>
                            <div class="row">

                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Speaker Management">
                                        <label class="form-check-label">Speaker Management
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Session Scheduling">
                                        <label class="form-check-label">Session Scheduling
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Event Landing Page">
                                        <label class="form-check-label">Event Landing Page
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Attendee Registration">
                                        <label class="form-check-label">Attendee Registration
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Unique QR Codes">
                                        <label class="form-check-label">Unique QR Codes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Onsite Check-in Module">
                                        <label class="form-check-label">Onsite Check-in Module
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Check-In Devices">
                                        <label class="form-check-label">Check-In Devices
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Check-in Executives">
                                        <label class="form-check-label">Check-in Executives
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Group Registration">
                                        <label class="form-check-label">Group Registration
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Multiple Ticket Segments">
                                        <label class="form-check-label">Multiple Ticket Segments
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Discount Codes for Attendees">
                                        <label class="form-check-label">Discount Codes for Attendees
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Wristbands">
                                        <label class="form-check-label">Wristbands
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Lanyards and Tags">
                                        <label class="form-check-label">Lanyards and Tags
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Pre-Event Badge pick-up">
                                        <label class="form-check-label">Pre-Event Badge pick-up
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Exhibitor Lead Capture">
                                        <label class="form-check-label">Exhibitor Lead Capture
                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Post-event Report">
                                        <label class="form-check-label">Post-event Report
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Communications System Management (Email Communication with Attendees)">
                                        <label class="form-check-label">Communications System Management (Email Communication with Attendees)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="Photo Sharing (Attendees can upload photos they take)">
                                        <label class="form-check-label">Photo Sharing (Attendees can upload photos they take)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="QR Coded Menu, Programme, and Website etc">
                                        <label class="form-check-label">QR Coded Menu, Programme, and Website etc
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="" style="display: flex; align-items:start">
                                        <input type="checkbox" style="width:fit-content; margin: 0px; height:fit-content; margin-right:10px " class="" name="event_features[]" value="RSVP Management and E-invites">
                                        <label class="form-check-label">RSVP Management and E-invites
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2">

                                    <label>Others: *</label>
                                    <textarea name="other_features" placeholder="Enter Other features you might need"></textarea>

                                </div>

                            </div>

                            <label class="mt-3">List out the ticket categories for your event, price per ticket, and tell us the attendee capacity (qty) per ticket:</label>
                            <textarea name="tickets" id="" class="mb-0"></textarea>
                            <small class="text-muted">For example: Regular ($500) - 100, VIP ($1000)- 100, VVIP ($1500)- 100, Exhibitors ($1200)- 50, Crew/Official - 20, Media- 10, etc</small>
<br>
                            <label class="mt-3">Do you have a list of attendees for this event?*</label>
                            <select class="form-select" name="attendee_list" id="" required>
                                <option value="yes">Yes</option>
                                <option value="no">no</option>
                            </select>
                            <small class="text-muted">If yes, list should be sent in excel/csv format, and must be sent at least 48 hours before the event.</small>


                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" aria-label="Go to next step" />
<input type="button" name="previous" class="previous action-button-previous" value="Previous" aria-label="Go to previous step" />
                    </fieldset>

                    <!-- Other Details -->
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Other Details:</h2>
                            <label>Website:</label>
                            <input type="text" name="website" placeholder="Enter your website url" />

                            <label>Question/Comments:</label>
                            <textarea name="question" id="" placeholder="Enter your question/comment"></textarea>
                        </div>
<input type="submit" class="action-button" value="Submit" aria-label="Submit event details form" />
<input type="button" name="previous" class="previous action-button-previous" value="Previous" aria-label="Go to previous step" />
                         </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Montserrat, sans-serif;
        background-color: #ECEFF1;
    }

    .container-fluid {
        padding: 20px;
    }

    .card {
        border: none;
        position: relative;
        padding: 20px;
    }

    .fs-title {
        font-size: 20px;
        color: #673AB7;
        text-align: left;
    }

    .action-button {
        background: #673AB7;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
    }

    .action-button:hover {
        background: #311B92;
    }

    .action-button-previous {
        background: #616161;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
    }

    .action-button-previous:hover {
        background: #000000;
    }

    input {
        padding: 10px;
        width: 100%;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        background: white;
    }

    #progressbar {
        margin-bottom: 30px;
        display: flex;
        justify-content: space-between;
        padding-left: 0;
    }

    #progressbar li {
        list-style: none;
        font-size: 14px;
        color: lightgrey;
        position: relative;
        text-align: center;
        flex-grow: 1;
    }

    #progressbar .active {
        color: #673AB7;
    }

    #progressbar li:before {
        content: "\2022";
        font-size: 30px;
        color: lightgray;
        display: block;
        margin-bottom: 10px;
    }

    #progressbar li.active:before {
        color: #673AB7;
    }

    fieldset {
        display: none;
    }

    fieldset:first-of-type {
        display: block;
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }
</style>
<style>
    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    #heading {
        text-transform: uppercase;
        color: #673AB7;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    }

    #msform .action-button {
        width: 140px;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #673AB7;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #673AB7;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #673AB7
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #673AB7
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #673AB7
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to toggle visibility and required status of contact fields
        function handleContactFieldsVisibility() {
            const selectedValue = $('select[name="preferred_contact"]').val();

            // Default state - hide both fields and remove required attribute
            $('.email, .phone').hide();
            $('input[name="email"], input[name="phone_number"]').prop('required', false);

            // Show and set required based on selection
            if (selectedValue === 'both_phone_mail') {
                $('.email, .phone').show();
                $('input[name="email"], input[name="phone_number"]').prop('required', true);
            } else if (selectedValue === 'phone') {
                $('.phone').show();
                $('input[name="phone_number"]').prop('required', true);
            } else if (selectedValue === 'email') {
                $('.email').show();
                $('input[name="email"]').prop('required', true);
            }
        }

        // Function to toggle visibility and required status of venue field based on event mode
        function handleVenueVisibility() {
            const selectedValue = $('select[name="mode_of_event"]').val();

            // Hide venue field by default and remove required attribute
            $('.not_virtual').hide();
            $('input[name="venue"]').prop('required', false);

            // Show and set required for venue field if hybrid or physical is selected
            if (selectedValue === 'hybrid' || selectedValue === 'physical') {
                $('.not_virtual').show();
                $('input[name="venue"]').prop('required', true);
            }
        }

        // Run on page load to set initial states
        handleContactFieldsVisibility();
        handleVenueVisibility();

        // Run whenever the contact method dropdown selection changes
        $('select[name="preferred_contact"]').change(function() {
            handleContactFieldsVisibility();
        });

        // Run whenever the event mode dropdown selection changes
        $('select[name="mode_of_event"]').change(function() {
            handleVenueVisibility();
        });

        // Handle the previous button
        $(".previous").click(function() {
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            // Remove active class from current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            current_fs.hide();
            previous_fs.show();

            return false; // Prevent default button behavior
        });

        // Modify the next button validation to check only visible required fields
        $(".next").click(function() {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            // Validate required fields in the current fieldset
            var isValid = true;
            current_fs.find("input[required]:visible, select[required]:visible, textarea[required]:visible").each(function() {
                if ($(this).val().trim() === "") {
                    isValid = false;
                    $(this).css("border", "2px solid red"); // Highlight empty fields
                } else {
                    $(this).css("border", "1px solid #ccc"); // Reset valid fields
                }
            });

            if (isValid) {
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                current_fs.hide();
                next_fs.show();
            } else {
                alert("Please fill all required fields before proceeding.");
            }

            return false; // Prevent default button behavior
        });

        // Handle form submission with AJAX
        $("#msform").submit(function(e) {
            e.preventDefault();

            // Show loading indicator
            $('input[type="submit"]').val('Submitting...').attr('disabled', true);

            // Collect form data
            var formData = new FormData(this);

            // Add checkbox values for event features (they need special handling)
            var eventFeatures = [];
            $('input[name="event_features[]"]:checked').each(function() {
                eventFeatures.push($(this).val());
            });
            formData.append('event_features', JSON.stringify(eventFeatures));

            // Get Laravel CSRF token
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/api/event-registration', // Replace with your Laravel API endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    // Show success message
                    $(".form-card").html(
                        '<div class="text-center">' +
                        '<i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>' +
                        '<h2 class="mt-4">Form submitted Successful!</h2>' +
                        '<p>Your event form has been submitted successfully.</p>' +
                        '<p>Reference ID: ' + response.reference_id + '</p>' +
                        '<p>Expect a response from the admin.</p>' +
                        '</div>'
                    );

                    // Update progress bar
                    $("#progressbar li").removeClass("active");
                    $("#progressbar li#finish").addClass("active");
                },
                error: function(xhr, status, error) {
                    // Parse error response
                    var errorMessage = 'An error occurred while submitting the form.';

                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = '<ul>';
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            errorMessage += '<li>' + value + '</li>';
                        });
                        errorMessage += '</ul>';
                    } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    // Display error
                    alert('Error: ' + errorMessage);

                    // Reset button
                    $('input[type="submit"]').val('Submit').attr('disabled', false);
                }
            });
        });
    });
</script>
@endsection