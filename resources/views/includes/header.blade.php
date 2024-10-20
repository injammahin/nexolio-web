<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<header id="header" class="{{ request()->routeIs('home') ? 'transparent-header' : 'solid-header fixed-header header' }}">
    <!-- Top Header (Initially Transparent) -->
    <div class="header-top">
        <div class="container-fluid">
            <nav class="header-nav d-flex justify-content-between align-items-center" aria-label="navigation">
                <ul class="d-flex align-items-center mb-0">
                    <li><a href="/contact-us" class="header-link"><span class="inner">Contact us</span></a></li>
                    <li class="icon-investors">
                        <a href="https://investors.capgemini.com/en/" target="_blank" title="Opens in a new window"
                            rel="noopener noreferrer" class="header-link">
                            <span class="outer">
                                <span class="inner">Investors</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="header-lang">
                    <a href="#" class="header-link">
                        <span class="outer lang-current">
                            <span class="inner">Global | EN</span>
                        </span>
                        <img loading="lazy" alt="Language Icon"
                            src="https://www.capgemini.com/wp-content/themes/capgemini2020/assets/images/global-white.svg"
                            class="language-icon">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                </button>
                </div>
            </nav>
        </div>
    </div>

    <!-- Main Header (Navbar) -->
    <div class="navbar-default">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
                            <div class="navbar-header navbar-header-custom">
                                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-start">
                                    @if ($siteLogo)
                                        <img src="{{ asset($siteLogo) }}" alt="Site Logo" class="img-fluid logo p-1">
                                    @else
                                        <span class="navbar-brand">Site Name</span>
                                    @endif
                                </a>
                            </div>
                            <ul class="navbar-nav" id="navbarNav">
                                <li class="main "><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li class="main"><a href="{{ route('frontend.about') }}">Who we are</a></li>
                                <li class="main"><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li class="main"><a href="{{ route('frontend.about') }}">Who we are</a></li>

                                <li><a class="main" href="{{ route('frontend.services') }}">Services </a>
                                    <ul>
                                        <!-- List of 12 Services -->
                                        <li><a href="{{ route('frontend.services.adaptive-software-development') }}">Software
                                                Development</a></li>
                                        <li><a href="{{ route('frontend.services.it-consulting-services') }}">
                                                IT Consulting</a></li>
                                        <li><a href="{{ route('frontend.services.cybersecurity-companies') }}">
                                                Cybersecurity Services</a></li>
                                        <li><a
                                                href="{{ route('frontend.services.web-application-development-services') }}">
                                                Web Development</a></li>
                                        <li><a href="{{ route('frontend.services.mobile-app-development') }}">Mobile
                                                App Development</a></li>

                                        <li><a href="{{ route('frontend.services.software-quality-and-assurance') }}">Quality
                                                Assurance and Testing</a></li>
                                        <li><a href="{{ route('frontend.services.api-development') }}">API
                                                Development </a></li>
                                        <li><a
                                                href="{{ route('frontend.services.enterprise-resource-planning-systems') }}">ERP
                                                Solution</a></li>

                                        <li><a href="{{ route('frontend.services.uiux-design-agencies') }}">UI/UX
                                                Design</a></li>

                                        <li><a href="{{ route('frontend.services.digital-transformation') }}">Digital
                                                Transformation Consultant</a></li>
                                        <li><a href="{{ route('frontend.services.build-ecommerce-websites') }}">E-commerce
                                                Development</a></li>
                                        <li><a href="{{ route('frontend.services.digital-marketing-agency') }}">Digital
                                                Marketing </a></li>
                                    </ul>
                                </li>
                                {{-- this product will hide in mobile and tablet  --}}
                                <li class="d-none d-lg-block"><a class="main"
                                        href="{{ route('frontend.product.index') }}">Products</a>
                                    <ul>
                                        @foreach ($newProducts as $product)
                                            <li>
                                                <a href="{{ route('frontend.product.details', $product->slug) }}"
                                                    class="product-link" data-id="{{ $product->id }}"
                                                    data-title="{{ $product->name }}"
                                                    data-navmenu-image="{{ asset('media/new_product/navmenu_images/' . $product->navmenu_image) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- for mobile and tabmood thid product will show --}}
                                <li class="nav-item dropdown d-lg-none"><a class="main"
                                        href="{{ route('frontend.product.index') }}">Product</a>

                                    <ul>
                                        @foreach ($newProducts as $product)
                                            <li><a href="{{ route('frontend.product.details', $product->slug) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                {{--  --}}
                                <li class="main"><a href="{{ route('frontend.blog') }}">Article</a></li>
                                <li class="main"><a href="{{ route('frontend.gallery') }}">Gallery</a></li>
                                <li class="main"><a href="{{ route('frontend.career') }}">Career</a></li>
                                <li class="main"><a href="{{ route('frontend.contract_us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const headerTop = document.querySelector('.header-top');
        const header = document.querySelector('#header');
        const navbar = document.querySelector('.navbar-default');
        const navLinks = document.querySelectorAll('.header-link, .navbar-nav li a');

        // Set initial transparency
        headerTop.style.transform = 'translateY(0px)'; // Set transform to 0px on load

        // Function to handle transparency on load and scroll
        function handleHeaderTransparency() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > 50) {
                headerTop.style.transform = 'translateY(-100%)'; // Hide the top bar
                header.classList.add('solid-header'); // Add solid header class
                navbar.classList.add('solid'); // Make navbar solid on scroll
                navLinks.forEach(link => link.style.color = 'black'); // Make links black
            } else {
                headerTop.style.transform = 'translateY(0px)'; // Show the top bar
                header.classList.remove('solid-header'); // Remove solid header class
                navbar.classList.remove('solid'); // Remove solid background
                navLinks.forEach(link => link.style.color = 'white'); // Make links white
            }
        }

        // Initial call to set the transparency based on initial scroll position
        handleHeaderTransparency();

        // Adjust transparency on scroll
        window.addEventListener('scroll', handleHeaderTransparency);

        // Add hover effect to make background white and text/logo black
        header.addEventListener('mouseenter', function () {
            if (!header.classList.contains('solid-header')) {
                header.classList.add('hovered-header');
                navLinks.forEach(link => link.style.color = 'black'); // Change link color to black
            }
        });

        header.addEventListener('mouseleave', function () {
            header.classList.remove('hovered-header');
            if (!header.classList.contains('solid-header')) {
                navLinks.forEach(link => link.style.color = 'white'); // Revert link color to white
            }
        });
    });
