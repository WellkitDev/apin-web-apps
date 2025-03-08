@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Faq</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Faq</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->
<section class="wpo-service-section section-padding">
    <div class="container">
        <div class="row">
            {{-- faq --}}
            <div class="col-md-12">
                <div class="container">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Apa itu APIN?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                APIN (Asosiasi Peneliti dan Inovasi Nusantara) adalah organisasi yang bergerak dalam mendukung penelitian dan inovasi di Indonesia melalui pengelolaan jurnal ilmiah, publikasi, dan pengembangan jaringan kerja sama dengan institusi akademik.
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Apa tujuan APIN?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                APIN bertujuan untuk memajukan kualitas penelitian dan inovasi di Indonesia dengan menyediakan platform publikasi ilmiah yang kredibel serta memperluas kolaborasi antar peneliti dan institusi.
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Siapa yang dapat bergabung dengan APIN?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Peneliti, akademisi, mahasiswa, dan institusi akademik yang memiliki minat dalam pengembangan ilmu pengetahuan dan inovasi dapat bergabung atau bekerja sama dengan APIN.
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Bagaimana cara mengirimkan artikel ke jurnal APIN?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Anda dapat mengunjungi halaman "Panduan Penulis" di website kami untuk informasi lebih lanjut mengenai proses pengiriman artikel, format, dan persyaratan lainnya.
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Apakah ada biaya untuk publikasi?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Kebijakan biaya publikasi tergantung pada jurnal tertentu yang dikelola APIN. Silakan lihat informasi detail pada masing-masing jurnal di website kami.
                            </div>
                        </div>
                    </div>
                    <!-- Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Bagaimana cara menghubungi APIN?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Anda dapat menghubungi kami melalui email di [apin.offcl@gmail.com] atau melalui formulir kontak yang tersedia di website.
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection