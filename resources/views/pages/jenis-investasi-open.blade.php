@extends('layouts.main')
@section('content')
<div class="spacer" style="height: 100px;"></div>
<div class="container">
    <h1 class="text-center" style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;" >Bali Etawa Farm</h1>
    <div class="row mt-3">
        <div class="col-md-8">            
            {{-- gambar --}}
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.balipost.com/wp-content/uploads/2023/04/balipostcom_budidaya-kambing-makin-menjanjikan-kelompok-karya-tani-di-penglatan-kembangkan-boer-dan-etawa_01.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.antarafoto.com/cache/1200x794/2020/09/09/peternakan-kambing-etawa-r1bi-dom.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.lazismu.org/9030/Berita_20012023_01_WhatsApp-Image-2023-02-20-at-18.27.44.jpeg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            <p class="mt-3" style="text-align: justify">Bali Etawa Farm adalah peternakan di Bali yang fokus pada pemuliaan dan pengembangan kambing Etawa. Menawarkan pengalaman edukatif, pengunjung dapat menikmati keindahan alam sambil belajar tentang budidaya kambing Etawa. Dengan komitmen pada kesejahteraan hewan dan pendekatan berkelanjutan, Bali Etawa Farm menjadi destinasi menarik untuk mengeksplorasi kehidupan peternakan modern di pulau dewata.</p>
        </div>
        <div class="col-md-4">
            <h5 style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Informasi Lokasi</h5>
            <p><strong>Alamat: </strong>Br. Dinas Belulang, Ds. Sepang, Busungbiu, Buleleng, Bali</p>
            <p><strong>Kecamatan:</strong> Buleleng</p>
            <div class="mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126334.1729688252!2d114.93385100000002!3d-8.308473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd18156b65a7ddb%3A0x44cc771574b33429!2sBali%20Etawa%20Farm!5e0!3m2!1sid!2sid!4v1702369719557!5m2!1sid!2sid" width="100%" height="480" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <h5 style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Video Potensi</h5>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/R4Qkb0CMErI?si=f-GgtiN4Fks6JtR7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="spacer" style="height: 100px;"></div>
@endsection