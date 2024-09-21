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
                            <img src="{{ asset('storage/' . $umkm->image) }}"
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
                <p class="mt-3" style="text-align: justify">{{ $umkm->description }}</p>

                {{-- Informasi Kontak --}}
                <div class="mt-4">
                    <h5>Informasi Kontak</h5>
                    <p><strong>No. HP: </strong>{{ $umkm->contact }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <h1
                    style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">
                    {{ $umkm->name_umkm }}</h1>
                <h5
                    style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Informasi Lokasi</h5>
                <p><strong>Alamat: </strong>{{ $umkm->address }}</p>
                <p><strong>Kecamatan:</strong> {{ $umkm->kecamatan }}</p>
                <div class="mt-3">
                    <iframe src="{{ $umkm->map_link }}" width="100%" height="480"
                        style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h5>Video Potensi</h5>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="480" src="{{ $umkm->youtube }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="spacer" style="height: 100px;"></div>
@endsection
