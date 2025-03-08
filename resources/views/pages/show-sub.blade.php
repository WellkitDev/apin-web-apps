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
    <section class="wpo-service-single-section section-padding">
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
    </section>
    <!-- end of wpo-about-section -->
    
@endsection
