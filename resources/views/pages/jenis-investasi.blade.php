@extends('layouts.main')
<style>
    header {
        text-align: center;
        margin-bottom: 20px;
    }
</style>
@section('content')
    <div class="spacer" style="height: 100px;"></div>
    <header>
        <h1
            style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            JENIS POTENSI</h1>
        <p>Berikut adalah daftar potensi yang berada di sektor peternakan</p>
    </header>

    <div class="container">
        <div class="konten">
            <p>Recent posts</p>
            @for ($i = 0; $i < 8; $i++)
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://balietawa.com/wp-content/uploads/2023/06/post.png"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Bali Etawa Farm</h5>
                                <p style="text-align: justify;" class="card-text">Bali Etawa Farm adalah peternakan di Bali
                                    yang
                                    fokus pada pemuliaan dan pengembangan kambing Etawa. Menawarkan pengalaman edukatif,
                                    pengunjung dapat menikmati keindahan alam sambil belajar tentang budidaya kambing Etawa.
                                    Dengan komitmen pada kesejahteraan hewan dan pendekatan berkelanjutan, Bali Etawa Farm
                                    menjadi destinasi menarik untuk mengeksplorasi kehidupan peternakan modern di pulau
                                    dewata.
                                </p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="/jenis-investasi-open">
                                    <button type="button" class="btn btn-outline-success">Read More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
