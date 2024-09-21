@extends('layouts.dash')

@section('content')
{{-- spacer --}}
<div class="spacer" style="height: 30px;"></div>

<div class="container">


    <a href="{{ route('kecamatan.create') }}" class="btn btn-primary btn-lg">
        <i class="fa fa-plus"></i> Tambah Data
    </a>

    {{-- spacer --}}
    <div class="spacer" style="height: 10px;"></div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tabel Kecamatan</h3>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kecamatan</th>
                        <th>Deskripsi Fasilitas</th>
                        <th>Map Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($kecamatans as $kecamatan)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $kecamatan->name_kecamatan }}</td>
                        <td>{{ $kecamatan->description_kecamatan }}</td>
                        <td>
                            <a href="{{ $kecamatan->map_link_desa }}" target="_blank" class="btn btn-primary">View Map</a>
                        </td>
                        <td>
                            <a href="{{ route('kecamatan.edit', $kecamatan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kecamatan.destroy', $kecamatan) }}" method="POST" style="display:inline;">
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