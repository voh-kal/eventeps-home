@extends('layouts')

@section('content')
<div class="error-page-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <div class="error-content">
                    <h1 class="display-1">500</h1>
                    <h2>Internal Server Error</h2>
                    <p>Sorry, something went wrong on our servers. We are working to fix the issue.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary mt-4">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
