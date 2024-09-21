@extends('layouts.dash')

@section('content')
{{-- spacer --}}
<div class="spacer" style="height: 30px;"></div>

<div class="container">


    <a href="{{ route('umkm.create') }}" class="btn btn-primary btn-lg">
        <i class="fa fa-plus"></i> Tambah Data
    </a>

    {{-- spacer --}}
    <div class="spacer" style="height: 10px;"></div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tabel UMKM</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama UMKM</th>
                        <th>Kontak</th>
                        <th>Deskripsi UMKM</th>
                        <th>Alamat UMKM</th>
                        <th>Kecamatan</th>
                        <th>Youtube Link</th>
                        <th>Map Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($umkms as $umkm)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $umkm->name_umkm }}</td>
                        <td>{{ $umkm->contact }}</td>
                        <td>{{ $umkm->description }}</td>
                        <td>{{ $umkm->address }}</td>
                        <td>{{ $umkm->kecamatan }}</td>
                        <td>{{ $umkm->youtube }}</td>
                        <td>
                            <a href="{{ $umkm->map_link }}" target="_blank" class="btn btn-primary">View Map</a>
                        </td>
                        <td>
                            <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection