@extends('layouts.main')
{{-- style running text --}}
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
    }

    /* style card umkm */
    .deskripsi-umkm {
        color: #202020;
    }

    .kecamatan {
        color: #00657B;
    }

    /* Style untuk tombol next dan previous */
    .pagination {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .prev-button,
    .next-button {
        text-decoration: none;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #333;
        background-color: #f8f8f8;
        transition: background-color 0.3s ease;
    }

    .prev-button:hover,
    .next-button:hover {
        background-color: #ddd;
    }

    /* Gaya ikon Font Awesome */
    .fa-chevron-left,
    .fa-chevron-right {
        margin-right: 5px;
    }
</style>
@section('content')
<div class="spacer" style="height: 70px;"></div>
{{-- carousel --}}
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/umkm/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/umkm/2.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="custom-rectangle">
    {{-- running text --}}
    {{-- ... Your running text code ... --}}
    {{-- heading --}}
    <div class="spacer" style="height: 30px;"></div>
    <h1 class="text-center" style="color: #ffffffbb; font-weight: 700;">
        UMKM KABUPATEN BULELENG</h1>
    <div class="spacer" style="height: 30px;"></div>
</div>
<div class="spacer" style="height: 30px;"></div>
<div class="container">
    {{-- List card umkm --}}
    <div class="row">
        @foreach($umkms as $umkm)
        <div class="col-md-3 col-sm-6 mb-3 mt-3">
        <a href="{{ route('umkm-open', $umkm->id) }}" style="text-decoration: none;">
                <div>
                    <img src="{{ asset('storage/' . $umkm->image) }}"
                        alt="gambar" class="card-img-top"
                        style="height: 200px; width: 100%; object-fit: cover; border-radius: 5px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #00657B;">{{ $umkm->name_umkm }}</h5>
                        <p class="deskripsi-umkm">{{ Str::limit($umkm->description, 100) }}</p>
                        <p class="kecamatan card-text font-weight-bold">{{ $umkm->kecamatan }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!-- Pagination links can be added here if needed -->
</div>
{{-- spacer --}}
<div class="spacer" style="height: 100px;"></div>
@endsection