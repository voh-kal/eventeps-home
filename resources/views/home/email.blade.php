<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventeps Demo Notification</title>
</head>

<body>
    <div class="bg-light">
        <div class="container-for-gmail-android" width="50%" style="padding: 20px;">
            <div align='center'>
                <img class="force-width-gmail" src="/img/logo1.png" alt="teps" width="72px" />

            </div>
            <div>
                <h2 style="font-size:15px">Hello {{ucwords($name)}},</h2>
                <div style="font-size: larger;">
                    <p>Your request to schedule a demo is under review.</p>
                    <table>
                        <tr>Your details are:</tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ucwords($email)}},</td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td>{{ucwords($number)}},</td>
                        </tr>
                        <tr>
                            <td>industry:</td>
                            <td>{{ucwords($industry)}},</td>
                        </tr>
                        <tr>
                            <td>Location:</td>
                            <td>{{ucwords($region)}},</td>
                        </tr>
                        <tr>
                            <td>Work for an Agency:</td>
                            <td>{{ucwords($event_agency)}},</td>
                        </tr>
                        <tr>
                            <td>Event size:</td>
                            <td>{{ucwords($event_size)}},</td>
                        </tr>
                        <tr>
                            <td>Additional Information:</td>
                            <td>{{ucwords($add_info)}},</td>
                        </tr>
                        
                    </table>
                </div>

            </div>
        </div>



    </div>
</body>

</html>