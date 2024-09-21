@extends('layouts.dash')

@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Name Desa</th>
            <td>{{ $desa->name_desa }}</td>
        </tr>
        <tr>
            <th>Deskripsi Potensi Desa</th>
            <td>{{ $desa->description_desa }}</td>
        </tr>
        <tr>
            <th>Total Resident Desa</th>
            <td>{{ $desa->total_resident_desa }}</td>
        </tr>
        <tr>
            <th>Kecamatan Desa</th>
            <td>{{ $desa->kecamatan_desa }}</td>
        </tr>
        <tr>
            <th>Map Link Desa</th>
            <td>{{ $desa->map_link_desa }}</td>
        </tr>
        <tr>
            <th>To Map</th>
            <td><a href="{{ $desa->map_link_desa }}" target="_blank" class="btn btn-primary">View Map</a></td>
        </tr>
    </table>
    <a href="{{ route('desa.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
