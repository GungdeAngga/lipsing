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
            <h3 class="box-title">Tambah data Potensi</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form action="{{ route('potensi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="...">Nama Potensi</label>
                    <input type="text" class="form-control" id="potensi" name="potensi" required>
                </div>
                <div class="form-group">
                    <label for="...">Katagori</label>
                    <select name="category_potensi" class="form-control" required>
                        <option value="">Pilih katagori</option>
                        <option value="Peternakan">Peternakan</option>
                        <option value="Pertanian">Pertanian</option>
                        <option value="Perikanan">Perikanan</option>
                        <option value="Perkebunan">Perkebunan</option>
                        <option value="Pariwisata">Pariwisata</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="...">Deskripsi Potensi</label>
                    <textarea class="form-control" rows="5" id="description_potensi" name="description_potensi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Alamat Potensi</label>
                    <input type="text" class="form-control" id="address_potensi" name="address_potensi" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan_potensi">Pilih Kecamatan:</label>
                    <select name="kecamatan_potensi" class="form-control" required>
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
                    <input type="text" class="form-control" id="youtube_potensi" name="youtube_potensi" required>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <input type="text" class="form-control" id="map_link_potensi" name="map_link_potensi" required>
                </div>
                <div class="form-group">
                    <label for="image_path">Image</label>
                    <input type="file" name="image_path" class="form-control" id="image_path" multiple accept="image/*">
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