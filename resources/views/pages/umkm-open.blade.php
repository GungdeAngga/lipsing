@extends('layouts.main')
@section('content')
    <div class="spacer" style="height: 100px;"></div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                {{-- gambar --}}
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cdn0-production-images-kly.akamaized.net/dmb2BM1_jSNaU_qtYxx1hUxleTY=/0x372:667x748/1200x675/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3469167/original/068525500_1622447127-shutterstock_1924081454.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.aws.nestle.recipes/resized/78b7b827dc30b176026b846d4790f373_ed-sempol_ayam_944_531.png"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn0-production-images-kly.akamaized.net/aHW0wjEu9BZzJCMkudCeBXTIpgA=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3465674/original/051068400_1622018536-pork-satay-grilled-pork-served-with-peanut-sauce-sweet-sour-sauce-thai-food_45583-363.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="mt-3" style="text-align: justify">UMKM Sempol Ayam "Rasa Lezat" menghadirkan kelezatan sempol
                    ayam dengan sentuhan khas dan cita rasa yang memikat. Dibuat dengan bahan-bahan berkualitas dan diproses
                    secara higienis, sempol ayam kami menjadi pilihan utama untuk penggemar kuliner yang menginginkan sajian
                    yang renyah di luar dan lembut di dalam. Rasakan keunikan dari setiap gigitan, dan nikmati kelezatan
                    dari UMKM Sempol Ayam "Rasa Lezat" yang siap memanjakan lidah Anda.</p>

                {{-- Informasi Kontak --}}
                <div class="mt-4">
                    <h5>Informasi Kontak</h5>
                    <p><strong>No. HP: </strong>0812-3456-7890</p>
                </div>
            </div>
            <div class="col-md-4">
                <h1
                    style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">
                    Sempol Ayang</h1>
                <h5
                    style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Informasi Lokasi</h5>
                <p><strong>Alamat: </strong>Jl. Udayana No.9-7, Banyuasri, Kec. Buleleng, Kabupaten Buleleng, Bali 81116</p>
                <p><strong>Kecamatan:</strong> Buleleng</p>
                <div class="mt-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505244.23387559876!2d114.80586727188732!3d-8.379951858538657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19b99e9ac412f%3A0x4e606ac1113050e3!2sSEMPOL%20AYAM%20GEMUK%20BALI!5e0!3m2!1sen!2sid!4v1702373452927!5m2!1sen!2sid"
                        width="100%" height="480" style="border:0; border-radius: 5px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h5>Video Potensi</h5>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/ysr_nCGl0Bg?si=on5UN7ndjU6nhlk8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="spacer" style="height: 100px;"></div>
@endsection
