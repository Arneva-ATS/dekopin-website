@extends('layouts.app')

@section('content')
<section class="section-box box-about-section-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="padding-left-auto">
                    <a class="btn btn-tag-black mt-3 mt-md-0 ms-2 ms-md-0" href="#">Tentang Dekopin</a>
                    <h2 class="display-2 mt-15 mb-25 px-2 fw-bold" id="nama_dekopin"></h2>
                    <p class="text-xl mb-45 px-2" id="deskripsi_utama"></p>
                    <div class="box-buttons-feature-4">
                        <a class="btn btn-brand-4-medium mr-20" href="#">Gabung
                            <svg width="22" height="8" viewbox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 3.99934L18.4791 0.478516V3.30642H0V4.69236H18.4791V7.52031L22 3.99934Z" fill=""></path>
                            </svg>
                        </a>

                        <a class="btn btn-learmore-2" href="#">
                            <span>
                                <svg width="39" height="38" viewbox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" width="38" height="38" rx="19" fill="#191919"></rect>
                                    <g clip-path="url(#clip0_1_376)">
                                        <path d="M24.1537 16.8139L15.218 25.7497L13.75 24.2817L22.6847 15.3459H14.81V13.2695H26.2301V24.6897H24.1537V16.8139Z" fill="#eabb33"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_1_376">
                                            <rect width="13" height="13" fill="white" transform="translate(13.5 13)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </span>

                            Baca lebih lanjut
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="box-image-rect">
                    <img src="{{ asset('assets/imgs/image-pak-nh.png') }}" alt="RKI">
                    {{-- <a class="btn btn-play popup-youtube text-lg" href="">
                        <div class="video-play-button"><span></span></div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box box-prepared-section" style="background: rgb(19 30 58);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-30">
                <h2 class="heading-2 text-white" id="deskripsi_sec_1"></h2>
            </div>
            <div class="col-lg-6 mb-30">
                <p class="text-lg text-white fw-normal" id="deskripsi_sec_2"></p>
            </div>
        </div>
        <div class="row mt-45">
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/marketing.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Visi Kami</h3>
                            <p class="text-lg text-white" id="visi"></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/digital.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Misi Kami</h3>
                            <p class="text-lg text-white" id="misi"></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/product.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Identitas Kami</h3>
                            <p class="text-lg text-white" id="identitas_kami"></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box wow animate__animated animate__fadeIn box-preparing-2 mt-0 mb-100">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-15 text-capitalize">Struktur<br class="d-none d-lg-block">Organisasi</h2>
        </div>
        <div class="row mt-90">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" alt="RKI" id="struktur_organisasi"></div>
                    </div>
                </div>
        </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost/cms-website/api.php?act=profil&id_dekopin=1')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('nama_dekopin').innerText = data[0].nama_dekopin;
            document.getElementById('deskripsi_utama').innerText = data[0].deskripsi_utama;
            document.getElementById('deskripsi_sec_1').innerHTML = data[0].deskripsi_sec_1;
            document.getElementById('deskripsi_sec_2').innerText = data[0].deskripsi_sec_2;
            document.getElementById('visi').innerHTML = data[0].visi;
            document.getElementById('misi').innerHTML = data[0].misi;
            document.getElementById('identitas_kami').innerHTML = data[0].identitas_kami;
            document.getElementById('struktur_organisasi').src = 'http://localhost/cms-website' + data[0].foto
            console.log('http://localhost/cms-website' + data[0].foto)


        })
        .catch(error => {
            const agendaElement = document.getElementById('agenda');
            agendaElement.innerHTML = '<tr><td colspan="4" class="text-center">Belum ada agenda</td></tr>';
            console.error('Error fetching agenda data:', error);
        });
});
  </script>
@endsection
