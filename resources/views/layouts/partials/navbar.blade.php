<header class="header sticky-bar {{ (request()->routeIs(['tentang-rki', 'berita', 'kontak']) || isset($exception)) ? 'header-style-2 header-style-4' : '' }}">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{ route('beranda') }}"><img alt="" src="{{ asset('assets/imgs/Logo.png') }}" width="160"></a></div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li class="has-children"><a class="{{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('tentang-rki') ? 'active' : '' }}" href="{{ route('tentang-rki') }}">Tentang RKI</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('produk') ? 'active' : '' }}" href="{{ route('produk') }}">Produk</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="header-right">
                {{-- <a class="btn btn-search hover-up" href="#"></a> --}}
                <div class="form-search p-20 dark">
                    <form action="#">
                        <input class="form-control" type="text" placeholder="Search">
                        <input class="btn-search-2" type="submit" value="">
                    </form>
                    <div class="popular-keywords text-start mt-20">
                        <p class="mb-10 color-white">Popular search:</p><a class="color-gray-600 mr-10 font-xs" href="#">Platform,</a><a class="color-gray-600 mr-10 font-xs" href="#"># Database,</a><a class="color-gray-600 mr-10 font-xs" href="#"># Price</a>
                    </div>
                </div>

                <a class="btn text-white hover-up fw-bold d-none d-md-block" href="https://dashboard.rkicoop.co.id/login" target="_blank">Masuk</a>

                <a class="btn btn-brand-4-medium hover-up" href="#!" data-bs-toggle="modal" data-bs-target="#standardModal">
                    Gabung Koperasi
                    <svg width="22" height="22" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.0003L18.4791 7.47949V10.3074H0V11.6933H18.4791V14.5213L22 11.0003Z" fill=""></path>
                    </svg>
                </a>

                <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
        </div>
    </div>
</header>
