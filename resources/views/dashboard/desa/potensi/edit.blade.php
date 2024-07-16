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
                        <label for="...">Potensi</label>
                        <input type="text" class="form-control" name="..." placeholder="Masukan nama">
                    </div>
                    <div class="form-group">
                        <label for="...">Deskripsi</label>
                        <input type="text" class="form-control" name="..."
                            placeholder="Masukan jumlah atau keterangan">
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>
        {{-- tombol simpan --}}
        <button type="submit" class="btn btn-primary btn-lg pull-right">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
    <div class="spacer" style="height: 30px;"></div>
@endsection
