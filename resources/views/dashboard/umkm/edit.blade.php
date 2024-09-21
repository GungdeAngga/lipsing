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
            <h3 class="box-title">Tambah data UMKM</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="...">Nama UMKM</label>
                    <input type="text" class="form-control" id="name_umkm" name="name_umkm" value="{{ $umkm->name_umkm }}" required>
                </div>
                <div class="form-group">
                    <label for="...">kontak</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{ $umkm->contact }}" required>
                </div>
                <div class="form-group">
                    <label for="...">Deskripsi UMKM</label>
                    <textarea class="form-control" id="description" name="description" required>{{ $umkm->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="...">Alamat UMKM</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $umkm->address }}" required>
                </div>
                <div class="form-group">
                    <label for="pilihan">Pilih Kecamatan:</label>
                    <select name="kecamatan" class="form-control" required>
                        <option value="Gerokgak" {{ $umkm->kecamatan == 'Gerokgak' ? 'selected' : '' }}>Gerokgak</option>
                        <option value="Seririt" {{ $umkm->kecamatan == 'Seririt' ? 'selected' : '' }}>Seririt</option>
                        <option value="Busungbiu" {{ $umkm->kecamatan == 'Busungbiu' ? 'selected' : '' }}>Busungbiu</option>
                        <option value="Banjar" {{ $umkm->kecamatan == 'Banjar' ? 'selected' : '' }}>Banjar</option>
                        <option value="Sukasada" {{ $umkm->kecamatan == 'Sukasada' ? 'selected' : '' }}>Sukasada</option>
                        <option value="Buleleng" {{ $umkm->kecamatan == 'Buleleng' ? 'selected' : '' }}>Buleleng</option>
                        <option value="Sawan" {{ $umkm->kecamatan == 'Sawan' ? 'selected' : '' }}>Sawan</option>
                        <option value="Kubutambahan" {{ $umkm->kecamatan == 'Kubutambahan' ? 'selected' : '' }}>Kubutambahan</option>
                        <option value="Tejakula" {{ $umkm->kecamatan == 'Tejakula' ? 'selected' : '' }}>Tejakula</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $umkm->youtube }}" required>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <input type="text" class="form-control" id="map_link" name="map_link" value="{{ $umkm->map_link }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" multiple accept="image/*">
                    @if ($umkm->image)
                    <img src="{{ asset('storage/'.$umkm->image) }}" alt="Image" style="width: 150px; height: auto;">
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