<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>@yield('title', 'TEPS Platform | Professional Event Management System')</title>
    <!-- Mobile optimization -->
    <meta name="theme-color" content="#007bff">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/fl.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- search engine meta -->
    <meta name="google-site-verification" content="9JWgSGO6IMnxUTWCYZNKrYLqlOT8v0y7AN2EbVVZ8LA" />
    <!-- Canonical URL to prevent duplicate content issues -->
    <link rel="canonical" href="{{ url()->current() }}" />

    @yield('meta', '')
    @yield('schema', '')

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        // ga('create', 'UA-XXXXX-Y', 'auto');

        ga('send', 'pageview');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXX');
    </script>
    <!-- End Google Analytics -->

    <!-- Structured Data for Local Business (Event Management) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "TEPS - The Experience Plug Systems",
            "image": "https://www.eventeps.com/img/logo1.png",
            "url": "https://www.eventeps.com",
            "telephone": "+2348104881380",
            "email": "Power@eventeps.com",
            "description": "TEPS is your go-to event management platform, empowering brands to host engaging virtual, hybrid, and in-person events for growth and connection.",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "Nigeria"
            },
            "sameAs": [
                "https://www.facebook.com/share/1ABnU3S4dw/",
                "https://www.youtube.com/@powerofteps",
                "https://www.linkedin.com/company/thepowerofteps",
                "https://www.instagram.com/thepowerofteps"
            ],
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "17:00"
            }
        }
    </script>

    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:title" content="TEPS: Your Partner in Creating Engaging Events" />
    <meta property="og:site_name" content="TEPS - The Experience Plug Systems" />
    <meta property="og:url" content="https://www.eventeps.com" />
    <meta property="og:image" content="https://www.eventeps.com/img/logo1.png" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="TEPS is your go-to event management platform, empowering brands to host engaging virtual, hybrid, and in-person events for growth and connection. Our flexible and user-friendly software covers the entire event lifecycle, from planning, registration, ticketing, and QR code generation to email marketing and web surveys. Enhance your efficiency with TEPS, a leading meetings, events, and hospitality management technology provider with users across Nigeria, Africa, and worldwide." />

    <!-- Twitter meta tags for social sharing -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="TEPS: Your Partner in Creating Engaging Events" />
    <meta name="twitter:description" content="TEPS is your go-to event management platform, empowering brands to host engaging virtual, hybrid, and in-person events for growth and connection. Our flexible and user-friendly software covers the entire event lifecycle, from planning, registration, ticketing, and QR code generation to email marketing and web surveys. Enhance your efficiency with TEPS, a leading meetings, events, and hospitality management technology provider with users across Nigeria, Africa, and worldwide." />
    <meta name="twitter:url" content="https://www.eventeps.com" />
    <meta name="twitter:image" content="https://www.eventeps.com/img/logo1.png" />

    <!-- General meta tags for search engines -->
    <meta name="description" content="TEPS is your premier event management platform, providing solutions for virtual, hybrid, and in-person events. Our user-friendly software covers event planning, hospitality, online registration, ticketing, QR code generation, E-invite, meeting scheduling, email marketing, and web surveys. Improve your efficiency with TEPS, the leading meetings, events, and hospitality management technology provider with users in Nigeria, Africa, and globally." />
    <meta name="keywords" content="event management, event planning, event hospitality, virtual event, in-person event, hybrid event, event features, event management companies, event planners, management events, destination management, event agency, corporate event management, concert event management, wedding management, event organizers, meeting management, wedding planner, party planner, event services" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
      
        #mainNavbar {
            transition: top 0.3s;
            position: relative;
            top: 0;
            z-index: 1031;
            padding: 10px 0px;
            width: 100%;
        }

        .fixed-navbar {
            position: fixed !important;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1031;
            /* box-shadow: 0 2px 8px rgba(0,0,0,0.08); */
            animation: slideDown 0.3s;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        .hide-navbar {
            top: -100px !important;
            transition: top 0.3s;
            /* adjust based on navbar height */
        }

        .navbar {
            position: relative;
            z-index: 1031;
        }

        @font-face {
            font-family: "caveat";
            src: url("/caveat/static/Caveat-Bold.ttf");
        }

        .challenge-carda {

            clip-path: polygon(0% 0%,
                    100% 0,
                    100% 100%,
                    0% 88%);
        }

        .challenge-cardb {

            clip-path: polygon(0% 0%, 100% 12%, 100% 100%, 0% 100%);
        }

        .challenge-card {
            background-color: #EFFBFF;
            background-image: linear-gradient(#EFFBFF, #EFFBFF), linear-gradient(90deg, rgba(33, 69, 255, 1) 25%, rgba(4, 194, 255, 1) 66%);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            border-radius: 10px;
            border: 1px solid transparent;
            position: relative;
            padding: 30px 24px;
            margin-bottom: 0px;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        .challenge-number {
            font-size: 30px;
            font-weight: bold;
            margin-right: 10px;
        }

        .challenge-text {
            font-size: 20px;

        }

        @media(min-width:600px) {
            .challenge-text {
                font-size: 32px;

            }

            .challenge-number {
                font-size: 56px;
                margin-right: 20px;
            }
        }

        .caserow1 {
            font-size: 24px;
            font-weight: 600;
            margin-top: 20px;
        }

        .section-title {
            text-align: center;
            font-weight: 700;
            font-size: 40px;
            padding-top: 90px;
        }

        .caserow2 {
            font-size: 20px;
            color: #444;
            font-weight: 400;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 32px;
                padding-top: 30px;
            }
        }

        .video_section {
            background: #EFEFEF;
            padding: 50px 10px;
            margin: 75px 0px 0px;
        }

        .video_background {

            text-align: center;

        }

        .video_background p {
            font-size: 30px;
            font-weight: 600;
            /* Responsive width */
            padding: 0 15px;
        }

        .video_background img {

            max-width: 100%;
            /* Responsive image */
            height: auto;
        }

        /* Add media queries for better responsiveness */
        @media screen and (max-width: 768px) {
            /* .video_background {
                min-height: 80vh;
            } */

        }

        .dark-background {
            background: radial-gradient(circle at center bottom, rgb(9 144 237 / 82%) 0%, rgba(37, 36, 50, 1) 14%);
        }

        .footer {
            color: white;
            font-size: 14px;

        }


        .footer .footer-top {
            padding-top: 100px;
        }

        .footer .container {
            position: relative;
        }

        .footer .footer-links {
            margin-bottom: 30px;
        }

        .footer .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
            font-size: 16px;
            color:
                color-mix(in srgb, var(--default-color), transparent 20%);
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer h4 {
            font-size: 16px;
            font-weight: bold;
            position: relative;
            padding-bottom: 12px;
        }

        .footer .footer-links ul li:first-child {
            padding-top: 0;
        }

        .footer .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .footer .footer-links ul a {
            color:
                color-mix(in srgb, var(--default-color), transparent 30%);
            display: inline-block;
            line-height: 1;
            text-decoration: none;
            transition: 0.3s;
        }

        .top-nav {
            background-color: #717171;
            padding: 20px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .top-nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        body {
            font-family: inter;
        }

        .main-nav {
            background-color: transparent;
            padding: 15px 0;


        }

        .main-nav .container {
            border-radius: 50px;
            background: rgb(57 56 91 / 64%);
            padding: 10px 50px;
        }

        .navbar-brand img {
            height: 40px;
        }

        .hero-section {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('images/homehero.jpeg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-section-about {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('images/abouthero.png');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-section-resource {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('images/resourcehero.jpeg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-section-single {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('../images/resourcehero.jpeg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-section-faqs {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('images/faqshero.jpeg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-section-usecase {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('images/usecasehero.png');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-section-feature {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('images/featurehero.jpeg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding-top: 0px;
        }

        .hero-content {
            padding-top: 80px;
        }

        .hero-content-about,
        .hero-content-feature,
        .hero-content-usecase {
            padding-top: 80px;
        }

        .highlight-text {
            color: #007bff;
            font-weight: bold;
            font-family: caveat;
        }

        .btn-custom {
            padding: 12px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .social-icons a {
            margin-right: 15px;
        }

        .contact-info i {
            margin-right: 5px;
        }

        /* Standardized Button System */
        .btn_outline_light,
        .get_started,
        .get_started-a,
        .btn_primary {
            /* Common button properties */
            border-radius: 50px;
            font-weight: 500;
            border: 2px solid transparent;
            text-decoration: none;
            text-align: center;
            white-space: nowrap;
            transition: all 0.3s ease;
            min-width: 120px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            line-height: 1.5;
        }

        /* Size variations */
        .btn-sm {
            padding: 8px 16px;
            font-size: 14px;
            min-width: 100px;
        }

        .btn-md {
            padding: 12px 24px;
            font-size: 16px;
            min-width: 140px;
        }

        .btn-lg {
            padding: 16px 32px;
            font-size: 18px;
            min-width: 180px;
        }

        /* Responsive button styles */
        @media (max-width: 767.98px) {

            .btn_outline_light,
            .get_started,
            .get_started-a,
            .btn_primary {
                padding: 10px 20px;
                font-size: 15px;
                min-width: 100px;
            }

            .btn-sm {
                padding: 6px 14px;
                font-size: 13px;
                min-width: 80px;
            }

            .btn-lg {
                padding: 12px 24px;
                font-size: 16px;
                min-width: 140px;
            }
        }

        @media (max-width: 575.98px) {

            .btn_outline_light,
            .get_started,
            .get_started-a,
            .btn_primary {
                padding: 8px 16px;
                font-size: 14px;
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* Button variations */
        .btn_outline_light {
            background: white;
            color: black;
            background-image: linear-gradient(white, white), linear-gradient(90deg, rgba(33, 69, 255, 1) 25%, rgba(4, 194, 255, 1) 66%);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            padding: 12px 24px;
        }

        .btn_outline_light:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0.9;
        }

        .get_started {
            background: black;
            color: white;
            background-image: linear-gradient(black, black), linear-gradient(90deg, rgba(33, 69, 255, 1) 25%, rgba(4, 194, 255, 1) 66%);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            padding: 12px 24px;
            margin: 15px auto;
        }

        .get_started:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
        }

        .get_started-a {
            background: white;
            color: black;
            background-image: linear-gradient(white, white), linear-gradient(90deg, rgba(33, 69, 255, 1) 25%, rgba(4, 194, 255, 1) 66%);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            padding: 12px 24px;
            margin: 15px auto;
        }

        .get_started-a:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: black;
        }

        .custom-border {
            position: relative;

        }

        .custom-border2 {
            border-bottom: 2px solid #fff;
        }

        hr {
            background: #ffffff;
            height: 3px;
            margin: 50px 0px 10px;
        }

        /* Ensure equal height cards */
        .cards {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-bodys {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }

        /* Set fixed height for title and description */
        .ft1 {
            min-height: 30px;
            /* Adjust this value based on your needs */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .ft2 {
            min-height: 100px;
            /* Adjust this value based on your needs */
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }




        /* Make cards responsive */
        @media (max-width: 768px) {
            .ft1 {
                min-height: auto;
            }

            .ft2 {
                min-height: auto;
            }
        }

        .custom-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 1px;
            height: 100%;
            background: linear-gradient(to bottom,
                    #d3cbcb 0%,
                    #d3cbcb 80%,
                    transparent 50%), linear-gradient(90deg,
                    rgba(33, 69, 255, 1) 25%,
                    rgba(4, 194, 255, 1) 66%);
        }

        .btn_primary {
            color: white;
            background-image: linear-gradient(#393243, #3a3244), linear-gradient(90deg, rgba(33, 69, 255, 1) 25%, rgba(4, 194, 255, 1) 66%);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            padding: 12px 24px;
        }

        .btn_primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
            opacity: 0.9;
        }

        .navbar-nav a {
            font-weight: 500;
            color: white;
        }

        .slider_cover {
            max-width: 100%;
            overflow: hidden;
        }

        .sliderbody {
            background: linear-gradient(90deg, rgba(238, 255, 255, 1) 70%, rgba(75, 198, 236, 1) 100%);
        }

        .marquee {
            white-space: nowrap;
            /* overflow: hidden; */
            display: inline-block;
            animation: marquee 10s linear infinite;
        }

        .marquee img {
            margin: 20px;
        }

        @keyframes marquee {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(-50%, 0, 0);
            }
        }

        .section-header {
            /* Background gradient */
            background: rgb(250, 250, 250);
            background: linear-gradient(18deg, rgba(250, 250, 250, 1) 24%, rgba(238, 255, 255, 1) 70%);
            border-radius: 50px;
            padding: 15px 26px;
            text-align: center;
            font-weight: 600;
            font-size: 18px;
            width: max-content;
        }

        .section-header span {
            /* Text gradient */
            background: linear-gradient(0deg, rgba(4, 194, 255, 1) 44%, rgba(33, 69, 255, 1) 36%);
            -webkit-background-clip: text;
            background-clip: text;
            /* For better browser support */
            color: transparent;
            display: block;
            /* To ensure gradient applies properly */
        }

        .navbar-nav .nav-item .active {
            /* Text gradient */
            background: linear-gradient(0deg, rgba(4, 194, 255, 1) 30%, rgba(33, 69, 255, 1) 55%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent !important;
            display: block;
        }

        #myTab .nav-link {
            color: #666;
        }

        #myTab .nav-item .active {
            /* Text gradient */
            background: linear-gradient(0deg, rgba(4, 194, 255, 1) 33%, rgba(33, 69, 255, 1) 70%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
            position: relative;
            /* Ensure positioning for the pseudo-element */
        }

        #myTab .nav-item .active::after {
            content: '';
            position: absolute;
            bottom: 0;
            /* Align it with the text's baseline */
            left: 0;
            width: 100%;
            height: 2px;
            /* Thickness of the underline */
            background: linear-gradient(90deg, rgba(4, 194, 255, 1), rgba(33, 69, 255, 1));
        }


        .sectionH4 {
            font-size: 40px;
            font-weight: 700;
        }

        .sectionP {
            font-weight: 400;
            color: #5E5D6F;
            font-size: 20px;
        }

        .bg-alice-blue {
            background: rgb(9, 173, 247);
            background: radial-gradient(circle, rgba(9, 173, 247, 0.5466561624649859) 19%, rgba(242, 251, 255, 1) 70%);
            ;
            border-radius: 25px;
        }

        /* For smaller screens */
        @media (max-width: 767px) {
            .card {
                margin-bottom: 1.5rem;
            }

            .bg-alice-blue {
                padding: 50px 20px 0 !important;
            }
        }

        /* Optional hover effect */
        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .row1 {

            font-size: 30px;
            font-weight: 700;
        }

        .row2 {
            font-size: 20px;
            color: #444;
            font-weight: 400;
            margin-top: 20px;
        }

        .featurerow1 {

            font-size: 20px;
            font-weight: 600;
            margin-top: 20px;
        }

        .featurerow2 {
            font-size: 16px;
            color: #444;
            font-weight: 400;
            margin-top: 10px;
        }

        .accordion {
            max-width: 600px;
            margin: 20px auto;
        }

        .accordion-item {
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .accordion-header {
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }

        .accordion-header:hover {
            background-color: #f8f9fa;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding: 0 20px;
        }

        .accordion-content.active {
            max-height: 200px;
            /* Adjust based on content */
            padding: 15px 20px;
        }

        .toggle-icon {
            transition: transform 0.3s ease;
            color: #0783f1;
            box-shadow: 0px 0px 2px #ccc;
            border-radius: 50px;
        }

        .toggle-icon.active {
            transform: rotate(180deg);
            background: linear-gradient(0deg, rgba(4, 194, 255, 1) 37%, rgba(33, 69, 255, 1) 119%);
            color: white;
        }

        /* Styling specific to your design */
        .accordion-header {
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        .accordion-content p {
            color: #666;
            line-height: 1.5;
            margin: 0;
        }

        .lanre {
            border: 0px;
            visibility: hidden;
            height: 0px;
        }

        .teps_section .card:hover {
            transform: translateY(0px);
        }

        /* Mobile Navigation Styles */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                position: absolute;
                background-color: rgb(40 40 64 / 76%);
                padding: 1rem;
                margin-top: 0.5rem;
                top: 100%;
                left: 0;
                right: 0;
                z-index: 1030;
                max-height: 80vh;
                overflow-y: auto;
            }

            .navbar-nav {
                padding: 15px 0;
            }

            /* Prevent content shifting when menu opens */
            body.menu-open {
                overflow: hidden;
            }
        }
    </style>
    <style>
        /* Infinite Marquee Slider */
        .marquee-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 20px 0;
        }

        .sliderbody {
            position: relative;
        }

        /* Blur fade effect on edges */
        .sliderbody::before,
        .sliderbody::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 150px;
            /* Adjust blur width */
            z-index: 2;
            pointer-events: none;
        }

        .sliderbody::before {
            left: 0;
            background: linear-gradient(to right,
                    rgba(255, 255, 255, 1) 0%,
                    rgba(255, 255, 255, 0) 100%);
        }

        .sliderbody::after {
            right: 0;
            background: linear-gradient(to left,
                    rgba(255, 255, 255, 1) 0%,
                    rgba(255, 255, 255, 0) 100%);
        }

        .marquee-content {
            display: flex;
            width: fit-content;
            animation: marquee 30s linear infinite;
        }

        .marquee-item {
            flex-shrink: 0;
            margin: 0 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 150px;
        }

        .marquee-item img {
            max-height: 80px;
            width: auto;
            max-width: 100%;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Pause animation when hovering */
        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }
    </style>
</head>

<body>

    <!-- Top Navigation -->
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/1ABnU3S4dw/?mibextid=wwXIfr" target="_blank" aria-label="Visit TEPS on Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="visually-hidden">Facebook</span></a>
                        <a href="https://www.youtube.com/@powerofteps" target="_blank" aria-label="Visit TEPS on YouTube"><i class="fab fa-youtube" aria-hidden="true"></i><span class="visually-hidden">YouTube</span></a>
                        <a href="https://www.linkedin.com/company/thepowerofteps" target="_blank" aria-label="Visit TEPS on LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i><span class="visually-hidden">LinkedIn</span></a>
                        <a href="https://www.instagram.com/thepowerofteps?igsh=MXJ6ZnRkbTQ1czNzeA==" target="_blank" aria-label="Visit TEPS on Instagram"><i class="fab fa-instagram" aria-hidden="true"></i><span class="visually-hidden">Instagram</span></a>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <span class="text-white me-4">
                        <a href="tel:+2348104881380" class="text-white" aria-label="Call us at 08104881380">
                            <i class="fas fa-phone" aria-hidden="true"></i> <span itemprop="telephone">08104881380</span>
                        </a>
                    </span>
                    <span class="text-white">
                        <a href="mailto:Power@eventeps.com" class="text-white" aria-label="Email us at Power@eventeps.com">
                            <i class="fas fa-envelope" aria-hidden="true"></i> <span itemprop="email">Power@eventeps.com</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <main id="mainContent" style="transition:padding-top 0.3s;">
        @yield('content')
    </main>



    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4  col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center" aria-label="TEPS Home">
                        <img src="/images/fl.png" alt="TEPS - The Experience Plug Systems Logo" width="60" height="60" loading="lazy">
                    </a>
                    <div class="footer-links pt-3">
                        <ul>
                            <li>TEPS is short form for The Experience Plug systems. We are your platform for seamless events, designed by event professionals for everyone; novice or experienced event organizers & owners. Our features include: ticketing, event registration, custom email marketing to attendees, RSVP management, Multiple information stored in Attendee Unique QR Codes, Dashboard for analytics and insights, and lots more.</li>
                        </ul>

                    </div>

                </div>

                <div class="col-md-1"></div>

                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Key Features</h4>
                    <ul>
                        <li><a href="/features/ticketing" aria-label="Learn more about Ticketing and Registration">Ticketing & Registration</a></li>
                        <li><a href="/features/rsvp" aria-label="Learn more about RSVP Management">RSVP Management</a></li>
                        <li><a href="/features/qr-code" aria-label="Learn more about QR Code Check-ins">QR Code Check-ins</a></li>
                        <li><a href="/features/analytics" aria-label="Learn more about Analytics Dashboard">Analytics Dashboard</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="/faqs" aria-label="Read Frequently Asked Questions">FAQs</a></li>
                        <li><a href="/terms" aria-label="Read Terms of Use">Terms of Use</a></li>
                        <li><a href="/use-cases" aria-label="Explore Use Cases">Use Cases</a></li>
                        <li><a href="/privacy" aria-label="Read our Privacy Policy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Contact Us</h4>
                    <ul itemscope itemtype="https://schema.org/ContactPoint">
                        <li>
                            <a href="mailto:power@eventeps.com" itemprop="email" aria-label="Email TEPS support at power@eventeps.com">power@eventeps.com</a>
                        </li>
                        <li>
                            <a href="tel:+2348104881380" itemprop="telephone" aria-label="Call TEPS support at +234 810 488 1380">+234 810 488 1380</a>
                        </li>
                    </ul>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/share/1ABnU3S4dw/?mibextid=wwXIfr" target="_blank" rel="noopener" aria-label="Follow TEPS on Facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i><span class="visually-hidden">Facebook</span>
                        </a>
                        <a href="https://www.youtube.com/@powerofteps" target="_blank" rel="noopener" aria-label="Follow TEPS on YouTube">
                            <i class="fab fa-youtube" aria-hidden="true"></i><span class="visually-hidden">YouTube</span>
                        </a>
                        <a href="https://www.linkedin.com/company/thepowerofteps" target="_blank" rel="noopener" aria-label="Connect with TEPS on LinkedIn">
                            <i class="fab fa-linkedin" aria-hidden="true"></i><span class="visually-hidden">LinkedIn</span>
                        </a>
                        <a href="https://www.instagram.com/thepowerofteps?igsh=MXJ6ZnRkbTQ1czNzeA==" target="_blank" rel="noopener" aria-label="Follow TEPS on Instagram">
                            <img src="/images/fi.png" alt="Follow TEPS on Instagram" width="40" height="40" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <p style="    text-align: center;    margin: 50px 0px;    font-family: monospace;">© 2025 EventTeps. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <div class="modal fade" id="tiddyModal" tabindex="-1" role="dialog" aria-labelledby="tiddyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 20px">

                <div class="tidycal-embed" data-path="power"></div>
            </div>
        </div>
    </div>
    <script src="https://asset-tidycal.b-cdn.net/js/embed.js" async></script>
    <script>
        // Show navbar when scrolling up, hide when scrolling down
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('mainNavbar');
            const mainContent = document.getElementById('mainContent');
            let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
            let navbarHeight = navbar.offsetHeight;
            let isFixed = false;

            window.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > navbarHeight) {
                    if (!isFixed) {
                        navbar.classList.add('fixed-navbar');
                        mainContent.style.paddingTop = navbarHeight + 'px';
                        isFixed = true;
                    }
                    if (scrollTop > lastScrollTop) {
                        // Scrolling down
                        navbar.classList.add('hide-navbar');
                    } else {
                        // Scrolling up
                        navbar.classList.remove('hide-navbar');
                    }
                } else {
                    if (isFixed) {
                        navbar.classList.remove('fixed-navbar');
                        mainContent.style.paddingTop = '';
                        isFixed = false;
                    }
                    navbar.classList.remove('hide-navbar');
                }
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            });
        });
        // Prevent hero section from shifting when mobile menu opens
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            if (window.innerWidth < 992) {
                document.body.classList.toggle('menu-open');

                // If menu is closing, ensure any open dropdowns are closed too
                if (!document.body.classList.contains('menu-open')) {
                    const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                    openDropdowns.forEach(dropdown => {
                        dropdown.classList.remove('show');
                    });
                }
            }
        });
    </script>


</body>

</html>