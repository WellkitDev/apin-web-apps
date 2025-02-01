@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Detail Anggota</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Anggota</span></li>
                        <li><span>Detail</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->
<!-- start of wpo-detail-anggota-section-->
<section class="wpo-blog-pg-section section-padding ">
    <div class="container">
        <div class="row">
            <div class="col col-md-4 team-detail shadow">
                <div class="content">
                    <div class="card card-no-border text-center mt-3">
                        <div class="top">
                            <img class="shadow" src="https://member.relawanjurnal.id/appdata/images/wgGgG2vNSq3voSl5kealS365AyYyYyYyY.jpg" alt="" srcset="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">A. Nururrochman Hidayatulloh</h5>
                            <h6 class="card-text">1616340754</h6>
                            <h6 class="card-text">Yogyakarta</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="card card-no-border mb-4">
                        {{-- <h5 class="text-center">Tentang Saya</h5> --}}
                        <div class="card-body">
                            <h5 class="card-title">Asal Institusi</h5>
                            <p class="card-text">Universitas Ahmad Dahlan</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profesi</h5>
                            <p class="card-text">Dosen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-8">
                <div class="content">
                    <ul id="myTabs" class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button id="pengalaman-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#pengalaman" type="button" role="tab" aria-controls="pengalaman" aria-selected="true"> Pengalaman</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="pendidikan-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#pendidikan" type="button" role="tab" aria-controls="pendidikan" aria-selected="true"> Pendidikan</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-detail-anggota-section-->

@endsection