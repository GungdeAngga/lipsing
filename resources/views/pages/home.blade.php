@extends('layouts.main')
<style>
    @keyframes runText {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .running-text-container {
        overflow: hidden;
        white-space: nowrap;
    }

    .running-text {
        display: inline-block;
        animation: runText 20s linear infinite;
        font-size: 20;
        color: #ffffffbb;
    }
</style>
@section('content')
    {{-- carousel gambar --}}
    <div class="spacer" style="height: 60px;"></div>
    @include('partials.carousel')

    {{-- Konten pertama --}}
    <div class="custom-rectangle">
        {{-- running text --}}
        <div class="running-text-container">
            <div class="running-text">
                <p class="mt-3">Selamat datang di dunia UMKM, tempat di mana kreativitas berkembang dan mimpi menjadi kenyataan. Sukses
                    adalah perjalanan, bukan tujuan akhir. Mari bersama-sama membangun kisah keberhasilan UMKM Indonesia!.
                </p>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row justify-content-between">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <h1 class="mt-5" style="color: #ffffffbb; font-weight: 700; line-height: normal;">Layanan Informasi
                        Potensi Investasi Kabupaten Buleleng</h1>
                    <h5 class="mt-3"
                        style="color: #ffffffbb; font-weight: 300; line-height: normal; text-align: justify;">Lipsing adalah
                        platform yang dirancang khusus untuk membantu Andamenemukan beragam jenis investasi yang sesuai
                        dengan preferensi dan kebutuhan Anda di Kabupaten Buleleng, tempat yang penuh dengan potensi
                        investasi yang menarik. Jangan lewatkan kesempatan ini dan ayo mulai berinvestasi untuk masa depan
                        yang lebih cerah!</h5>
                    <div class="row mt-5">
                        <div class="col-md-2 mb-3">
                            <a href="/peta-potensi">
                                <button type="button" class="btn btn-outline-light">Potensi</button>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/umkm">
                                <button type="button" class="btn btn-outline-light">UMKM</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-left" data-aos-delay="300">
                    <img src="image/chart and statistics on phone.png" alt="Gambar">
                </div>
            </div>
        </div>

        {{-- wave dan rectrangle --}}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,229.3C672,235,768,213,864,197.3C960,181,1056,171,1152,186.7C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>



    {{-- Konten kedua --}}
    <div class="container">
        <div data-aos="fade-up" class="col-md-6 text-center"
            style="margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h1
                style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                JENIS POTENSI</h1>
            <p style="color: rgba(0, 0, 0, 0.70);">Piihan anda menentukan masa depan anda. Temukan jenis investasi yang anda
                inginkan berdasarkan jenis-jenis di bawah ini</p>
        </div>

        <div class="row mt-5">
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <a href="/jenis-investasi" style="text-decoration: none;">
                    <div class="card-jenis-investasi mb-3">
                        <div class="container text-center">
                            <img class="mt-5" src="icon/logopeternakan.png" alt="icon" width="40%">
                            <h4 style="color: rgba(0, 0, 0, 0.70);">Peternakan</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="300">
                <div class="card-jenis-investasi mb-3">
                    <div class="container text-center">
                        <img class="mt-5" src="icon/logoperikanan.png" alt="icon" width="40%">
                        <h4 style="color: rgba(0, 0, 0, 0.70);">Perikanan</h4>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="400">
                <div class="card-jenis-investasi mb-3">
                    <div class="container text-center">
                        <img class="mt-5" src="icon/logoperkebunan.png" alt="icon" width="40%">
                        <h4 style="color: rgba(0, 0, 0, 0.70);">Perkebunan</h4>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="500">
                <div class="card-jenis-investasi mb-3">
                    <div class="container text-center">
                        <img class="mt-5" src="icon/logopertanian.png" alt="icon" width="40%">
                        <h4 style="color: rgba(0, 0, 0, 0.70);">Pertanian</h4>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="600">
                <div class="card-jenis-investasi mb-3">
                    <div class="container text-center">
                        <img class="mt-5" src="icon/logopariwisata.png" alt="icon" width="40%">
                        <h4 style="color: rgba(0, 0, 0, 0.70);">Pariwisata</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- Konten ketiga --}}
    <div class="container mt-5">
        <div class="spacer" style="height: 100px;"></div>
        <div data-aos="fade-up" class="text-center"
            style="margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h1
                style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                PROFIL INSTANSI</h1>
            <p style="color: rgba(0, 0, 0, 0.70);">Layanan informasi ini berada dibawah naungan dpmptsp</p>
        </div>
        <div class="row justify-content-between mt-5">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="400">
                <iframe style="border:0; border-radius: 5px; box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);"
                    width="100%" height="350" src="https://www.youtube.com/embed/t996eWYb_wM?si=jKii7711Mpym5X3m"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
                <h1 style="color: rgba(0, 0, 0, 0.70); font-weight: 700; line-height: normal;">Dinas Penanaman Modal dan
                    Pelayanan Terpadu Satu Pintu</h1>
                <p class="mt-3"
                    style="color: rgba(0, 0, 0, 0.70); font-weight: 300; line-height: normal; text-align: justify;">Dinas
                    Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) merupakan lembaga penyelenggara pelayanan
                    perizinan terpadu Kabupaten Buleleng. DPMPTSP Kabupaten Buleleng dituntut dapat memberikan pelayanan
                    perizinan yang cepat, akurat, dengan biaya sesuai ketentuan, secara transparan kepada masyarakat.</p>
                <a target="_blank" href="https://dpmptsp.bulelengkab.go.id/">
                    <button type="button" class="btn btn-success mt-5">Kunjungi</button>
                </a>
            </div>
        </div>
    </div>

    <div class="spacer" style="height: 100px;"></div>
@endsection
