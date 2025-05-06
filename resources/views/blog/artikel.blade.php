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
                        @foreach ($article_data as $item)
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="{{ $item->article_img }}" alt>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Admin</a> </li>
                                        <li><i class="ti-eye"></i> viewers
                                            {{ $item->visitors }} </li>
                                        <li><i class="fi flaticon-calendar"></i>
                                            {{ $item->created_at->translatedFormat('j, F Y') }}</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a
                                            href="{{ route('article.detail', ['slug' => $item->slug]) }}">{{ $item->article_title }}</a>
                                    </h3>
                                    <p>{{ Str::limit(strip_tags($item->article_detail), 200) }}</p>
                                    <a href="{{ route('article.detail', ['slug' => $item->slug]) }}" class="read-more">READ
                                        MORE...</a>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-wrapper pagination-wrapper-left">
                            {{ $article_data->links('vendor.pagination.bootstrap-5') }}
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
