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
                            <li><span>Artikel</span></li>
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
                            <div class="entry-media">
                                <img src="{{ $article_post->article_img }}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a href="#">Admin</a> </li>
                                    <li><i class="ti-eye"></i> viewers {{ $article_post->visitors }}</li>
                                    <li><i class="fi flaticon-calendar"></i>
                                        {{ $article_post->created_at->translatedFormat('j, F Y') }}</li>
                                </ul>
                            </div>
                            <h2>{{ $article_post->article_title }}</h2>
                            {!! $article_post->article_detail !!}

                        </div>

                        <div class="tag-share clearfix">
                            <div class="tag">
                                <span>Share: </span>
                                <ul>
                                    @foreach ($tag_article as $keyword)
                                        <li><a href="#">{{ $keyword->tag_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->
                        <div class="tag-share-s2 clearfix">
                            <div class="tag">
                                <span>Share: </span>
                                <ul>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">linkedin</a></li>
                                    <li><a href="#">pinterest</a></li>
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->
                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    @include('blog.aricle-sidebar')
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->
@endsection
