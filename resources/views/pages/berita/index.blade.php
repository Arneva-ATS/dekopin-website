@extends('layouts.app')

@section('content')
<section class="section-box box-content-blog-2">
    <div class="container">
        <div class="text-center blog-head">
            <span class="icon-1 shape-1"></span>
            <span class="icon-2 shape-2"></span>
            <span class="icon-3 shape-3"></span>
            <span class="btn btn-brand-4-sm">Berita RKI</span>

            <h2 class="heading-2 mb-20 mt-15">Berita & Informasi</h2>
            <p class="text-lg">Jelajahi Berita RKI untuk mendapatkan wawasan berharga, pendapat ahli, dan informasi terkini<br class="d-none d-lg-block"> tentang tren terbaru dalam dunia koperasi dan kesejahteraan.</p>

            <div class="box-button-preparing box-button-filters">
                {{-- <a class="btn btn-neutral-100 active" href="#" data-filter="all">Belum tersedia</a> --}}
                {{-- <a class="btn btn-neutral-100" href="#" data-filter="development">Development</a>
                <a class="btn btn-neutral-100" href="#" data-filter="marketing">Marketing</a>
                <a class="btn btn-neutral-100" href="#" data-filter="technology">Technology</a>
                <a class="btn btn-neutral-100" href="#" data-filter="education">Education</a> --}}
            </div>
        </div>

        <div class="row content-blog-2">
            <div class="col-lg-9">
                <div class="box-list-news-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-news-style-2 card-news-style-3 border border-1 border-dark rounded-3 p-3">
                                {{-- <div class="card-image">
                                    <a href="blog-post.html"><img src="{{ asset('assets/imgs/page/blog/blog.png') }}" alt="RKI"></a>
                                </div>

                                <div class="card-info">
                                    <div class="card-meta"> <a class="btn btn-tag-sm" href="blog-post.html">Education</a><span class="date-post">16 October 2023</span></div>
                                    <div class="card-title"> <a class="link-new" href="blog-post.html">Savvy brand marketing: from branding basics to key strategies</a></div>

                                    <div class="card-desc">
                                        <p class="text-md neutral-500">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur.</p>
                                    </div>

                                    <div class="card-more">
                                        <a class="btn btn-learmore-2" href="blog-post.html">Read More
                                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_599_4830)">
                                                <path d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z" fill=""></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_599_4830">
                                                <rect width="13" height="13" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                            </svg>
                                        </a>

                                        <div class="card-author-comment"> <span class="author">By Steven</span><span class="comments">3 comments</span></div>
                                    </div>
                                </div> --}}
                                <h3>Belum Tersedia</h3>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="card-news-style-2 card-news-style-3">
                                <div class="card-image">
                                    <a href="blog-post.html"><img src="{{ asset('assets/imgs/page/blog/blog.png') }}" alt="RKI"></a>
                                </div>

                                <div class="card-info">
                                    <div class="card-meta"> <a class="btn btn-tag-sm" href="blog-post.html">Education</a><span class="date-post">16 October 2023</span></div>
                                    <div class="card-title"> <a class="link-new" href="blog-post.html">Savvy brand marketing: from branding basics to key strategies</a></div>

                                    <div class="card-desc">
                                        <p class="text-md neutral-500">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur.</p>
                                    </div>

                                    <div class="card-more">
                                        <a class="btn btn-learmore-2" href="blog-post.html">Read More
                                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_599_4830)">
                                                <path d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z" fill=""></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_599_4830">
                                                <rect width="13" height="13" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                            </svg>
                                        </a>

                                        <div class="card-author-comment"> <span class="author">By Steven</span><span class="comments">3 comments</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="card-news-style-2">
                                <div class="card-image"> <a href="blog-post.html"><img src="{{ asset('assets/imgs/page/blog/blog.png') }}" alt="RKI"></a></div>
                                <div class="card-info">
                                    <div class="card-meta"> <a class="btn btn-tag-sm" href="blog-post.html">Technology</a><span class="date-post">16 October 2023</span></div>
                                    <div class="card-title"> <a class="link-new" href="blog-post.html">Perfect product images with Generative AI in Nivia platform</a></div>
                                    <div class="card-more">
                                        <a class="btn btn-learmore-2" href="blog-post.html">Read More
                                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_599_4830)">
                                                    <path d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z" fill=""></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_599_4830">
                                                    <rect width="13" height="13" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-news-style-2">
                                <div class="card-image"> <a href="blog-post.html"><img src="{{ asset('assets/imgs/page/blog/blog.png') }}" alt="RKI"></a></div>
                                <div class="card-info">
                                    <div class="card-meta"> <a class="btn btn-tag-sm" href="blog-post.html">Technology</a><span class="date-post">16 October 2023</span></div>
                                    <div class="card-title"> <a class="link-new" href="blog-post.html">Perfect product images with Generative AI in Nivia platform</a></div>
                                    <div class="card-more">
                                        <a class="btn btn-learmore-2" href="blog-post.html">Read More
                                            <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_599_4830)">
                                                    <path d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z" fill=""></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_599_4830">
                                                    <rect width="13" height="13" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    {{-- <div class="text-start">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                                <path d="M10 3.33398L5.33333 8.00065L10 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M6 3.33398L10.6667 8.00065L6 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="sidebar-right sidebar-search">
                        <div class="form-search">
                            <input class="form-control" type="text" placeholder="Search...">
                            <button class="btn btn-search-black"></button>
                        </div>
                    </div>

                    <div class="sidebar-right sidebar-text">
                        <h5 class="mb-15">Tentang Koperasi RKI</h5>
                        <p class="text-md neutral-500">Koperasi RKI hadir sebagai jawaban atas kebutuhan untuk menjembatani peran DEKOPIN yang sebelumnya hanya sebagai katalisator pasif dalam menjalankan program edukasi, fasilitasi, dan advokasi bagi gerakan koperasi di Indonesia.</p>

                        <div class="box-socials-commingsoon mt-15">
                            <a class="icon-socials icon-facebook" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/fb.svg') }}">
                            </a>

                            <a class="icon-socials icon-instagram" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/in.svg') }}">
                            </a>

                            <a class="icon-socials icon-twitter" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/tw.svg') }}">
                            </a>

                            <a class="icon-socials icon-be" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/be.svg') }}">
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-right sidebar-posts">
                        <h5 class="mb-15">Postingan Populer</h5>

                        <ul class="list-popular-posts">
                            <li>
                                <div class="card-post border border-1 border-dark rounded-3 p-3">
                                    <h5>Belum Tersedia</h5>
                                </div>
                            </li>
                            {{-- <li>
                                <div class="card-post">
                                    <div class="card-image"><img alt="RKI" src="{{ asset('assets/imgs/page/blog/post.png') }}"></div>

                                    <div class="card-info">
                                        <a href="#">
                                            <h6 class="text-18-semibold">25 easy step-by-step tutorials to make cool drawings</h6>
                                        </a>
                                        <span class="date-post">16 October 2023</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-post">
                                    <div class="card-image"><img alt="RKI" src="{{ asset('assets/imgs/page/blog/post2.png') }}"></div>

                                    <div class="card-info">
                                        <a href="#">
                                            <h6 class="text-18-semibold">25 easy step-by-step tutorials to make cool drawings</h6>
                                        </a>
                                        <span class="date-post">16 October 2023</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="card-post">
                                    <div class="card-image"><img alt="RKI" src="{{ asset('assets/imgs/page/blog/post3.png') }}"></div>

                                    <div class="card-info">
                                        <a href="#">
                                            <h6 class="text-18-semibold">25 easy step-by-step tutorials to make cool drawings</h6>
                                        </a><span class="date-post">16 October 2023</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-post">
                                    <div class="card-image"><img alt="RKI" src="{{ asset('assets/imgs/page/blog/post4.png') }}"></div>

                                    <div class="card-info">
                                        <a href="#">
                                            <h6 class="text-18-semibold">25 easy step-by-step tutorials to make cool drawings</h6>
                                        </a>
                                        <span class="date-post">16 October 2023</span>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="sidebar-right sidebar-posts">
                        <h5 class="mb-15">Kategori</h5>

                        <ul class="list-categories">
                            <li> <a href="#">Kategori Belum Tersedia (0)</a></li>
                            {{-- <li> <a href="#">Ideas (19)</a></li>
                            <li> <a href="#">Workspace (16)</a></li>
                            <li> <a href="#">Coding (7)</a></li>
                            <li> <a href="#">Meeting (12)</a></li>
                            <li> <a href="#">Business Tips (14)</a></li> --}}
                        </ul>
                    </div>

                    <div class="sidebar-right sidebar-posts">
                        <h5 class="mb-15">Tags </h5>
                        <div class="box-tags-sidebar">
                            <a class="btn btn-neutral-100" href="#">Tag belum tersedia</a>
                            {{-- <a class="btn btn-neutral-100" href="#">Technology</a>
                            <a class="btn btn-neutral-100" href="#">Still Life</a>
                            <a class="btn btn-neutral-100" href="#">Nature</a>
                            <a class="btn btn-neutral-100" href="#">Blog</a>
                            <a class="btn btn-neutral-100" href="#">Photography</a>
                            <a class="btn btn-neutral-100" href="#">Workshop</a>
                            <a class="btn btn-neutral-100" href="#">Business Day</a>
                            <a class="btn btn-neutral-100" href="#">Urban</a>
                            <a class="btn btn-neutral-100" href="#">Macro</a>
                            <a class="btn btn-neutral-100" href="#">Landscape</a> --}}
                        </div>
                    </div>

                    {{-- <div class="box-sidebar-normal"><a href="#"><img src="{{ asset('assets/imgs/page/job/ads.png') }}" alt="RKI"></a></div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
