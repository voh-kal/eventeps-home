@extends('layouts')

@section('content')
<div class="error-page-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <div class="error-content">
                    <h1 class="display-1">404</h1>
                    <h2>Oops! Page Not Found</h2>
                    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary mt-4">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
