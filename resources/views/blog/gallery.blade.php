@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Gallery</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Blog</span></li>
                        <li><span>Gallery</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->

<!--Start wpo-project-section-->  
<section class="wpo-gallery-section wpo-gallery-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-gallery-container">
                    <div class="grid">
                        <div class="wpo-gallery-item">
                            <a href="{{ url('/blog/gallery/detail') }}">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-6.jpg" alt class="img img-responsive">
                                <div class="wpo-gallery-text">
                                    <h3>Digital Analysis</h3>
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="wpo-gallery-item">
                            <a href="{{ url('/blog/gallery/detail') }}">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-7.jpg" alt class="img img-responsive">
                                <div class="wpo-gallery-text">
                                    <h3>Corporate Finance</h3>
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="wpo-gallery-item">
                            <a href="{{ url('/blog/gallery/detail') }}">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-8.jpg" alt class="img img-responsive">
                                <div class="wpo-gallery-text">
                                    <h3>Market Research</h3>
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="wpo-gallery-item">
                            <a href="{{ url('/blog/gallery/detail') }}">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-9.jpg" alt class="img img-responsive">
                                <div class="wpo-gallery-text">
                                    <h3>Business Analysis</h3>
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div>                         
                    </div>
                    <div class="grid">
                        <div class="wpo-gallery-item">
                            <a href="{{ url('/blog/gallery/detail') }}">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-10.jpg" alt class="img img-responsive">
                                <div class="wpo-gallery-text">
                                    <h3>Investment Strategy</h3>
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div> 
                    </div>
                    <div class="grid">
                        <div class="wpo-gallery-item">
                            <a href="{{ url('/blog/gallery/detail') }}">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/gallery/img-11.jpg" alt class="img img-responsive">
                                <div class="wpo-gallery-text">
                                    <h3>Consumer Markets</h3>
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</section>
<!--End wpo-project-section-->
@endsection