</script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const headerTop = document.querySelector('.custom-header-top');
        const header = document.querySelector('#custom-header');
        const navbar = document.querySelector('.custom-navbar');
        const navLinks = document.querySelectorAll('.custom-header-link, .navbar-nav li a');

        function handleHeaderTransparency() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > 50) {
                headerTop.style.transform = 'translateY(-100%)'; // Hide the top bar
                header.classList.add('custom-solid-header'); // Add solid header class
                navbar.classList.add('custom-solid'); // Make navbar solid on scroll
                navLinks.forEach(link => link.style.color = 'black'); // Make links black
            } else {
                headerTop.style.transform = 'translateY(0px)'; // Show the top bar
                header.classList.remove('custom-solid-header'); // Remove solid header class
                navbar.classList.remove('custom-solid'); // Remove solid background
                navLinks.forEach(link => link.style.color = 'white'); // Make links white
            }
        }

        // Initial call to set the transparency based on initial scroll position
        handleHeaderTransparency();

        // Adjust transparency on scroll
        window.addEventListener('scroll', handleHeaderTransparency);
    });
</script> --}}


<style>
    /* Basic header styles */
    .header-top {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        padding: 11px 0;
        background-color: transparent;
        transition: transform 0.3s ease, background-color 0.5s ease, color 0.5s ease;
    }

    .header-nav ul {
        display: flex;
        gap: 15px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .header-link {
        text-decoration: none;
        color: white; /* White text and logo initially */
        font-size: 1rem;
        transition: color 0.3s ease;
    }

    .navbar-default {
        position: fixed;
        top: 50px;
        width: 100%;
        padding: 15px 0;
        background-color: transparent;
        transition: background-color 0.5s ease, top 0.5s ease, color 0.5s ease;
        z-index: 999;
    }

    .navbar-brand img {
        height: 4.5rem;
        filter: brightness(0) invert(1); /* White logo initially */
        transition: filter 0.3s ease, height 0.3s ease;
    }

    /* Hovered state - background turns white, text and logo turn black */
    .hovered-header .header-top {
        background-color: white;
    }

    .hovered-header .navbar-default {
        background-color: white;
    }

    .hovered-header .header-link {
        color: black; /* Text turns black on hover */
    }
    .hovered-header .header-link {
        color: black; /* Text turns black on hover */
    }


    .hovered-header .navbar-brand img {
        filter: none; /* Black logo on hover */
    }

    /* Solid header after scrolling */
    .solid-header .header-top,
    .solid-header .navbar-default {
        background-color: white;
    }

    .solid-header .header-link {
        color: black; /* Black text when scrolled */
    }

    .solid-header .navbar-brand img {
        filter: none; /* Black logo when scrolled */
    }
    .navbar-toggler {
    top: 70px;
    right: 10px;
    }
    @media (max-width: 576px) {
        .header-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 11px 0;
            background-color: white;
            color: black;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        .header-nav ul {
            display: flex;
            gap: 15px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .header-link {
            text-decoration: none;
            color: black;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .navbar-default {
            position: fixed;
            top: 60px;
            width: 100%;
            padding: 15px 0;
            background-color: white;
            transition: background-color 0.5s ease, color 0.5s ease;
            z-index: 999;
        }

        .navbar-brand img {
            height: 4.5rem;
            filter: brightness(0);
            transition: filter 0.3s ease, height 0.3s ease;
        }

        /* Media Query for Mobile & Tablet */
        @media (max-width: 991.98px) {
            .header-top {
                background-color: white;
                color: black;
                position: fixed;
                top: 0;
                z-index: 1000;
            }

            .header-link {
                color: black;
            }

            .navbar-default {
                background-color: white;
            }
        }

        .navbar-toggler {
            margin-right: 10px;
        }
    </style>
    }
</style>
