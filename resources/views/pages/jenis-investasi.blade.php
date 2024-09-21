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
    @if(isset($category))
    <h1 style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
        {{ $category }}
    </h1>
    <p>Berikut adalah daftar potensi yang berada di sektor {{ $category }}</p>
    @else
    <h1>Category not found</h1>
    @endif
</header>

<div class="container">
    <div class="konten">
        <p>Recent posts</p>
        @foreach($potensis as $potensi)
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($potensi->image_path) }}" class="img-fluid rounded-start" style="width: 50%; display: block; margin-left: auto; margin-right: auto;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="background: linear-gradient(90deg, #219C90 0%, #00AFD6 100%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            {{ $potensi->potensi }}
                        </h5>
                        <p style="text-align: justify;" class="card-text">{{ $potensi->description_potensi }}</p>
                        <a href="{{ route('jenis-investasi-open', $potensi->id) }}">
                            <button type="button" class="btn btn-outline-success">Read More</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection