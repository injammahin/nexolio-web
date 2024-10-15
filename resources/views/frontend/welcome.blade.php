@extends('frontend.app')

@section('title', 'Welcome to Ambala IT')

@section('content')




<div class=" main-wrapper ">


<div class="main-wrapper bg-white ">

        <div class="video-container hero-section">
          <video autoplay muted loop class="fullscreen-video">
            <source src="{{ asset('/img/patials/12920671-hd_1920_1080_30fps.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>

         <!-- Text Overlay with Typing Animation -->
         <div class="text-overlay">
            <h1 class="heading">Custom Software Development Company</h1>
            <p class="sub-heading">For Your Next Project</p>
            <p class="description">
                Building on its 15+ years of experience, Ambala IT assists companies across verticals in building superior software with edgy functionality and accelerated time to market. As a client-first software development company, we solve your unique business challenges with a wide tech stack and flexible approaches.
            </p>
            <div class="cta-buttons">
                <a href="#contact" class="cta-button contact-button">Contact Us</a>
                <a href="#portfolio" class="cta-button view-portfolio-button">View Portfolio</a>
            </div>
        </div>
</div>


<!-- Parallax Wave Before About Section -->

 <div class="container-fluid content-wrapper bg-white">

    <div class="about top ambala-section " data-aos="fade-up" data-aos-duration="1000">
                <div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="">
                                <div class=" wow fadeInUp" data-wow-delay=".1s">
                                    {{-- <span class="custom_heading">About Ambala IT</span> --}}
                                </div>
                                <h3 class="ambala_heading ">We are the next generation of the business world.</h3>
                                <div class="ambala_paragraph ">
                                    <p class="ambala_paragraph mb-4">
                                        {!! $aboutContent->about_text !!}

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="experience-image-wrapper position-relative">
                                <img src="{{ asset('img/home/ambalait-about-us-image-video.webp') }}"
                                    alt=" home about image">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service-->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let serviceBoxes = document.querySelectorAll('.service-box');

                    function checkVisibility() {
                        let windowHeight = window.innerHeight;
                        serviceBoxes.forEach(function(box, index) {
                            let boxTop = box.getBoundingClientRect().top;
                            if (boxTop < windowHeight - 50) {
                                setTimeout(() => {
                                    box.classList.add('appear');
                                }, index * 100); // Stagger the appearance of each box
                            }
                        });
                    }

                    window.addEventListener('scroll', checkVisibility);
                    checkVisibility(); // Check on load
                });
            </script>
            <div class="main-section ambala-section" data-aos="fade-right" data-aos-duration="1000">
                <div id="services-section">
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            let serviceBoxes = document.querySelectorAll('.service-box');

                            function checkVisibility() {
                                let windowHeight = window.innerHeight;
                                serviceBoxes.forEach(function(box, index) {
                                    let boxTop = box.getBoundingClientRect().top;
                                    if (boxTop < windowHeight - 50) {
                                        setTimeout(() => {
                                            box.classList.add('appear');
                                        }, index * 100); // Stagger the appearance of each box
                                    }
                                });
                            }

                            window.addEventListener('scroll', checkVisibility);
                            checkVisibility(); // Check on load
                        });
                    </script>


                    <div>
                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading mb-4">Our Services</h3>
                            <p class="ambala_paragraph ">Delivering cutting-edge customized IT solutions that foster
                                innovation and empower businesses.

                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <!-- Static list of services -->
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/adaptive-software-development') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Software Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/it-consulting-services') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">IT Consulting</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/cybersecurity-companies') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Cybersecurity Services</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/web-application-development-services') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Web Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/mobile-app-development') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Mobile App Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/software-quality-and-assurance') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Quality Assurance and Testing</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/api-development') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">API Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/enterprise-resource-planning-systems') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">ERP Solution</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/uiux-design-agencies') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">UI/UX Design</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/digital-transformation') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Digital Transformation Consultant</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/build-ecommerce-websites') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">E-commerce Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/digital-marketing-agency') }}';">
                                    <div class="icon me-3"></div>
                                    <h4 class="mb-0 service">Digital Marketing</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- partner-->
            <div class="main-section ambala-section" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading mb-4">Our Partners</h3>
                        <p class="ambala_paragraph ">Our trusted partner in driving innovation with cutting-edge customized
                            software solutions.

                        </p>
                    </div>
                    <div class=" partners">
                        <div class="row justify-content-center text-center">
                            @foreach ($partners as $partner)
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                                    <div class="client-card">
                                        <img src="{{ asset('media/partners/' . $partner->image) }}"
                                            style="height: auto;width:auto !important;" alt="{{ $partner->name }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- revirew-->
            <div class="about ambala-section" data-aos="fade-right" data-aos-duration="1000">
                <div class="main-section">
                    <div class="">
                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading mb-4">Testimonials from Our Respected Clients
                            </h3>
                            <p class="ambala_paragraph ">Trusted by leading brands, we deliver exceptional software
                                solutions that drive results.

                            </p>
                        </div>
                    </div>
                    <div class="container customr">
                        <div class="owl-carousel owl-theme unique-testimonial-carousel">
                            @foreach ($reviews as $review)
                                <div class="item">
                                    <div class="unique-testimonial-block d-flex flex-column justify-content-between">
                                        <span class="alt-font quote">“</span>
                                        <p class="review-text">{!! $review->text !!}</p>
                                        <div class="d-flex align-items-center justify-content-center author-info">
                                            <img class="img-fluid rounded-circle me-3"
                                                src="{{ asset('media/review/' . $review->image) }}"
                                                alt="{{ $review->author }}" style="width: 50px; height: 50px;">
                                            <div>
                                                <h6 class="mb-0 font-weight-bold">{{ $review->author }}</h6>
                                                <small>{{ $review->role }}</small>
                                                @if ($review->video_url)
                                                    <i class="fab fa-youtube youtube-icon ms-2" data-toggle="modal"
                                                        data-target="#youtubeModal{{ $review->id }}"
                                                        style="cursor: pointer; color: #FF0000;"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            @foreach ($reviews as $review)
                @if ($review->video_url)
                    @php
                        // Convert the YouTube URL to an embeddable format
                        $embedUrl = str_replace('youtu.be/', 'www.youtube.com/embed/', $review->video_url);
                        $embedUrl = str_replace('watch?v=', 'embed/', $embedUrl);
                    @endphp
                    <div class="modal fade" id="youtubeModal{{ $review->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="youtubeModalLabel{{ $review->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="" style="background: #000!important;">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ $embedUrl }}"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <script>
                $(document).ready(function() {
                    $(".unique-testimonial-carousel").owlCarousel({
                        loop: true,
                        margin: 10,
                        nav: false,
                        center: true,
                        items: 1,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 3000, // 3 seconds
                        smartSpeed: 700,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 3
                            }
                        }
                    });
                });
            </script>

            <div class="industries-section bg-white pt-0 pb-0 text-center" data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading mb-4">Industry we serve</h3>
                        <p class="ambala_paragraph ">We are committed to transforming industries with unique customized
                            software solutions

                        </p>
                    </div>

                    <div class="industries-row justify-content-center">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-university industry-icon"></i>
                                <p>Finance & Banking</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-shopping-cart industry-icon"></i>
                                <p>E-commerce</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-network-wired industry-icon"></i>
                                <p>Telco</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-city industry-icon"></i>
                                <p>Real Estate</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-laptop-code industry-icon"></i>
                                <p>Software</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-heartbeat industry-icon"></i>
                                <p>Health & Fitness</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-utensils industry-icon"></i>
                                <p>Food & Drink</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-music industry-icon"></i>
                                <p>Music</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-tv industry-icon"></i>
                                <p>Media</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-graduation-cap industry-icon"></i>
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-plane-departure industry-icon"></i>
                                <p>Travel</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-store industry-icon"></i>
                                <p>Retail</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" award bg-white ambala-section text-center " data-aos="fade-right" data-aos-duration="1000">
                <div>
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading mb-4">Innovative Tools for Superior Solutions
                        </h3>
                        <p class="ambala_paragraph ">Emphasize the tools that enhance our development processes and
                            deliver
                            high-quality outcomes

                        </p>
                    </div>
                </div>
                <div class="row text-center wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Image Items -->
                    @foreach ($technologies as $technology)
                        <div class="col-6 col-md-2 border-end border-bottom">
                            <div class="py-6 img-hover">
                                <div class="img-container">
                                    <img class="image-70px" src="{{ asset('media/technologies/' . $technology->image) }}"
                                        alt="{{ $technology->name }}">
                                    <div class="img-shade"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <style>
                .award.img {
                    position: relative;
                    overflow: hidden;
                    justify-content: center;
                    /* Centers the entire content horizontally */
                    align-items: center;
                    border-radius: 5px;
                }

                .image-70px {
                    width: 100%;
                    transition: transform 0.3s ease;
                }

                .img-shade {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(218, 159, 159, 0.11);
                    /* Darker shade to cover the whole image */
                    transition: opacity 0.3s ease;
                    z-index: 1;
                    /* Ensure the shade appears on top of the image */
                    justify-content: center;
                    /* Centers child items horizontally */
                    align-items: center;
                }

                .row {
                    display: flex;
                    /* Enables flexbox */
                    flex-wrap: wrap;
                    /* Allows wrapping */
                    justify-content: center;
                    /* Centers child items horizontally */
                    align-items: center;
                    /* Centers child items vertically */
                }

                .col-6,
                .col-md-2 {
                    display: flex;
                    /* Enables flexbox on each column */
                    justify-content: center;
                    /* Centers child items horizontally */
                    align-items: center;
                    /* Centers child items vertically */
                }



                .img-container:hover .image-70px {
                    transform: scale(1.1);
                    z-index: 0;
                    /* Send the image behind the shade when hovering */
                }

                .img-container:hover .img-shade {
                    opacity: 0;
                }
            </style>
            <div class="bg-white ambala-section text-center" data-aos="fade-left" data-aos-duration="1000">
                <div>

                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading mb-4">Gallery</h3>
                        <p class="ambala_paragraph ">Behind the Scenes: A Visual Journey of our Innovations,
                            Achievement,
                            and Success Stories.

                        </p>
                    </div>
                    <div class="gallery-track">
                        @foreach ($galleryImages as $image)
                            <div class='card-gallery'>
                                <div class='card-gallery-image-wrapper'>
                                    <img src="{{ asset($image->image) }}" alt="{{ $image->title }}">
                                    <div class="description">
                                        <h2>{{ $image->title }}</h2>
                                        <p>{{ $image->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="gallery-see_more pt-4 ">
                        <a href="{{ route('frontend.gallery') }}" class="font-weight-600 butn very-small">See
                            More</a>
                    </div>
                </div>
            </div>
            <div class="bg-white ambala-section " data-aos="fade-down" data-aos-duration="1000">
                <div class="container">
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading mb-4">Latest Article's</h3>
                        <p class="ambala_paragraph ">Stay informed with Latest Insights, trends, and innovations in the
                            tech world.
                        </p>
                    </div>

                    {{-- <div class="row mt-n5">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 mt-5">
                                <article class="blog-grid">
                                    <div class=" blog-grid-img position-relative ">
                                        <img src="{{ asset('media/blogs/' . $blog->image) }}" alt="img">
                                    </div>
                                    <div class="blog-grid-text p-3">
                                        <h3 class="h5"><a
                                                href="{{ route('frontend.blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <div class="meta mb-3">
                                            <ul>
                                                <li><a href="#!"><i class="fas fa-calendar-alt"></i>
                                                        {{ $blog->created_at->format('d M, Y') }}</a></li>
                                                <li><a href="#!"><i class="fas fa-user"></i>
                                                        {{ $blog->author }}</a>
                                                </li>
                                                <li><a href="#!"><i class="fas fa-comments"></i>
                                                        {{ $blog->comments_count }}</a></li>
                                            </ul>
                                        </div>
                                        <p class="display-30 mb-1-8">{{ Str::limit($blog->excerpt, 100) }}</p>
                                        <a href="{{ route('frontend.blogs.show', $blog->slug) }}"
                                            class="font-weight-600 butn very-small">Read More</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
</div>
<div class="parallax-wave">
    <!-- SVG for waves animation -->
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="wave-parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
    </svg>
</div>
    @endsection
    <style>
        .title,
        .caption {
            color: white;
            /* Make sure the text is a visible color */
            font-size: 2rem;
            /* Adjust the size as needed */
            text-align: center;
            /* Center the text */
            position: relative;
            /* Ensure it stays inside the slider container */
            z-index: 10;
            /* Make sure the text is above other elements */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Add a dark overlay to improve text visibility */
            z-index: 5;
        }

        .slide-content {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            text-align: center;
        }
        .video-container {
    position: relative;
    width: 100%;
    height: 100vh; /* Full viewport height */
    overflow: hidden;
}

.fullscreen-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the video covers the entire container */
    z-index: 1; /* Ensure the video is behind any other content */
}
.hero-section {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        /* Full screen height */
        z-index: 1;
    }

    /* Hero slider styling */
    .carousel-cell {
        width: 100%;
        height: 100vh;
        /* Make each slide full screen */
        background-size: cover;
        background-position: center;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Dark overlay for better text visibility */
        z-index: 1;
    }

    .slide-content {
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        z-index: 2;
        color: #fff;
    }

    .title,
    .caption {
        color: white;
        text-align: center;
        font-size: 2rem;
        z-index: 10;
    }

    /* Content below the hero section */
    .content-wrapper {
        position: relative;
        z-index: 2;
        margin-top: 100vh;
        /* Push the content down after the fixed hero */
    }

    /* About section styling */
    .ambala-section {
        padding: 100px 0;
    }
    .typing-animation {
    font-size: 3rem;
    font-weight: bold;
    white-space: nowrap;
    overflow: hidden;
    border-right: 0.15em solid orange; /* Cursor */
    width: 0; /* Initially hidden */
    animation: typing 4s steps(40, end), blink-caret 0.75s step-end infinite;
}

.sub-heading {
    font-size: 1.5rem;
    color: orange;
    margin-top: 20px;
    animation: fadeIn 2s ease-in-out;
}

.cta-buttons {
    margin-top: 20px;
}

.cta-button {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    margin: 0 10px;
}

.view-portfolio-button {
    background-color: #17a2b8;
}

/* Typing Effect */
@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: orange; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
.text-overlay{
    z-index:1;
}

</style>

<style>.heading {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    color: white !important; /* Ensure heading text is white */
}

.sub-heading {
    font-size: 2rem;
    font-weight: 600;
    color: white !important; /* Ensure sub-heading text is white */
    margin: 20px 0;
}

.description {
    font-size: 1rem;
    font-weight: 400;
    color: white !important; /* Ensure description text is white */
    line-height: 1.6;
    margin-bottom: 20px;
}

.cta-buttons {
    margin-top: 20px;
}

.cta-button {
    padding: 12px 24px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    margin-right: 10px;
    display: inline-block;
    font-size: 1rem;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

.view-portfolio-button {
    background-color: #17a2b8;
}

.cta-button:hover {
    background-color: #155724;
}

.view-portfolio-button:hover {
    background-color: #0f6674;
}

/* Content below the hero section */
.content-wrapper {
    position: relative;
    z-index: 2;
    margin-top: 100vh;
    /* Push the content down after the fixed hero */
}


/* Responsive adjustments */
@media (max-width: 1200px) {
    .heading {
        font-size: 3rem;
    }

    .sub-heading {
        font-size: 1.8rem;
    }

    .description {
        font-size: 0.9rem;
    }
}

@media (max-width: 992px) {
    .heading {
        font-size: 2.5rem;
    }

    .sub-heading {
        font-size: 1.6rem;
    }

    .description {
        font-size: 0.85rem;
    }

    .cta-button {
        padding: 10px 20px;
        font-size: 0.9rem;
    }

    .text-overlay {
        left: 8%;
    }
}

@media (max-width: 768px) {
    .heading {
        font-size: 2.2rem;
    }

    .sub-heading {
        font-size: 1.4rem;
    }

    .description {
        font-size: 0.8rem;
    }

    .cta-button {
        padding: 8px 16px;
        font-size: 0.85rem;
    }

    .text-overlay {
        top: 35%;
        left: 5%;
        max-width: 500px;
    }
}

@media (max-width: 576px) {
    .heading {
        font-size: 2rem;
    }

    .sub-heading {
        font-size: 1.3rem;
    }

    .description {
        font-size: 0.75rem;
    }

    .cta-button {
        padding: 8px 14px;
        font-size: 0.8rem;
    }

    .text-overlay {
        top: 40%;
        left: 5%;
        max-width: 100%;
    }
}
.text-overlay {
    position: absolute;
    top: 30%;
    left: 10%;
    text-align: left;
    color: white !important; /* Set all text to white */
    max-width: 600px;
    z-index: 2;
}
</style>
<style>.waves {
    position: relative;
    width: 100%;
    height: 15vh;
    margin-bottom: -7px;
    min-height: 100px;
    max-height: 150px;
}

.wave-parallax > use {
    animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
}

.wave-parallax > use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
}

.wave-parallax > use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
}

.wave-parallax > use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
}

.wave-parallax > use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
}

