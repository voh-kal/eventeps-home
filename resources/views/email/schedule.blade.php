<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Request</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .ticket {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            width: 100%;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .header {
            border-bottom: 2px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .logo {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }

        .header-info {
            padding-left: 20px;
        }

        .header-info h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        .header-info p {
            margin: 5px 0;
        }

        .event-details {
            margin-top: 10px;
        }

        .event-details p {
            margin: 5px 0;
        }

        .icon {
            margin-right: 5px;
        }

        .body {
            padding-top: 20px;
        }

        .inner-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }


        .right-column {
            vertical-align: top;
            padding: 10px;
        }



        .right-column {
            border-left: 2px solid #ddd;
            width: 40%;
            text-align: center;
        }



        .summary {
            color: #888;
            margin-bottom: 10px;
        }

        .event-info p,
        .ticket-info p,
        .session-info p,
        .order-info p,
        .ticket-number p {
            margin: 5px 0;
        }

        .session-info h3 {
            margin: 0px;
            font-size: 18px;
            color: #333;
        }

        .qr-code {
            margin-top: 20px;
        }

        .qr-code img {
            width: 200px;
            height: auto;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        @media print {
            @page {
                margin: 0;
            }

            body,
            html {
                width: 100%;
            }

            .ticket {
                box-shadow: none;
                margin: 0;
                padding: 0;
                border: 0;
            }
        }
    </style>
</head>

<body>
    <div class="ticket">
        <div>
            <img src="{{env('APP_URL')}}img/resources.png" alt="banner Logo" style="width:100%">
        </div>
               
        <table class="inner-table">
            <tr>
                <td>
                    <h2 style="margin-bottom: 0px;">Submitted Information</h2>
                    <h4 style="margin-bottom: 0px;">Reference Id: {{$data['reference_id']}}</h4>
                </td>
            </tr>
            <tr>
                <td style="padding:0px">
                    <table>
                        <tr style="border-bottom: 1px solid #ccc;">
                            <td style="border: 0px;">
                                <div class="event-info">
                                    <p><strong>Name: </strong>{{$data['fname']}} {{ $data['lname']}}</p>
                                    @if($data['email'])
                                    <p><strong>Email: </strong>{{$data['email']}}</p>
                                    @endif
                                    @if($data['number'])
                                    <p><strong>Phone Number: </strong>{{$data['number']}}</p>
                                    @endif
                                    <p><strong>Organizer's Name: </strong>{{$data['industry']}}</p>
                                    <p><strong>Event Name: </strong>{{$data['event_agency']}}</p>
                                    <p><strong>Event Size: </strong>{{$data['event_size']}}</p>
                                    <p><strong>Event Description: </strong> <br>{{$data['description']}}</p>
                                    <p><strong>Mode of Event: </strong>{{$data['mode_of_event']}}</p>
                                    @if($data['venue'])
                                    <p><strong>Venue for Physical Event: </strong>{{$data['venue']}}</p>
                                    @endif
                                    <p><strong>Start date: </strong> {{$data['start_date']}}</p>
                                    <p><strong>Start time: </strong> {{$data['start_time']}}</p>
                                    <p><strong>End time: </strong> {{$data['end_time']}}</p>

                                    <p><strong>Service Option: </strong>{{$data['service_option']}}</p>
                                    <p><strong>Payment Option: </strong>{{$data['payment_option']}}</p>

                                </div>

                            </td>
                        </tr>

                    </table>
                </td>

            </tr>
            <tr>
                <td style="padding:0px">
                    <table>
                        <tr style="border-bottom: 1px solid #ccc;">
                            <td style="border: 0px;">
                                <div class="event-info">

                                    <p><strong>Event Type: </strong><br>{{$data['event_type']}}</p>
                                  
                                    @if($data['event_features'])
                                    <p><strong>Event Features: </strong>{{$data['event_features']}}</p>
                                    @endif
                                    @if($data['other_features'])
                                    <p><strong>Other Features: </strong>{{$data['other_features']}}</p>
                                    @endif
                                    @if($data['tickets'])
                                    <p><strong>Tickets: </strong>{{$data['tickets']}}</p>
                                    @endif
                                    @if($data['website'])
                                    <p><strong>Website: </strong>{{$data['website']}}</p>
                                    @endif
                                    <p><strong>Do you have a list of attendees for this event : </strong>{{$data['attendee_list']}}</p>
                                </div>

                            </td>
                        </tr>

                    </table>
                </td>

            </tr>
            @if($data['addidtional_info'])
            <tr>
                <td style="padding:0px">
                    <table>
                        <tr style="border-bottom: 1px solid #ccc;">
                            <td style="border: 0px;">
                                <div class="event-info">

                                    <p><strong>Question/Comment: </strong><br>{{$data['addidtional_info']}}</p>
                                </div>

                            </td>
                        </tr>

                    </table>
                </td>

            </tr>
            @endif
        </table>
        <div style="display: flex; justify-content: space-between; margin: 40px 0px;">
            <img src="{{env('APP_URL')}}images/logo.png" alt="" style="width: 100px;">
            <span style="color: blue; float:right; margin-left:auto;">Create your next event with TEPS | <a href="https://eventeps.com" style="margin-left: 7px; color: blue;">www.eventeps.com</a></span>
        </div>
    </div>
</body>

</html>