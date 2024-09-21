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
            <h3 class="box-title">Edit data Desa</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </div>
        @endif
        <form action="{{ route('desa.update', $desa->id) }}" method="POST">
            <div class="box-body">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name_desa">Nama Desa:</label>
                    <input type="text" name="name_desa" class="form-control" value="{{ $desa->name_desa }}" required>
                </div>
                <div class="form-group">
                    <label for="description_desa">Deskripsi Potensi Desa:</label>
                    <textarea name="description_desa" rows="5" class="form-control" required>{{ $desa->description_desa }}</textarea>
                </div>
                <div class="form-group">
                    <label for="total_resident_desa">Total Pendudul Desa:</label>
                    <input type="text" name="total_resident_desa" class="form-control" value="{{ $desa->total_resident_desa }}" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan_desa">Kecamatan Desa:</label>
                    <select name="kecamatan_desa" class="form-control" required>
                        <option value="Gerokgak" {{ $desa->kecamatan_desa == 'Gerokgak' ? 'selected' : '' }}>Gerokgak</option>
                        <option value="Seririt" {{ $desa->kecamatan_desa == 'Seririt' ? 'selected' : '' }}>Seririt</option>
                        <option value="Busungbiu" {{ $desa->kecamatan_desa == 'Busungbiu' ? 'selected' : '' }}>Busungbiu</option>
                        <option value="Banjar" {{ $desa->kecamatan_desa == 'Banjar' ? 'selected' : '' }}>Banjar</option>
                        <option value="Sukasada" {{ $desa->kecamatan_desa == 'Sukasada' ? 'selected' : '' }}>Sukasada</option>
                        <option value="Buleleng" {{ $desa->kecamatan_desa == 'Buleleng' ? 'selected' : '' }}>Buleleng</option>
                        <option value="Sawan" {{ $desa->kecamatan_desa == 'Sawan' ? 'selected' : '' }}>Sawan</option>
                        <option value="Kubutambahan" {{ $desa->kecamatan_desa == 'Kubutambahan' ? 'selected' : '' }}>Kubutambahan</option>
                        <option value="Tejakula" {{ $desa->kecamatan_desa == 'Tejakula' ? 'selected' : '' }}>Tejakula</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="map_link_desa">Map Link Desa:</label>
                    <input type="text" name="map_link_desa" class="form-control" value="{{ $desa->map_link_desa }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
<div class="spacer" style="height: 30px;"></div>
@endsection