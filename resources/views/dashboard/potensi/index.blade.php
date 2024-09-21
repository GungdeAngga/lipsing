@extends('layouts.dash')

@section('content')
{{-- spacer --}}
<div class="spacer" style="height: 30px;"></div>

<div class="container">


    <a href="{{ route('potensi.create') }}" class="btn btn-primary btn-lg">
        <i class="fa fa-plus"></i> Tambah Data
    </a>

    {{-- spacer --}}
    <div class="spacer" style="height: 10px;"></div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tabel Potensi</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Potensi</th>
                        <th>Katagori</th>
                        <th>Deskripsi Potensi</th>
                        <th>Alamat Potensi</th>
                        <th>Kecamatan</th>
                        <th>Youtube Link</th>
                        <th>Map Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($potensi as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->potensi }}</td>
                        <td>{{ $item->category_potensi }}</td>
                        <td>{{ $item->description_potensi }}</td>
                        <td>{{ $item->address_potensi }}</td>
                        <td>{{ $item->kecamatan_potensi }}</td>
                        <td>{{ $item->youtube_potensi }}</td>
                        <td>
                            <a href="{{ $item->map_link_potensi }}" target="_blank" class="btn btn-primary">View Map</a>
                        </td>
                        <td>
                            <a href="{{ route('potensi.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('potensi.destroy', $item) }}" method="POST" style="display:inline;">
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