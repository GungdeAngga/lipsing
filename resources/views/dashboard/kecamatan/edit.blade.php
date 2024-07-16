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
            <form role="form" action="" method="">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="...">Nama Kecamatan</label>
                        <input type="text" class="form-control" name="..." placeholder="Masukan nama kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="...">Deskripsi</label>
                        <textarea class="form-control" rows="3" name="..." placeholder="Masukan deskripsi"></textarea>
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
            <p>Data fasilitas sudah bisa diisi</p>
        </div>
        <div class="box box-body">
            <a href="/dashboard/kecamatan/fasilitas/create" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i> Tambah Fasilitas
            </a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Fasilitas</th>
                        <th>Jumlah / Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pusat Perbelanjaan</td>
                        <td>1</td>
                        <td>
                            <a href="/dashboard/kecamatan/fasilitas/edit" class="btn btn-xs btn-primary">Edit</a>
                            <a href="..." class="btn btn-xs btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="spacer" style="height: 30px;"></div>
@endsection
