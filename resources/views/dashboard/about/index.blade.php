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
    {{-- spacer --}}
    <div class="spacer" style="height: 30px;"></div>

    <a href="/dashboard/about/edit" class="btn btn-primary btn-lg">
        <i class="fa fa-pencil"></i> Sesuaikan
    </a>

    {{-- spacer --}}
    <div class="spacer" style="height: 10px;"></div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">About Us Information</h3>
            <div class="note">
                <p>Data ini digunakan untuk menyesuaikan halaman about</p>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label for="tentang_lipsing">Tentang Lipsing</label>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="form-group">
                <label for="map_link">Map Link</label>
                <p>https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3949.883236851581!2d115.09166699999999!3d-8.11337!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDYnNDguMSJTIDExNcKwMDUnMzAuMCJF!5e0!3m2!1sen!2sus!4v1699538142049!5m2!1sen!2sus</p>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <p>Jl. Ngurah Rai No. 72 Singaraja</p>
            </div>
            <div class="form-group">
                <label for="no_hp">No. HP</label>
                <p>(0362) 22063</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <p>dpmptsp@bulelengkab.go.id</p>
            </div>
            <div class="form-group">
                <label for="akun_facebook">Facebook</label>
                <p>Dpmptsp</p>
            </div>
            <div class="form-group">
                <label for="akun_instagram">Instagram</label>
                <p>Dpmptsp</p>
            </div>
            <div class="form-group">
                <label for="akun_youtube">YouTube</label>
                <p>Dpmptsp</p>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection
