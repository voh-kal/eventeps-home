@extends('admin.layout')
@section('content')


<div class="user-dashboard pt-3 bg-light">
    <h1 class="mb-3">Registration Home</h1>
    
    <div class="container">
        <div class="row">


            <div class="col-md-12">

                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Phone Number </th>
                            <th> Industry</th>                           
                            <th>Region</th>
                            <th>Event Agency</th>
                            <th>Event Size</th>
                            <th>Additional Info</th>
                           


                        </thead>





                        <tbody>
                            <?php
                            $i = 1;

                            ?>
                            @foreach($registration as $register)
                            <tr>
                                <td>
                                    <?php
                                        echo $i;
                                        $i++;
                                    ?>
                                </td>
                                
                                <td>{{ucwords($register->fname)}}</td>
                                <td>{{ucwords($register->lname)}}</td>
                                <td>{{ucwords($register->email)}}</td>
                                <td>{{ucwords($register->number)}}</td>
                                <td>{{ucwords($register->industry)}}</td>                               
                                <td>{{ucwords($register->region)}}</td>
                                <td>{{ucwords($register->event_agency)}}</td>
                                <td>{{ucwords($register->event_size)}}</td>
                                <td>{{ucwords($register->additional_info)}}</td>

                                
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                   

                </div>

            </div>
        </div>
    </div>


</div>
@endsection