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
            @foreach ($books as $item)
                <div class="row">
                    <div class="col-6">
                        <div class="wpo-blog-pg-wrap association">
                            <table class="table table-responsive table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <a href="">
                                                    <img src="{{ asset($item->cover) }}" alt="" width="200px">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-10">
                                                <h4><a href="">{{ $item->title }}</a></h4>
                                                <p>Pendidikan</p>
                                                <p>Pendidikan</p>
                                                <p><a href="#">Link url kampus</a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
