<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-md-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ setting('phone') }}</span></i>
        </div>

        <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">Get Started</a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
        <h1><a href="{{ url('') }}">{{ app_name() }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('vendor/flexor/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="{{ url('#about') }}">About</a></li>
            <li><a class="nav-link scrollto" href="{{ url('#services') }}">Services</a></li>
            <li><a class="nav-link scrollto " href="{{ url('#portfolio') }}">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="{{ url('#team') }}">Team</a></li>
            <li><a href="#">Blog</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->