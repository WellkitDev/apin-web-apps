@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>Contact Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start wpo-contact-pg-section -->
    <section class="wpo-contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1">
                    <div class="office-info">
                        <div class="row">
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/home.svg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Address</h2>
                                        <p>lrg. Baitul Muslim RT 039 RW 000 Simpang III Sipin, Kota Baru, Kota Jambi Jambi,
                                            36126, Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/mail-2.svg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Email Us</h2>
                                        <p>Apin.offcl@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/app.svg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Call Now</h2>
                                        <p>+62 811 7455 211</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-contact-pg-section -->

    <!--  start wpo-contact-map -->
    <section class="wpo-contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="wpo-contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.193073607063!2d103.59545597418695!3d-1.6354431983493474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258900159d2df5%3A0x2f27c259f4cb791a!2sNawalaedu!5e0!3m2!1sen!2sid!4v1747877381539!5m2!1sen!2sid"
                allowfullscreen></iframe>
        </div>
    </section>
    <!-- end wpo-contact-map -->
@endsection
