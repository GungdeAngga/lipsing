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
        <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="...">Nama UMKM</label>
                    <input type="text" class="form-control" id="name_umkm" name="name_umkm" required>
                </div>
                <div class="form-group">
                    <label for="...">Kontak</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="...">Deskripsi UMKM</label>
                    <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Alamat UMKM</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Pilih Kecamatan:</label>
                    <select name="kecamatan" class="form-control" required>
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
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" id="youtube" name="youtube" required>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <input type="text" class="form-control" id="map_link" name="map_link" required>
                </div>
                <div class="form-group">
                    <label for="...">Input Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" multiple accept="image/*">
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