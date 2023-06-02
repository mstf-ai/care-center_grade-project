<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('centerTitle')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/icon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min-v5.0.0.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Scripts -->
    {{-- 'resources/sass/app.scss', --}}
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        @include('layouts.includes.topbar')

        @include('layouts.includes.navbar')

        <main class="py-0">
            @yield('content')
        </main>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s"
            style="margin-top: -75px;">
            <div class="container pt-5">
                <div class="row g-5 pt-4">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="/"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>Home</a>
                            <a class="text-light mb-2" href="about"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>About
                                Us</a>
                            <a class="text-light mb-2" href="service"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>Our
                                Services</a>
                            <a class="text-light" href="contact"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Popular Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="index"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>Home</a>
                            <a class="text-light mb-2" href="about"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>About
                                Us</a>
                            <a class="text-light mb-2" href="service"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>Our
                                Services</a>
                            <a class="text-light" href="contact"><i
                                    class="bi bi-arrow-right text-warning me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="bi bi-geo-alt text-warning me-2"></i>1th Street, October Gardens,
                            Giza
                        </p>
                        <p class="mb-2"><i
                                class="bi bi-envelope-open text-warning me-2"></i>{{setting('site.email')}}
                        </p>
                        <p class="mb-0"><i class="bi bi-telephone text-warning me-2"></i>{{setting('site.phone')}}</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Follow Us</h3>
                        <div class="d-flex">
                            <a class="btn btn-lg btn-warning btn-lg-square rounded me-2" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-warning btn-lg-square rounded me-2"
                                href="https://www.facebook.com/profile.php?id=100077642714971&mibextid=ZbWKwL"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-warning btn-lg-square rounded me-2" href="#"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-lg btn-warning btn-lg-square rounded" href="#"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-light py-4" style="background: #051225;">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Care Center</a>.
                            All
                            Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
</body>

</html>