@keyframes move-forever {
    0% {
        transform: translate3d(-90px, 0, 0);
    }
    100% {
        transform: translate3d(85px, 0, 0);
    }
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}</style>
<style>
    /* Parallax Wave Section */
    .parallax-wave {
        position: relative;
        top: 0;
        width: 100%;
        height: 150px; /* Adjust as necessary */
        z-index: 2; /* Ensure it's above the background but below content */
    }

    .waves {
        position: relative;
        width: 100%;
        height: 15vh;
        margin-bottom: -7px;
        min-height: 100px;
        max-height: 150px;
    }

    .wave-parallax > use {
        animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
    }

    .wave-parallax > use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }

    .wave-parallax > use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }

    .wave-parallax > use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }

    .wave-parallax > use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }

    /* Animation for wave movement */
    @keyframes move-forever {
        0% {
            transform: translate3d(-90px, 0, 0);
        }
        100% {
            transform: translate3d(85px, 0, 0);
        }
    }

    /* Hero Section and Text Overlay */
    .hero-section {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: 1;
    }

    .fullscreen-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .text-overlay {
        position: absolute;
        top: 30%;
        left: 10%;
        text-align: left;
        color: white;
        max-width: 600px;
        z-index: 2;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .heading {
            font-size: 2.2rem;
        }
        .sub-heading {
            font-size: 1.4rem;
        }
        .description {
            font-size: 0.8rem;
        }
        .cta-button {
            padding: 8px 16px;
            font-size: 0.85rem;
        }
        .text-overlay {
            top: 35%;
            left: 5%;
            max-width: 500px;
        }
    }

    @media (max-width: 576px) {
        .heading {
            font-size: 2rem;
        }
        .sub-heading {
            font-size: 1.3rem;
        }
        .description {
            font-size: 0.75rem;
        }
        .cta-button {
            padding: 8px 14px;
            font-size: 0.8rem;
        }
        .text-overlay {
            top: 40%;
            left: 5%;
            max-width: 100%;
        }
    }
    </style>
