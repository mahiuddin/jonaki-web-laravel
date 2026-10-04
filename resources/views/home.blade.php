<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jonaki Machinery Store | Industrial Belts</title>

    <meta name="description"
          content="Jonaki Machinery Store - Industrial V-Belts, Timing Belts and Transmission Belts. Serving Bangladesh since 1972.">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/jonaki.css') }}">
</head>

<body>

{{-- =========================================================
     HEADER
========================================================= --}}
<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            {{-- Logo --}}
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/jonaki-machinery-store-logo-removebg-preview.png') }}"
                     alt="Jonaki Machinery Store"
                     class="jms-logo">
            </a>

            {{-- Mobile Menu --}}
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="#home">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#brands">
                            Brands
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#products">
                            Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            Contact
                        </a>
                    </li>

                </ul>

                <a href="tel:+8801892724884"
                   class="btn btn-call">
                    <i class="bi bi-telephone-fill me-2"></i>
                    Call for Price
                </a>

            </div>
        </div>
    </nav>
</header>


{{-- =========================================================
     HERO
========================================================= --}}
<section id="home" class="hero-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- Hero Text --}}
            <div class="col-lg-6">

                <div class="hero-content">

                    <span class="hero-subtitle">
                        JONAKI MACHINERY STORE
                    </span>

                    <h1>
                        Industrial Belts &
                        <span>Transmission Solutions</span>
                    </h1>

                    <p class="hero-description">
                        Quality industrial belts for machinery,
                        manufacturing and industrial applications.
                    </p>

                    <div class="hero-badge">
                        <i class="bi bi-award-fill"></i>
                        Trusted Since 1972
                    </div>

                    <div class="hero-buttons">

                        <a href="#products"
                           class="btn btn-primary-custom">
                            Explore Products
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                        <a href="tel:+8801892724884"
                           class="btn btn-outline-custom">
                            <i class="bi bi-telephone-fill me-2"></i>
                            Call for Price
                        </a>

                    </div>

                </div>

            </div>


            {{-- Hero Image --}}
            <div class="col-lg-6">

                <div class="hero-image-wrapper">

                    <div class="hero-image-bg"></div>

                    <img src="{{ asset('images/hero-belts.jpg') }}"
                         alt="Industrial V-Belts"
                         class="hero-image">

                    <div class="hero-floating-card">

                        <div class="floating-icon">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>

                        <div>
                            <strong>Quality Belts</strong>
                            <small>For Industrial Applications</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     BRANDS
