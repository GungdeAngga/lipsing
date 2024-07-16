@extends('layouts.main')
@section('content')
    <div class="spacer" style="height: 60px;"></div>
    <div class="container my-4">

        <div class="row">
            <div class="col-md-6">
                <h2 style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                    class="mt-3">SAMBANGAN</h2>
                <p class="lead" style="text-align: justify">Desa Sambangan, tersembunyi di utara Bali, memikat dengan
                    keindahan alamnya yang menakjubkan. Dikenal sebagai "Desa Wanita Air," Sambangan menawarkan tujuh air
                    terjun yang memukau dan trekking menarik. Desa ini menggambarkan harmoni antara kehidupan desa yang
                    tradisional dan pesona alam yang eksotis. Dengan penduduk yang ramah, Sambangan menjadi destinasi yang
                    menawan bagi wisatawan yang mencari ketenangan dan petualangan. Jelajahi keunikan budaya dan kealamian
                    Desa Sambangan yang membuatnya menjadi surga tersembunyi di pulau Bali.</p>
                <p>Jumlah Penduduk: 512</p>
            </div>
            <div class="col-md-6">
                <h2 class="mt-4" style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;" >Potensi Desa</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr class="text-center">
                                <th style="background: #cacaca">Nama Potensi</th>
                                <th style="background: #cacaca">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pertanian Padi</td>
                                <td> Tanaman padi sebagai sumber utama dalam sektor pertanian.</td>
                            </tr>
                            <tr>
                                <td>Pertanian Talas</td>
                                <td>Tanaman talas yang menjadi komoditas pertanian</td>
                            </tr>
                            <tr>
                                <td>Pertanian Cengkeh</td>
                                <td>Budidaya cengkeh sebagai tanaman rempah-rempah</td>
                            </tr>
                            <tr>
                                <td>Pariwisata Air Terjun Aling-Aling</td>
                                <td>Keindahan air terjun Aling-Aling di Desa Sambangan</td>
                            </tr>
                            <!-- Tambahkan baris sesuai dengan potensi desa yang ada -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe style="border-radius: 10px; box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);"
                style="border:0; border-radius: 5px; box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63188.93303964875!2d115.10037400000002!3d-8.171661499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd190022c0f23cf%3A0x5030bfbca830a40!2sSambangan%2C%20Sukasada%2C%20Buleleng%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1702374629431!5m2!1sen!2sid"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
    <div class="spacer" style="height: 60px;"></div>
@endsection
