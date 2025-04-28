@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Artikel</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>Artikel</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-4.jpg" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                    <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                    <li><i class="fi flaticon-calendar"></i> 24 Jun 2021</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3><a href="blog-single.html">8 Mistakes Founders Make When Starting a Business.</a></h3>
                                <p>Consulting is a great career path if you want to build a broad skill set that includes
                                    everything from critical thinking and strategic planning to communications. If you love
                                    rising to a challenge.</p>
                                <a href="blog-single.html" class="read-more">READ MORE...</a>
                            </div>
                        </div>
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-4.jpg" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                    <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                    <li><i class="fi flaticon-calendar"></i> 24 Jun 2021</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3><a href="blog-single.html">8 Mistakes Founders Make When Starting a Business.</a></h3>
                                <p>Consulting is a great career path if you want to build a broad skill set that includes
                                    everything from critical thinking and strategic planning to communications. If you love
                                    rising to a challenge.</p>
                                <a href="blog-single.html" class="read-more">READ MORE...</a>
                            </div>
                        </div>
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fi ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fi ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    @include('blog.aricle-sidebar')
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->
@endsection
