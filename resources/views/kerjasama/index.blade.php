@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Kerjasama</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Kerjasama</span></li>
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
            <div class="col-12">
                <div class="wpo-blog-pg-wrap association">
                    <table class="table table-responsive table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="{{ url('kerjasama/detail') }}">
                                            <img src="https://simoster.org/kerjasama/kerjasama_logo_LPKDpMXpHTmRrbFFEZUt0YmZwdlpURmJzRVlvb3Z3TVphZGVEZkYyOHhoNUkxaz0=.jpeg" alt="" width="80px" height="80px">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-10">
                                        <h4><a href="{{ url('kerjasama/detail') }}">LPKD adalah Lembaga Penelitian dan Konsultasi Dakwah</a></h4>
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
    </div>
</section>
@endsection