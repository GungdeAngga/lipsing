@extends('layouts.main')

@section('content')
<div class="spacer" style="height: 100px;"></div>
<div class="container">
  <h1 class="text-center">{{ $potensi->potensi }}</h1>
  <div class="row mt-3">
    <div class="col-md-8">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset($potensi->image_path) }}" class="d-block w-100" alt="...">
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

      <p class="mt-3" style="text-align: justify">{{ $potensi->description_potensi }}</p>
    </div>
    <div class="col-md-4">
      <h5>Informasi Lokasi</h5>
      <p><strong>Alamat: </strong>{{ $potensi->address_potensi }}</p>
      <p><strong>Kecamatan:</strong> {{ $potensi->kecamatan_potensi }}</p>
      <div class="mt-3">
        <iframe src="{{ $potensi->map_link_potensi }}"></iframe>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <h5>Video Potensi</h5>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe width="100%" height="480" src="{{ $potensi->youtube_potensi }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="spacer" style="height: 100px;"></div>
@endsection
