<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark main-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="TEPS - The Experience Plug Systems Logo" height="40">
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                @php
                    $navLinks = [
                        ['url' => '/about', 'label' => 'About TEPS'],
                        ['url' => '/features', 'label' => 'Features'],
                        ['url' => '/use-cases', 'label' => 'Use Cases'],
                        ['url' => '/faqs', 'label' => 'FAQs'],
                        ['url' => '/resources', 'label' => 'Resources'],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is(ltrim($link['url'], '/')) ? 'active' : '' }}" href="{{ url($link['url']) }}">
                            <span aria-label="Navigate to {{ $link['label'] }}">{{ $link['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="d-flex">
                <a href="{{ url('/get-started') }}" class="btn btn_outline_light btn-md me-2" target="_blank" aria-label="Get started with TEPS">
                    <span aria-label="Get started with TEPS">Get Started</span>
                </a>
                <a href="https://app.eventeps.com/" class="btn btn_primary btn-md" target="_blank" aria-label="Login to TEPS event management platform">
                    <span aria-label="Login to TEPS event management platform">Login</span>
                </a>

            </div>
            
        </div>
    </div>
</nav>
