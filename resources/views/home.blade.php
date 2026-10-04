<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jonaki Machinery Store | Industrial Belts in Bangladesh</title>

    <meta name="description"
      content="Jonaki Machinery Store — Since 1972. Importer, stockist, wholesaler and retailer of V-Belts, Timing Belts and Transmission Belts in Bangladesh.">

    <meta property="og:title"
      content="Jonaki Machinery Store | Industrial Belts">

    <meta property="og:description"
      content="Quality V-Belts, Timing Belts and Transmission Belts. Serving customers since 1972.">

    <meta property="og:type"
      content="website">

    <meta property="og:url"
      content="{{ url('/') }}">

    <meta property="og:image"
      content="{{ asset('images/og-jonaki.jpg') }}">      

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
        <div class="row g-4 mt-4">

            {{-- Hangchang --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#hangchang"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/hangchang.jpeg') }}"
                             alt="Hangchang">
                    </div>

                    <h5>Hangchang</h5>

                    <p>
                        V-Belts & Timing Belts
                    </p>

                </a>

            </div>


            {{-- FISRT SUPER --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#first-super"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/first-super.jpeg') }}"
                             alt="FIRST SUPER">
                    </div>

                    <h5>FIRST SUPER</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>


            {{-- Mitsuisumi --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#mitsuisumi"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/mitsuisumi-logo.png') }}"
                             alt="Mitsuisumi">
                    </div>

                    <h5>Mitsuisumi</h5>

                    <p>
                        Industrial Belts
                    </p>

                </a>

            </div>


            {{-- Dunlop --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#dunlop"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/dunlop-logo.jpg') }}"
                             alt="DUNLOP">
                    </div>

                    <h5>DUNLOP</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>


            {{-- KK Horse --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#kk-horse"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/kk-horse.jpeg') }}"
                             alt="KK HORSE">
                    </div>

                    <h5>KK HORSE</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>

        </div>
        <div class="row g-4 mt-4">

            {{-- KAIOU --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#kaiou"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/kaiou.jpg') }}"
                             alt="KAIOU">
                    </div>

                    <h5>KAIOU</h5>

                    <p>
                        V-Belts & Timing Belts
                    </p>

                </a>

            </div>


            {{-- Diamond --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#diamond"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/diamond.jpeg') }}"
                             alt="DIAMOND">
                    </div>

                    <h5>DIAMOND</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>


            {{-- Roflex --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#roflex"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/roflex.jpeg') }}"
                             alt="Roflex">
                    </div>

                    <h5>Roflex</h5>

                    <p>
                        Industrial Belts
                    </p>

                </a>

            </div>


            {{-- Norton Saint-Gobain --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#norton-saint-gobain"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/norton-saint-gobain.jpg') }}"
                             alt="Norton Saint-Gobain">
                    </div>

                    <h5>Norton Saint-Gobain</h5>

                    <p>
                        Industrial V-Belts
                    </p>

                </a>

            </div>


            {{-- Tiger --}}
            <div class="col-6 col-md-4 col-lg">

                <a href="#tiger"
                   class="brand-card">

                    <div class="brand-logo">
                        <img src="{{ asset('images/brands/tiger.jpeg') }}"
                             alt="TIGER">
                    </div>

                    <h5>TIGER</h5>

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

{{-- Product Categories Section --}}
<section class="py-5 bg-light" id="categories">
    <div class="container">

        {{-- Section Heading --}}
        <div class="text-center mb-5">
            <span class="text-uppercase fw-semibold text-primary small">
                Our Product Categories
            </span>

            <h2 class="fw-bold mt-2 mb-3">
                Belts for Every Industry
            </h2>

            <p class="text-muted mx-auto" style="max-width: 700px;">
                We supply a wide range of V-Belts, Timing Belts and Transmission
                Belts for different industries and machinery across Bangladesh.
            </p>
        </div>


        {{-- Categories Grid --}}
        <div class="row g-4">

            {{-- Industrial --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/industrial-belts.png') }}"
                             alt="Industrial Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Industrial Belts
                        </h4>

                        <p class="text-muted mb-3">
                            High-quality V-Belts and transmission belts
                            for industrial machinery and applications.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Garments --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/garment.png') }}"
                             alt="Garments and Textile Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Garments & Textile
                        </h4>

                        <p class="text-muted mb-3">
                            Timing belts, V-Belts and machine belts
                            for garments and textile machinery.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Brick Kiln --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/bricks.jpg') }}"
                             alt="Brick Kiln Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Brick Kiln
                        </h4>

                        <p class="text-muted mb-3">
                            Reliable heavy-duty belts for brick kiln
                            machinery and continuous operation.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Rice & Flour Mill --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/rice-and-flour-mills.jpg') }}"
                             alt="Rice and Flour Mill Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Rice & Flour Mill
                        </h4>

                        <p class="text-muted mb-3">
                            Flat transmission belts and V-Belts for
                            rice mills, flour mills and processing machinery.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Printing --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/printing-and-press.jpg') }}"
                             alt="Printing and Press Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Printing & Press
                        </h4>

                        <p class="text-muted mb-3">
                            Specialized belts for printing machines,
                            press machinery and related applications.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Elevator --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/lift.jpg') }}"
                             alt="Elevator Timing Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Elevator
                        </h4>

                        <p class="text-muted mb-3">
                            Timing belts and specialized belt solutions
                            for elevator and lifting systems.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Generator --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/generator-belts.png') }}"
                             alt="Generator and Machinery Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Generator & Machinery
                        </h4>

                        <p class="text-muted mb-3">
                            Durable belts for generators, engines and
                            different types of industrial machinery.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Ship --}}
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100">
                    <div class="category-image">
                        <img src="{{ asset('images/categories/ship-belts.jpg') }}"
                             alt="Ship and Launch Belts">
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold mb-2">
                            Ship & Launch
                        </h4>

                        <p class="text-muted mb-3">
                            Belt solutions for marine machinery,
                            launches and ship-related applications.
                        </p>

                        <a href="#" class="category-link">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- Why Choose Jonaki Section --}}
<section class="why-choose-section py-5" id="why-jonaki">
    <div class="container">

        <div class="row align-items-center g-5">

            {{-- Left Content --}}
            <div class="col-lg-5">

                <span class="section-subtitle">
                    WHY CHOOSE JONAKI
                </span>

                <h2 class="section-title mt-2">
                    A Trusted Name in
                    <span>Machinery Belts</span>
                </h2>

                <p class="text-muted mt-3">
                    Since 1972, Jonaki Machinery Store has been serving
                    industries across Bangladesh with quality belts,
                    reliable products and trusted service.
                </p>

                <p class="text-muted">
                    We are committed to providing the right belt solution
                    for different machines, industries and applications.
                </p>

                <a href="#contact" class="btn btn-primary mt-3 px-4 py-2">
                    Contact Us
                    <i class="bi bi-arrow-right ms-1"></i>
                </a>

            </div>


            {{-- Right Features --}}
            <div class="col-lg-7">

                <div class="row g-4">

                    {{-- Since 1972 --}}
                    <div class="col-md-6">
                        <div class="why-card h-100">

                            <div class="why-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>

                            <h4>
                                Since 1972
                            </h4>

                            <p>
                                More than five decades of experience
                                serving customers in Nawabpur and beyond.
                            </p>

                        </div>
                    </div>


                    {{-- Stockist --}}
                    <div class="col-md-6">
                        <div class="why-card h-100">

                            <div class="why-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>

                            <h4>
                                Stockist
                            </h4>

                            <p>
                                We maintain a wide range of belts from
                                trusted international brands.
                            </p>

                        </div>
                    </div>


                    {{-- Wholesale & Retail --}}
                    <div class="col-md-6">
                        <div class="why-card h-100">

                            <div class="why-icon">
                                <i class="bi bi-shop"></i>
                            </div>

                            <h4>
                                Wholesale & Retail
                            </h4>

                            <p>
                                Serving both industrial businesses and
                                individual customers with flexible supply.
                            </p>

                        </div>
                    </div>


                    {{-- Quality --}}
                    <div class="col-md-6">
                        <div class="why-card h-100">

                            <div class="why-icon">
                                <i class="bi bi-award"></i>
                            </div>

                            <h4>
                                Trusted Quality
                            </h4>

                            <p>
                                Quality-focused products selected for
                                dependable performance and durability.
                            </p>

                        </div>
                    </div>


                    {{-- Wide Product Range --}}
                    <div class="col-md-6">
                        <div class="why-card h-100">

                            <div class="why-icon">
                                <i class="bi bi-grid-3x3-gap"></i>
                            </div>

                            <h4>
                                Wide Product Range
                            </h4>

                            <p>
                                V-Belts, Timing Belts, Transmission Belts
                                and more for different applications.
                            </p>

                        </div>
                    </div>


                    {{-- Industry Experience --}}
                    <div class="col-md-6">
                        <div class="why-card h-100">

                            <div class="why-icon">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>

                            <h4>
                                Industry Experience
                            </h4>

                            <p>
                                Practical knowledge of belts used in
                                garments, textile, brick kilns and industries.
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

{{-- Industries We Serve Section --}}
<section class="industries-section py-5" id="industries">
    <div class="container">

        {{-- Section Heading --}}
        <div class="text-center mb-5">

            <span class="section-subtitle">
                INDUSTRIES WE SERVE
            </span>

            <h2 class="section-title mt-2">
                Belt Solutions for
                <span>Every Industry</span>
            </h2>

            <p class="text-muted mx-auto mt-3" style="max-width: 700px;">
                From manufacturing to heavy industry, we supply reliable
                belt solutions for a wide range of machinery and industrial
                applications.
            </p>

        </div>


        {{-- Industries Grid --}}
        <div class="row g-4">

            {{-- Garments --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-scissors"></i>
                    </div>

                    <h4>Garments</h4>

                    <p>
                        Belts for garments and sewing machinery.
                    </p>

                </div>
            </div>


            {{-- Textile --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-grid-3x3"></i>
                    </div>

                    <h4>Textile</h4>

                    <p>
                        Belt solutions for textile machinery.
                    </p>

                </div>
            </div>


            {{-- Brick Kiln --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-bricks"></i>
                    </div>

                    <h4>Brick Kiln</h4>

                    <p>
                        Heavy-duty belts for brick manufacturing.
                    </p>

                </div>
            </div>


            {{-- Rice Mill --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-moisture"></i>
                    </div>

                    <h4>Rice Mill</h4>

                    <p>
                        Belts for rice processing machinery.
                    </p>

                </div>
            </div>


            {{-- Flour Mill --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-circle"></i>
                    </div>

                    <h4>Flour Mill</h4>

                    <p>
                        Reliable belts for flour mill machinery.
                    </p>

                </div>
            </div>


            {{-- Printing --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-printer"></i>
                    </div>

                    <h4>Printing & Press</h4>

                    <p>
                        Specialized belts for printing machinery.
                    </p>

                </div>
            </div>


            {{-- Plastic --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-box"></i>
                    </div>

                    <h4>Plastic Industry</h4>

                    <p>
                        Belt solutions for plastic machinery.
                    </p>

                </div>
            </div>


            {{-- Generator --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <h4>Generator</h4>

                    <p>
                        Belts for generators and power equipment.
                    </p>

                </div>
            </div>


            {{-- Jute Mill --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-layers"></i>
                    </div>

                    <h4>Jute Mill</h4>

                    <p>
                        Industrial belts for jute processing machinery.
                    </p>

                </div>
            </div>


            {{-- Ship & Launch --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-water"></i>
                    </div>

                    <h4>Ship & Launch</h4>

                    <p>
                        Belts for marine machinery and applications.
                    </p>

                </div>
            </div>


            {{-- Elevator --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-building-up"></i>
                    </div>

                    <h4>Elevator</h4>

                    <p>
                        Timing belts for elevator systems.
                    </p>

                </div>
            </div>


            {{-- Sawmill --}}
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="bi bi-tree"></i>
                    </div>

                    <h4>Sawmill</h4>

                    <p>
                        Durable belts for sawmill machinery.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>

{{-- About Jonaki Section --}}
<section class="about-jonaki-section py-5" id="about">
    <div class="container">

        <div class="row align-items-center g-5">

            {{-- About Image --}}
            <div class="col-lg-6">

                <div class="about-image-wrapper">

                    <img
                        src="{{ asset('images/about-jonaki.jpg') }}"
                        alt="Jonaki Machinery Store"
                        class="about-image"
                    >

                    {{-- Since Badge --}}
                    <div class="about-year-badge">
                        <strong>1972</strong>
                        <span>Since</span>
                    </div>

                </div>

            </div>


            {{-- About Content --}}
            <div class="col-lg-6">

                <span class="section-subtitle">
                    ABOUT JONAKI MACHINERY STORE
                </span>

                <h2 class="section-title mt-2">
                    Experience You Can
                    <span>Trust</span>
                </h2>

                <p class="about-lead mt-3">
                    Jonaki Machinery Store has been serving customers in
                    Nawabpur since 1972, building a reputation for quality,
                    reliability and trust.
                </p>

                <p class="text-muted">
                    We supply a wide range of V-Belts, Timing Belts and
                    Transmission Belts for different machinery and industrial
                    applications. Our products serve businesses across
                    garments, textile, brick kiln, rice mill, flour mill,
                    printing, marine and other industries.
                </p>

                <p class="text-muted">
                    With years of experience in the machinery belt market,
                    we focus on providing the right product for the right
                    application while maintaining dependable service for
                    both business and individual customers.
                </p>


                {{-- Business Roles --}}
                <div class="about-business-points mt-4">

                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Trusted Quality</span>
                    </div>

                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Stockist</span>
                    </div>

                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Wholesaler</span>
                    </div>

                    <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Retailer</span>
                    </div>
                    {{-- <div class="about-point">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Industry Experience</span>
                    </div> --}}


                </div>


                <a href="#contact" class="btn btn-primary mt-4 px-4 py-2">
                    Get in Touch
                    <i class="bi bi-arrow-right ms-1"></i>
                </a>

            </div>

        </div>

    </div>
</section>

{{-- Customer Feedback Section --}}
<section class="testimonials-section py-5" id="testimonials">
    <div class="container">

        {{-- Section Heading --}}
        <div class="text-center mb-5">

            <span class="section-subtitle">
                CUSTOMER FEEDBACK
            </span>

            <h2 class="section-title mt-2">
                Trusted by
                <span>Our Customers</span>
            </h2>

            <p class="text-muted mx-auto mt-3" style="max-width: 680px;">
                We value the trust of our customers and remain committed
                to providing quality products and dependable service.
            </p>

        </div>


        {{-- Testimonials --}}
        <div class="row g-4">

            {{-- Testimonial 1 --}}
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">

                    <div class="testimonial-quote">
                        <i class="bi bi-quote"></i>
                    </div>

                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p class="testimonial-text">
                        We have been sourcing machinery belts from
                        Jonaki Machinery Store and have always received
                        reliable products and helpful service.
                    </p>

                    <div class="testimonial-customer">

                        <div class="customer-avatar">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>
                            <h5>Nice Food</h5>
                            <span>Dhaka, Bangladesh</span>
                        </div>

                    </div>

                </div>
            </div>


            {{-- Testimonial 2 --}}
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">

                    <div class="testimonial-quote">
                        <i class="bi bi-quote"></i>
                    </div>

                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p class="testimonial-text">
                        Their wide range of belts makes it easier for us
                        to find the right product for our machinery.
                        The service is also very responsive.
                    </p>

                    <div class="testimonial-customer">

                        <div class="customer-avatar">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>
                            <h5>Sterling Apparels</h5>
                            <span>Asolia, Dhaka, Bangladesh</span>
                        </div>

                    </div>

                </div>
            </div>


            {{-- Testimonial 3 --}}
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">

                    <div class="testimonial-quote">
                        <i class="bi bi-quote"></i>
                    </div>

                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p class="testimonial-text">
                        Jonaki Machinery Store has been a dependable
                        source for quality belts. Their product knowledge
                        and customer support are appreciated.
                    </p>

                    <div class="testimonial-customer">

                        <div class="customer-avatar">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>
                            <h5>Famous</h5>
                            <span>Juraian, Dhaka</span>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

{{-- Contact / Inquiry Section --}}
<section class="contact-section py-5" id="contact">
    <div class="container">

        <div class="row g-5 align-items-stretch">

            {{-- Left: Contact Information --}}
            <div class="col-lg-5">

                <span class="section-subtitle">
                    CONTACT US
                </span>

                <h2 class="section-title mt-2">
                    Need the Right
                    <span>Belt?</span>
                </h2>

                <p class="text-muted mt-3">
                    Tell us what you need. Our team can help you find
                    the right belt for your machinery and application.
                </p>


                {{-- Contact Information --}}
                <div class="contact-info-list mt-4">

                    {{-- Address --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>
                            <span>Visit Us</span>
                            <strong>
                                ১৯২, নবাবপুর রোড, ঢাকা
                            </strong>
                        </div>

                    </div>


                    {{-- Phone --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <span>Call Us</span>
                            <strong>
                                226640980
                            </strong>
                        </div>

                    </div>


                    {{-- WhatsApp --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>

                        <div>
                            <span>WhatsApp</span>
                            <strong>
                                +8801892724884
                            </strong>
                        </div>

                    </div>


                    {{-- Business --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>
                            <span>Business</span>
                            <strong>
                                Jonaki Machinery Store
                            </strong>
                        </div>

                    </div>

                </div>


                {{-- WhatsApp Button --}}
                <a
                    href="https://wa.me/8801892724884"
                    target="_blank"
                    class="btn btn-success mt-4 px-4 py-2"
                >
                    <i class="bi bi-whatsapp me-1"></i>
                    Chat on WhatsApp
                </a>

            </div>


            {{-- Right: Inquiry Form --}}
            <div class="col-lg-7">

                <div class="inquiry-form-card">

                    <div class="mb-4">
                        <h3 class="fw-bold mb-2">
                            Send an Inquiry
                        </h3>

                        <p class="text-muted mb-0">
                            Please provide the product details and
                            our team will get back to you.
                        </p>
                    </div>


                    <form action="#" method="POST">

                        @csrf

                        <div class="row g-3">

                            {{-- Name --}}
                            <div class="col-md-6">

                                <label for="name" class="form-label">
                                    Your Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    required
                                >

                            </div>


                            {{-- Phone --}}
                            <div class="col-md-6">

                                <label for="phone" class="form-label">
                                    Phone / WhatsApp
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    placeholder="01XXXXXXXXX"
                                    required
                                >

                            </div>


                            {{-- Company --}}
                            <div class="col-md-6">

                                <label for="company" class="form-label">
                                    Company / Business
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="company"
                                    name="company"
                                    placeholder="Company name"
                                >

                            </div>


                            {{-- Product --}}
                            <div class="col-md-6">

                                <label for="product" class="form-label">
                                    Product
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="product"
                                    name="product"
                                    placeholder="e.g. V-Belt / Timing Belt"
                                >

                            </div>


                            {{-- Size --}}
                            <div class="col-md-6">

                                <label for="size" class="form-label">
                                    Belt Size
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="size"
                                    name="size"
                                    placeholder="e.g. B100 / SPB-3750"
                                >

                            </div>


                            {{-- Quantity --}}
                            <div class="col-md-6">

                                <label for="quantity" class="form-label">
                                    Quantity
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="quantity"
                                    name="quantity"
                                    placeholder="Required quantity"
                                >

                            </div>


                            {{-- Message --}}
                            <div class="col-12">

                                <label for="message" class="form-label">
                                    Message
                                </label>

                                <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us about your requirement..."
                                ></textarea>

                            </div>


                            {{-- Submit --}}
                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn btn-primary px-4 py-2"
                                >
                                    Send Inquiry
                                    <i class="bi bi-arrow-right ms-1"></i>
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>

{{-- Footer --}}
<footer class="jonaki-footer">

    {{-- Main Footer --}}
    <div class="container">

        <div class="row g-4 py-5">

            {{-- Company --}}
            <div class="col-lg-4 col-md-6">

                <a href="{{ url('/') }}" class="footer-logo">
                    Jonaki Machinery Store
                </a>

                <p class="footer-description mt-3">
                    Since 1972, we have been serving customers with
                    quality V-Belts, Timing Belts and Transmission Belts
                    for a wide range of industrial applications.
                </p>

                <div class="footer-since">
                    <span>Serving Since</span>
                    <strong>1972</strong>
                </div>

            </div>


            {{-- Quick Links --}}
            <div class="col-lg-2 col-md-6">

                <h5 class="footer-title">
                    Quick Links
                </h5>

                <ul class="footer-links">

                    <li>
                        <a href="#home">Home</a>
                    </li>

                    <li>
                        <a href="#brands">Brands</a>
                    </li>

                    <li>
                        <a href="#products">Products</a>
                    </li>

                    <li>
                        <a href="#categories">Categories</a>
                    </li>

                    <li>
                        <a href="#about">About Us</a>
                    </li>

                    <li>
                        <a href="#contact">Contact</a>
                    </li>

                </ul>

            </div>


            {{-- Products --}}
            <div class="col-lg-3 col-md-6">

                <h5 class="footer-title">
                    Our Products
                </h5>

                <ul class="footer-links">

                    <li>
                        <a href="#products">
                            V-Belts
                        </a>
                    </li>

                    <li>
                        <a href="#products">
                            Timing Belts
                        </a>
                    </li>

                    <li>
                        <a href="#products">
                            Transmission Belts
                        </a>
                    </li>

                    <li>
                        <a href="#categories">
                            Industrial Belts
                        </a>
                    </li>

                    <li>
                        <a href="#categories">
                            Garments & Textile Belts
                        </a>
                    </li>

                    <li>
                        <a href="#categories">
                            Brick Kiln Belts
                        </a>
                    </li>

                </ul>

            </div>


            {{-- Contact --}}
            <div class="col-lg-3 col-md-6">

                <h5 class="footer-title">
                    Contact Us
                </h5>

                <div class="footer-contact">

                    <div class="footer-contact-item">

                        <i class="bi bi-geo-alt"></i>

                        <span>
                            ১৯২, নবাবপুর রোড,<br>
                            ঢাকা, বাংলাদেশ
                        </span>

                    </div>


                    <div class="footer-contact-item">

                        <i class="bi bi-telephone"></i>

                        <a href="tel:+8801892724884">
                            226640980
                        </a>

                    </div>


                    <div class="footer-contact-item">

                        <i class="bi bi-whatsapp"></i>

                        <a
                            href="https://wa.me/8801892724884"
                            target="_blank"
                        >
                            WhatsApp
                        </a>

                    </div>

                </div>


                {{-- Social Links --}}
                <div class="footer-social mt-4">

                    <a
                        href="https://www.facebook.com/jonaki.machinery.store"
                        aria-label="Facebook"
                    >
                        <i class="bi bi-facebook"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- Bottom Footer --}}
    <div class="footer-bottom">

        <div class="container">

            <div class="row align-items-center g-2">

                <div class="col-md-6">

                    <p class="mb-0">
                        © {{ date('Y') }}
                        Jonaki Machinery Store.
                        All Rights Reserved.
                    </p>

                </div>

                <div class="col-md-6 text-md-end">

                    <p class="mb-0">
                        Quality • Reliability • Trust
                    </p>

                </div>

            </div>

        </div>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>