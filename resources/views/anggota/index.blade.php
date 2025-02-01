@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Daftar Anggota</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Anggota</span></li>
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
                    <div class="card mb-4">
                        <div class="card mb-2">
                            <div class="card-header">
                               <h5>Ditampilkan 3 dari 778 data</h5> 
                            </div>
                        </div>
                        <div class="members">
                            <div class="card-body button-line mt-2">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="card card-no-border">
                                            <img src="https://member.relawanjurnal.id/appdata/images/wgGgG2vNSq3voSl5kealS365AyYyYyYyY.jpg" alt="" srcset="">
                                            <div class="card-body text-center">
                                                <a class="btn btn-primary"  href="{{ url('/anggota/detail') }}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>A. Nururrochman Hidayatulloh</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>
                                                    1616340754
                                                    <br>
                                                    Yogyakarta
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    Profesi
                                                    <br>
                                                    Dosen
                                                </p>
                                                <p>
                                                    Asal Intitusi
                                                    <br>
                                                    Universitas Ahmad Dahlan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="members">
                            <div class="card-body button-line mt-2">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="card card-no-border">
                                            <img src="https://member.relawanjurnal.id/appdata/images/wgGgG2vNSq3voSl5kealS365AyYyYyYyY.jpg" alt="" srcset="">
                                            <div class="card-body text-center">
                                                <a class="btn btn-primary"  href="{{ url('/anggota/detail') }}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>A. Nururrochman Hidayatulloh</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>
                                                    1616340754
                                                    <br>
                                                    Yogyakarta
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    Profesi
                                                    <br>
                                                    Dosen
                                                </p>
                                                <p>
                                                    Asal Intitusi
                                                    <br>
                                                    Universitas Ahmad Dahlan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="members">
                            <div class="card-body button-line mt-2">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="card card-no-border">
                                            <img src="https://member.relawanjurnal.id/appdata/images/wgGgG2vNSq3voSl5kealS365AyYyYyYyY.jpg" alt="" srcset="">
                                            <div class="card-body text-center">
                                                <a class="btn btn-primary"  href="{{ url('/anggota/detail') }}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>A. Nururrochman Hidayatulloh</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>
                                                    1616340754
                                                    <br>
                                                    Yogyakarta
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    Profesi
                                                    <br>
                                                    Dosen
                                                </p>
                                                <p>
                                                    Asal Intitusi
                                                    <br>
                                                    Universitas Ahmad Dahlan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <div class="blog-sidebar">
                    
                    <div class="widget search-widget">
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Search Post..">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Blockchain Consulting <span>5</span></a></li>
                            <li><a href="#">Commodity Traders <span>7</span></a></li>
                            <li><a href="#">Financial Planning <span>3</span></a></li>
                            <li><a href="#">Investment Consulting <span>6</span></a></li>
                            <li><a href="#">Online Banking Consulting <span>2</span></a></li>
                            <li><a href="#">Personal Consulting Advice <span>8</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-blog-pg-section -->
@endsection