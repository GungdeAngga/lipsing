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
            <h3 class="box-title">Edit data Kecamatan</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="...">Nama Kecamatan</label>
                    <select name="name_kecamatan" class="form-control" required>
                        <option value="">Select a name</option>
                        <option value="Gerokgak" {{ $kecamatan->name_kecamatan == 'Gerokgak' ? 'selected' : '' }}>Gerokgak</option>
                        <option value="Seririt" {{ $kecamatan->name_kecamatan == 'Seririt' ? 'selected' : '' }}>Seririt</option>
                        <option value="Busungbiu" {{ $kecamatan->name_kecamatan == 'Busungbiu' ? 'selected' : '' }}>Busungbiu</option>
                        <option value="Banjar" {{ $kecamatan->name_kecamatan == 'Banjar' ? 'selected' : '' }}>Banjar</option>
                        <option value="Sukasada" {{ $kecamatan->name_kecamatan == 'Sukasada' ? 'selected' : '' }}>Sukasada</option>
                        <option value="Buleleng" {{ $kecamatan->name_kecamatan == 'Buleleng' ? 'selected' : '' }}>Buleleng</option>
                        <option value="Sawan" {{ $kecamatan->name_kecamatan == 'Sawan' ? 'selected' : '' }}>Sawan</option>
                        <option value="Kubutambahan" {{ $kecamatan->name_kecamatan == 'Kubutambahan' ? 'selected' : '' }}>Kubutambahan</option>
                        <option value="Tejakula" {{ $kecamatan->name_kecamatan == 'Tejakula' ? 'selected' : '' }}>Tejakula</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="...">Deskripsi Fasilitas</label>
                    <textarea class="form-control" rows="5" id="description_kecamatan" name="description_kecamatan" required>{{ $kecamatan->description_kecamatan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="...">Map Link</label>
                    <input type="text" class="form-control" id="map_link_desa" name="map_link_desa" value="{{ $kecamatan->map_link_desa }}" required>
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