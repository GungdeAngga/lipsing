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
    {{-- Spacer --}}
    <div class="spacer" style="height: 30px;"></div>

    <a href="{{ route('about.edit', $item->id) }}" class="btn btn-primary btn-lg">
        <i class="fa fa-pencil"></i> Edit
    </a>

    {{-- Spacer --}}
    <div class="spacer" style="height: 10px;"></div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">About Us Information</h3>
            <div class="note">
                <p>This data is used to customize the About page</p>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label for="about_lipsing">About Lipsing</label>
                <p>{{ $item->about_lipsing }}</p>
            </div>
            <div class="form-group">
                <label for="map_link">Map Link</label>
                <p>{{ $item->map_link }}</p>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <p>{{ $item->address }}</p>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <p>{{ $item->phone_number }}</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <p>{{ $item->email }}</p>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <p>{{ $item->facebook }}</p>
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <p>{{ $item->instagram }}</p>
            </div>
            <div class="form-group">
                <label for="youtube">YouTube</label>
                <p>{{ $item->youtube }}</p>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection