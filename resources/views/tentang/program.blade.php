@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Program</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>Program</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- start of wpo-service-section -->
    <section class="wpo-service-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-service-item">
                        <div class="wpo-service-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/clipboard.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-service-text">
                            <h2><a href="{{ '/tentang/program/detail' }}">Strategy and Planning</a></h2>
                            <p>One way to categorize the activities is in terms of the professional’s area of expertise such
                                as competitive analysis, corporate strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-service-item">
                        <div class="wpo-service-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/briefcase.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-service-text">
                            <h2><a href="{{ '/tentang/program/detail' }}">Corporate Finance</a></h2>
                            <p>One way to categorize the activities is in terms of the professional’s area of expertise such
                                as competitive analysis, corporate strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-service-item">
                        <div class="wpo-service-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/chart.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-service-text">
                            <h2><a href="{{ '/tentang/program/detail' }}">Market Research</a></h2>
                            <p>One way to categorize the activities is in terms of the professional’s area of expertise such
                                as competitive analysis, corporate strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-service-item">
                        <div class="wpo-service-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/badge.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-service-text">
                            <h2><a href="{{ '/tentang/program/detail' }}">Business Analysis</a></h2>
                            <p>One way to categorize the activities is in terms of the professional’s area of expertise such
                                as competitive analysis, corporate strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-service-item">
                        <div class="wpo-service-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/goal.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-service-text">
                            <h2><a href="{{ '/tentang/program/detail' }}">Consumer Markets</a></h2>
                            <p>One way to categorize the activities is in terms of the professional’s area of expertise such
                                as competitive analysis, corporate strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="wpo-service-item">
                        <div class="wpo-service-icon">
                            <div class="icon">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/icon/handshake.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="wpo-service-text">
                            <h2><a href="{{ '/tentang/program/detail' }}">Insurance</a></h2>
                            <p>One way to categorize the activities is in terms of the professional’s area of expertise such
                                as competitive analysis, corporate strategy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-service-section -->
@endsection
