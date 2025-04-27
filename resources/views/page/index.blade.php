@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $page->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>{{ $page->title }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start of wpo-about-section -->
    @if ($page->pageItems->isEmpty())
        <section class="wpo-about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-wrap">
                            <div class="wpo-about-img">
                                <img src="{{ $page->image }}" alt="">
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
                                {!! $page->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="wpo-service-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="wpo-service-single-wrap">
                            <div class="wpo-service-single-content">
                                <img src="{{ $page->image }}" alt="">
                                <div class="wpo-service-single-content-des">
                                    <div class="">
                                        {!! $page->description !!}
                                    </div>
                                </div>
                            </div>

                            <div class="wpo-solutions-section">
                                {{-- <h2>Our Solutions</h2> --}}
                                <div class="row">
                                    @foreach ($page->pageItems as $item)
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="wpo-solutions-item">
                                                <div class="wpo-solutions-icon">
                                                    <div class="icon">
                                                        <img src="{{ $item->image ?? 'https://wpocean.com/html/tf/consultar-live/assets/images/icon/document.svg' }}"
                                                            alt="{{ $item->title }}">
                                                    </div>
                                                </div>
                                                <div class="wpo-solutions-text">
                                                    <h2><a
                                                            href="{{ url($page->slug . '/' . $item->slug) }}">{{ $item->title }}</a>
                                                    </h2>
                                                    {{-- <p>{{ $item->description ?? 'The lower-numbered purposes are better understood and practiced' }}</p> --}}
                                                    <p>{{ Str::limit(strip_tags($item->description), 120) ?? 'The lower-numbered purposes are better understood and practiced' }}
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    {{-- @if ($page->pageItems->isNotEmpty())

    @endif --}}
    <!-- end of wpo-about-section -->

@endsection
