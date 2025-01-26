@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Tentang Kami</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>Tentang Kami</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start of wpo-about-section -->
    <section class="wpo-about-section wpo-about-section-s2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img">
                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/about.jpg" alt="">
                            <div class="wpo-ab-shape-1"><img
                                    src="https://wpocean.com/html/tf/consultar-live/assets/images/ab-shape-1.png"
                                    alt=""></div>
                            <div class="wpo-ab-shape-2"><img
                                    src="https://wpocean.com/html/tf/consultar-live/assets/images/ab-shape-2.png"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                        <div class="wpo-about-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/badge.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-about-icon-content">
                            <h2>Professional And Dedicated <span>Consulting</span> Solutions</h2>
                            <p>Management consulting includes a broad range of activities, and the many firms and
                                their members often define these practices quite differently. One way to categorize
                                the activities is in terms of the professional’s area of expertise (such as
                                competitive analysis, corporate strategy, operations management, or human
                                resources). But in practice, as many differences exist within these categories as
                                between them.</p>
                            <div class="signeture">
                                <span><img src="https://wpocean.com/html/tf/consultar-live/assets/images/signeture.png"
                                        alt=""></span>
                                <p>Robert William, CEO</p>
                            </div>
                            <a class="theme-btn" href="about.html">More About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-about-section -->

    <!-- start of wpo-service-section -->
    <section class="wpo-service-section wpo-service-section-s3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Our Services</span>
                        <h2>Explore Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-service-items wpo-service-slider owl-carousel">
                <div class="wpo-service-item">
                    <div class="wpo-service-icon">
                        <i class="fi flaticon-lamp"></i>
                    </div>
                    <div class="wpo-service-text">
                        <h2><a href="service-single.html">Strategy and Planning</a></h2>
                        <p>One way to categorize the activities is in terms ...</p>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-icon">
                        <i class="fi flaticon-edit"></i>
                    </div>
                    <div class="wpo-service-text">
                        <h2><a href="service-single.html">Corporate Finance</a></h2>
                        <p>One way to categorize the activities is in terms ...</p>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-icon">
                        <i class="fi flaticon-startup"></i>
                    </div>
                    <div class="wpo-service-text">
                        <h2><a href="service-single.html">Market Research</a></h2>
                        <p>One way to categorize the activities is in terms ...</p>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-icon">
                        <i class="fi flaticon-business"></i>
                    </div>
                    <div class="wpo-service-text">
                        <h2><a href="service-single.html">Business Analysis</a></h2>
                        <p>One way to categorize the activities is in terms ...</p>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-icon">
                        <i class="fi flaticon-lamp"></i>
                    </div>
                    <div class="wpo-service-text">
                        <h2><a href="service-single.html">Strategy and Planning</a></h2>
                        <p>One way to categorize the activities is in terms ...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-service-section -->

    <!-- start of wpo-pricing-section -->
    <section class="wpo-pricing-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Pricing</span>
                        <h2>Our Pricing Packages</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-pricing-items">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-pricing-item">
                            <h2>Basic Pack</h2>
                            <div class="price-icon">
                                <i class="fi flaticon-medal"></i>
                            </div>
                            <ul>
                                <li>24/7 Support available</li>
                                <li>Home Consulting System</li>
                                <li>30-Day analytics & insights</li>
                                <li>Ultimate Features</li>
                            </ul>
                            <a class="theme-btn" href="contact.html">Choose Plan</a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-pricing-item">
                            <h2>Standard Pack</h2>
                            <div class="price-icon">
                                <i class="fi flaticon-stats"></i>
                            </div>
                            <ul>
                                <li>24/7 Support available</li>
                                <li>Home Consulting System</li>
                                <li>30-Day analytics & insights</li>
                                <li>Ultimate Features</li>
                            </ul>
                            <a class="theme-btn" href="contact.html">Choose Plan</a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-pricing-item">
                            <h2>Extended Pack</h2>
                            <div class="price-icon">
                                <i class="fi flaticon-trophy"></i>
                            </div>
                            <ul>
                                <li>24/7 Support available</li>
                                <li>Home Consulting System</li>
                                <li>30-Day analytics & insights</li>
                                <li>Ultimate Features</li>
                            </ul>
                            <a class="theme-btn" href="contact.html">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-pricing-section -->
    <!-- start wpo-fun-fact-section -->
    <section class="wpo-fun-fact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-fun-fact-grids clearfix">
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="500">00</span>+</h3>
                                <p>Completed Cases</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="25">00</span>+</h3>
                                <p>Expert Consultants</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="95">00</span>%</h3>
                                <p>Client Satisfaction</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="25">00</span>+</h3>
                                <p>Award Winning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-fun-fact-section -->
@endsection
