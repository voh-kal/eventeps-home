@extends('layouts')

@section('content')
<div class="error-page-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <div class="error-content">
                    <h1 class="display-1">403</h1>
                    <h2>Access Forbidden</h2>
                    <p>Sorry, you don't have permission to access this page.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary mt-4">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
