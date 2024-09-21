@extends('layouts.dash')
<style>
    /* style note */
    body {
        font-family: Arial, sans-serif;
    }

    .note {
        position: relative;
        padding: 15px;
        margin: 20px 0;
        background-color: #f8d7da;
        /* Warna latar belakang */
        border-left: 5px solid #d73d32;
        /* Warna garis vertikal */
    }

    .note p {
        margin: 0;
    }
</style>
@section('content')
<div class="container">
    <div class="spacer" style="height: 30px;"></div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit data Potensi</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form action="{{ route('potensi.update', $potensi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="...">Nama Potensi</label>
                    <input type="text" class="form-control" id="potensi" name="potensi" value="{{ $potensi->potensi }}" required>
                </div>
                <div class="form-group">
                    <label for="...">Katagori</label>
                    <select name="category_potensi" class="form-control" required>
                        <option value="Peternakan" {{ $potensi->category_potensi == 'Peternakan' ? 'selected' : '' }}>Peternakan</option>
                        <option value="Pertanian" {{ $potensi->category_potensi == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                        <option value="Perikanan" {{ $potensi->category_potensi == 'Perikanan' ? 'selected' : '' }}>Perikanan</option>
                        <option value="Perkebunan" {{ $potensi->category_potensi == 'Perkebunan' ? 'selected' : '' }}>Perkebunan</option>
                        <option value="Pariwisata" {{ $potensi->category_potensi == 'Pariwisata' ? 'selected' : '' }}>Pariwisata</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="...">Deskripsi Potensi</label>
                    <textarea class="form-control" id="description_potensi" name="description_potensi" required>{{ $potensi->description_potensi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="...">Alamat Potensi</label>
                    <input type="text" class="form-control" id="address_potensi" name="address_potensi" value="{{ $potensi->address_potensi }}" required>
                </div>
                <div class="form-group">
                    <label for="pilihan">Pilih Kecamatan:</label>
                    <select name="kecamatan_potensi" class="form-control" required>
                        <option value="Gerokgak" {{ $potensi->kecamatan_potensi == 'Gerokgak' ? 'selected' : '' }}>Gerokgak</option>
                        <option value="Seririt" {{ $potensi->kecamatan_potensi == 'Seririt' ? 'selected' : '' }}>Seririt</option>
                        <option value="Busungbiu" {{ $potensi->kecamatan_potensi == 'Busungbiu' ? 'selected' : '' }}>Busungbiu</option>
                        <option value="Banjar" {{ $potensi->kecamatan_potensi == 'Banjar' ? 'selected' : '' }}>Banjar</option>
                        <option value="Sukasada" {{ $potensi->kecamatan_potensi == 'Sukasada' ? 'selected' : '' }}>Sukasada</option>
                        <option value="Buleleng" {{ $potensi->kecamatan_potensi == 'Buleleng' ? 'selected' : '' }}>Buleleng</option>
                        <option value="Sawan" {{ $potensi->kecamatan_potensi == 'Sawan' ? 'selected' : '' }}>Sawan</option>
                        <option value="Kubutambahan" {{ $potensi->kecamatan_potensi == 'Kubutambahan' ? 'selected' : '' }}>Kubutambahan</option>
                        <option value="Tejakula" {{ $potensi->kecamatan_potensi == 'Tejakula' ? 'selected' : '' }}>Tejakula</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" id="youtube_potensi" name="youtube_potensi" value="{{ $potensi->youtube_potensi }}" required>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <input type="text" class="form-control" id="map_link_potensi" name="map_link_potensi" value="{{ $potensi->map_link_potensi }}" required>
                </div>
                <div class="form-group">
                    <label for="image_path">Image</label>
                    <input type="file" name="image_path" class="form-control" id="image_path" multiple accept="image/*">
                    @if($potensi->image_path)
                    <img src="{{ asset($potensi->image_path) }}" alt="Image" width="100">
                    @endif
                </div>

                {{-- tombol simpan --}}

                <button type="submit" class="btn btn-primary btn-sm pull-right">
                    <i class="fa fa-save"></i> Simpan
                </button>

            </div>
        </form>
    </div>
</div>
<div class="spacer" style="height: 30px;"></div>
@endsection