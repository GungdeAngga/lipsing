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
        background-color: #f8d7da; /* Warna latar belakang */
        border-left: 5px solid #d73d32; /* Warna garis vertikal */
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
            <form role="form" action="" method="">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="...">Nama Desa</label>
                        <input type="text" class="form-control" name="..." placeholder="Masukan nama kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="...">Deskripsi</label>
                        <textarea class="form-control" rows="3" name="..." placeholder="Masukan deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="...">Jumlah Penduduk</label>
                        <input type="text" class="form-control" name="..." placeholder="Masukan nama kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="pilihan">Pilih Kecamatan:</label>
                        <select class="form-control" name="pilihan" id="pilihan">
                            <option value="opsi1">Gerokgak</option>
                            <option value="opsi2">Seririt</option>
                            <option value="opsi3">Busungbiu</option>
                            <option value="opsi3">Banjar</option>
                            <option value="opsi3">Sukasada</option>
                            <option value="opsi3">Buleleng</option>
                            <option value="opsi3">Sawan</option>
                            <option value="opsi3">Kubutambahan</option>
                            <option value="opsi3">Tejakula</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="...">Map Link</label>
                        <input type="text" class="form-control" name="..." placeholder="Masukan link map">
                    </div>

                    {{-- tombol simpan --}}
                    <a href="...">
                        <button type="submit" class="btn btn-primary btn-sm pull-right">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </a>
                </div>
            </form>
        </div>
        <div class="note">
            <p>Data potensi bisa diisi setelah menginput data kecamatan</p>
        </div>
        <div class="box box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Potensi</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="spacer" style="height: 30px;"></div>
@endsection
