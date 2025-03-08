<footer class="wpo-site-footer">
    <div class="wpo-upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <img src="{{ asset('assets/images/logo-white-180.png') }}" alt="blog">
                        </div>
                        <p>Asosiasi Peneliti dan Inovasi Nusantara (APIN) didirikan sebagai wadah kolaboratif yang bertujuan untuk mendukung publikasi ilmiah serta pengembangan kapasitas akademik di Indonesia.</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="widget wpo-service-link-widget">
                        <div class="widget-title">
                            <h3>Contact </h3>
                        </div>
                        <div class="contact-ft">
                            <ul>
                                <li><i class="fi flaticon-location"></i>7 Green Lake Street Crawfordsville, IN
                                    47933</li>
                                <li><i class="fi flaticon-phone-call"></i>+1 800 123 456 789</li>
                                <li><i class="fi flaticon-send"></i>Consultar@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Services </h3>
                        </div>
                        @if ($menuPages->has('Services'))
                            @php
                                $services = $menuPages['Services'];
                                $parentPage = $services->first(); // Misalnya 'About us' sebagai parent
                                $subPages = $services->slice(0); // Sisanya jadi sub-menu
                            @endphp
                            @if ($subPages->isNotEmpty())
                                <ul>
                                    @foreach ($subPages as $subPage)
                                        <li>
                                            <a href="{{ url($subPage->slug) }}">
                                                {{ $subPage->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li><a href="{{ url('/contact') }}">Contact US</a></li>
                                </ul>
                                
                            @endif
                        @endif
                    </div>
                </div>

                {{-- <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget instagram">
                        <div class="widget-title">
                            <h3>Projects</h3>
                        </div>
                        <ul class="d-flex">
                            <li><a href="project-single.html"><img src="assets/images/instragram/1.jpg"
                                        alt=""></a></li>
                            <li><a href="project-single.html"><img src="assets/images/instragram/2.jpg"
                                        alt=""></a></li>
                            <li><a href="project-single.html"><img src="assets/images/instragram/3.jpg"
                                        alt=""></a></li>
                            <li><a href="project-single.html"><img src="assets/images/instragram/4.jpg"
                                        alt=""></a></li>
                            <li><a href="project-single.html"><img src="assets/images/instragram/5.jpg"
                                        alt=""></a></li>
                            <li><a href="project-single.html"><img src="assets/images/instragram/6.jpg"
                                        alt=""></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div> <!-- end container -->
    </div>
    <div class="wpo-lower-footer">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <p class="copyright"> Copyright &copy; 2025 by <a href="#">APIN</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
