@extends('layouts.app')

@section('content')
<section class="section-box box-content-contact">
    <div class="container">
        <div class="text-center contact-head"><span class="icon-1 shape-1"></span><span class="icon-2 shape-2"></span><span class="btn btn-brand-4-sm">Kontak Kami</span>
            <h2 class="heading-2 mb-20 mt-15">Hubungi Kami</h2>
        </div>

        <div class="box-border-rounded">
            <div class="row align-items-center">
                <div class="col-lg-6"><a class="btn btn-brand-4-sm" href="#">Kontak Kami</a>
                    <h3 class="mb-20 mt-20">Untuk mengajukan permintaan informasi lebih lanjut, hubungi kami melalui saluran sosial kami.</h3>
                    <p class="text-md neutral-700">Hubungi kami di bawah dan kami akan segera menghubungi Anda kembali.</p>

                    <div class="row mt-50">
                        <div class="col-lg-12">
                            <div class="card-feature-2">
                                <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/marketing.svg') }}"></div>

                                <div class="card-info" id="lokasi">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card-feature-2">
                                <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/digital.svg') }}"></div>
                                <div class="card-info" id="nomor_telepon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card-feature-2">
                                <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/digital.svg') }}"></div>
                                <div class="card-info" id="email">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center"><img src="{{ asset('assets/imgs/page/contact/img-contact.png') }}"></div>
            </div>
        </div>
    </div>
  </section>

  <section class="section-box box-get-touch-section box-contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="block-map">
                    <div class="box-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.139853994854!2d106.8433912!3d-6.245293800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b85b13ca27%3A0xb902ff85ed1864e9!2sWisma%20NH%2C%202b-c%2C%20Jl.%20Raya%20Pasar%20Minggu%20No.2b-c%2C%20Pancoran%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012780!5e0!3m2!1sid!2sid!4v1720147286698!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <p class="text-md neutral-600 text-center">Jam Kerja: 9:00 - 17:00, Senin - Jum'at </p>
                </div>
            </div>

            <div class="col-lg-6 mb-30">
                <a class="btn btn-brand-4-sm" href="#">Kontak Kami</a>
                <h2 class="mb-20 mt-20">Hubungi Kami</h2>
                <p class="text-md neutral-700">Hubungi kami di bawah dan kami akan segera menghubungi Anda kembali.</p>

                <div class="block-form-contact mt-45">
                    <form action="#">
                        <div class="form-group">
                            <label for="fullname">
                            Nama *</label>
                            <input class="form-control" type="text" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="fullname">
                            Email *</label>
                            <input class="form-control" type="text" placeholder="email@website.com">
                        </div>
                        <div class="form-group">
                            <label for="fullname">
                            Pesan *</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-black btn-rounded" type="submit">Kirim Pesan
                                <svg width="22" height="8" viewbox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 3.99934L18.4791 0.478516V3.30642H0V4.69236H18.4791V7.52031L22 3.99934Z" fill=""></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    fetch('https://cms.dekopin.co.id/api.php?act=kontak&id_dekopin=1')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('email').innerHTML = data[0].email;
            document.getElementById('lokasi').innerHTML = data[0].lokasi;
            document.getElementById('nomor_telepon').innerHTML = data[0].nomor_telepon;
        })
        .catch(error => {
            const agendaElement = document.getElementById('agenda');
            agendaElement.innerHTML = '<tr><td colspan="4" class="text-center">Belum ada agenda</td></tr>';
            console.error('Error fetching agenda data:', error);
        });
});
  </script>
@endsection
