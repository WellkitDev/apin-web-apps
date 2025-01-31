<header id="header" class="wpo-site-header">
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggler open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar first-angle"></span>
                            <span class="icon-bar middle-angle"></span>
                            <span class="icon-bar last-angle"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo-sm.png') }}"
                                alt="apin"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-2 col-1">
                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav mb-2 mb-lg-0">
                            <li><a class="active" href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="{{ url('/tentang') }}">Tentang</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                                    <li><a href="{{ url('/tentang/program') }}">Program</a></li>
                                    <li><a href="{{ url('/tentang/layanan') }}">Layanan</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/seminar') }}">Seminar</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/seminar') }}">Jadwal</a></li>
                                    <li><a href="{{ url('/seminar/arsip') }}">Arsip</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/blog/artikel') }}">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/blog/artikel') }}">Artikel</a></li>
                                    <li><a href="{{ url('/blog/artikel') }}">Berita</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Seminar</a></li>
                                    <li><a href="#">Event</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Kerjasama</a></li>
                            <li><a href="#">Jurnal</a></li>
                            <li><a href="#">Area Anggota</a></li>
                        </ul>
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a href="#">Home</a>
                                    <ul class="dl-submenu">
                                        <li><a href="#">Home style 1</a></li>
                                        <li><a href="index-2.html">Home style 2</a></li>
                                        <li><a href="index-3.html">Home style 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Services</a>
                                    <ul class="dl-submenu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-single.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Projects</a>
                                    <ul class="dl-submenu">
                                        <li><a href="project.html">Project</a></li>
                                        <li><a href="project-single.html">Project Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="dl-submenu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://google.com">Blog</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog.html">Blog right sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                        <li>
                                            <a href="#">Blog details</a>
                                            <ul class="dl-submenu">
                                                <li><a href="blog-single.html">Blog details right sidebar</a>
                                                </li>
                                                <li><a href="blog-single-left-sidebar.html">Blog details left
                                                        sidebar</a></li>
                                                <li><a href="blog-single-fullwidth.html">Blog details
                                                        fullwidth</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div><!-- /dl-menuwrapper -->
                    </div><!-- end of nav-collapse -->
                </div>
                <div class="col-lg-2 col-md-4 col-4">
                    <div class="header-right">
                        <div class="close-form">
                            <a class="theme-btn" href="#">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
