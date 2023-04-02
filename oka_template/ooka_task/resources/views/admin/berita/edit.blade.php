@extends('admin.layouts.app', ['title' => 'Edit Berita'])
<link rel="stylesheet" href="{{ asset('style/css/suratKeluarDetail.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/profil-admin-edit.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/custom-style/dropzone.css') }}">

@section('content')
    <div class="hal-head">
        <h1 class="hal-title"> Edit Berita </h1>
    </div>
    <div class="hal-body">
        @foreach($beritas as $berita)
        <form action="{{ route('berita-admin.editProcess', [$berita->id]) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-sm-8">

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Judul Berita</h4>
                    <div class="col-sm-9">
                        <input type="text" class="form-control " id="floatingInput" value="{{ old('judul', $berita -> judul) }}" name="judul" required>
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tanggal Berita</h4>
                    <div class="col-sm-4">
                        <input type="date" class="form-control " id="floatingInput" value="{{ old('tgl_berita', $berita -> tgl_berita) }}"  name="tgl_berita" required>
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Tempat Kejadian</h4>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="floatingInput" value="{{ old('tempat_kejadian', $berita -> tempat_kejadian) }}" name="tempat_kejadian" required>
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Penulis</h4>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="floatingInput" value="{{ old('penulis', $berita -> penulis) }}" name="penulis" required>
                    </div>
                </div>

                <div class="row form-group">
                    <h4 class="surat-kategori col-form-label col-sm-3">Deskripsi</h4>
                    <div class="col-sm-9 ">
                        <textarea class="form-control" name="deskripsi" style="height: 150px" required>{{ old('deskripsi', $berita -> deskripsi) }}</textarea>
                    </div>
                </div>


            </div>
        </div>

        <h4 class="surat-kategori col-form-label col-sm-3">Gambar</h4>
        <div class="row form-group">

            <div class="col-md-4">
                <img id="output_image" src="{{ asset('temp_file/berita/'. $berita -> gambar ) }}" width="400" height="210" class="ms-2 img-thumbnail"/>
            </div>

            <div class="col-md-4">
                <div class="file-drop-area-berita">
                    <span class="choose-file-button">Pilih File</span>
                    <input class="file-input" name="gambar" type="file" accept="iamge/*" onchange="preview(event)" required>
                </div>
            </div>

        </div>

        <div class="btn-input-berita text-center">
            <button type="submit" class="btn btn-success btn-lg fs-5 fw-bold mx-auto mt-5" style="padding: 10px 100px;">
                SELESAI
            </button>
            <button type="button" class="btn btn-danger btn-lg fs-5 fw-bold mx-auto mt-5 text-white" style="padding: 10px 100px;" data-bs-toggle="modal" data-bs-target="#modalHapusBerita">
                HAPUS
            </button>
        </div>
        </form>
        @endforeach
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

<!-- Modal -->
<div class="modal fade" id="modalHapusBerita" tabindex="-1" aria-labelledby="modalHapusBeritaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalHapusBeritaLabel">Confirm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin Menghapus Berita Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('delete-berita', [$berita -> id]) }}" type="button" class="btn btn-danger">Ya</a>
      </div>
    </div>
  </div>
</div>