========================================================= --}}
<section id="brands" class="brands-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                TRUSTED BRANDS
            </span>

            <h2>
                Our <span>Brands</span>
            </h2>

            <p>
                We supply industrial belts from trusted brands
                for a wide range of machinery and applications.
            </p>

        </div>


        <div class="row g-4 mt-4">

            {{-- Mitsuboshi --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#mitsuboshi"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/mitsuboshi.png') }}"
                             alt="Mitsuboshi">
                    </div>

                    <h5>Mitsuboshi</h5>

                    <p>
                        V-Belts & Timing Belts
                    </p>

                </a>

            </div>


            {{-- DONGIL --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#dongil"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/dongil-korea.png') }}"
                             alt="DONGIL Korea">
                    </div>

                    <h5>DONGIL Korea</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>


            {{-- DRB --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#drb"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/drb.png') }}"
                             alt="DRB Korea">
                    </div>

                    <h5>DRB Korea</h5>

                    <p>
                        Industrial Belts
                    </p>

                </a>

            </div>


            {{-- Moonlux --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#moonlux"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/moonlux.png') }}"
                             alt="MOONLUX">
                    </div>

                    <h5>MOONLUX</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>


            {{-- Fujiang --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#fujiang"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/fujiang.png') }}"
                             alt="FUJIANG">
                    </div>

                    <h5>FUJIANG</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     PRODUCT CATALOGUE
========================================================= --}}
<section id="products" class="products-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                PRODUCT CATALOGUE
            </span>

            <h2>
                Our <span>Products</span>
            </h2>

            <p>
                Explore our range of industrial belts by brand
                and belt section.
            </p>

        </div>


        {{-- =================================================
             MITSUBOSHI
        ================================================== --}}
        <div id="mitsuboshi" class="brand-product-section">

            <div class="brand-title-row">

                <div>
                    <span class="product-brand-label">
                        MITSUBOSHI
                    </span>

                    <h3>
                        V-Belts
                    </h3>
                </div>

                <a href="#products"
                   class="view-all-link">
                    View Catalogue
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="row g-4">

                {{-- A --}}
                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/mitsuboshi-a-vbelt.png') }}"
                                 alt="Mitsuboshi A Section V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                MITSUBOSHI
                            </span>

                            <h4>
                                A Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>17" – 260"</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- B --}}
                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/mitsuboshi-b-vbelt.png') }}"
                                 alt="Mitsuboshi B Section V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                MITSUBOSHI
                            </span>

                            <h4>
                                B Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20" – 260"</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- C --}}
                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/mitsuboshi-c-vbelt.png') }}"
                                 alt="Mitsuboshi C Section V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                MITSUBOSHI
                            </span>

                            <h4>
                                C Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>30" – 360"</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- D --}}
                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/mitsuboshi-d-vbelt.png') }}"
                                 alt="Mitsuboshi D Section V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                MITSUBOSHI
                            </span>

                            <h4>
                                D Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>90"</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             DONGIL KOREA
        ================================================== --}}
        <div id="dongil" class="brand-product-section">

            <div class="brand-title-row">

                <div>
                    <span class="product-brand-label">
                        DONGIL KOREA
                    </span>

                    <h3>
                        V-Belts
                    </h3>
                </div>

                <a href="#products"
                   class="view-all-link">
                    View Catalogue
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/dongil-a-vbelt.png') }}"
                                 alt="DONGIL Korea V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                DONGIL KOREA
                            </span>

                            <h4>
                                A Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20 ~ 260 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/dongil-b-vbelt.png') }}"
                                 alt="DONGIL Korea B Section V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                DONGIL KOREA
                            </span>

                            <h4>
                                B Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20 ~ 360 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             DRB KOREA
        ================================================== --}}
        <div id="drb" class="brand-product-section">

            <div class="brand-title-row">

                <div>
                    <span class="product-brand-label">
                        DRB KOREA
                    </span>

                    <h3>
                        V-Belts
                    </h3>
                </div>

                <a href="#products"
                   class="view-all-link">
                    View Catalogue
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/drb-a-vbelt.jpg') }}"
                                 alt="DRB Korea V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                DRB KOREA
                            </span>

                            <h4>
                                A Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20 ~ 260 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/drb-a-vbelt.jpg') }}"
                                 alt="DRB Korea B Section V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                DRB KOREA
                            </span>

                            <h4>
                                B Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20 ~ 360 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             MOONLUX
        ================================================== --}}
        <div id="moonlux" class="brand-product-section">

            <div class="brand-title-row">

                <div>
                    <span class="product-brand-label">
                        MOONLUX
                    </span>

                    <h3>
                        V-Belts
                    </h3>
                </div>

                <a href="#products"
                   class="view-all-link">
                    View Catalogue
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/moonlux-a-vbelt.jpg') }}"
                                 alt="MOONLUX V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                MOONLUX
                            </span>

                            <h4>
                                A Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>15 ~ 165 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             FUJIANG
        ================================================== --}}
        <div id="fujiang" class="brand-product-section">

            <div class="brand-title-row">

                <div>
                    <span class="product-brand-label">
                        FUJIANG
                    </span>

                    <h3>
                        V-Belts
                    </h3>
                </div>

                <a href="#products"
                   class="view-all-link">
                    View Catalogue
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/fujiang-a-vbelt.jpg') }}"
                                 alt="FUJIANG V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                FUJIANG
                            </span>

                            <h4>
                                AX Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20 ~ 100 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3">

                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset('images/products/fujiang-a-vbelt.jpg') }}"
                                 alt="FUJIANG V-Belt">
                        </div>

                        <div class="product-card-body">

                            <span class="product-brand">
                                FUJIANG
                            </span>

                            <h4>
                                BX Section V-Belt
                            </h4>

                            <div class="size-info">
                                <span>Available Size</span>
                                <strong>20 ~ 160 inches</strong>
                            </div>

                            <a href="#"
                               class="product-link">
                                View Details
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SIMPLE CTA
========================================================= --}}
<section class="catalogue-cta">

    <div class="container">

        <div class="cta-box">

            <div>
                <span>Need a specific belt?</span>

                <h3>
                    Contact us for price & availability.
                </h3>
            </div>

            <a href="tel:+8801892724884"
               class="btn btn-light">

                <i class="bi bi-telephone-fill me-2"></i>
                +880 1892724884

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     FOOTER PLACEHOLDER
========================================================= --}}
<footer class="py-4 bg-dark text-white text-center">

    <div class="container">

        <p class="mb-0">
            © {{ date('Y') }} Jonaki Machinery Store.
            All Rights Reserved.
        </p>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>