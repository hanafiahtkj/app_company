<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>@yield('title') | {{ config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{ setting('meta_description') }}">
  <meta name="keyword" content="{{ setting('meta_keyword') }}">

  @include('frontend.includes.meta')

  <!-- Favicons -->
  <link href="{{ asset('vendor/flexor/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('vendor/flexor/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  @stack('before-styles')

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/flexor/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/flexor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/flexor/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/flexor/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/flexor/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/flexor/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('vendor/flexor/assets/css/style.css') }}" rel="stylesheet">

  @stack('after-styles')

  <!-- Custom CSS File -->
  <link href="{{ asset('css/frontend_custom.css') }}" rel="stylesheet">

  <x-google-analytics />

  <!-- =======================================================
  * Template Name: Flexor - v4.7.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('frontend.includes.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container" data-aos="fade-in">
        <h1>Welcome to {{ app_name() }}</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <div class="d-flex align-items-center">
            <i class="bx bxs-right-arrow-alt get-started-icon"></i>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    @include('frontend.includes.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/flexor/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/flexor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/flexor/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/flexor/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/flexor/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/flexor/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('vendor/flexor/assets/js/main.js') }}"></script>

</body>

</html>