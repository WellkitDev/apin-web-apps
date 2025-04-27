@extends('layouts.apps')

@section('content')
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-609bde0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="609bde0" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e3667d"
                data-id="7e3667d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-459e68b elementor-widget elementor-widget-wpo-consultar_slider"
                        data-id="459e68b" data-element_type="widget" data-widget_type="wpo-consultar_slider.default">
                        <div class="elementor-widget-container">
                            <div class="wpo-hero-slider">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide-inner slide-bg-image"
                                                data-background="{{ asset('assets/images/slider/dashboard-1.jpg') }}">
                                                <div class="container">
                                                    {{-- <div class="slide-content">
                                                        <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                                        </div>
                                                        <div data-swiper-parallax="300" class="slide-title">
                                                            <h2>Helping You Solve Your Problems</h2>
                                                        </div>
                                                        <div data-swiper-parallax="400" class="slide-text">
                                                            <p>Our company is one of the world’s leading
                                                                consulting firms. We help them make better
                                                                decisions.
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div data-swiper-parallax="500" class="slide-btns"><a
                                                                href="https://wpocean.com/wp/consultar/contact/"
                                                                class="theme-btn">Get Started</a></div>
                                                    </div> --}}
                                                </div>
                                            </div> <!-- end slide-inner -->
                                        </div> <!-- end swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-inner slide-bg-image"
                                                data-background="{{ asset('assets/images/slider/dashboard-2.jpg') }}">
                                                <div class="container">
                                                    {{-- <div class="slide-content">
                                                        <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                                        </div>
                                                        <div data-swiper-parallax="300" class="slide-title">
                                                            <h2>Most Popular Consulting Agency</h2>
                                                        </div>
                                                        <div data-swiper-parallax="400" class="slide-text">
                                                            <p>Our company is one of the world’s leading
                                                                consulting firms. We help them make better
                                                                decisions.
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div data-swiper-parallax="500" class="slide-btns"><a href="#"
                                                                class="theme-btn">Get
                                                                Started</a></div>
                                                    </div> --}}
                                                </div>
                                            </div> <!-- end slide-inner -->
                                        </div> <!-- end swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-inner slide-bg-image"
                                                data-background="{{ asset('assets/images/slider/dashboard-3.jpg') }}">
                                                <div class="container">
                                                    {{-- <div class="slide-content">
                                                        <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                                        </div>
                                                        <div data-swiper-parallax="300" class="slide-title">
                                                            <h2>Most Popular Consulting Agency</h2>
                                                        </div>
                                                        <div data-swiper-parallax="400" class="slide-text">
                                                            <p>Our company is one of the world’s leading
                                                                consulting firms. We help them make better
                                                                decisions.
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div data-swiper-parallax="500" class="slide-btns"><a href="#"
                                                                class="theme-btn">Get
                                                                Started</a></div>
                                                    </div> --}}
                                                </div>
                                            </div> <!-- end slide-inner -->
                                        </div> <!-- end swiper-slide -->
                                    </div>
                                    <!-- swipper controls -->
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start of wpo-hero-section-1 -->
    <section class="wpo-hero-section-1 wpo-hero-section-2">
        <div class="container">
            <div class="row">
                <div class="col col-xs-6 col-lg-6">
                    <div class="wpo-hero-section-text">
                        <div class="wpo-hero-title-top">
                            <span>Kami menyediakan berbagai layanan.</span>
                        </div>
                        <div class="wpo-hero-title">
                            <h2>Fokus pada pengelolaan dan publikasi jurnal</h2>
                        </div>
                        <div class="wpo-hero-subtitle">
                            <p>Didukung oleh para akademisi dan praktisi berpengalaman dalam publikasi ilmiah</p>
                        </div>
                        <div class="btns">
                            <a href="{{ url('/layanan') }}" class="btn theme-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-vec">
            <div class="right-img">
                <div class="r-img">
                    <img src="{{ asset('assets/images/slider/home.png') }}" alt="">
                </div>
                <div class="wpo-happy-client">
                    <div class="wpo-happy-client-text">
                        <h3>252+</h3>
                        <p>Hubungan Kerjasama</p>
                    </div>
                    <div class="wpo-happy-client-img">
                        <ul class="wpo-happy-client-slide owl-carousel">
                            <li><img src="https://simoster.org/kerjasama/kerjasama_logo_LPKDpMXpHTmRrbFFEZUt0YmZwdlpURmJzRVlvb3Z3TVphZGVEZkYyOHhoNUkxaz0=.jpeg"
                                    alt=""></li>
                            <li><img src="https://simoster.org/kerjasama/kerjasama_logo_LPKDpckxSTnRicm9IMEE0ZEkzaE9MUUJpQjhmTFdYcS9RaXMxeEZpQVFlcjhMdz0=.png"
                                    alt=""></li>
                            <li><img src="https://simoster.org/kerjasama/kerjasama_logo_APJIpbFFhK0R4UFJYMHRDdHZ3WUV2UmNKUkVSeGlCRHFPTFJmdEFQQmpOUk9jTT0=.jpeg"
                                    alt=""></li>
                            <li><img src="https://simoster.org/kerjasama/kerjasama_logo_LPKDpR0c2V0habWxIZTZrYnNOSk1pUjM2NTRCeTFQRjJpOUNUSTd6Vk9sWXhsTT0=.png"
                                    alt=""></li>
                            <li><img src="https://simoster.org/kerjasama/kerjasama_logo_LPKDpdi9mN2ZOcEd4MTlQdHhCYk9rclZORkZlUTVmZUs0ZjFER0hPVWJWZDRjZz0=.jpeg"
                                    alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- end of wpo-hero-section-1 slider -->
    <!-- start of wpo-features-section -->
    {{-- <section class="wpo-features-section section-padding">
        <div class="container">
            @if ($page->pageItems->isNotEmpty())
            <div class="row">
                @foreach ($page->pageItems as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-features-item">
                        <div class="wpo-features-icon">
                            <div class="icon">
                                <img src="{{ $item->image ?? 'https://wpocean.com/html/tf/consultar-live/assets/images/icon/document.svg' }}"alt="{{ $item->title }}">
                            </div>
                        </div>
                        <div class="wpo-features-text">
                            <h2><a href="{{ url($page->slug . '/' . Str::slug($item->title)) }}">{{ $item->title }}</a></h2>
                            <p>{{ $item->description ?? 'The lower-numbered purposes are better understood and practiced' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section> --}}
    <!-- end of wpo-features-section -->

    <!-- start of wpo-about-section -->
    <section class="wpo-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img">
                            <img src="{{ $aboutPage->image }}" alt="">
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
                            <h2>{{ $aboutPage->title }}</h2>
                            <p>{{ Str::limit(strip_tags($aboutPage->description), 500) }}</p>
                            <div class="signeture">
                                {{-- <span><img src="https://wpocean.com/html/tf/consultar-live/assets/images/signeture.png"
                                        alt=""></span> --}}
                                {{-- <p>Angga Aldilla Gussman, S.H., M.H., CEO</p> --}}
                            </div>
                            <a class="theme-btn" href="{{ url('/tentang') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-about-section -->
    <!-- start of wpo-service-section -->
    @if ($servicesPage || $services)
        <section class="wpo-service-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <span>Layanan Kami</span>
                            <h2>Jelajahi Layanan Kami</h2>
                        </div>
                    </div>
                </div>
                @if ($servicesPage && $servicesPage->pageItems->isNotEmpty())
                    <div class="row">
                        @foreach ($servicesPage->pageItems as $service)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="wpo-service-item">
                                    <div class="wpo-service-icon">
                                        <div class="icon">
                                            <img src="{{ $service->image ?? 'https://wpocean.com/html/tf/consultar-live/assets/images/icon/document.svg' }}"
                                                alt="{{ $service->title }}">
                                        </div>
                                    </div>
                                    <div class="wpo-service-text">
                                        <h2>
                                            <a href="{{ url($servicesPage->slug . '/' . Str::slug($service->slug)) }}">
                                                {{ $service->title }}
                                            </a>
                                            {{-- <a href="#">
                                            {{ $service->title }}
                                        </a> --}}
                                        </h2>
                                        <p>{{ Str::limit(strip_tags($service->description), 120) ?? 'The lower-numbered purposes are better understood and practiced' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif ($services && $services->isNotEmpty())
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="wpo-service-item">
                                    <div class="wpo-service-icon">
                                        <div class="icon">
                                            <img src="{{ $service->image ?? 'https://wpocean.com/html/tf/consultar-live/assets/images/icon/document.svg' }}"
                                                alt="{{ $service->title }}">
                                        </div>
                                    </div>
                                    <div class="wpo-service-text">
                                        <h2>
                                            <a href="{{ url('layanan/' . Str::slug($service->title)) }}">
                                                {{ $service->title }}
                                            </a>
                                        </h2>
                                        <p>{{ Str::limit(strip_tags($service->description), 50) ?? 'The lower-numbered purposes are better understood and practiced' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
    <!-- end of wpo-service-section -->

    <!-- start of wpo-pricing-section -->
    {{-- <section class="wpo-pricing-section section-padding">
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
    </section> --}}
    <!-- end of wpo-pricing-section -->
    <!-- start wpo-fun-fact-section -->
    {{-- <section class="wpo-fun-fact-section wpo-fun-fact-section-s2">
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
    </section> --}}
    <!-- end wpo-fun-fact-section -->
    <!--Start wpo-gallery-section-->
    {{-- <section class="wpo-gallery-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-8">
                    <div class="wpo-section-title">
                        <span>Projects</span>
                        <h2>Our Project Gallery</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-4">
                    <div class="wpo-section-title-button">
                        <a href="project.html">More Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="wpo-gallery-container">
                        <div class="grid">
                            <div class="wpo-gallery-item">
                                <a href="project-single.html">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-6.jpg"
                                        alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Digital Analysis</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="wpo-gallery-item">
                                <a href="project-single.html">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-7.jpg"
                                        alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Corporate Finance</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="wpo-gallery-item">
                                <a href="project-single.html">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-8.jpg"
                                        alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Market Research</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="wpo-gallery-item">
                                <a href="project-single.html">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-9.jpg"
                                        alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Business Analysis</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section> --}}
    <!--End wpo-gallery-section-->

    <!--Start wpo-testimonial-section-->
    {{-- <section class="wpo-testimonial-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="wpo-testimonial-title">
                        <h2><i class="fi flaticon-left-quote"></i> What <span>Our Clients</span> are Saying</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-testimonial-items wpo-testimonial-slider owl-carousel">
                <div class="wpo-testimonial-item">
                    <div class="wpo-testimonial-avatar">
                        <img src="https://wpocean.com/html/tf/consultar-live/assets/images/testimonial/img-1.jpg"
                            alt="">
                    </div>
                    <div class="wpo-testimonial-text">
                        <p>I just wanted to share a quick note and let you know that you guys do a really good job.
                            I’m glad I decided to work with you. It’s really great how easy.</p>
                        <div class="wpo-testimonial-text-btm">
                            <h3>Jenny Watson</h3>
                            <span>SCG First Company</span>
                        </div>
                    </div>
                </div>
                <div class="wpo-testimonial-item">
                    <div class="wpo-testimonial-avatar">
                        <img src="https://wpocean.com/html/tf/consultar-live/assets/images/testimonial/img-2.jpg"
                            alt="">
                    </div>
                    <div class="wpo-testimonial-text">
                        <p>I just wanted to share a quick note and let you know that you guys do a really good job.
                            I’m glad I decided to work with you. It’s really great how easy.</p>
                        <div class="wpo-testimonial-text-btm">
                            <h3>Harry Abraham</h3>
                            <span>SCG First Company</span>
                        </div>
                    </div>
                </div>
                <div class="wpo-testimonial-item">
                    <div class="wpo-testimonial-avatar">
                        <img src="https://wpocean.com/html/tf/consultar-live/assets/images/testimonial/img-3.jpg"
                            alt="">
                    </div>
                    <div class="wpo-testimonial-text">
                        <p>I just wanted to share a quick note and let you know that you guys do a really good job.
                            I’m glad I decided to work with you. It’s really great how easy.</p>
                        <div class="wpo-testimonial-text-btm">
                            <h3>Ron Di-soza</h3>
                            <span>SCG First Company</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End wpo-testimonial-section-->

    <!--Start wpo-support-section-->
    {{-- <section class="wpo-support-section">
        <div class="container">
            <div class="wpo-support-wrapper">
                <div class="wpo-support-text">
                    <h2>Have You a Different Question?</h2>
                    <p>Please create a ticket to our support forum,a great place to learn, share, and troubleshoot.
                        Get started.</p>
                </div>
                <div class="wpo-support-btn">
                    <a href="contact.html">Ask Support Ticket</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End wpo-support-section-->

    <!-- start of wpo-blog-section -->
    {{-- <section class="wpo-blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>blog</span>
                        <h2>Our blog Packages</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-1.jpg"
                                    alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <div class="wpo-blog-thumb">
                                        <span>Business</span>
                                    </div>
                                    <h2><a href="blog.html">8 Mistakes First-Time Founders Make When Starting a
                                            Business.</a></h2>
                                </div>
                                <div class="wpo-blog-content-btm">
                                    <div class="wpo-blog-content-btm-left">
                                        <div class="wpo-blog-content-btm-left-img">
                                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/blog-avater/img-1.jpg"
                                                alt="">
                                        </div>
                                        <div class="wpo-blog-content-btm-left-text">
                                            <h4><a href="blog.html">Konal Biry</a></h4>
                                            <span>Marketing Manager</span>
                                        </div>
                                    </div>
                                    <div class="wpo-blog-content-btm-right">
                                        <span>14 AUG,21</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-2.jpg"
                                    alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <div class="wpo-blog-thumb">
                                        <span>Consulitng</span>
                                    </div>
                                    <h2><a href="blog.html">3 of the Worst Ways Small Businesses Waste Money on
                                            Marketing</a></h2>
                                </div>
                                <div class="wpo-blog-content-btm">
                                    <div class="wpo-blog-content-btm-left">
                                        <div class="wpo-blog-content-btm-left-img">
                                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/blog-avater/img-2.jpg"
                                                alt="">
                                        </div>
                                        <div class="wpo-blog-content-btm-left-text">
                                            <h4><a href="blog.html">Robert Johnson</a></h4>
                                            <span>Marketing Manager</span>
                                        </div>
                                    </div>
                                    <div class="wpo-blog-content-btm-right">
                                        <span>14 AUG,21</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-3.jpg"
                                    alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <div class="wpo-blog-content-top">
                                    <div class="wpo-blog-thumb">
                                        <span>Business</span>
                                    </div>
                                    <h2><a href="blog.html">Good Advice: Tips From Successful Small Business
                                            Owners</a></h2>
                                </div>
                                <div class="wpo-blog-content-btm">
                                    <div class="wpo-blog-content-btm-left">
                                        <div class="wpo-blog-content-btm-left-img">
                                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/blog-avater/img-3.jpg"
                                                alt="">
                                        </div>
                                        <div class="wpo-blog-content-btm-left-text">
                                            <h4><a href="blog.html">Josna Bothy</a></h4>
                                            <span>Marketing Manager</span>
                                        </div>
                                    </div>
                                    <div class="wpo-blog-content-btm-right">
                                        <span>14 AUG,21</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end of wpo-blog-section -->
@endsection
