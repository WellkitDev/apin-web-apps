@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Layanan Strategy and Planning</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>Layanan</span></li>
                            <li><span>Detail Layanan</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start of wpo-service-single-section -->
    <section class="wpo-service-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="wpo-service-single-wrap">
                        <div class="wpo-service-single-content">
                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/service-single/1.jpg"
                                alt="">
                            <div class="wpo-service-single-content-des">
                                <h2>How To Creat a Great Company With Strategy and Planning</h2>
                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                    was born and I will give you a complete account of the system, and expound the actual
                                    teachings of the great explorer of the truth, the master-builder of human happiness. No
                                    one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                    those who do not know how to pursue pleasure rationally encounter consequences that are
                                    extremely painful. </p>
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                                    because it is pain, but because occasionally circumstances occur in which toil and pain
                                    can procure him some great pleasure. To take a trivial example, which of us ever
                                    undertakes laborious physical exercise.</p>
                                <div class="wpo-service-single-sub-img">
                                    <ul>
                                        <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/service-single/2.jpg"
                                                alt=""></li>
                                        <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/service-single/3.jpg"
                                                alt=""></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="wpo-solutions-section">
                            <h2>Our Solutions</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-solutions-item">
                                        <div class="wpo-solutions-icon">
                                            <div class="icon">
                                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/document.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="wpo-solutions-text">
                                            <h2><a href="service-single.html">Business Planning</a></h2>
                                            <p>The lower-numbered purposes are better understood and practiced </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-solutions-item">
                                        <div class="wpo-solutions-icon">
                                            <div class="icon">
                                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/bar-graph.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="wpo-solutions-text">
                                            <h2><a href="service-single.html">Market Analysis</a></h2>
                                            <p>The lower-numbered purposes are better understood and practiced </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-solutions-item">
                                        <div class="wpo-solutions-icon">
                                            <div class="icon">
                                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/clipboard.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="wpo-solutions-text">
                                            <h2><a href="service-single.html">Investment Strategy</a></h2>
                                            <p>The lower-numbered purposes are better understood and practiced </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-benefits-section">
                            <h2>Benefits</h2>
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="wpo-benefits-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h3 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Market research on our global panel with support from our experts.
                                                    </button>
                                                </h3>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum
                                                            exercitationem pariatur iure nemo esse repellendus est quo
                                                            recusandae. Delectus, maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h3 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Planning can help alleviate workplace stress and increase
                                                        productivity.
                                                    </button>
                                                </h3>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum
                                                            exercitationem pariatur iure nemo esse repellendus est quo
                                                            recusandae. Delectus, maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h3 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Those who experiment the most, are able to innovate the best.
                                                    </button>
                                                </h3>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum
                                                            exercitationem pariatur iure nemo esse repellendus est quo
                                                            recusandae. Delectus, maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h3 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Understand Your Problem, You must understand the issue.
                                                    </button>
                                                </h3>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum
                                                            exercitationem pariatur iure nemo esse repellendus est quo
                                                            recusandae. Delectus, maxime.</p>
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
                <div class="col-lg-4 col-md-8">
                    <div class="wpo-single-sidebar">
                        <div class="wpo-service-widget widget">
                            <h2>All Services</h2>
                            <ul>
                                <li><a href="#">Strategy and Planning</a></li>
                                <li><a href="#">Corporate Finance</a></li>
                                <li><a href="#">Market Research</a></li>
                                <li><a href="#">Business Analysis</a></li>
                                <li><a href="#">Consumer Markets</a></li>
                                <li><a href="#">Insurance</a></li>
                            </ul>
                        </div>
                        <div class="wpo-newsletter-widget widget">
                            <h2>Newsletter</h2>
                            <p>Join 20,000 Sabscribers!</p>
                            <form class="form">
                                <input type="text" placeholder="Email Address">
                                <button type="submit">Sign Up</button>
                            </form>
                            <span>By signing up you agree to our <a href="#">Privecy Policy</a></span>
                        </div>
                        <div class="wpo-instagram-widget widget">
                            <h2>Instagram Shot</h2>

                            <ul>
                                <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/7.jpg"
                                        alt=""></li>
                                <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/8.jpg"
                                        alt=""></li>
                                <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/9.jpg"
                                        alt=""></li>
                                <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/10.jpg"
                                        alt=""></li>
                                <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/11.jpg"
                                        alt=""></li>
                                <li><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/12.jpg"
                                        alt=""></li>
                            </ul>
                        </div>

                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan lacus vel facilisis. </p>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-service-single-section -->
@endsection
