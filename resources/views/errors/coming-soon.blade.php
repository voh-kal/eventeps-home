@extends('layouts')

@section('content')
<style>
    .coming-soon-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #f8f9fa;
        position: relative;
        overflow: hidden;
    }

    .coming-soon-content {
        text-align: center;
        position: relative;
        z-index: 2;
        padding: 2rem;
    }

    .coming-soon-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: #2145FF;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
    }

    .coming-soon-subtitle {
        font-size: 1.5rem;
        color: #6c757d;
        margin-bottom: 2rem;
    }

    .coming-soon-text {
        font-size: 1.1rem;
        color: #495057;
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .coming-soon-image {
        max-width: 400px;
        margin: 2rem auto;
    }

    .home-button {
        display: inline-block;
        padding: 1rem 2rem;
        background-color: #2145FF;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .home-button:hover {
        background-color: #1a36cc;
        transform: translateY(-2px);
        color: white;
    }

    /* Animation for background shapes */
    .shape {
        position: absolute;
        opacity: 0.1;
    }

    .shape-1 {
        top: 20%;
        left: 10%;
        width: 100px;
        height: 100px;
        background: #2145FF;
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .shape-2 {
        bottom: 20%;
        right: 10%;
        width: 150px;
        height: 150px;
        background: #2145FF;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: float 8s ease-in-out infinite;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }

    @media (max-width: 768px) {
        .coming-soon-title {
            font-size: 2.5rem;
        }
        
        .coming-soon-subtitle {
            font-size: 1.2rem;
        }
        
        .coming-soon-image {
            max-width: 300px;
        }
    }
</style>

<section class="coming-soon-section">
    <!-- Background shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>

    <div class="container">
        <div class="coming-soon-content">
            <h1 class="coming-soon-title">Coming Soon</h1>
            <h2 class="coming-soon-subtitle">We're working on something amazing!</h2>
            <p class="coming-soon-text">
                This feature is currently under development. We're working hard to bring you an exceptional experience. 
                Check back soon for updates!
            </p>
            
            <img src="/images/coming-soon.svg" alt="Coming Soon Illustration" class="coming-soon-image img-fluid">
            
            <div>
                <a href="/" class="home-button" aria-label="Return to homepage">
                    <i class="fas fa-home me-2"></i> Back to Home
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
