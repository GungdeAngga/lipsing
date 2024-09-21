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
        <form action="{{ route('about.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="tentang_lipsing">Tentang Lipsing</label>
                    <textarea class="form-control" rows="5" name="about_lipsing" id="about_lipsing" required>{{ $item->about_lipsing }}</textarea>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <input class="form-control" type="text" name="map_link" id="map_link" value="{{ $item->map_link }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" rows="3" name="address" id="address" required>{{ $item->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ $item->phone_number }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $item->email }}" required>
                </div>
                <div class="form-group">
                    <label for="akun_facebook">Facebook</label>
                    <input class="form-control" type="text" name="facebook" id="facebook" value="{{ $item->facebook }}" required>
                </div>
                <div class="form-group">
                    <label for="akun_instagram">Instagram</label>
                    <input class="form-control" type="text" name="instagram" id="instagram" value="{{ $item->instagram }}" required>
                </div>
                <div class="form-group">
                    <label for="akun_youtube">YouTube</label>
                    <input class="form-control" type="text" name="youtube" id="youtube" value="{{ $item->youtube }}" required>
                </div>
                <!-- <div class="form-group">
                    <label for="...">Home Carousel</label>
                    <input class="mt-3" type="file" name="images[]" id="images" multiple accept="image/*">
                </div>
                <div class="form-group">
                    <label for="...">UMKM Carousel</label>
                    <input class="mt-3" type="file" name="images[]" id="images" multiple accept="image/*">
                </div> -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Update</button>
            </div>
            <!-- /.box-body -->
        </form>
    </div>
</div>
<div class="spacer" style="height: 30px;"></div>
@endsection