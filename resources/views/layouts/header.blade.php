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
                            <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                            <!-- Grup Tentang -->
                            <!-- Grup About -->
                            @if ($menuPages->has('About'))
                            @php
                                $aboutPages = $menuPages['About'];
                                $parentPage = $aboutPages->first(); // Misalnya 'About us' sebagai parent
                                $subPages = $aboutPages->slice(0); // Sisanya jadi sub-menu
                            @endphp
                            <li>
                                <a href="{{ url($parentPage->slug) }}" class="{{ request()->is($parentPage->slug) ? 'active' : '' }}">
                                    {{ $parentPage->title }}
                                </a>
                                @if ($subPages->isNotEmpty())
                                <ul class="sub-menu">
                                    @foreach ($subPages as $subPage)
                                    <li>
                                        <a href="{{ url($subPage->slug) }}">
                                            {{ $subPage->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                            <!-- Grup Seminar -->
                            {{-- <li><a href="{{ url('/tentang') }}">Tentang</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                                    <li><a href="{{ url('/tentang/program') }}">Program</a></li>
                                    <li><a href="{{ url('/tentang/layanan') }}">Layanan</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ url('/coming-soon') }}">Seminar</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/coming-soon') }}">Jadwal</a></li>
                                    <li><a href="{{ url('/coming-soon') }}">Arsip</a></li>
                                    {{-- <li><a href="{{ url('/seminar') }}">Jadwal</a></li>
                                    <li><a href="{{ url('/seminar/arsip') }}">Arsip</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="{{ url('/coming-soon') }}">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/coming-soon') }}">Artikel</a></li>
                                    <li><a href="{{ url('/coming-soon') }}">Gallery</a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="{{ url('/blog/artikel') }}">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/blog/artikel') }}">Artikel</a></li>
                                    <li><a href="{{ url('/blog/gallery') }}">Gallery</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ url('/coming-soon') }}">Kerjasama</a></li>
                            <li><a href="{{ url('https://apinusa.com/') }}" target="_blank">Jurnal</a></li>
                            <li><a href="{{ url('/coming-soon') }}">Anggota</a></li>
                        </ul>
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                                <!-- Grup About -->
                            @if ($menuPages->has('About'))
                            @php
                                $aboutPages = $menuPages['About'];
                                $parentPage = $aboutPages->first(); // Misalnya 'About us' sebagai parent
                                $subPages = $aboutPages->slice(0); // Sisanya jadi sub-menu
                            @endphp
                            <li>
                                <a href="{{ url($parentPage->slug) }}" class="{{ request()->is($parentPage->slug) ? 'active' : '' }}">
                                    {{ $parentPage->title }}
                                </a>
                                @if ($subPages->isNotEmpty())
                                <ul class="dl-submenu">
                                    @foreach ($subPages as $subPage)
                                    <li>
                                        <a href="{{ url($subPage->slug) }}">
                                            {{ $subPage->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                            <!-- Grup Seminar -->
                            {{-- <li><a href="{{ url('/tentang') }}">Tentang</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                                    <li><a href="{{ url('/tentang/program') }}">Program</a></li>
                                    <li><a href="{{ url('/tentang/layanan') }}">Layanan</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ url('/coming-soon') }}">Seminar</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ url('/coming-soon') }}">Jadwal</a></li>
                                    <li><a href="{{ url('/coming-soon') }}">Arsip</a></li>
                                    {{-- <li><a href="{{ url('/seminar') }}">Jadwal</a></li>
                                    <li><a href="{{ url('/seminar/arsip') }}">Arsip</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="{{ url('/coming-soon') }}">Blog</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ url('/coming-soon') }}">Artikel</a></li>
                                    <li><a href="{{ url('/coming-soon') }}">Gallery</a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="{{ url('/blog/artikel') }}">Blog</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ url('/blog/artikel') }}">Artikel</a></li>
                                    <li><a href="{{ url('/blog/gallery') }}">Gallery</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ url('/coming-soon') }}">Kerjasama</a></li>
                            <li><a href="{{ url('https://apinusa.com/') }}" target="_blank">Jurnal</a></li>
                            <li><a href="{{ url('/coming-soon') }}">Anggota</a></li>
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
