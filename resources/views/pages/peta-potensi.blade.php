@extends('layouts.main')

@section('content')
    {{-- Konten pertama --}}
    <div class="custom-rectangle">
        <div class="container">
            <div class="spacer" style="height: 100px;"></div>
            {{-- text heading --}}
            <div class="row justify-content-between">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <h1 class="mt-5" style="color: #ffffffbb; font-weight: 700; line-height: normal;">Peta Potensi</h1>
                    <h5 class="mt-3"
                        style="color: #ffffffbb; font-weight: 300; line-height: normal; text-align: justify;">Peta potensi
                        adalah alat yang sangat bermanfaat dalam mencari potensi investasi berdasarkan lokasi yang
                        diinginkan. Dengan menggunakan peta potensi, pengguna dapat dengan mudah mengidentifikasi peluang
                        investasi yang sesuai dengan kebutuhan dan kriteria tertentu. Peta ini tidak hanya memberikan
                        gambaran umum tentang wilayah tersebut, tetapi juga secara rinci menampilkan kecamatan-kecamatan
                        beserta desa-desa yang ada di dalamnya. Setiap desa dan kecamatan disajikan dengan data yang
                        relevan, mencakup aspek demografis, kondisi ekonomi, dan infrastruktur yang ada. </h5>
                </div>
                <div class="col-md-4" data-aos="fade-left" data-aos-delay="300">
                    <img class="mt-3" src="image/map.png" alt="Gambar" height="100%">
                </div>
            </div>
            <div class="spacer" style="height: 50px;"></div>
            @include('partials.slidedown')
        </div>

        {{-- wave dan rectrangle --}}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,229.3C672,235,768,213,864,197.3C960,181,1056,171,1152,186.7C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

    {{-- Peta Potensi --}}

    <div class="container">
        <h1 data-aos="fade-up" class="text-center"
            style="font-weight: 700; background: linear-gradient(90deg, #219C90 0%, #027c97 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Kecamatan</h1>
        {{-- Tombol Kecamatan --}}
        <div class="row mt-5 text-center">
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="50">
                <button type="button" class="btn"
                    style="background-color: #219C90;  color: #FFFFFF; border-radius: 50px;">Gerokgak</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="100">
                <button type="button" class="btn"
                    style="background-color: #219C90;  color: #FFFFFF; border-radius: 50px;">Seririt</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="150">
                <button type="button" class="btn"
                    style="background-color: #219C90;  color: #FFFFFF; border-radius: 50px;">Busungbiu</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="200">
                <button type="button" class="btn"
                    style="background-color: #219C90; color: #FFFFFF; border-radius: 50px;">Banjar</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="250">
                <button type="button" class="btn"
                    style="background-color: #219C90;  color: #FFFFFF; border-radius: 50px;">Sukasada</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="300">
                <button type="button" class="btn"
                    style="background-color: #219C90; color: #FFFFFF; border-radius: 50px;">Buleleng</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="350">
                <button type="button" class="btn"
                    style="background-color: #219C90;  color: #FFFFFF; border-radius: 50px;">Sawan</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="400">
                <button type="button" class="btn"
                    style="background-color: #219C90; color: #FFFFFF; border-radius: 50px;">Kubutambahan</button>
            </div>
            <div class="col mt-2" data-aos="zoom-in" data-aos-delay="450">
                <button type="button" class="btn"
                    style="background-color: #219C90;  color: #FFFFFF; border-radius: 50px;">Tejakula</button>
            </div>
        </div>

        {{-- Map --}}
        <iframe data-aos="fade-up" class="mt-5"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d333456.0782182277!2d114.73035388741333!3d-8.239697763827339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd182f8db579db5%3A0x3030bfbca7cbf00!2sBuleleng%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1699367262931!5m2!1sen!2sid"
            width="100%" height="450"
            style="border:0; border-radius: 5px; box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="row mt-5">
            {{-- Deskripsi Kecamatan --}}
            <div data-aos="fade-right" class="col" style="color: rgba(0, 0, 0, 0.70); text-align: justify;">
                {{-- Info Kecamatan --}}
                <div data-aos="fade-right">
                    <h1
                        style="font-weight: 700; background: linear-gradient(90deg, #219C90 0%, #027c97 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        Kecamatan Buleleng</h1>
                </div>
                <p>Buleleng adalah sebuah kecamatan yang terletak di kabupaten Buleleng, provinsi Bali, Indonesia. Di
                    dalamnya, terdapat kota Singaraja, yang berfungsi sebagai ibu kota dari kabupaten Buleleng. Kecamatan
                    ini terletak sekitar 78 kilometer ke arah utara dari Kota Denpasar, ibu kota provinsi Bali. Dengan
                    populasi sekitar 135.840 jiwa pada proyeksi tahun 2016, Buleleng memiliki jumlah penduduk yang cukup
                    signifikan. Populasi tersebut terdiri dari 67.590 laki-laki dan 68.250 perempuan, dengan nilai sex rasio
                    sekitar 99,03, yang menggambarkan proporsi penduduk laki-laki dan perempuan di wilayah ini. Buleleng
                    menawarkan pesona alam yang indah serta warisan budaya yang kaya, menjadikannya tujuan yang menarik di
                    Pulau Bali.
                </p>
            </div>

            {{-- Fasilitas Kecamatan --}}
            <div data-aos="fade-left" class="col">
                <div style="box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);" class="card">
                    <div class="container">
                        <h3 class="text-center mt-3"
                            style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            Fasilitas</h3>
                        <table class="table">
                            {{-- Header Tabel --}}
                            <thead>
                                <tr>
                                    <th style="background: #cacaca" scope="col">No</th>
                                    <th style="background: #cacaca" scope="col">Infrastruktur</th>
                                    <th style="background: #cacaca" scope="col">Jumlah / Keterangan</th>
                                </tr>
                            </thead>
                            {{-- Body Tabel --}}
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Rumah Sakit</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Pusat Perbelanjaan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jalan Aspal</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Listrik</td>
                                    <td>Ada</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Air</td>
                                    <td>Ada</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card Desa Potensi --}}
        <div data-aos="fade-up" class="mt-5">
            <h1
                style="font-weight: 700; background: linear-gradient(90deg, #219C90 0%, #027c97 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Potensi Desa</h1>
        </div>

        {{-- List card potensi desa --}}
        <div class="row mt-3">
            @for ($i = 0; $i < 8; $i++)
                {{-- desa --}}
                <div class="col-md-3">
                    <a href="/desa-open" style="text-decoration: none">
                        <div data-aos="fade-up" class="card text-center"
                            style="max-width: 18rem; margin: 20px auto; box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);">
                            <div class="container mt-3">
                                <img src="data:image/jpeg;base64,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"
                                    alt="Logo Desa" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #00657B;">SAMBANGAN</h4>
                                    <div class="row mt-5">
                                        <div class="col">
                                            <img src="https://cdn.icon-icons.com/icons2/1459/PNG/512/2799205-creative-idea-light_99776.png"
                                                alt="Logo Peluang" class="img-fluid" style="max-width: 30%;">
                                            <P class="card-text" style="color: #00657B;">Peluang</P>
                                            <p class="card-text font-weight-bold">50</p>
                                        </div>
                                        <div class="col">
                                            <img src="https://cdn-icons-png.flaticon.com/512/5363/5363451.png"
                                                alt="Logo Detail" class="img-fluid" style="max-width: 30%;">
                                            <P class="card-text" style="color: #00657B;">Penduduk</P>
                                            <p class="card-text font-weight-bold">512</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
    <div class="spacer" style="height: 100px;"></div>
@endsection
