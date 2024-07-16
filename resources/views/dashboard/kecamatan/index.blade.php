@extends('layouts.dash')

@section('content')
    {{-- spacer --}}
    <div class="spacer" style="height: 30px;"></div>

    <div class="container">


        <a href="/dashboard/kecamatan/create" class="btn btn-primary btn-lg">
            <i class="fa fa-plus"></i> Tambah Data
        </a>

        {{-- spacer --}}
        <div class="spacer" style="height: 10px;"></div>


        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kecamatan</th>
                            <th>Deskripsi</th>
                            <th>Map Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Buleleng</td>
                            <td>Kecamatan Buleleng memiliki luas wilay...</td>
                            <td>https://www.google.com/maps/embed?pb=!...</td>
                            <td>
                                <a href="..." class="btn btn-xs btn-success">View</a>
                                <a href="/dashboard/kecamatan/edit" class="btn btn-xs btn-primary">Edit</a>
                                <a href="..." class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Busungbiu</td>
                            <td>Kecamatan Busungbiu memiliki luas wilay...</td>
                            <td>https://www.google.com/maps/embed?pb=!...</td>
                            <td>
                                <a href="..." class="btn btn-xs btn-success">View</a>
                                <a href="/dashboard/kecamatan/edit" class="btn btn-xs btn-primary">Edit</a>
                                <a href="..." class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection
