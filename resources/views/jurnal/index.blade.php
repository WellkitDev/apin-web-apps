@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Jurnal</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Jurnal</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->

<!-- start of wpo-jurnal-card-section -->
<section class="wpo-gallery-section wpo-gallery-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-gallery-container">
                    <div class="col-lg-4 col-md-6 col-12 grid">
                        <div class="tm-portfolio mt-30 wow fadeInUp">
                            <div class="wpo-gallery-item">
                                <a href="{{ url('/blog/gallery/detail') }}">
                                    <img src="https://padangtekno.com/cover/cover1.jpg" alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Digital Analysis</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="tm-portfolio-content">
                                <h6><a target="_blank" href="https://jurnal.padangtekno.com/index.php/jocstec">Journal Of Computer Science And Technology</a></h6>
                                <p>ISSN : <a href="https://issn.brin.go.id/terbit?search=2985-4318" target="_blank">2985-4318</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 grid">
                        <div class="tm-portfolio mt-30 wow fadeInUp">
                            <div class="wpo-gallery-item">
                                <a href="{{ url('/blog/gallery/detail') }}">
                                    <img src="https://padangtekno.com/cover/cover1.jpg" alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Digital Analysis</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="tm-portfolio-content">
                                <h6><a target="_blank" href="https://jurnal.padangtekno.com/index.php/jocstec">Journal Of Computer Science And Technology</a></h6>
                                <p>ISSN : <a href="https://issn.brin.go.id/terbit?search=2985-4318" target="_blank">2985-4318</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 grid">
                        <div class="tm-portfolio mt-30 wow fadeInUp">
                            <div class="wpo-gallery-item">
                                <a href="{{ url('/blog/gallery/detail') }}">
                                    <img src="https://padangtekno.com/cover/cover1.jpg" alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Digital Analysis</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="tm-portfolio-content">
                                <h6><a target="_blank" href="https://jurnal.padangtekno.com/index.php/jocstec">Journal Of Computer Science And Technology</a></h6>
                                <p>ISSN : <a href="https://issn.brin.go.id/terbit?search=2985-4318" target="_blank">2985-4318</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 grid">
                        <div class="tm-portfolio mt-30 wow fadeInUp">
                            <div class="wpo-gallery-item">
                                <a href="{{ url('/blog/gallery/detail') }}">
                                    <img src="https://padangtekno.com/cover/cover1.jpg" alt class="img img-responsive">
                                    <div class="wpo-gallery-text">
                                        <h3>Digital Analysis</h3>
                                        <i class="ti-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="tm-portfolio-content">
                                <h6><a target="_blank" href="https://jurnal.padangtekno.com/index.php/jocstec">Journal Of Computer Science And Technology</a></h6>
                                <p>ISSN : <a href="https://issn.brin.go.id/terbit?search=2985-4318" target="_blank">2985-4318</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-jurnal-card-section -->

@endsection