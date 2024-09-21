@extends('layouts.dash')

@section('content')
{{-- spacer --}}
<div class="spacer" style="height: 30px;"></div>

<div class="container">


    <a href="{{ route('desa.create') }}" class="btn btn-primary btn-lg">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    {{-- spacer --}}
    <div class="spacer" style="height: 10px;"></div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tabel Desa</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Nama Desa</th>
                        <th>Deskripsi Potensi Desa</th>
                        <th>Total Penduduk</th>
                        <th>Kecamatan</th>
                        <th>Map Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @forelse ($desas as $desa)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $desa->name_desa }}</td>
                        <td>{{ $desa->description_desa }}</td>
                        <td>{{ $desa->total_resident_desa }}</td>
                        <td>{{ $desa->kecamatan_desa }}</td>
                        <td>
                            <a href="{{ $desa->map_link_desa }}" target="_blank" class="btn btn-primary">View Map</a>
                        </td>
                        <td>
                            <a href="{{ route('desa.edit', $desa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('desa.destroy', $desa->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">No data available</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection