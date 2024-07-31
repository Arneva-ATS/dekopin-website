@extends('layouts.app')
@section('content')
<section class="section-box box-content-blog-2">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12 text-center">
                <h2 class="display-4 text-primary">Agenda</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tgl Mulai</th>
                            <th scope="col">Tgl Akhir</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin, 11-03-2020</td>
                            <td>Selasa, 12-03-2020</td>
                            <td>08.30 - 12.00</td>
                            <td>Pelatihan Kewirausahaan Berbasis Sumber Daya Lokal</td>
                        </tr>
                        <tr>
                            <td>Senin, 11-03-2020</td>
                            <td>Selasa, 12-03-2020</td>
                            <td>08.30 - 12.00</td>
                            <td>Pelatihan Kewirausahaan Berbasis Sumber Daya Lokal</td>
                        </tr>
                        <tr>
                            <td>Jumat, 08-03-2020</td>
                            <td>Sabtu, 09-03-2020</td>
                            <td>08.30 - 12.00</td>
                            <td>Pelatihan Kewirausahaan Berbasis Sumber Daya Lokal</td>
                        </tr>
                        <tr>
                            <td>Jumat, 08-03-2020</td>
                            <td>Sabtu, 09-03-2020</td>
                            <td>08.30 - 12.00</td>
                            <td>Pelatihan Kewirausahaan Berbasis Sumber Daya Lokal</td>
                        </tr>
                        <tr>
                            <td>Selasa, 22-01-2020</td>
                            <td>Rabu, 23-01-2020</td>
                            <td>08.00 - 12.00</td>
                            <td>SHORT COURSE "MANAJEMEN USAHA"</td>
                        </tr>
                        <tr>
                            <td>Rabu, 16-01-2020</td>
                            <td>Rabu, 16-01-2020</td>
                            <td>08.00 - 12.00</td>
                            <td>Short Course "Foto Produk"</td>
                        </tr>
                        <tr>
                            <td>Rabu, 21-11-2020</td>
                            <td>Rabu, 21-11-2020</td>
                            <td>08.00 - 12.00</td>
                            <td>Sosialisasi Katalog Digital untuk UMKM Kota Semarang</td>
                        </tr>
                        <tr>
                            <td>Selasa, 20-11-2020</td>
                            <td>Selasa, 20-11-2020</td>
                            <td>09.00 - 12.00</td>
                            <td>Pelatihan Admin Katalog Digital.</td>
                        </tr>
                        <tr>
                            <td>Senin, 19-11-2020</td>
                            <td>Senin, 19-11-2020</td>
                            <td>09.00 - 12.00</td>
                            <td>Pelatihan Katalog Produk untuk Admin Rumah Galeri</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
.section-box {
    background-color: #f9f9f9;
    padding: 40px 0;
}
.table {
    background-color: #ffffff;
}
.table thead th {
    background-color: #e9ecef;
}
</style>
