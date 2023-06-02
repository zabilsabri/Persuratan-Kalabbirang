@extends('admin.layouts.app', ['title' => 'Tambah Berita'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/custom-style/dropzone.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Tambah Berita </h1>
    </div>
    <div class="hal-body">
        <form action="{{ route('berita-admin.tambahProcess') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-sm-8">

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Judul Berita</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" name="judul">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tanggal Berita</h4>
                    <div class="col-sm-4">
                        <input type="date" class="form-control " id="floatingInput" name="tgl_berita">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tempat Kejadian</h4>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="floatingInput" name="tempat_kejadian">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Penulis</h4>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="floatingInput" name="penulis">
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Deskripsi</h4>
                    <div class="col-sm-9 ">
                        <textarea class="form-control" name="deskripsi" style="height: 150px"></textarea>
                    </div>
                </div>


            </div>
        </div>

        <h4 class="surat-kategori col-form-label col-sm-3">Gambar</h4>
        <div class="row form-group">

            <div class="col-sm-4 mb-2">
                <img id="output_image" width="400" height="210" class="img-thumbnail " />
            </div>

            <div class="col-sm-4">
                <div class="file-drop-area-berita">
                    <span class="choose-file-button">Pilih File</span>
                    <input class="file-input" name="gambar" type="file" accept="iamge/*" onchange="preview(event)">
                </div>
            </div>

        </div>

        <div class="btn-input-berita pt-0">
            <button type="submit" class="btn btn-success btn-lg d-block fs-5 fw-bold mx-auto mt-5" style="padding: 10px 100px;">
                SELESAI
            </button>
        </div>
        </form>
    </div>

    <script type='text/javascript'>
        function preview(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
