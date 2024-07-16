@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="spacer" style="height: 30px;"></div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit About Us</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form role="form" action="" method="">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="tentang_lipsing">Tentang Lipsing</label>
                    <textarea class="form-control" rows="3" name="tentang_lipsing" placeholder="Enter tentang_lipsing"></textarea>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <input type="text" class="form-control" name="map_link" placeholder="Enter map_link">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Enter alamat">
                </div>
                <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Enter no_hp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="akun_facebook">Facebook</label>
                    <input type="text" class="form-control" name="akun_facebook" placeholder="Enter akun_facebook">
                </div>
                <div class="form-group">
                    <label for="akun_instagram">Instagram</label>
                    <input type="text" class="form-control" name="akun_instagram" placeholder="Enter akun_instagram">
                </div>
                <div class="form-group">
                    <label for="akun_youtube">YouTube</label>
                    <input type="text" class="form-control" name="akun_youtube" placeholder="Enter akun_youtube">
                </div>
                <div class="form-group">
                    <label for="...">Home Carousel</label>
                    <input class="mt-3" type="file" name="images[]" id="images" multiple accept="image/*">
                </div>
                <div class="form-group">
                    <label for="...">UMKM Carousel</label>
                    <input class="mt-3" type="file" name="images[]" id="images" multiple accept="image/*">
                </div>
            </div>
            <!-- /.box-body -->
        </form>        
    </div>
    {{-- tombol simpan --}}
    <a href="/dashboard/about" class="btn btn-primary btn-lg pull-right">
        <i class="fa fa-save"></i> Simpan
    </a> 
</div>
<div class="spacer" style="height: 30px;"></div>
@endsection
