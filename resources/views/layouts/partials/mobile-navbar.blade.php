
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
        {{-- <div class="mobile-header-top">
            <div class="user-account"><img src="assets/imgs/page/homepage6/author.png" alt="">
            <div class="content">
                <h6 class="user-name">John Smith</h6>
                <p class="font-xs text-muted">You have 4 new messages</p>
            </div>
            </div>
        </div> --}}
        <div class="mobile-header-content-area" style="padding-top: 20px !important;">
            <div class="perfect-scroll">
                <img src="{{ asset('assets/imgs/Logo-yellow.png') }}" width="45%" height="50" alt="" class="mb-3">
                {{-- <div class="mobile-search mobile-header-border mb-30">
                    <form action="#">
                    <input type="text" placeholder="Search for items…"><i class="fi-rr-search"></i>
                    </form>
                </div> --}}
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="{{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('tentang-rki') ? 'active' : '' }}" href="{{ route('tentang-rki') }}">Tentang RKI</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('produk') ? 'active' : '' }}" href="{{ route('produk') }}">Produk</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                        <li><a href="https://dashboard.rkicoop.co.id/login" target="_blank" class="btn btn-primary text-white w-100">Masuk</a></li>
                        <li><a href="#!" data-bs-toggle="modal" data-bs-target="#standardModal" class="btn btn-gabung btn-outline-primary w-100">Gabung Koperasi</a></li>
                    </ul>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-25">Follow Us</h6><a class="icon-socials icon-facebook" href="#"><img alt="RKI" src="assets/imgs/template/icons/fb.svg"></a><a class="icon-socials icon-instagram" href="#"><img alt="RKI" src="assets/imgs/template/icons/in.svg"></a><a class="icon-socials icon-twitter" href="#"><img alt="RKI" src="assets/imgs/template/icons/tw.svg"></a><a class="icon-socials icon-be" href="#"><img alt="RKI" src="assets/imgs/template/icons/be.svg"></a>
                </div>
                <div class="site-copyright">Copyright &copy; 2024 Koperasi RKI. All rights reserved.</div>
            </div>
        </div>
    </div>
</div>
