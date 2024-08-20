@extends('layouts.app')
@section('content')
    <section class="section-box wow animate__animated animate__fadeIn box-we-know">
        <div class="bg-we-know"></div>
        <div class="container">
            <div class="row align-items-end justify-content-between">
                <div class="col-lg-7 mb-30">
                    <h2 class="display-2 neutral-0">Galeri Foto</h2>
                </div>
            </div>
            <div id="top-galeri">
                {{-- <div class="row mt-65">
                    <div class="col-lg-8 col-md-8">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img.png" alt="Nivia"
                                    style="max-height:50em"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card-we-know">
                                    <div class="card-image"> <img src="assets/imgs/page/services/img2.png" alt="Nivia"
                                            style="max-height:23em"></div>
                                    <div class="card-info"> <a class="card-title" href="#">
                                            <h4>Business Solution</h4>
                                            <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="38" height="38" rx="19" fill=""></rect>
                                                <g clip-path="url(#clip0_517_2603)">
                                                    <path
                                                        d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                        fill="#C5FF55"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_517_2603">
                                                        <rect width="13" height="13" fill="white"
                                                            transform="translate(13 13)">
                                                        </rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <div class="card-desc">
                                            <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras,
                                                morbi
                                                torquent massa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="card-we-know">
                                    <div class="card-image"> <img src="assets/imgs/page/services/img2.png" alt="Nivia"
                                            style="max-height:23em"></div>
                                    <div class="card-info"> <a class="card-title" href="#">
                                            <h4>Business Solution</h4>
                                            <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="38" height="38" rx="19" fill=""></rect>
                                                <g clip-path="url(#clip0_517_2603)">
                                                    <path
                                                        d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                        fill="#C5FF55"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_517_2603">
                                                        <rect width="13" height="13" fill="white"
                                                            transform="translate(13 13)">
                                                        </rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <div class="card-desc">
                                            <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras,
                                                morbi
                                                torquent massa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div id="galeri">
                {{-- <div class="row mt-65"> --}}

                {{-- <div class="col-lg-4 col-md-6">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img.png" alt="Nivia"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img2.png" alt="Nivia"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img3.png" alt="Nivia"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img4.png" alt="Nivia"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img5.png" alt="Nivia"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-we-know">
                            <div class="card-image"> <img src="assets/imgs/page/services/img6.png" alt="Nivia"></div>
                            <div class="card-info"> <a class="card-title" href="#">
                                    <h4>Business Solution</h4>
                                    <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="38" height="38" rx="19" fill=""></rect>
                                        <g clip-path="url(#clip0_517_2603)">
                                            <path
                                                d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                                fill="#C5FF55"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_517_2603">
                                                <rect width="13" height="13" fill="white"
                                                    transform="translate(13 13)">
                                                </rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="card-desc">
                                    <p class="text-md">Purus dui eget sollicitudin curae leo proin platea cras, morbi
                                        torquent massa</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                {{-- </div> --}}
            </div>
        </div>

        </div>
    </section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', async function() {
    try {
        // Fetch data dari kedua API secara bersamaan
        const [galleryData, topGalleryData] = await Promise.all([
            fetch('http://localhost/cms-website/api.php?act=gallery&id_dekopin=1').then(response => response.json()),
            fetch('http://localhost/cms-website/api.php?act=top-gallery&id_dekopin=1').then(response => response.json())
        ]);

        // Memproses dan menampilkan data dari gallery
        let galleryElement = document.getElementById('galeri');
        let rowElement = '<div class="row mt-65">';
        galleryData.forEach(item => {
            rowElement += `
                <div class="col-lg-4 col-md-6">
                    <div class="card-we-know">
                        <div class="card-image"> <img src="http://localhost/cms-website/${item.foto}" alt="Nivia"></div>
                        <div class="card-info"> <a class="card-title" href="#">
                                <h4>${item.id_kategori}</h4>
                                <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="38" height="38" rx="19" fill=""></rect>
                                    <g clip-path="url(#clip0_517_2603)">
                                        <path
                                            d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                            fill="#C5FF55"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_517_2603">
                                            <rect width="13" height="13" fill="white"
                                                transform="translate(13 13)">
                                            </rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <div class="card-desc">
                                <p class="text-md">${item.keterangan}</p>
                            </div>
                        </div>
                    </div>
                </div>`;
        });
        rowElement += '</div>';
        galleryElement.innerHTML += rowElement;

        // Memproses dan menampilkan data dari top-gallery
        let topGalleryElement = document.getElementById('top-galeri');
        let topRowElement = `
            <div class="row mt-65">
                <div class="col-lg-8 col-md-8">
                    <div class="card-we-know">
                        <div class="card-image"> <img src="http://localhost/cms-website/${topGalleryData[0].foto}" alt="Nivia"
                                style="max-height:50em"></div>
                        <div class="card-info"> <a class="card-title" href="#">
                                <h4>${topGalleryData[0].id_kategori}</h4>
                                <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="38" height="38" rx="19" fill=""></rect>
                                    <g clip-path="url(#clip0_517_2603)">
                                        <path
                                            d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                            fill="#C5FF55"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_517_2603">
                                            <rect width="13" height="13" fill="white"
                                                transform="translate(13 13)">
                                            </rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <div class="card-desc">
                                <p class="text-md">${topGalleryData[0].keterangan}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">`;

        // Menghasilkan elemen top-gallery untuk setiap item yang ada
        topGalleryData.slice(1).forEach(item => {
            topRowElement += `
                <div class="col-12 mb-4">
                    <div class="card-we-know">
                        <div class="card-image"> <img src="http://localhost/cms-website/${item.foto}" alt="Nivia"
                                style="max-height:23em"></div>
                        <div class="card-info"> <a class="card-title" href="#">
                                <h4>${item.id_kategori}</h4>
                                <svg width="38" height="38" viewbox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="38" height="38" rx="19" fill=""></rect>
                                    <g clip-path="url(#clip0_517_2603)">
                                        <path
                                            d="M23.6537 16.8149L14.718 25.7506L13.25 24.2826L22.1847 15.3469H14.31V13.2705H25.7301V24.6906H23.6537V16.8149Z"
                                            fill="#C5FF55"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_517_2603">
                                            <rect width="13" height="13" fill="white"
                                                transform="translate(13 13)">
                                            </rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <div class="card-desc">
                                <p class="text-md">${item.keterangan}</p>
                            </div>
                        </div>
                    </div>
                </div>`;
        });

        topRowElement += `
                    </div>
                </div>
            </div>`;

        topGalleryElement.innerHTML += topRowElement;

    } catch (error) {
        console.error('Error fetching gallery data:', error);
    }
});

</script>
