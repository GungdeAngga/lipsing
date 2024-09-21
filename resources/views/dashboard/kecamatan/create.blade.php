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
            <h3 class="box-title">Tambah data Kecamatan</h3>
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
        <form action="{{ route('kecamatan.store') }}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name_kecamatan">Kecamatan Desa:</label>
                    <select name="name_kecamatan" class="form-control" required>
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
                    <label for="...">Deskripsi Fasilitas</label>
                    <textarea class="form-control" rows="3" id="description_kecamatan" name="description_kecamatan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="...">Map Link</label>
                    <input type="text" class="form-control" id="map_link_desa" name="map_link_desa" required>
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