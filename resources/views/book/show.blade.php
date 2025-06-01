@extends('layouts.apps')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Buku</h2>
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
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                @foreach ($books as $item)
                    <div class="col-6">
                        <div class="wpo-blog-pg-wrap association wow fadeInUp">
                            <table class="table table-responsive table-striped ">
                                <tbody>
                                    <tr>
                                        <td style="padding: 15px" width="150">
                                            <a href="{{ route('buku.detail', ['slug' => $item->slug]) }}">
                                                <img src="{{ asset($item->cover) }}" alt="" width="200px">
                                            </a>
                                        </td>
                                        <td style="padding: 15px">
                                            <div class="col-md-10 text-left">
                                                <h4><a
                                                        href="{{ route('buku.detail', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                                </h4>
                                                <p>ISBN: <b>{{ $item->isbn != null ? $item->isbn : '-' }}</b></p>
                                                <p>Deskripsi:</p>
                                                <p>
                                                    {{ Str::limit(strip_tags($item->description), 150) }}
                                                </p>
                                                <p><a href="{{ route('buku.detail', ['slug' => $item->slug]) }}">Detail</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Menampilkan link pagination -->
            <div>
                {{ $books->links() }}
            </div>
        </div>
    </section>
@endsection
