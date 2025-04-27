@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $subPage->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>{{ $subPage->title }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start of wpo-about-section -->
    <section class="wpo-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img">
                            <img src="{{ $subPage->image }}" alt="">
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
                            {!! $subPage->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="wpo-service-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="wpo-service-single-wrap">
                        <div class="wpo-service-single-content">
                            <img src="{{ $subPage->image }}"
                                alt="">
                            <div class="wpo-service-single-content-des">
                                <div class="">
                                    {!! $subPage->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- end of wpo-about-section -->
@endsection
