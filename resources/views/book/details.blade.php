@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Details</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><span>Buku</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->


    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <h2>{{ $titles->title }}</h2>
                            <p style="text-align:justify">{{ $titles->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="">
                        <div class="mb-3">
                            <img src="{{ asset($titles->cover) }}" width="350" alt>
                        </div>
                        <div class="">
                            <ul>
                                <li>ISBN: <b>{{ $titles->isbn != null ? $titles->isbn : '-' }}</b></li>
                                <li>Halaman: <b>{{ $titles->halaman != null ? $titles->halaman : '-' }}</b></li>
                                <li>Author: <b>{{ $titles->author != null ? $titles->author : '-' }}</b></li>
                                <li>Terbit:
                                    <b>{{ $titles->publish_date != null ? $titles->publish_date : '-' }}</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->
@endsection
