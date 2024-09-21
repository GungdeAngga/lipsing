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
            <h3 class="box-title">Tambah data Desa</h3>
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
        <form action="{{ route('desa.store') }}" method="POST">
            <div class="box-body">
                @csrf
                <div class="form-group">
                    <label for="name_desa">Nama Desa:</label>
                    <input type="text" name="name_desa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description_desa">Deskripsi Potensi Desa:</label>
                    <textarea name="description_desa" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="total_resident_desa">Total Penduduk Desa:</label>
                    <input type="text" name="total_resident_desa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan_desa">Kecamatan Desa:</label>
                    <select name="kecamatan_desa" class="form-control" required>
                        <option value="">Select a name</option>
                        <option value="Gerokgak">Gerokgak</option>
                        <option value="Seririt">Seririt</option>
                        <option value="Busungbiu">Busungbiu</option>
                        <option value="Banjar">Banjar</option>
                        <option value="Sukasada">Sukasada</option>
                        <option value="Buleleng">Buleleng</option>
                        <option value="Sawan">Sawan</option>
                        <option value="Kubutambahan">Kubutambahan</option>
                        <option value="Tejakula">Tejakula</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="map_link_desa">Map Link Desa:</label>
                    <input type="text" name="map_link_desa" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Simpan</button>

            </div>
        </form>
    </div>
</div>
<div class="spacer" style="height: 30px;"></div>
@endsection