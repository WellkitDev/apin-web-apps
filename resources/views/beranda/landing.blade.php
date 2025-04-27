@extends('layouts.app')
@section('content')
    <div class="page-wrapper layout-full"> <!-- #consultar-theme-wrapper -->
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="https://wpocean.com/wp/consultar/wp-content/themes/consultar/assets/images/preloader.svg"
                        alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <header id="header" class="wpo-site-header header-style-2">
            <div class="topbar" style="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-7 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="ti-location-pin"></i><span></span>7 Green Lake Street Crawfordsville
                                    </li>
                                    <li><i class="ti-email"></i><span></span><a href="mailto: consultar@gmail.com">
                                            consultar@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-5 col-sm-12 col-12">
                            <div class="social">
                                <ul class="clearfix">
                                    <li>Visit our social pages</li>
                                    <li><a href="#"><i class="ti-facebook" style=""></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt" style=""></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin" style=""></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest" style=""></i></a></li>
                                    <li><a href="#"><i class="ti-instagram" style=""></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <nav id="site-navigation" class="navigation navbar navbar-expand-lg navbar-light  sticky-menu-on  has-menu ">
                <!-- Navigation & Search -->
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-6"><!-- Start of Logo -->
                            <div class="navbar-header">
                                <div class="site-logo  has_menu " style="">
                                    <a class="navbar-brand" href="https://wpocean.com/wp/consultar/">
                                        <img style=""
                                            src="https://wpocean.com/wp/consultar/wp-content/themes/consultar/assets/images/logo.svg"
                                            alt="Consultar - Consulting WordPress Theme">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-1 col-1"><!-- Start of nav-collapse -->
                            <div id="navbar"
                                class="collapse navbar-collapse navigation-holder  has-menu not-has-cart has-search ">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul id="menu-main-menu" class="nav navbar-nav menu nav-menu mb-2 mb-lg-0">
                                    <li id="menu-item-15"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-15">
                                        <a href="https://wpocean.com/wp/consultar/">Home</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-90"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-90">
                                                <a href="https://wpocean.com/wp/consultar/">Home Style 1</a>
                                            </li>
                                            <li id="menu-item-89"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89">
                                                <a href="https://wpocean.com/wp/consultar/home-style-2/">Home Style
                                                    2</a>
                                            </li>
                                            <li id="menu-item-88"
                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-86 current_page_item menu-item-88">
                                                <a href="https://wpocean.com/wp/consultar/home-style-3/"
                                                    aria-current="page">Home Style 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-31"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
                                        <a href="https://wpocean.com/wp/consultar/about/">About</a>
                                    </li>
                                    <li id="menu-item-34"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-34">
                                        <a href="https://wpocean.com/wp/consultar/services/">Services</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-709"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-709">
                                                <a href="https://wpocean.com/wp/consultar/services/">Services Style
                                                    1</a>
                                            </li>
                                            <li id="menu-item-707"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-707">
                                                <a href="https://wpocean.com/wp/consultar/service-style-2/">Service
                                                    Style 2</a>
                                            </li>
                                            <li id="menu-item-718"
                                                class="menu-item menu-item-type-post_type menu-item-object-service menu-item-718">
                                                <a href="https://wpocean.com/wp/consultar/service/business-analysis/">Service
                                                    Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-36"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-36">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-713"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713">
                                                <a href="https://wpocean.com/wp/consultar/about/">About</a>
                                            </li>
                                            <li id="menu-item-715"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-715">
                                                <a href="https://wpocean.com/wp/consultar/services/">Services</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-856"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-856">
                                                        <a href="https://wpocean.com/wp/consultar/services/">Services
                                                            Style 1</a>
                                                    </li>
                                                    <li id="menu-item-855"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-855">
                                                        <a href="https://wpocean.com/wp/consultar/service-style-2/">Service
                                                            Style 2</a>
                                                    </li>
                                                    <li id="menu-item-857"
                                                        class="menu-item menu-item-type-post_type menu-item-object-service menu-item-857">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/service/business-analysis/">Service
                                                            Single</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-33"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-33">
                                                <a href="https://wpocean.com/wp/consultar/projects/">Projects</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-708"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708">
                                                        <a href="https://wpocean.com/wp/consultar/projects/">Projects
                                                            Style 1</a>
                                                    </li>
                                                    <li id="menu-item-705"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705">
                                                        <a href="https://wpocean.com/wp/consultar/project-style-2/">Project
                                                            Style 2</a>
                                                    </li>
                                                    <li id="menu-item-719"
                                                        class="menu-item menu-item-type-post_type menu-item-object-project menu-item-719">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/project/market-research/">Project
                                                            SIngle</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-711"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-711">
                                                <a href="https://wpocean.com/wp/consultar/pricing/">Pricing</a>
                                            </li>
                                            <li id="menu-item-714"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-714">
                                                <a href="https://wpocean.com/wp/consultar/projects/">Projects</a>
                                            </li>
                                            <li id="menu-item-710"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-710">
                                                <a href="https://wpocean.com/wp/consultar/testimonial/">Testimonial</a>
                                            </li>
                                            <li id="menu-item-712"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-712">
                                                <a href="https://wpocean.com/wp/consultar/contact/">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-852"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-852">
                                        <a href="https://wpocean.com/wp/consultar/shop/">Shop</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-854"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-854">
                                                <a href="https://wpocean.com/wp/consultar/shop/">Shop</a>
                                            </li>
                                            <li id="menu-item-853"
                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-853">
                                                <a href="https://wpocean.com/wp/consultar/product/faux-shearling-jacket/">Shop
                                                    Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-32"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32">
                                        <a href="https://wpocean.com/wp/consultar/contact/">Contact</a>
                                    </li>
                                    <li id="menu-item-35"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-35">
                                        <a href="https://wpocean.com/wp/consultar/blog/">Blog</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-716"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-716">
                                                <a href="https://wpocean.com/wp/consultar/blog/">Blog Default</a>
                                            </li>
                                            <li id="menu-item-847"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-847">
                                                <a href="https://wpocean.com/wp/consultar/blog/?sidebar=sidebar-left">Blog
                                                    Left Sidebar</a>
                                            </li>
                                            <li id="menu-item-848"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-848">
                                                <a href="https://wpocean.com/wp/consultar/blog/?sidebar=sidebar-hide">Blog
                                                    Full Width</a>
                                            </li>
                                            <li id="menu-item-717"
                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-717">
                                                <a
                                                    href="https://wpocean.com/wp/consultar/8-mistakes-first-time-founders-make-when-starting-a-business/">Blog
                                                    Details</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-849"
                                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-849">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/8-mistakes-first-time-founders-make-when-starting-a-business/">Blog
                                                            Details</a>
                                                    </li>
                                                    <li id="menu-item-850"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-850">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/8-mistakes-first-time-founders-make-when-starting-a-business/?sidebar=sidebar-left">Blog
                                                            Single Left Sidebar</a>
                                                    </li>
                                                    <li id="menu-item-851"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-851">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/8-mistakes-first-time-founders-make-when-starting-a-business/?sidebar=sidebar-hide">Blog
                                                            Single Full Width</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end of nav-collapse -->
                        </div>
                        <div class="col-lg-3 col-md-2 col-2">
                            <div class="header-search-form-wrapper header-right">
                                <div class="close-form">
                                    <a class="theme-btn" href="https://wpocean.com/wp/consultar/contact/">
                                        Free Consultation </a>
                                </div>
                                <div class="cart-search-contact">
                                    <button class="search-toggle-btn"><i
                                            class="fi flaticon-magnifiying-glass"></i></button>
                                    <div class="header-search-form">
                                        <form method="get" action="https://wpocean.com/wp/consultar/" class="form">
                                            <div>
                                                <input type="text" name="s" class="form-control"
                                                    placeholder="Search here">
                                                <button type="submit"><i
                                                        class="fi flaticon-magnifiying-glass"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of row -->
                </div><!-- end of container -->


            </nav>
        </header>
        <div data-elementor-type="wp-page" data-elementor-id="86" class="elementor elementor-86">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-609bde0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="609bde0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e3667d"
                        data-id="7e3667d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-459e68b elementor-widget elementor-widget-wpo-consultar_slider"
                                data-id="459e68b" data-element_type="widget"
                                data-widget_type="wpo-consultar_slider.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-hero-slider">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="slide-inner slide-bg-image"
                                                        data-background="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/slide-2-min.jpg">
                                                        <div class="container">
                                                            <div class="slide-content">
                                                                <div data-swiper-parallax="200"
                                                                    class="wpo-hero-title-top">
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
                                                            </div>
                                                        </div>
                                                    </div> <!-- end slide-inner -->
                                                </div> <!-- end swiper-slide -->
                                                <div class="swiper-slide">
                                                    <div class="slide-inner slide-bg-image"
                                                        data-background="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/slide-3-min.jpg">
                                                        <div class="container">
                                                            <div class="slide-content">
                                                                <div data-swiper-parallax="200"
                                                                    class="wpo-hero-title-top">
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
                                                                <div data-swiper-parallax="500" class="slide-btns"><a
                                                                        href="#" class="theme-btn">Get
                                                                        Started</a></div>
                                                            </div>
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-5c2a57f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="5c2a57f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a75219b"
                        data-id="a75219b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3618cd9 elementor-widget elementor-widget-wpo-consultar_feature"
                                data-id="3618cd9" data-element_type="widget"
                                data-widget_type="wpo-consultar_feature.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-features-section wpo-features-section-s2">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="wpo-features-item">
                                                        <div class="wpo-features-icon">
                                                            <div class="icon">
                                                                <img decoding="async" class="img-responsive default-icon"
                                                                    src="http://wpocean.com/wp/consultar/wp-content/uploads/2021/08/document.svg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="wpo-features-text">
                                                            <h2><a href="#" class="more">Strategy and
                                                                    Planning</a></h2>
                                                            <p>The strategic plan gives you a place to record your
                                                                mission, vision, and values, as well as your long-term
                                                                goals</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="wpo-features-item">
                                                        <div class="wpo-features-icon">
                                                            <div class="icon">
                                                                <img decoding="async" class="img-responsive default-icon"
                                                                    src="http://wpocean.com/wp/consultar/wp-content/uploads/2021/08/bar-graph.svg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="wpo-features-text">
                                                            <h2><a href="#" class="more">Market Analysis</a>
                                                            </h2>
                                                            <p>The strategic plan gives you a place to record your
                                                                mission, vision, and values, as well as your long-term
                                                                goals</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="wpo-features-item">
                                                        <div class="wpo-features-icon">
                                                            <div class="icon">
                                                                <img decoding="async" class="img-responsive default-icon"
                                                                    src="http://wpocean.com/wp/consultar/wp-content/uploads/2021/08/clipboard.svg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="wpo-features-text">
                                                            <h2><a href="#" class="more">Investment
                                                                    Strategy</a></h2>
                                                            <p>The strategic plan gives you a place to record your
                                                                mission, vision, and values, as well as your long-term
                                                                goals</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-5f6371c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="5f6371c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3681385"
                        data-id="3681385" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4332c65 elementor-widget elementor-widget-wpo-consultar_about"
                                data-id="4332c65" data-element_type="widget"
                                data-settings="{&quot;about_image&quot;:{&quot;url&quot;:&quot;http:\/\/wpocean.com\/wp\/consultar\/wp-content\/uploads\/2021\/09\/about-img.jpg&quot;,&quot;id&quot;:1102,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;}}"
                                data-widget_type="wpo-consultar_about.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-about-section about-section-s3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="about-thumnail">
                                                        <img decoding="async"
                                                            src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/09/about-img.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="wpo-about-text">
                                                        <span>About Us</span>
                                                        <h2>Most trusted <span>Business consulting</span> agency</h2>
                                                        <div class="about-content">
                                                            <p>We have 25 years of experience in this area, so you can
                                                                expect from us better services. A personal consultant
                                                                <b>helps individuals understand their strengths and
                                                                    weaknesses and how to use their attributes to
                                                                    leverage new employment or life opportunities</b>.
                                                                As a personal consultant.
                                                            </p>
                                                            <p>The consultant offers expertise that does not exist
                                                                within the company itself on the client's issues. The
                                                                consultant's role is <b>to solve these problems by
                                                                    formulating a diagnosis and appropriate
                                                                    recommendations</b></p>
                                                        </div>
                                                        <div class="about-button">
                                                            <a href="https://wpocean.com/wp/consultar/about/"
                                                                class="theme-btn">More About</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-5053f86 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="5053f86" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f282c53"
                        data-id="f282c53" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5e884ff elementor-widget elementor-widget-wpo-consultar_title"
                                data-id="5e884ff" data-element_type="widget"
                                data-widget_type="wpo-consultar_title.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-section-title">
                                        <span>Our Services</span>
                                        <h2>Explore Our Services</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4d5c69c elementor-widget elementor-widget-wpo-consultar_service"
                                data-id="4d5c69c" data-element_type="widget"
                                data-widget_type="wpo-consultar_service.default">
                                <div class="elementor-widget-container">

                                    <div class="wpo-service-section wpo-service-section-s3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="wpo-service-items wpo-service-slider owl-carousel">
                                                    <div class="wpo-service-item">
                                                        <div class="wpo-service-icon">
                                                            <i class="fi flaticon-lamp"></i>
                                                        </div>
                                                        <div class="wpo-service-text">
                                                            <h2>
                                                                <a
                                                                    href="https://wpocean.com/wp/consultar/service/strategy-and-planning/">
                                                                    Strategy and Planning </a>
                                                            </h2>
                                                            <p>How To Creat a Great Company With Strategy and </p>
                                                        </div>
                                                    </div>
                                                    <div class="wpo-service-item">
                                                        <div class="wpo-service-icon">
                                                            <i class="fi flaticon-edit"></i>
                                                        </div>
                                                        <div class="wpo-service-text">
                                                            <h2>
                                                                <a
                                                                    href="https://wpocean.com/wp/consultar/service/corporate-finance/">
                                                                    Corporate Finance </a>
                                                            </h2>
                                                            <p>How To Creat a Great Company With Strategy and </p>
                                                        </div>
                                                    </div>
                                                    <div class="wpo-service-item">
                                                        <div class="wpo-service-icon">
                                                            <i class="fi flaticon-startup"></i>
                                                        </div>
                                                        <div class="wpo-service-text">
                                                            <h2>
                                                                <a
                                                                    href="https://wpocean.com/wp/consultar/service/market-research/">
                                                                    Market Research </a>
                                                            </h2>
                                                            <p>How To Creat a Great Company With Strategy and </p>
                                                        </div>
                                                    </div>
                                                    <div class="wpo-service-item">
                                                        <div class="wpo-service-icon">
                                                            <i class="fi flaticon-business"></i>
                                                        </div>
                                                        <div class="wpo-service-text">
                                                            <h2>
                                                                <a
                                                                    href="https://wpocean.com/wp/consultar/service/business-analysis/">
                                                                    Business Analysis </a>
                                                            </h2>
                                                            <p>How To Creat a Great Company With Strategy and </p>
                                                        </div>
                                                    </div>
                                                    <div class="wpo-service-item">
                                                        <div class="wpo-service-icon">
                                                            <i class="fi flaticon-lamp"></i>
                                                        </div>
                                                        <div class="wpo-service-text">
                                                            <h2>
                                                                <a
                                                                    href="https://wpocean.com/wp/consultar/service/consumer-markets/">
                                                                    Consumer Markets </a>
                                                            </h2>
                                                            <p>How To Creat a Great Company With Strategy and </p>
                                                        </div>
                                                    </div>
                                                    <div class="wpo-service-item">
                                                        <div class="wpo-service-icon">
                                                            <i class="fi flaticon-startup"></i>
                                                        </div>
                                                        <div class="wpo-service-text">
                                                            <h2>
                                                                <a
                                                                    href="https://wpocean.com/wp/consultar/service/insurance/">
                                                                    Insurance Service </a>
                                                            </h2>
                                                            <p>How To Creat a Great Company With Strategy and </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1bb4d04 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="1bb4d04" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-882cd4c"
                        data-id="882cd4c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-08c8673 elementor-widget elementor-widget-wpo-consultar_title"
                                data-id="08c8673" data-element_type="widget"
                                data-widget_type="wpo-consultar_title.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-section-title">
                                        <span>Pricing</span>
                                        <h2>Our Pricing Packages</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6e4241d elementor-widget elementor-widget-wpo-consultar_pricing"
                                data-id="6e4241d" data-element_type="widget"
                                data-widget_type="wpo-consultar_pricing.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-pricing-section">
                                        <div class="container">
                                            <div class="wpo-pricing-items">
                                                <div class="row">
                                                    <div class="col col-lg-4 col-md-6 col-12">
                                                        <div class="wpo-pricing-item">
                                                            <div class="price-icon">
                                                                <i class="fi flaticon-medal"></i>
                                                            </div>
                                                            <div class="pricing-item">
                                                                <h4>Basic Pack</h4>
                                                                <div class="price">$49<span>/Month</span></div>
                                                            </div>
                                                            <div class="price-content">
                                                                <ul>
                                                                    <li>Strategy and Planning</li>
                                                                    <li>24/7 Support available</li>
                                                                    <li>Home Consulting System</li>
                                                                    <li>30-Day analytics &amp; insights</li>
                                                                    <li>Ultimate Features</li>
                                                                </ul>
                                                            </div>
                                                            <a class="price-btn"
                                                                href="https://wpocean.com/wp/consultar/contact/">Chose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                    <div class="col col-lg-4 col-md-6 col-12">
                                                        <div class="wpo-pricing-item">
                                                            <div class="price-icon">
                                                                <i class="fi flaticon-lamp"></i>
                                                            </div>
                                                            <div class="pricing-item">
                                                                <h4>Standard Pack</h4>
                                                                <div class="price">$95<span>/Month</span></div>
                                                            </div>
                                                            <div class="price-content">
                                                                <ul>
                                                                    <li>Strategy and Planning</li>
                                                                    <li>24/7 Support available</li>
                                                                    <li>Home Consulting System</li>
                                                                    <li>30-Day analytics &amp; insights</li>
                                                                    <li>Ultimate Features</li>
                                                                </ul>
                                                            </div>
                                                            <a class="price-btn"
                                                                href="https://wpocean.com/wp/consultar/contact/">Chose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                    <div class="col col-lg-4 col-md-6 col-12">
                                                        <div class="wpo-pricing-item">
                                                            <div class="price-icon">
                                                                <i class="fi flaticon-trophy"></i>
                                                            </div>
                                                            <div class="pricing-item">
                                                                <h4>Extended Pack</h4>
                                                                <div class="price">$175<span>/Monthly</span></div>
                                                            </div>
                                                            <div class="price-content">
                                                                <ul>
                                                                    <li>Strategy and Planning</li>
                                                                    <li>24/7 Support available</li>
                                                                    <li>Home Consulting System</li>
                                                                    <li>30-Day analytics &amp; insights</li>
                                                                    <li>Ultimate Features</li>
                                                                </ul>
                                                            </div>
                                                            <a class="price-btn"
                                                                href="https://wpocean.com/wp/consultar/contact/">Chose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-dd90bf7 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="dd90bf7" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d321a00"
                        data-id="d321a00" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d777d1b elementor-widget elementor-widget-wpo-consultar_funfact"
                                data-id="d777d1b" data-element_type="widget"
                                data-widget_type="wpo-consultar_funfact.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-fun-fact-section ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col col-xs-12">
                                                    <div class="wpo-fun-fact-grids clearfix">
                                                        <div class="grid">
                                                            <div class="info">
                                                                <h3><span class="odometer" data-count="500">00</span>+
                                                                </h3>
                                                                <p>Completed Cases</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <div class="info">
                                                                <h3><span class="odometer" data-count="25">00</span>+
                                                                </h3>
                                                                <p>Expert Consultants</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <div class="info">
                                                                <h3><span class="odometer" data-count="95">00</span>+
                                                                </h3>
                                                                <p>Client Satisfaction</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <div class="info">
                                                                <h3><span class="odometer" data-count="25">00</span>+
                                                                </h3>
                                                                <p>Award Winning</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2387a08 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="2387a08" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dcb54e9"
                        data-id="dcb54e9" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4e43b36 elementor-widget elementor-widget-wpo-consultar_title"
                                data-id="4e43b36" data-element_type="widget"
                                data-widget_type="wpo-consultar_title.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-section-title">
                                        <span>Recent Work</span>
                                        <h2>Recent Case Studies</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-50d4d78 elementor-widget elementor-widget-wpo-consultar_project"
                                data-id="50d4d78" data-element_type="widget"
                                data-widget_type="wpo-consultar_project.default">
                                <div class="elementor-widget-container">

                                    <div class="wpo-gallery-section ">
                                        <div class="sortable-gallery">
                                            <div class="wpo-gallery-container">
                                                <div class="grid">
                                                    <div class="wpo-gallery-item">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/project/consumer-markets/">
                                                            <img decoding="async" class="img img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-6.jpg"
                                                                alt="">
                                                            <div class="wpo-gallery-text">
                                                                <h3>Consumer Markets</h3><i class="ti-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/item-->
                                                <div class="grid">
                                                    <div class="wpo-gallery-item">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/project/investment-strategy/">
                                                            <img decoding="async" class="img img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-5.jpg"
                                                                alt="">
                                                            <div class="wpo-gallery-text">
                                                                <h3>Investment Strategy</h3><i class="ti-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/item-->
                                                <div class="grid">
                                                    <div class="wpo-gallery-item">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/project/business-analysis/">
                                                            <img decoding="async" class="img img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-4.jpg"
                                                                alt="">
                                                            <div class="wpo-gallery-text">
                                                                <h3>Business Analysis</h3><i class="ti-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/item-->
                                                <div class="grid">
                                                    <div class="wpo-gallery-item">
                                                        <a
                                                            href="https://wpocean.com/wp/consultar/project/market-research/">
                                                            <img decoding="async" class="img img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-3.jpg"
                                                                alt="">
                                                            <div class="wpo-gallery-text">
                                                                <h3>Market Research</h3><i class="ti-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/item-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c00fd3d elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="c00fd3d" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a28da63"
                        data-id="a28da63" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1bb3eaf elementor-widget elementor-widget-wpo-consultar_title"
                                data-id="1bb3eaf" data-element_type="widget"
                                data-widget_type="wpo-consultar_title.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-section-title">
                                        <span>Testimonials</span>
                                        <h2>What People say’s About us</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-59a6a3c elementor-widget elementor-widget-wpo-consultar_testimonial"
                                data-id="59a6a3c" data-element_type="widget"
                                data-widget_type="wpo-consultar_testimonial.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-testimonial-section">
                                        <div class="container">
                                            <div class="wpo-testimonial-items wpo-testimonial-slider owl-carousel">
                                                <div class="wpo-testimonial-item">
                                                    <div class="wpo-testimonial-avatar">
                                                        <img decoding="async" class="img-responsive"
                                                            src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/img-2-min.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="wpo-testimonial-text">
                                                        <p>Love the design, and it&#039;s very flexible to edit and
                                                            change the design. The customer support for this item has
                                                            been great. The support has been prompt and effective. In
                                                            addition to customer support.</p>
                                                        <div class="wpo-testimonial-text-btm">
                                                            <h3>Jenny Watson</h3><span>Business advisor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpo-testimonial-item">
                                                    <div class="wpo-testimonial-avatar">
                                                        <img decoding="async" class="img-responsive"
                                                            src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/img-3-min.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="wpo-testimonial-text">
                                                        <p>Love the design, and it&#039;s very flexible to edit and
                                                            change the design. The customer support for this item has
                                                            been great. The support has been prompt and effective. In
                                                            addition to customer support.</p>
                                                        <div class="wpo-testimonial-text-btm">
                                                            <h3>Harry Abraham</h3><span>Business advisor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpo-testimonial-item">
                                                    <div class="wpo-testimonial-avatar">
                                                        <img decoding="async" class="img-responsive"
                                                            src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/img-1-min.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="wpo-testimonial-text">
                                                        <p>Love the design, and it&#039;s very flexible to edit and
                                                            change the design. The customer support for this item has
                                                            been great. The support has been prompt and effective. In
                                                            addition to customer support.
                                                        </p>
                                                        <div class="wpo-testimonial-text-btm">
                                                            <h3>Ron Di-Sosa</h3><span>Digital Marketer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4ffbe6f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="4ffbe6f" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c6edf3c"
                        data-id="c6edf3c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-661455d elementor-widget elementor-widget-wpo-consultar_cta"
                                data-id="661455d" data-element_type="widget"
                                data-widget_type="wpo-consultar_cta.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-support-section">
                                        <div class="container">
                                            <div class="wpo-support-wrapper">
                                                <div class="wpo-support-text">
                                                    <h2>We work with change-oriented executives to help You make better
                                                        decisions.</h2>
                                                    <p>Please create a ticket to our support forum, a great place to
                                                        learn, share, and troubleshoot. Get started. We advise global
                                                        leaders on their most critical issues &amp; opportunities:
                                                        strategy, marketing, organization.</p>
                                                </div>
                                                <div class="wpo-support-btn">
                                                    <a href="https://wpocean.com/wp/consultar/contact/"
                                                        class="wpo-theme-btn">Contact with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-0f6905d elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="0f6905d" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5eddf1a"
                        data-id="5eddf1a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e8ce5d7 elementor-widget elementor-widget-wpo-consultar_title"
                                data-id="e8ce5d7" data-element_type="widget"
                                data-widget_type="wpo-consultar_title.default">
                                <div class="elementor-widget-container">
                                    <div class="wpo-section-title">
                                        <span>Recent News</span>
                                        <h2>Our Latest Insights</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fe443c9 elementor-widget elementor-widget-wpo-consultar_blog"
                                data-id="fe443c9" data-element_type="widget"
                                data-widget_type="wpo-consultar_blog.default">
                                <div class="elementor-widget-container">

                                    <div class="wpo-blog-section">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col col-lg-4 col-md-6 col-12">
                                                    <div class="wpo-blog-item">
                                                        <div class="wpo-blog-img">
                                                            <img decoding="async" class="img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/list-post-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="wpo-blog-content">
                                                            <div class="wpo-blog-content-top">
                                                                <div class="wpo-blog-thumb">
                                                                    <span><a
                                                                            href="https://wpocean.com/wp/consultar/tag/corporate/">Corporate</a></span>
                                                                </div>
                                                                <h2><a
                                                                        href="https://wpocean.com/wp/consultar/8-mistakes-first-time-founders-make-when-starting-a-business/">8
                                                                        Mistakes First-Time Founders Make When Starting
                                                                        a Business.</a></h2>
                                                            </div>
                                                            <div class="wpo-blog-content-btm">
                                                                <div class="wpo-blog-content-btm-left">
                                                                    <div class="wpo-blog-content-btm-left-img">
                                                                        <img decoding="async"
                                                                            src="https://secure.gravatar.com/avatar/dce76bfdf44bb6e04bcf83ddc77a257b1d9896d993afc950f6d92b13cedfbc00?s=96&#038;d=mm&#038;r=g"
                                                                            alt />
                                                                    </div>
                                                                    <div class="wpo-blog-content-btm-left-text">
                                                                        <h4>
                                                                            Biry Konal </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="wpo-blog-content-btm-right">
                                                                    <span>August 14, 2021</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-lg-4 col-md-6 col-12">
                                                    <div class="wpo-blog-item">
                                                        <div class="wpo-blog-img">
                                                            <img decoding="async" class="img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/post-imag-2-min.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="wpo-blog-content">
                                                            <div class="wpo-blog-content-top">
                                                                <div class="wpo-blog-thumb">
                                                                    <span><a
                                                                            href="https://wpocean.com/wp/consultar/tag/business/">Business</a></span>
                                                                </div>
                                                                <h2><a
                                                                        href="https://wpocean.com/wp/consultar/3-of-the-worst-ways-small-businesses-waste-money-on-marketing/">3
                                                                        of the Worst Ways Small Businesses Waste Money
                                                                        on Marketing</a></h2>
                                                            </div>
                                                            <div class="wpo-blog-content-btm">
                                                                <div class="wpo-blog-content-btm-left">
                                                                    <div class="wpo-blog-content-btm-left-img">
                                                                        <img decoding="async"
                                                                            src="https://secure.gravatar.com/avatar/c7413a35bd524968a4e0e42f29b1abd3b4abedd33c145d981e185d5dc0f62eb2?s=96&#038;d=mm&#038;r=g"
                                                                            alt />
                                                                    </div>
                                                                    <div class="wpo-blog-content-btm-left-text">
                                                                        <h4>
                                                                            Josna Bothy </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="wpo-blog-content-btm-right">
                                                                    <span>August 14, 2021</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-lg-4 col-md-6 col-12">
                                                    <div class="wpo-blog-item">
                                                        <div class="wpo-blog-img">
                                                            <img decoding="async" class="img-responsive"
                                                                src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/list-post-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="wpo-blog-content">
                                                            <div class="wpo-blog-content-top">
                                                                <div class="wpo-blog-thumb">
                                                                    <span><a
                                                                            href="https://wpocean.com/wp/consultar/tag/consulting/">Consulting</a></span>
                                                                </div>
                                                                <h2><a
                                                                        href="https://wpocean.com/wp/consultar/good-advice-tips-from-successful-small-business-owners/">Good
                                                                        Advice: Tips From Successful Small Business
                                                                        Owners</a></h2>
                                                            </div>
                                                            <div class="wpo-blog-content-btm">
                                                                <div class="wpo-blog-content-btm-left">
                                                                    <div class="wpo-blog-content-btm-left-img">
                                                                        <img decoding="async"
                                                                            src="https://secure.gravatar.com/avatar/c7413a35bd524968a4e0e42f29b1abd3b4abedd33c145d981e185d5dc0f62eb2?s=96&#038;d=mm&#038;r=g"
                                                                            alt />
                                                                    </div>
                                                                    <div class="wpo-blog-content-btm-left-text">
                                                                        <h4>
                                                                            Josna Bothy </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="wpo-blog-content-btm-right">
                                                                    <span>August 14, 2021</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-pagination-wrap">
                                                    <div class="paginations"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        <footer class="wpo-site-footer clearfix">
            <!-- Footer Widgets -->
            <div class="wpo-upper-footer">
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="separator"></div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class=" widget text-widget">
                                    <div class="widget about-widget ">
                                        <div class="logo widget-title">
                                            <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/footer-logo.svg"
                                                alt="">
                                        </div>
                                        <p>Professional And Dedicated Consulting Solutions Facilitating client learning
                                            that is, teaching clients how to resolve similar problems in the future
                                        </p>
                                        <div class="social-icons">
                                            <ul>
                                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end widget -->
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="wpo-service-link-widget widget text-widget">
                                    <div class="widget-title">
                                        <h3>Contact </h3>
                                    </div>
                                    <div class="contact-ft">
                                        <ul>
                                            <li><i class="flaticon-location"></i>7 Green Lake Street Crawfordsville, IN
                                                47933</li>
                                            <li><i class="flaticon-phone-call"></i>+1 800 123 456 789</li>
                                            <li><i class="flaticon-send"></i>Consultar@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end widget -->
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class=" widget link-widget">
                                    <div class="widget-title">
                                        <h3>Our Services</h3>
                                    </div>
                                    <div class=" nav-notenabled-child">
                                        <div class="menu-footer-menu-container">
                                            <ul id="menu-footer-menu-1" class="menu -sidenav">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-655">
                                                    <a href="https://wpocean.com/wp/consultar/service/business-analysis/">Business
                                                        Analysis</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-654">
                                                    <a href="https://wpocean.com/wp/consultar/service/consumer-markets/">Consumer
                                                        Markets</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-656">
                                                    <a href="https://wpocean.com/wp/consultar/service/market-research/">Market
                                                        Research</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-658">
                                                    <a
                                                        href="https://wpocean.com/wp/consultar/service/strategy-and-planning/">Strategy
                                                        and Planning</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-657">
                                                    <a href="https://wpocean.com/wp/consultar/service/corporate-finance/">Corporate
                                                        Finance</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end widget -->
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class=" widget footer-post-widget">
                                    <div class="widget-title">
                                        <h3>Our Projects</h3>
                                    </div>
                                    <div class="posts">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="https://wpocean.com/wp/consultar/project/consumer-markets/">
                                                    <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-6-85x85.jpg"
                                                        alt="">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://wpocean.com/wp/consultar/project/investment-strategy/">
                                                    <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-5-85x85.jpg"
                                                        alt="">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://wpocean.com/wp/consultar/project/business-analysis/">
                                                    <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-4-85x85.jpg"
                                                        alt="">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://wpocean.com/wp/consultar/project/market-research/">
                                                    <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-3-85x85.jpg"
                                                        alt="">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://wpocean.com/wp/consultar/project/corporate-finance/">
                                                    <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-2-85x85.jpg"
                                                        alt="">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://wpocean.com/wp/consultar/project/digital-analysis/">
                                                    <img src="https://wpocean.com/wp/consultar/wp-content/uploads/2021/08/project-1-85x85.jpg"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div> <!-- end widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widgets -->
            <div class="wpo-lower-footer  has-not-copyright text-center">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <div class="col col-xs-12">
                            <p>&copy; Copyright 2025 | <a href="https://wpocean.com/wp/consultar">Consultar -
                                    Consulting WordPress Theme</a> | All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
    </div><!--consultar-theme-wrapper -->
@endsection
